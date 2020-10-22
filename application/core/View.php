<?php

namespace application\core;

class View
{
    public function generate($content_view, $template_view = 'template_view.php', $data = null)
    {
        if (is_array($data)) {
            extract($data);
        }

        include "application/views/".$template_view;
    }

}