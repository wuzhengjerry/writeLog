<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2020/6/20
 * Time: 22:44
 */
include 'Log.php';
$log_path = dirname(__FILE__) . DIRECTORY_SEPARATOR .'logs' . DIRECTORY_SEPARATOR;
$log = new Log($log_path);
function a() {
    b();
}

function b() {
    c();
}

function c(){
    global $log;
    ob_start();
    debug_print_backtrace();
    $trace = ob_get_contents();
    ob_end_clean();
//    $trace = strtr($trace, '#', PHP_EOL);
//    var_dump($trace);
    $log->write_log('ERROR',$trace);
}
a();