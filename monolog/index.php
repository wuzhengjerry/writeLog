<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2020/6/20
 * Time: 21:58
 */
include 'vendor/autoload.php';
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
// create a log channel
$log_path = 'logs/'.date('Ymd', time()) .'.log';
$log = new Logger('testnae');
$log->pushHandler(new StreamHandler($log_path, Logger::WARNING));

// add records to the log
$log->warning('this is a warning');
$log->error('this is a error');
