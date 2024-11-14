<?php

$env = parse_ini_file('config/.env', true);

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
        $bot->sendMessage($chatId, $_LANG['startmessage']);
    }
}