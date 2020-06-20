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