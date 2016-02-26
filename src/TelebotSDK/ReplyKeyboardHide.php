<?php
/**
 * Created by PhpStorm.
 * User: Emad Omar <emad2030@gmail.com>
 * Date: 2/26/2016
 * Time: 7:55 AM
 */

namespace TelebotSDK;


class ReplyKeyboardHide {

    /**
     * @required
     * @var true
     */
    public $hide_keyboard = true;

    /**
     * @var boolean
     */
    public $selective;

    public function __construct($hide_keyboard = true, $selective = null) {
        $this->hide_keyboard = $hide_keyboard;
        $this->selective = $selective;
    }

}