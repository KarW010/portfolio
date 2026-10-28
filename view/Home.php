<section id="home" class="py-20 flex flex-col-reverse md:flex-row items-center gap-10">
    <div class="md:w-1/2 text-center md:text-left">
        <h1 class="text-4xl font-bold mb-4">Hi, I'm Kar 👋</h1>
        <p class="text-lg text-gray-600 mb-8">
            Business Information Systems (D4) student at Politeknik Negeri Malang.<br>
            Focused on web development and currently learning Odoo ERP.
        </p>
        <a href="#projects" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700">
            View Projects
        </a>
    </div>
    <div class="md:w-1/2 flex justify-center">
        <img src="assets/foto-profil.jpg" alt="Kar's photo" class="w-64 h-64 md:w-80 md:h-80 rounded-full object-cover shadow-lg ring-4 ring-white">
    </div>
</section>

<section id="projects" class="py-16">
    <h2 class="text-3xl font-bold mb-6">Projects</h2>
    <div class="grid md:grid-cols-2 gap-6">
        <?php foreach ($projects as $p): ?>
            <div class="bg-white p-6 rounded-lg shadow">
                <img src="<?= htmlspecialchars($p['image']) ?>" alt="<?= htmlspecialchars($p['title']) ?>" class="w-full h-48 object-cover mb-4">
                <h3 class="font-semibold text-lg"><?= htmlspecialchars($p['title']) ?></h3>
                <p class="text-gray-600 my-2"><?= htmlspecialchars($p['desc']) ?></p>
                <a href="<?= htmlspecialchars($p['link']) ?>" class="text-blue-600">View →</a>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<section id="about" class="py-16">
    <h2 class="text-3xl font-bold mb-4">About Me</h2>
    <p class="mb-4">
        I'm a 5th-semester Business Information Systems student at Politeknik Negeri Malang.
        I'm looking for an internship where I can grow as a web developer and apply what I've
        learned in class to real projects.
    </p>
    <p class="mb-4">
        I'm also getting started with Odoo ERP, with hands-on practice in the Point of Sale module.
    </p>

    <h3 class="text-xl font-semibold mt-6 mb-2">Skills</h3>
    <ul class="list-disc ml-6">
        <li>PHP & MySQL</li>
        <li>MVC architecture</li>
        <li>HTML, CSS & Tailwind CSS</li>
        <li>Odoo ERP (learning, Point of Sale module)</li>
    </ul>
</section>

<section id="contact" class="py-16">
    <h2 class="text-3xl font-bold mb-4">Contact</h2>
    <p class="mb-3">Open to internship opportunities. Feel free to reach out!</p>
    <ul class="space-y-1">
        <li>Email: youremail@gmail.com</li>
        <li>LinkedIn: linkedin.com/in/yourusername</li>
        <li>GitHub: github.com/yourusername</li>
    </ul>
</section>