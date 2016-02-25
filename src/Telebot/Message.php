<?php
/**
 * Created by PhpStorm.
 * User: Emad Omar <emad2030@gmail.com>
 * Date: 2/25/2016
 * Time: 1:52 PM
 */

namespace Telebot;


use namespacetest\model\User;

class Message {

    /**
     * @required
     * @var integer
     */
    public $message_id;

    /**
     * @required
     * @var integer
     */
    public $date;

    /**
     * @required
     * @var Chat
     */
    public $chat;

    /**
     * @var User
     */
    public $from;

    /**
     * @var User
     */
    public $forward_from;

    /**
     * @var integer
     */
    public $forward_date;

    /**
     * @var Message
     */
    public $reply_to_message;

    /**
     * @var string
     */
    public $text;

    /**
     * @var Audio
     */
    public $audio;

    /**
     * @var Document
     */
    public $document;

    /**
     * @var PhotoSize[]
     */
    public $photo;

    /**
     * @var Sticker
     */
    public $sticker;

    /**
     * @var Video
     */
    public $video;

    /**
     * @var Voice
     */
    public $voice;

    /**
     * @var string
     */
    public $caption;

    /**
     * @var Contact
     */
    public $contact;

    /**
     * @var Location
     */
    public $location;

    /**
     * @var User
     */
    public $new_chat_participant;

    /**
     * @var User
     */
    public $left_chat_participant;

    /**
     * @var string
     */
    public $new_chat_title;

    /**
     * @var PhotoSize[]
     */
    public $new_chat_photo;

    /**
     * @var boolean
     */
    public $delete_chat_photo;

    /**
     * @var boolean
     */
    public $group_chat_created;

    /**
     * @var boolean
     */
    public $supergroup_chat_created;

    /**
     * @var boolean
     */
    public $channel_chat_created;

    /**
     * @var integer
     */
    public $migrate_to_chat_id;

    /**
     * @var integer
     */
    public $migrate_from_chat_id;

}