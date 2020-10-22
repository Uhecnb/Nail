<?php

namespace application\core;

use application\core\View;

abstract class Controller
{
    protected $model;
    protected $view;

    public function __construct()
    {
        $this->view = new View();
    }

    public function indexAction()
    {

    }

}