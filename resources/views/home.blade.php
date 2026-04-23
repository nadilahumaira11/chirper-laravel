@vite(['resources/css/app.css', 'resources/js/app.js'])

<!DOCTYPE html>
<html lang="en" data-theme="lofi">
<head>
    <title>Chirper</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="min-h-screen bg-base-200 flex flex-col">

    <nav class="navbar bg-base-100 shadow px-6">
        <div class="flex-1">
            <a class="btn btn-ghost text-xl font-bold normal-case">Chirper</a>
        </div>
        <div class="flex gap-2">
            <a class="btn btn-ghost">Home</a>
            <a class="btn btn-ghost">Chirps</a>
        </div>
    </nav>

    <main class="flex-1 flex items-center justify-center">
        <div class="text-center max-w-xl px-4">
            <h1 class="text-4xl md:text-6xl font-bold mb-4">
                Welcome to Chirper!
            </h1>
            <p class="text-lg mb-8">
                Selamat bergabung, semoga harimu menyenangkan.
            </p>
            <p class="font-bold">
                Dibuat oleh Nadila Humaira Br Sembiring (NIM: 230170134)
            </p>
        </div>
    </main>

</body>
</html>