<?php
/**
 * Created by PhpStorm.
 * User: Emad Omar <emad2030@gmail.com>
 * Date: 2/25/2016
 * Time: 9:40 PM
 */

namespace Telebot;


use Telebot\JsonMapper\JsonMapper;

class Response {

    /**
     * @required
     * @var boolean
     */
    public $ok;

    /**
     * @var integer
     */
    public $error_code;

    /**
     * @var string
     */
    public $description;

    /**
     * @var mixed
     */
    protected $result;

    /**
     * Fully qualified name of the result type/class
     * @var string
     */
    protected $resultType;

    public function __construct($resultType) {
        $this->resultType = $resultType;
    }

    /**
     * A setter for `$result`
     *
     * @param mixed $result
     */
    public function setResult($result) {
        $this->result = JsonMapper::getInstance()->map(
            $result, Jsonable::instantiate($this->resultType)
        );
    }

    /**
     * A getter for `$result`
     *
     * @return mixed
     */
    public function getResult() {
        return $this->result;
    }

}