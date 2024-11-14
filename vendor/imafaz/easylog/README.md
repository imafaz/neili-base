# EasyLog
EasyLog is a PHP library designed for logging messages at different levels such as debug, info, warning, error, and fatal. It provides an easy-to-use interface for developers to manage log messages effectively.

---

- [Features](#features)
- [Requirements](#requirements)
- [Installation](#installation)
- [Usage](#usage)
- [Example](#example)
- [Available Methods](#available-methods)
- [License](#license)

---

## Features
- Supports multiple log levels: debug, info, warning, error, and fatal.
- Option to print log messages to the screen.
- Customizable log file location.

## Requirements
- PHP 7.0 or higher

## Installation
You can install EasyLog using Composer. Run the following command in your terminal:

```bash
composer require imafaz/EasyLog
```

## Usage
To use the EasyLog library, you need to create an instance of the Logger class. Below is an example of how to use it.

### Example
```php
require __DIR__ . '/vendor/autoload.php';

use EasyLog\Logger;

// Create an instance of Logger
$logger = new Logger('/path/to/file.log');

// Logging messages at different levels
$logger->debug('This is a debug message.');
$logger->info('This is an informational message.');
$logger->warning('This is a warning message.');
$logger->error('This is an error message.');
$logger->fatal('This is a fatal message.');

// To print messages on the screen as well
$logger = new Logger('/path/to/file.log', true);
```

## Available Methods
### Logger Class Methods
- `__construct(string $logFile, bool $printLog = false)`: Initializes the Logger with the specified log file and print option.
- `debug(string $message)`: Logs a debug message.
- `info(string $message)`: Logs an informational message.
- `warning(string $message)`: Logs a warning message.
- `error(string $message)`: Logs an error message.
- `fatal(string $message)`: Logs a fatal error message and throws an exception.


## License
This project is licensed under the MIT License. See the [LICENSE](https://github.com/imafaz/EasyLog/blob/main/LICENSE) file for details.