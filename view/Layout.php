<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kar | Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&family=VT323&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        :root {
            --ink: #1a1c2c;
            --paper: #f4f0e6;
            --red: #e43b44;
            --yellow: #fee761;
            --green: #3e8948;
            --blue: #0099db;
        }
        body {
            font-family: 'VT323', monospace;
            font-size: 22px;
            color: var(--ink);
            background-color: #1a1c2c;
            background-image: radial-gradient(#ffffff55 2px, transparent 2px);
            background-size: 48px 48px;
        }
        .font-pixel { font-family: 'Press Start 2P', monospace; line-height: 1.6; }

        .pixel-box {
            background: #fff;
            border: 4px solid var(--ink);
            box-shadow: 6px 6px 0 var(--ink);
        }
        .pixel-card { transition: transform .1s, box-shadow .1s; }
        .pixel-card:hover { transform: translate(-3px, -3px); box-shadow: 9px 9px 0 var(--ink); }

        .pixel-btn {
            display: inline-block;
            font-family: 'Press Start 2P', monospace;
            font-size: 12px;
            padding: 14px 20px;
            color: #fff;
            background: var(--red);
            border: 4px solid var(--ink);
            box-shadow: 4px 4px 0 var(--ink);
            transition: transform .05s, box-shadow .05s;
        }
        .pixel-btn:hover { background: #ff5a63; }
        .pixel-btn:active { transform: translate(4px, 4px); box-shadow: 0 0 0 var(--ink); }

        .pixel-tag {
            display: inline-block;
            font-family: 'Press Start 2P', monospace;
            font-size: 10px;
            padding: 8px 10px;
            background: var(--yellow);
            border: 3px solid var(--ink);
        }

        .ground {
            height: 40px;
            background-image:
                repeating-linear-gradient(90deg, transparent 0 28px, rgba(0,0,0,.25) 28px 32px),
                linear-gradient(var(--green) 0 10px, #8b5a2b 10px 100%);
            border-top: 4px solid var(--ink);
        }
    </style>
</head>
<body>

    <div class="max-w-6xl mx-auto mt-0 md:mt-6" style="background: var(--paper); border: 4px solid var(--ink); box-shadow: 8px 8px 0 #000;">

        <nav class="sticky top-0 z-10 border-b-4" style="background: var(--paper); border-color: var(--ink);">
            <div class="px-6 md:px-10 py-4 flex justify-between items-center">
                <a href="#home" class="font-pixel text-sm" style="color: var(--red);">KAR</a>
                <div class="font-pixel text-[10px] md:text-xs space-x-4 md:space-x-6">
                    <a href="#home" class="hover:text-red-600">Home</a>
                    <a href="#projects" class="hover:text-red-600">Projects</a>
                    <a href="#about" class="hover:text-red-600">About</a>
                    <a href="#contact" class="hover:text-red-600">Contact</a>
                </div>
            </div>
        </nav>

        <main class="px-6 md:px-10">
            <?= $content ?>
        </main>

        <div class="ground mt-10"></div>
        <footer class="text-center py-4 text-white" style="background: #8b5a2b;">
            © <?= date('Y') ?> Kartiko
        </footer>
    </div>

    <div class="h-6 md:h-10"></div>
</body>
</html>