<?php

include('../src/Neili.php');

// use Neili class
use TelegramBot\Neili;

// create Neili object
$token = '6442038046:AAGfKm3q-YaNF38ps1EwMUN0QOeKbg7DX4M'; // setup access token
$bot = new Neili($token);

// send message
$chatId = '1826312667';
$message = 'hello  this message sended with neili!';
$content = $bot->sendMessage($chatId, $message);


/// print response
var_dump($content);