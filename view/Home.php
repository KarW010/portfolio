<?php
    $cvLink   = 'https://drive.google.com/drive/folders/1-JoQ8hNPTDYlvKQOKFqRnra5e5IS82NY?usp=drive_link';  
    $certLink = 'https://drive.google.com/drive/folders/1aVYz_8cL-CYBUIcZNpCxRcRcK33TZ8Lb?usp=sharing'; 
?>
<style>
    .skill-tag {
        display: inline-block;
        font-family: 'Press Start 2P', monospace;
        font-size: 10px;
        padding: 7px 10px;
        background: #fff;
        border: 3px solid var(--ink);
    }
    .skill-tag.learning {
        border-style: dashed;
        background: #e6f4fb;
    }
    .tech-tag {
        display: inline-block;
        font-family: 'Press Start 2P', monospace;
        font-size: 9px;
        padding: 5px 8px;
        background: var(--paper);
        border: 2px solid var(--ink);
    }
    .pixel-btn.alt { background: #fff; color: var(--ink); }
    .pixel-btn.alt:hover { background: var(--yellow); }
    .pixel-btn { cursor: pointer; }
    .pixel-btn.blue { background: var(--blue); }
    .pixel-btn.blue:hover { background: #33b3ea; }
    .pixel-btn.green { background: var(--green); }
    .pixel-btn.green:hover { background: #55a85f; }

    .pixel-link { color: var(--blue); cursor: pointer; }
    .pixel-link:hover { color: var(--red); text-decoration: underline; text-underline-offset: 4px; }

    .pixel-btn:focus-visible,
    .pixel-link:focus-visible { outline: 4px solid var(--yellow); outline-offset: 2px; }

    section { scroll-margin-top: 90px; }
</style>

<section id="home" class="py-16 flex flex-col-reverse md:flex-row items-center gap-10">
    <div class="md:w-1/2 text-center md:text-left">
        <h1 class="font-pixel text-2xl md:text-3xl mb-6">Hi, I'm Kartiko</h1>
        <p class="mb-8" style="font-size: 26px;">
            Business Information Systems (D4) student at Politeknik Negeri Malang.<br>
            Focused on web and mobile development, currently learning Odoo ERP, software testing (SQA), and game development.
        </p>
        <div class="flex flex-wrap gap-4 justify-center md:justify-start">
            <a href="#projects" class="pixel-btn">View Projects</a>
            <?php if (!empty($cvLink)): ?>
                <a href="<?= htmlspecialchars($cvLink) ?>" target="_blank" rel="noopener noreferrer"
                   class="pixel-btn alt">Download CV</a>
            <?php endif; ?>
        </div>
    </div>
    <div class="md:w-1/2 flex justify-center">
        <img src="assets/foto-profil.jpg" alt="Kartiko's photo"
             class="pixel-box w-64 h-64 md:w-80 md:h-80 object-cover">
    </div>
</section>

<section id="projects" class="py-12">
    <h2 class="font-pixel text-lg md:text-xl mb-8">Projects</h2>
    <div class="grid md:grid-cols-2 gap-8">
        <?php foreach ($projects as $p): ?>
            <div class="pixel-box pixel-card p-5 flex flex-col">
                <?php if (!empty($p['image'])): ?>
                    <?php $contain = ($p['fit'] ?? 'cover') === 'contain'; ?>
                    <img src="<?= htmlspecialchars($p['image']) ?>" alt="<?= htmlspecialchars($p['title']) ?>"
                        class="w-full h-64 mb-4 <?= $contain ? 'object-contain' : 'object-cover object-top' ?>"
                        style="border: 4px solid var(--ink);<?= $contain ? ' background: #e8e3d5;' : '' ?>">
                <?php endif; ?>
                <h3 class="font-pixel text-xs mb-2"><?= htmlspecialchars($p['title']) ?></h3>
                <?php if (!empty($p['role'])): ?>
                    <p class="font-pixel text-[10px] mb-3" style="color: var(--red);">Role: <?= htmlspecialchars($p['role']) ?></p>
                <?php endif; ?>
                <p class="mb-4"><?= htmlspecialchars($p['desc']) ?></p>
                <?php if (!empty($p['tech'])): ?>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <?php foreach ($p['tech'] as $t): ?>
                            <span class="tech-tag"><?= htmlspecialchars($t) ?></span>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
                <?php if ($p['link'] !== '#'): ?>
                    <a href="<?= htmlspecialchars($p['link']) ?>" target="_blank" rel="noopener noreferrer"
                    class="pixel-link font-pixel text-[10px] mt-auto self-start">
                        <?= str_contains($p['link'], 'github.com') ? 'View on GitHub →' : 'View project →' ?>
                    </a>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<section id="about" class="py-12">
    <h2 class="font-pixel text-lg md:text-xl mb-8">About Me</h2>
    <div class="pixel-box p-6">
        <p class="mb-4">
            I'm a 5th-semester Business Information Systems student at Politeknik Negeri Malang.
            I'm looking for an internship where I can grow as a web and mobile developer and apply what I've
            learned in class to real projects.
        </p>
        <p class="mb-6">
            I'm also learning Odoo ERP to understand how business processes work in an ERP system,
            studying software testing (SQA) to build more reliable applications, and exploring game development.
        </p>
        <p class="mb-6">
            I use AI tools to speed up development and learn faster, while reviewing and
            understanding the code before using it.
        </p>

        <div class="mt-8" style="border-top: 4px solid var(--ink);">
            <p class="font-pixel text-xs mt-6 mb-2">Skills</p>

            <div class="grid md:grid-cols-[150px_1fr] gap-3 md:items-center py-4" style="border-bottom: 3px dashed #bbb;">
                <p class="font-pixel text-[10px]">Languages</p>
                <div class="flex flex-wrap gap-2">
                    <span class="skill-tag">PHP</span>
                    <span class="skill-tag">Java</span>
                    <span class="skill-tag">Dart</span>
                    <span class="skill-tag">HTML/CSS</span>
                    <span class="skill-tag">Python (basic)</span>
                </div>
            </div>

            <div class="grid md:grid-cols-[150px_1fr] gap-3 md:items-center py-4" style="border-bottom: 3px dashed #bbb;">
                <p class="font-pixel text-[10px]">Frameworks</p>
                <div class="flex flex-wrap gap-2">
                    <span class="skill-tag">Laravel</span>
                    <span class="skill-tag">Flutter</span>
                    <span class="skill-tag">Tailwind CSS</span>
                </div>
            </div>

            <div class="grid md:grid-cols-[150px_1fr] gap-3 md:items-center py-4" style="border-bottom: 3px dashed #bbb;">
                <p class="font-pixel text-[10px]">Databases</p>
                <div class="flex flex-wrap gap-2">
                    <span class="skill-tag">MySQL</span>
                    <span class="skill-tag">PostgreSQL</span>
                </div>
            </div>

            <div class="grid md:grid-cols-[150px_1fr] gap-3 md:items-center py-4" style="border-bottom: 3px dashed #bbb;">
                <p class="font-pixel text-[10px]">Learning</p>
                <div class="flex flex-wrap gap-2">
                    <span class="skill-tag learning">Odoo ERP</span>
                    <span class="skill-tag learning">Software Testing (SQA)</span>
                    <span class="skill-tag learning">Game Development</span>
                </div>
            </div>

            <?php if (!empty($certLink)): ?>
            <div class="grid md:grid-cols-[150px_1fr] gap-3 md:items-center py-4">
                <p class="font-pixel text-[10px]">Certificates</p>
                <p>
                    Seminars, webinars, and guest lectures (national and international).
                    <a href="<?= htmlspecialchars($certLink) ?>" target="_blank" rel="noopener noreferrer"
                       class="pixel-link font-pixel text-[10px] ml-2">View certificates →</a>
                </p>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<section id="contact" class="py-12">
    <h2 class="font-pixel text-lg md:text-xl mb-8">Contact</h2>
    <div class="pixel-box p-6">
        <p class="mb-4">Open to internship opportunities. Feel free to reach out!</p>

        <p class="mb-6">
            Email: <span id="email-text">kartikostudy@gmail.com</span>
            <button type="button" id="copy-email" class="pixel-link font-pixel text-[10px] ml-3">Copy</button>
        </p>

        <div class="flex flex-wrap gap-4">
            <a href="https://www.linkedin.com/in/kartiko-widyotomo-882466339" target="_blank" rel="noopener noreferrer"
               class="pixel-btn blue">LinkedIn</a>
            <a href="https://github.com/KarW010" target="_blank" rel="noopener noreferrer"
               class="pixel-btn green">GitHub</a>
        </div>
    </div>
</section>

<script>
document.getElementById('copy-email').addEventListener('click', function () {
    var btn = this;
    navigator.clipboard.writeText('kartikostudy@gmail.com').then(function () {
        btn.textContent = 'Copied!';
        setTimeout(function () { btn.textContent = 'Copy'; }, 1500);
    });
});
</script>