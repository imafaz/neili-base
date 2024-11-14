<?php

$env = parse_ini_file('config/.env', true);


require 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';
require 'lang' . DIRECTORY_SEPARATOR . $env['bot']['lang'] . '.php';


use TelegramBot\Neili;

$bot = new Neili($env['bot']['token']);


$update = $bot->handleUpdate();
if ($update) {

    $message = $update['message'];
    $text = $message['text'];
    $chatType = $message['chat']['type'];
    $chatId = $message['chat']['id'];
}




if ($chatType == 'private') {
    if ($text == '/start') {
        $buttons = ['button1', 'button2', 'button3', 'button4', 'button5'];
        $keyboard = Neili::keyboard($buttons);
        $bot->sendMessage($chatId, $_LANG['startmessage'], $keyboard);
        $buttons = ['button1' => 'customdata', 'button2' => 'customdata', 'button3' => 'customdata'];
        $keyboard = Neili::inlineKeyboard($buttons);
        $bot->sendMessage($chatId, $_LANG['startmessage'], $keyboard);
    }
}
