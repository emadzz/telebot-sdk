<?php
/**
 * Created by PhpStorm.
 * User: Emad Omar <emad2030@gmail.com>
 * Date: 2/26/2016
 * Time: 7:58 AM
 */

namespace TelebotSDK;


class ForceReply {

    /**
     * @required
     * @var true
     */
    public $force_reply = true;

    /**
     * @var boolean
     */
    public $selective;

    public function __construct($force_reply = true, $selective = null) {
        $this->force_reply = $force_reply;
        $this->selective = $selective;
    }

}