<?php
/**
 * Created by PhpStorm.
 * User: Emad Omar <emad2030@gmail.com>
 * Date: 2/25/2016
 * Time: 2:06 PM
 */

namespace TelebotSDK;


class Audio {

    /**
     * @required
     * @var string
     */
    public $file_id;

    /**
     * @required
     * @var integer
     */
    public $duration;

    /**
     * @var string
     */
    public $performer;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $mime_type;

    /**
     * @var integer
     */
    public $file_size;

}