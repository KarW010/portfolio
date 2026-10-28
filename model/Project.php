<?php
class Project {
    public static function all() {
        return [
            [
                'title' => 'Personal Portfolio Website',
                'desc'  => 'This site, built from scratch with native PHP using the MVC pattern and styled with Tailwind CSS.',
                'image' => 'assets/project-portfolio.png',
                'link'  => '#',
            ],
            [
                'title' => 'Odoo Point of Sale Module',
                'desc'  => 'Coursework project exploring Odoo\'s Point of Sale module: product setup, sales sessions, and order flow.',
                'image' => 'assets/project-odoo.png',
                'link'  => '#',
            ],
        ];
    }
}