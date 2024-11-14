<?php

// Load environment variables from the .env file
$env = parse_ini_file('config/.env', true);

// Autoload dependencies using Composer
require 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

// Load language file based on the specified language in the environment
require 'lang' . DIRECTORY_SEPARATOR . $env['bot']['lang'] . '.php';

// Use the Neili
use TelegramBot\Neili;

// Initialize the bot
$bot = new Neili($env['bot']['token']);

// Handle incoming updates from Telegram
$update = $bot->handleUpdate();
if ($update) {
    // Extract message details
    $message = $update['message'];
    $text = $message['text'];
    $chatType = $message['chat']['type'];
    $chatId = $message['chat']['id'];

    // Check if the chat is private
    if ($chatType == 'private') {
        // Respond to the /start command
        if ($text == '/start') {
            
            // Define inline buttons with custom data
            $inlineButtons = [
                'button1' => 'customdata1',
                'button2' => 'customdata2',
                'button3' => 'customdata3'
            ];
            // Create an inline keyboard with the defined buttons
            $inlineKeyboard = Neili::inlineKeyboard($inlineButtons);
            // Send the start message again with the inline keyboard
            $bot->sendMessage($chatId, $_LANG['startmessage'], $inlineKeyboard);
            
            // Define button labels
            $buttons = ['button1', 'button2', 'button3', 'button4', 'button5'];
            // Create a keyboard with the defined buttons
            $keyboard = Neili::keyboard($buttons);
            // Send the start message with the keyboard
            $bot->sendMessage($chatId, $_LANG['startmessage'], $keyboard);

        }
    }
}
