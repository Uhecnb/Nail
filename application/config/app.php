<?php
//Настройки проекта
require_once ('settings.php');
//TODO неплохо было бы написать автозагрузку
//Подключение ядра
require_once ($_SERVER['DOCUMENT_ROOT'].'/application/core/Controller.php');
require_once ($_SERVER['DOCUMENT_ROOT'].'/application/core/Db.php');
require_once ($_SERVER['DOCUMENT_ROOT'].'/application/core/Model.php');
require_once ($_SERVER['DOCUMENT_ROOT'].'/application/core/View.php');
require_once ($_SERVER['DOCUMENT_ROOT'].'/application/core/Route.php');
//Запуск маршрутизатора

use application\core\Route;

Route::start();

