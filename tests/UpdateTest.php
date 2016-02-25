<?php
use Telebot\Update;

/**
 * Created by PhpStorm.
 * User: Emad Omar <emad2030@gmail.com>
 * Date: 2/25/2016
 * Time: 3:26 PM
 */
class UserTest extends PHPUnit_Framework_TestCase {

    public function testParse() {
        $user = Update::parse(json_encode([
            'update_id' => 1,
            'message' => [
                'message_id' => 2,
                'date' => time(),
                'chat' => [
                    'id' => 3,
                    'type' => 'private',
                    'title' => 'string',
                    'username' => 'string',
                    'first_name' => 'string',
                    'last_name' => 'string',
                ],
                'forward_from' => [
                    'id' => 4,
                    'first_name' => 'string',
                    'last_name' => 'string',
                    'username' => 'string',
                ],
                'forward_date' => time(),
                'reply_to_message' => [
                    'message_id' => 5,
                    'date' => time(),
                    'chat' => [
                        'id' => 6,
                        'type' => 'private',
                        'title' => 'string',
                        'username' => 'string',
                        'first_name' => 'string',
                        'last_name' => 'string',
                    ],
                ],
                'text' => 'string',
                'audio' => [
                    'file_id' => 7,
                    'duration' => rand(10, 999),
                    'performer' => 'string',
                    'title' => 'string',
                    'mime_type' => 'string',
                    'file_size' => rand(1000, 99999),
                ],
                'video' => [
                    'file_id' => 8,
                    'width' => rand(10, 999),
                    'height' => rand(10, 999),
                    'duration' => rand(10, 999),
                    'thumb' => [
                        'file_id' => 9,
                        'width' => rand(10, 999),
                        'height' => rand(10, 999),
                        'file_size' => rand(1000, 99999),
                    ],
                    'mime_type' => 'string',
                    'file_size' => rand(1000, 99999),
                ],
                'voice' => [
                    'file_id' => 10,
                    'duration' => rand(10, 999),
                    'mime_type' => 'string',
                    'file_size' => rand(1000, 99999),
                ],
                'caption' => 'string',
                'contact' => [
                    'phone_number' => 'string',
                    'first_name' => 'string',
                    'last_name' => 'string',
                    'user_id' => 11,
                ],
                'location' => [
                    'longitude' => rand(100, 9999) / 3,
                    'latitude' => rand(100, 9999) / 3,
                ],
                'new_chat_participant' => [
                    'id' => 12,
                    'first_name' => 'string',
                    'last_name' => 'string',
                    'username' => 'string',
                ],
                'left_chat_participant' => [
                    'id' => 12,
                    'first_name' => 'string',
                    'last_name' => 'string',
                    'username' => 'string',
                ],
                'new_chat_title' => 'string',
                'delete_chat_photo' => true,
                'group_chat_created' => true,
                'supergroup_chat_created' => true,
                'channel_chat_created' => true,
                'migrate_to_chat_id' => rand(10, 999),
                'migrate_from_chat_id' => rand(10, 999),
            ],
            'inline_query' => [
                'id' => 13,
                'from' => [
                    'id' => 14,
                    'first_name' => 'string',
                    'last_name' => 'string',
                    'username' => 'string',
                ],
                'query' => 'string',
                'offset' => 'string',
            ],
            'chosen_inline_result' => [
                'result_id' => 15,
                'from' => [
                    'id' => 16,
                    'first_name' => 'string',
                    'last_name' => 'string',
                    'username' => 'string',
                ],
                'query' => 'string',
            ],
        ]));
    }

}