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
    protected $file_id;

    /**
     * @var PhotoSize
     */
    protected $thumb;

    /**
     * @var string
     */
    protected $file_name;

    /**
     * @var string
     */
    protected $mime_type;

    /**
     * @var integer
     */
    protected $file_size;

}