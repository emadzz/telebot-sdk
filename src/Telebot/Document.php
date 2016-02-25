<?php
/**
 * Created by PhpStorm.
 * User: Emad Omar <emad2030@gmail.com>
 * Date: 2/25/2016
 * Time: 2:08 PM
 */

namespace Telebot;


class Document {

    /**
     * @required
     * @var string
     */
    public $file_id;

    /**
     * @var PhotoSize
     */
    public $thumb;

    /**
     * @var string
     */
    public $file_name;

    /**
     * @var string
     */
    public $mime_type;

    /**
     * @var integer
     */
    public $file_size;

}