<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Promo Event Kampus')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-900 flex flex-col min-h-screen">
    <x-navbar />

    <main class="container mx-auto mt-6 px-4 flex-grow mb-4">
        @yield('content')
    </main>
    <x-footer />
 
</body>

</html>
