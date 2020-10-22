<?php

use application\core\Controller;
use application\core\View;

class MainController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->model = new MainModel();
        $this->view = new View();
    }

    private function getAllPosts()
    {
        return $this->model->getData();
    }

    public function indexAction()
    {
        $all_posts = $this->getAllPosts();
        $this->view->generate('index.php', 'template_view.php', compact('data', 'all_posts'));
    }

}