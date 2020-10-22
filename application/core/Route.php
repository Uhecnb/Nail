<?php

namespace application\core;


class Route
{
    /**
     * Подключаем необходимых класс
     * @param string $name
     * @param string $dir
     * @throws \Exception
     */
    private static function includeClass(string $name, string $dir)
    {
        $file = $name.'.php';
        $path = "application/".$dir."/".$file;
        if (file_exists($path)) {
            include_once $path;
            if (!class_exists($name)) {
                throw new \Exception('Не был подключен класс: '.$name, 404);
            }
        } else {
            throw new \Exception('Не найден класс: '.$name, 404);
        }
    }

    /**
     * @param string $message
     */
    private static function ErrorPage(string $message = 'Ошибка')
    {
        die($message);
    }

    public static function start()
    {
        //По умолчанию
        $controller_name = 'Main';
        $action_name = 'index';

        $routes = explode('/', $_SERVER['REQUEST_URI']);

        //Название controller
        if (!empty($routes[1])) {
            $controller_name = $routes[1];
        }

        //Название action
        if (!empty($routes[2])) {
            $actions = explode('?', $routes[2]);
            $action_name = $actions[0];
        }

        //Добавляем префикс для подключения нужных классов
        $model_name = ucfirst(strtolower($controller_name)).'Model';
        $controller_name = ucfirst(strtolower($controller_name)).'Controller';
        $action_name = strtolower($action_name).'Action';

        try {
            self::includeClass($model_name, 'models');
            self::includeClass($controller_name, 'controllers');

            //Создаем контроллер
            $controller = new $controller_name;
            if (method_exists($controller, $action_name)) {
                //Вызов действия в контроллере
                $controller->$action_name((int) $_GET['id']);
            } else {
                throw new \Exception('Не найден action', 404);
            }
        } catch (\Exception $exception) {
            Route::ErrorPage($exception->getMessage());
        }
    }
}