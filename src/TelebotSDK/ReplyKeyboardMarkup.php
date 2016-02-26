<?php
/**
 * Created by PhpStorm.
 * User: Emad Omar <emad2030@gmail.com>
 * Date: 2/26/2016
 * Time: 7:15 AM
 */

namespace TelebotSDK;


class ReplyKeyboardMarkup {

    /**
     * @required
     * @var array
     */
    public $keyboard;

    /**
     * @var boolean
     */
    public $resize_keyboard;

    /**
     * @var boolean
     */
    public $one_time_keyboard;

    /**
     * @var boolean
     */
    public $selective;

    public function __construct($keyboard, $resize_keyboard = null,
                                $one_time_keyboard = null, $selective = null) {
        $this->keyboard = $keyboard;
        $this->resize_keyboard = $resize_keyboard;
        $this->one_time_keyboard = $one_time_keyboard;
        $this->selective = $selective;
    }

}