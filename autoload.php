<?php
/**
 * Created by PhpStorm.
 * User: temp
 * Date: 2018/7/4
 * Time: 11:10
 */

spl_autoload_register(function($class)
{
    $path = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    $file = __DIR__ . '/src/' . $path . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
});