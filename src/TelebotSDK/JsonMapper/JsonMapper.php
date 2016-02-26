<?php
/**
 * Created by PhpStorm.
 * User: Emad Omar <emad2030@gmail.com>
 * Date: 2/25/2016
 * Time: 6:02 PM
 */

namespace TelebotSDK\JsonMapper;


class JsonMapper extends \JsonMapper {

    private static $instance = null;

    protected $bExceptionOnFlatType = true;

    public static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new self;
        }

        return self::$instance;
    }

    protected function __construct() {
        $this->bExceptionOnMissingData = true;
    }

    protected function isFlatType($type) {
        if ($this->bExceptionOnFlatType
            && parent::isFlatType($type)
        ) {
            throw new \JsonMapper_Exception(
                'Invalid data type for some properties'
            );
        }

        return false;
    }

}