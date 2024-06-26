<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Activity Morning</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/htmx.org@1.9.12"></script>
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="w-[90%] max-w-[1200px] mx-auto mt-6">
        <header class="bg-blue-800 text-white flex items-center justify-between py-4 px-6 rounded-lg shadow-lg">
            <div class="text-2xl font-bold" id="brand">
                June 21, 2024
            </div>
            <nav id="main-nav" class="flex space-x-4">
                <a href="/" class="p-2 hover:bg-blue-700 rounded-lg transition">Home</a>
                <a href="/about" class="p-2 hover:bg-blue-700 rounded-lg transition">About</a>
                <a href="/product" class="p-2 hover:bg-blue-700 rounded-lg transition">Products</a>
                <a href="/contact" class="p-2 hover:bg-blue-700 rounded-lg transition">Contact Us</a>
            </nav>
        </header>

        <main id="content" class="bg-white min-h-[35rem] mt-8 p-6 rounded-lg shadow-lg">
            @yield('content')
        </main>

        <footer class="bg-blue-800 text-white py-4 mt-8 rounded-lg shadow-lg text-center">
            &copy; June 21, 2024, All rights reserved.
        </footer>
    </div>
    @yield('scripts')
</body>
</html>
