<?php
use Telebot\BotApi;
use Telebot\Message;
use Telebot\Response;
use Telebot\Update;
use Telebot\User;

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
        $this->assertTrue($botInfo->ok);

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
        $this->assertTrue($botInfo->ok);

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
        $this->assertTrue($botInfo->ok);

        // Check if result is `Message`
        $this->assertInstanceOf(Message::class, $botInfo->getResult());
    }

    protected function tearDown() {
        unset($this->bot);
    }

}