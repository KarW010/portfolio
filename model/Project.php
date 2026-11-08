<?php
class Project {
    public static function all() {
        return [
            [
                'title' => 'Mam Express Laundry App (Ongoing)',
                'role'  => 'Full-stack Developer',
                'tech'  => ['PHP', 'Laravel', 'Supabase(PostgreSQL)'], 
                'desc'  => 'Group project: a laundry management web app with an owner dashboard for orders, revenue, raw material inventory, restocking, employees, and service pricing.',
                'image' => 'assets/pbl-group-mam-express-laundry.jpeg',
                'fit'   => 'cover',
                'link'  => 'https://github.com/PratamaAngga/mam-express-laundry-app',
            ],
            [
                'title' => 'TrimaJadi',
                'role'  => 'Full-stack Developer',
                'tech'  => ['Flutter', 'Dart', 'Supabase(PostgreSQL)'],
                'desc'  => 'Group project-based learning (PBL) mobile app: a service marketplace with searchable service categories.',
                'image' => 'assets/pbl-group-TrimaJadi.jpeg',
                'fit'   => 'contain', // mobile screenshot: show the whole image
                'link'  => 'https://github.com/triaanandafh/TrimaJadi-PBL',
            ],
            [
                'title' => 'Applied Informatics Lab Website Update',
                'role'  => 'Front-end Developer',
                'tech'  => ['HTML', 'CSS', 'MySQL'], 
                'desc'  => 'Group coursework: an updated version of the Applied Informatics Laboratory website at Politeknik Negeri Malang. Created as a class assignment and reference for the lab, not the official site. Repository is private; available on request.',
                'image' => 'assets/pbl-group-labai.png',
                'fit'   => 'cover',
                'link'  => '#',
            ],
            [
                'title' => 'Personal Portfolio Website',
                'role'  => 'Full-stack Developer',
                'tech'  => ['PHP', 'MVC', 'Tailwind CSS'],
                'desc'  => 'This site, built from scratch with native PHP using the MVC pattern.',
                'image' => 'assets/my-portfolio.png',
                'fit'   => 'cover',
                'link'  => 'https://github.com/KarW010/portfolio',
            ],
        ];
    }
}