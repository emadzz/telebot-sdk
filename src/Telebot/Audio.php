<?php
/**
 * Created by PhpStorm.
 * User: Emad Omar <emad2030@gmail.com>
 * Date: 2/25/2016
 * Time: 2:06 PM
 */

namespace Telebot;


class Audio {

    /**
     * @required
     * @var string
     */
    protected $file_id;

    /**
     * @required
     * @var integer
     */
    protected $duration;

    /**
     * @var string
     */
    protected $performer;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $mime_type;

    /**
     * @var integer
     */
    protected $file_size;

}