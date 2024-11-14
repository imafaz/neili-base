<?php

require_once('..' . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'Logger.php');

use EasyLog\Logger;

// create a new logger with the file name "projectName.log"
$logger = new Logger('projectName.log');

$logger->debug('This is a debug message.');

$logger->info('This is an informational message.');

$logger->warning('This is a warning message.');

$logger->error('This is an error message.');

// $logger->fatal('This is a fatal message.');

// change log file
$logger->logFile = 'changedFile.log';

// print log
$logger->printLog = true;

$logger->debug('This is a debug message.');

$logger->info('This is an informational message.');

$logger->warning('This is a warning message.');

$logger->error('This is an error message.');

$logger->fatal('This is a fatal message.');