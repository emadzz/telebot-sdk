<?php
/**
 * Created by PhpStorm.
 * User: Emad Omar <emad2030@gmail.com>
 * Date: 2/25/2016
 * Time: 8:11 PM
 */

namespace Telebot;


class Video {

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
     * @required
     * @var integer
     */
    public $duration;

    /**
     * @var PhotoSize
     */
    public $thumb;

    /**
     * @var string
     */
    public $mime_type;

    /**
     * @var integer
     */
    public $file_size;

}