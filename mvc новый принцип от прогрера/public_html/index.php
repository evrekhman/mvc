<?php

// FRONT COTROLLER

// 1. Общие настройки

ini_set('display_errors', 1);
error_reporting(E_ALL); 

session_start();
// 2. Подключение файлов системы

define('ROOT', dirname(__FILE__));
require_once(ROOT.'/components/Autoload.php');
//require_once(ROOT.'/components/Router.php');
//require_once(ROOT.'/components/Db.php');


// 3. Установка соединения с БД
//$db = Db::getConnection();
$db = new Db();
//$db = $dbget->returnConnect();
// 4. Вызор Router

//$router = new Router();
//$router->run();
$router = new Router();
//$router->run();
$action = $router->getAction();
require_once(ROOT . '/controllers/' .ucfirst($router->getController()).'Controller.php');
