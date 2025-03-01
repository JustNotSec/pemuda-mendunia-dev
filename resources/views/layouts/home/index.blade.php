<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">
</head>
<body class="bg-white min-h-screen flex flex-col">

@include('components.core.navbar')

<main class="flex-grow">
        @yield('content')
    </main>

@include('components.core.footer')

    
</body>
</html>