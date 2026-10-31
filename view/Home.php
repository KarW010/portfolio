<section id="home" class="py-16 flex flex-col-reverse md:flex-row items-center gap-10">
    <div class="md:w-1/2 text-center md:text-left">
        <h1 class="font-pixel text-2xl md:text-3xl mb-6">Hi, I'm Kartiko</h1>
        <p class="mb-8" style="font-size: 26px;">
            Business Information Systems (D4) student at Politeknik Negeri Malang.<br>
            Focused on web development and currently learning Odoo ERP.
        </p>
        <a href="#projects" class="pixel-btn">View Projects</a>
    </div>
    <div class="md:w-1/2 flex justify-center">
        <img src="assets/foto-profil.jpg" alt="Kar's photo"
             class="pixel-box w-64 h-64 md:w-80 md:h-80 object-cover">
    </div>
</section>

<section id="projects" class="py-12">
    <h2 class="font-pixel text-lg md:text-xl mb-8">Projects</h2>
    <div class="grid md:grid-cols-2 gap-8">
        <?php foreach ($projects as $p): ?>
            <div class="pixel-box pixel-card p-5">
                <?php if (!empty($p['image'])): ?>
                    <img src="<?= htmlspecialchars($p['image']) ?>" alt="<?= htmlspecialchars($p['title']) ?>"
                         class="w-full h-40 object-cover mb-4" style="border: 4px solid var(--ink);">
                <?php endif; ?>
                <h3 class="font-pixel text-xs mb-3"><?= htmlspecialchars($p['title']) ?></h3>
                <p class="mb-4"><?= htmlspecialchars($p['desc']) ?></p>
                <a href="<?= htmlspecialchars($p['link']) ?>" class="font-pixel text-[10px]" style="color: var(--blue);">View →</a>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<section id="about" class="py-12">
    <h2 class="font-pixel text-lg md:text-xl mb-8">About Me</h2>
    <div class="pixel-box p-6">
        <p class="mb-4">
            I'm a 5th-semester Business Information Systems student at Politeknik Negeri Malang.
            I'm looking for an internship where I can grow as a web developer and apply what I've
            learned in class to real projects.
        </p>
        <p class="mb-6">
            I'm also getting started with Odoo ERP, with hands-on practice in the Point of Sale module.
        </p>
        <p class="font-pixel text-[10px] mb-3">Skills</p>
        <div class="flex flex-wrap gap-3">
            <span class="pixel-tag">PHP</span>
            <span class="pixel-tag">MySQL</span>
            <span class="pixel-tag">HTML/CSS</span>
            <span class="pixel-tag">Tailwind</span>
            <span class="pixel-tag" style="background: var(--blue); color: #fff;">Odoo (learning)</span>
        </div>
    </div>
</section>

<section id="contact" class="py-12">
    <h2 class="font-pixel text-lg md:text-xl mb-8">Contact</h2>
    <div class="pixel-box p-6">
        <p class="mb-4">Open to internship opportunities. Feel free to reach out!</p>
        <ul class="space-y-1">
            <li>Email: youremail@gmail.com</li>
            <li>LinkedIn: linkedin.com/in/yourusername</li>
            <li>GitHub: github.com/yourusername</li>
        </ul>
    </div>
</section>