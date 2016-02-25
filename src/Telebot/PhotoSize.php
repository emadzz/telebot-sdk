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
    protected $file_id;

    /**
     * @required
     * @var integer
     */
    protected $width;

    /**
     * @required
     * @var integer
     */
    protected $height;

    /**
     * @var integer
     */
    protected $file_size;

}