<?php
/**
 * Created by PhpStorm.
 * User: Emad Omar <emad2030@gmail.com>
 * Date: 2/25/2016
 * Time: 10:21 PM
 */

namespace Telebot;


class InlineQuery {

    /**
     * @required
     * @var string
     */
    public $id;

    /**
     * @required
     * @var User
     */
    public $from;

    /**
     * @required
     * @var string
     */
    public $query;

    /**
     * @required
     * @var string
     */
    public $offset;

}