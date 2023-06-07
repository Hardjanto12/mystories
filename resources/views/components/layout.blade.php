<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyStories - @yield('title', 'App')</title>
    <link rel="stylesheet" href="css/nav.css">
    {{-- fonts --}}
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Roboto&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Esteban&display=swap" rel="stylesheet">
    {{-- pagination --}}
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">


    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body class="bg-white">
    <x-navbar />
    <div class="container font-esteban mb-8 mt-8">
        @yield('content')
    </div>
    @livewireScripts
</body>

</html>
