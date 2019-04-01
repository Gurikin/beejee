<?php

/**
 * Created by PhpStorm.
 * User: gurikin
 * Date: 01.04.19
 * Time: 21:46
 */

use app\FrontController;

error_reporting(E_ALL);
ini_set('display_errors', '1');

include_once($_SERVER["DOCUMENT_ROOT"].'/app/const.php');
//include_once($_SERVER["DOCUMENT_ROOT"].'/data/UtilClass.php');

$loader = require "../vendor/autoload.php";

//session_start();

/* Инициализация и запуск FrontController */
$front = FrontController::getInstance();
$front->route();


/* Вывод данных */
echo $front->getBody();