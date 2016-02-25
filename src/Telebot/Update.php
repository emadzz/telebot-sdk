<?php
/**
 * Created by PhpStorm.
 * User: Emad Omar <emad2030@gmail.com>
 * Date: 2/25/2016
 * Time: 1:43 PM
 */

namespace Telebot;


class Update {

    use Jsonable;

    /**
     * @required
     * @var integer
     */
    public $update_id;

    /**
     * @required
     * @var Message
     */
    public $message;

    /**
     * @var InlineQuery
     */
    public $inline_query;

    /**
     * @var ChosenInlineResult
     */
    public $chosen_inline_result;

}