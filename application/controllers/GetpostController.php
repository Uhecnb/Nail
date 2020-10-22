<?php

use application\core\Controller;
use application\core\View;

class GetpostController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->model = new GetpostModel();
        $this->view = new View();
    }

    private function getAllPosts()
    {
        return $this->model->getData();
    }

    public function indexAction()
    {
        $all_posts = $this->getAllPosts();
        $this->view->generate('get_post.php', 'template_view.php', compact('data', 'all_posts'));
    }

    public function getAction()
    {
        if (isset($_POST)) {
            $post = $this->model->getDataByID($_POST['id']);
            echo (json_encode($post));
        }
    }

}