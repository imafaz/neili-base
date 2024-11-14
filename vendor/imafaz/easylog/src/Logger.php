<?php


declare(strict_types=1);

/**
 * @version 1.0.2
 * @author MrAfaz abolfazlmajidi100@gmail.com
 * @package EasyLog
 * @license https://opensource.org/licenses/MIT
 * @link https://github.com/imafaz/ٍEasyLog
 * 
 */


namespace EasyLog;

use Exception;
use DateTime;

/**
 * Logger
 * @method __construct(string $logFile, bool $printLog = false)
 * @method logging(string $message, int $level): void
 * @method debug(string $message): void
 * @method info(string $message): void
 * @method warning(string $message): void
 * @method error(string $message): void
 * @method fatal(string $message): void
 * 
 */
class Logger
{


    /**
     * log level types
     *
     * @constant int
     */
    const DEBUG = 1;
    const INFO = 2;
    const WARNING = 3;
    const ERROR = 4;
    const FATAL = 5;

    /**
     * logFile
     *
     * @var string
     */
    private string $logFile;


    /**
     * printLog
     *
     * @var bool
     */
    private bool $printLog;



  
    /**
     * __construct
     *
     * @param  string $logFile
     * @param  bool $printLog
     * @return void
     */
    public function __construct(string $logFile, bool $printLog = false)
    {
        $this->logFile = $logFile;
        $this->printLog = $printLog;
        if (function_exists('ini_set')) {
            ini_set('log_errors', true);
        }
    }


    
    /**
     * logging
     *
     * @param  string $message
     * @param  int $level
     * @return void
     */
    private function logging(string $message, int $level): void
    {
        $date = (new DateTime())->format('d-M-Y H:i:s \U\T\C');
        $levelString = match ($level) {
            self::DEBUG => 'DEBUG',
            self::INFO => 'INFO',
            self::WARNING => 'WARNING',
            self::ERROR => 'ERROR',
            self::FATAL => 'FATAL ERROR',
            default => throw new Exception('Invalid level type!')
        };

        $log = sprintf("[%s] [%s] %s\n", $date, $levelString, $message);

        if ($this->printLog) {
            print($log);
        }

        file_put_contents($this->logFile, $log, FILE_APPEND | LOCK_EX);

        if ($level === self::FATAL) {
            throw new Exception($message);
        }
    }

    
    /**
     * debug
     *
     * @param  string $message
     * @return void
     */
    public function debug(string $message): void
    {
        $this->logging($message, self::DEBUG);
    }



    
    /**
     * info
     *
     * @param  string $message
     * @return void
     */
    public function info(string $message): void
    {
        $this->logging($message, self::INFO);
    }


    
    /**
     * warning
     *
     * @param  string $message
     * @return void
     */
    public function warning(string $message): void
    {
        $this->logging($message, self::WARNING);
    }


   
    /**
     * error
     *
     * @param  string $message
     * @return void
     */
    public function error(string $message): void
    {
        $this->logging($message, self::ERROR);
    }


    /**
     * fatal
     *
     * @param  string $message
     * @return void
     */
    public function fatal(string $message): void
    {
        $this->logging($message, self::FATAL);
    }
}
