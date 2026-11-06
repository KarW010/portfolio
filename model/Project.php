<?php
class Project {
    public static function all() {
        return [
            [
                'title' => 'Mam Express Laundry App (Ongoing)',
                'desc'  => 'Group project: a laundry management web app with an owner dashboard for orders, revenue, raw material inventory, restocking, employees, and service pricing. Built with Laravel.',
                'image' => 'assets/pbl-group-mam-express-laundry.jpeg',
                'link'  => 'https://github.com/PratamaAngga/mam-express-laundry-app',
            ],
            [
                'title' => 'TrimaJadi',
                'desc'  => 'Group project-based learning (PBL) mobile app: a service marketplace with searchable service categories. Built with Flutter and Supabase.',
                'image' => 'assets/pbl-group-TrimaJadi.jpeg',
                'link'  => 'https://github.com/triaanandafh/TrimaJadi-PBL',
            ],
            [
                'title' => 'Applied Informatics Laboratory Website',
                'desc'  => 'Group project: official website for the Applied Informatics Laboratory at Politeknik Negeri Malang, showcasing publications, products, members, and research.',
                'image' => 'assets/pbl-group-labai.png',
                'link'  => 'https://github.com/PratamaAngga/Lab-Applied-Informatics',
            ],
            [
                'title' => 'Personal Portfolio Website',
                'desc'  => 'This site, built from scratch with native PHP using the MVC pattern and styled with Tailwind CSS.',
                'image' => '',
                'link'  => '#',
            ],
        ];
    }
}