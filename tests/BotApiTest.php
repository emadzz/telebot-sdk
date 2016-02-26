<?php

use TelebotSDK\BotApi;
use TelebotSDK\InputFile;
use TelebotSDK\Message;
use TelebotSDK\ReplyKeyboardHide;
use TelebotSDK\ReplyKeyboardMarkup;
use TelebotSDK\ReplyMarkup;
use TelebotSDK\Response;
use TelebotSDK\Update;
use TelebotSDK\User;

require_once __DIR__ . '/getTestVar.func.php';

/**
 * Created by PhpStorm.
 * User: Emad Omar <emad2030@gmail.com>
 * Date: 2/25/2016
 * Time: 9:14 PM
 */
class BotApiTest extends PHPUnit_Framework_TestCase {

    /**
     * @var BotApi
     */
    protected $bot = null;

    protected function setUp() {
        $this->bot = new BotApi(getTestVar('botToken'));
    }

    public function testGetMe() {
        $botInfo = $this->bot->getMe();

        // Check if a correct response is returned
        $this->assertInstanceOf(Response::class, $botInfo);

        // Check if response is ok
        $this->assertTrue($botInfo->ok, $botInfo->description);

        // Check if result is `User`
        $this->assertInstanceOf(User::class, $botInfo->getResult());
    }

    public function testSendMessage() {
        $chatId = getTestVar('chatId');
        $text = 'A message';

        $botInfo = $this->bot->sendMessage($chatId, $text);

        // Check if a correct response is returned
        $this->assertInstanceOf(Response::class, $botInfo);

        // Check if response is ok
        $this->assertTrue($botInfo->ok, $botInfo->description);

        // Check if result is `Message`
        $this->assertInstanceOf(Message::class, $botInfo->getResult());
    }

    public function testSendMessage2() {
        $chatId = getTestVar('chatId');
        $text = 'http://telegram.com';

        $reply_markup = new ReplyKeyboardMarkup(
            [['Button 1'], ['Btn 2', 'Btn 3']], true
        );

        $botInfo = $this->bot->sendMessage(
            $chatId, $text, null, true, null, $reply_markup
        );

        // Check if a correct response is returned
        $this->assertInstanceOf(Response::class, $botInfo);

        // Check if response is ok
        $this->assertTrue($botInfo->ok, $botInfo->description);

        // Check if result is `Message`
        $this->assertInstanceOf(Message::class, $botInfo->getResult());
    }

    public function testSendMessage3() {
        $chatId = getTestVar('chatId');
        $text = 'Another *test* _message_';

        $reply_markup = new ReplyKeyboardHide();

        $botInfo = $this->bot->sendMessage(
            $chatId, $text, BotApi::PARSE_MODE_MARKDOWN, null, null, $reply_markup
        );

        // Check if a correct response is returned
        $this->assertInstanceOf(Response::class, $botInfo);

        // Check if response is ok
        $this->assertTrue($botInfo->ok, $botInfo->description);

        // Check if result is `Message`
        $this->assertInstanceOf(Message::class, $botInfo->getResult());
    }

    public function testForwardMessage() {
        $chatId = getTestVar('chatId');
        $fromChatId = $chatId;
        $messageId = 1;

        $botInfo = $this->bot->forwardMessage($chatId, $fromChatId, $messageId);

        // Check if a correct response is returned
        $this->assertInstanceOf(Response::class, $botInfo);

        // Check if response is ok
        $this->assertTrue($botInfo->ok, $botInfo->description);

        // Check if result is `Message`
        $this->assertInstanceOf(Message::class, $botInfo->getResult());
    }

    public function testSendPhotoFile() {
        $chatId = getTestVar('chatId');
        $fullPathToPhoto = __DIR__ . '/data-files/photo-001.jpg';
        $photo = new InputFile($fullPathToPhoto);

        $botInfo = $this->bot->sendPhoto($chatId, $photo);

        // Check if a correct response is returned
        $this->assertInstanceOf(Response::class, $botInfo);

        // Check if response is ok
        $this->assertTrue($botInfo->ok, $botInfo->description);

        // Check if result is `Message`
        $this->assertInstanceOf(Message::class, $botInfo->getResult());

        /** @var Message $message */
        $message = $botInfo->getResult();

        // Check if message has an array of `PhotoSize`
        // which will ensure that the type of the message is a photo
        $this->assertInternalType('array', $message->photo);
    }

    public function testSendPhotoById() {
        $chatId = getTestVar('chatId');
        $photoId = 'AgADBAADqacxG3y60As73RFawubpsrUkHRkABMe0EeZDhijKSAwCAAEC';

        $botInfo = $this->bot->sendPhoto($chatId, $photoId);

        // Check if a correct response is returned
        $this->assertInstanceOf(Response::class, $botInfo);

        // Check if response is ok
        $this->assertTrue($botInfo->ok, $botInfo->description);

        // Check if result is `Message`
        $this->assertInstanceOf(Message::class, $botInfo->getResult());

        /** @var Message $message */
        $message = $botInfo->getResult();

        // Check if message has an array of `PhotoSize`
        // which will ensure that the type of the message is a photo
        $this->assertInternalType('array', $message->photo);
    }

    protected function tearDown() {
        unset($this->bot);
    }

}