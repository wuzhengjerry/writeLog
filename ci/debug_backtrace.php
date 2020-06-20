<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2020/6/20
 * Time: 23:48
 */

include 'Log.php';
$log_path = dirname(__FILE__) . DIRECTORY_SEPARATOR .'logs' . DIRECTORY_SEPARATOR;
$log = new Log($log_path, 2);
function a() {
    b();
}

function b() {
    c();
}

function formate_line($back_trace) {
    $string = "";
    if (is_array($back_trace) && count($back_trace) > 0) {
        foreach ($back_trace as $item) {
            $string .= "file:" . $item['file'];
            $string .= "@line:" . $item['line'];
            $string .= "@function:" . $item['function'];
            $string .= "@arg:" . json_encode($item['arg']) . PHP_EOL;
        }
    }
    return $string;
}

function c(){
    global $log;
    $back_trace = debug_backtrace();
    $result = formate_line($back_trace);
    $log->write_log('DEBUG',$result);
}
a();
