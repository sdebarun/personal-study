<?php
namespace Designs\php;

require_once ('Singleton.php');

use Designs\php\Singleton;

//lets make a specific subclass - following open closed so the parent class does not need to be modified every time we need a new logic specific singleton class. 


class Logger extends Singleton {
    // for simplicity we can write log data in a file

    public function writeLog($message) : void {
        $file = fopen('singleton/php/log.log', 'a+');
        fwrite($file, date('y-m-d H:m:s').' : '."$message".PHP_EOL);
        fclose($file);
    }

    public static function log($message) :void{
        $logger = self::instance();
        $logger->writeLog($message);
    }
}


Logger::log('Hope log works fine');

$logger1 = Logger::log("I am logger 1");
$logger2 = Logger::log("I am logger 2");

if($logger1 === $logger2){
    Logger::log("Logger has only one instance");
}else{
    Logger::log("Logger has failed to create a singleton and has two instances");
}