<?php

use application\core\Controller;
use application\core\View;

class PostController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->model = new PostModel();
        $this->view = new View();
    }

    public function getAction()
    {
        if (isset($_POST['id'])) {
            $work = $this->model->getDataByID($_POST['id']);
            echo (json_encode($work));
            die();
        }
        if (isset($_GET['id'])) {
            $post = $this->model->getDataByID((int) $_GET['id']);
            $this->view->generate('post.php', 'template_view.php', compact('data', 'post'));
        }
    }
}