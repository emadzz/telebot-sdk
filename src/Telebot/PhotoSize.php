<?php
/**
 * Created by PhpStorm.
 * User: Emad Omar <emad2030@gmail.com>
 * Date: 2/25/2016
 * Time: 2:09 PM
 */

namespace Telebot;


class PhotoSize {

    /**
     * @required
     * @var string
     */
    public $file_id;

    /**
     * @required
     * @var integer
     */
    public $width;

    /**
     * @required
     * @var integer
     */
    public $height;

    /**
     * @var integer
     */
    public $file_size;

}