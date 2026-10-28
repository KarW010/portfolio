<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kar | Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-300 text-gray-800">

    <div class="max-w-5xl mx-auto bg-gray-50 min-h-screen shadow-xl">

        <nav class="bg-white shadow sticky top-0 z-10">
            <div class="px-6 md:px-10 py-4 flex justify-between">
                <a href="#home" class="font-bold">Kar</a>
                <div class="space-x-6">
                    <a href="#home" class="hover:text-blue-600">Home</a>
                    <a href="#projects" class="hover:text-blue-600">Projects</a>
                    <a href="#about" class="hover:text-blue-600">About</a>
                    <a href="#contact" class="hover:text-blue-600">Contact</a>
                </div>
            </div>
        </nav>

        <main class="px-6 md:px-10">
            <?= $content ?>
        </main>

        <footer class="text-center text-sm text-gray-500 py-8">
            © <?= date('Y') ?> Kar
        </footer>

    </div>

</body>
</html>