<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'My Stories' }}</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body>
    <x-navbar />
    <div class="container flex">
        <x-sidebar />
        <x-content konten="Title" />
    </div>
    @livewireScripts
</body>

</html>
