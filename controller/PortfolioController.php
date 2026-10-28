<?php
require_once 'model/Project.php';

class PortfolioController {
    private function render($view, $data = []) {
        extract($data);
        ob_start();
        require "view/$view.php";
        $content = ob_get_clean();
        require "view/layout.php";
    }

    public function home() {
        $this->render('home', ['projects' => Project::all()]);
    }
}