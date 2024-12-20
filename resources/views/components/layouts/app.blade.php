<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'YamzStore' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles

<body class="bg-slate-200 dark:bg-slate-200">
    <main>
        {{ $slot }}
    </main>
    @livewireScripts
</body>

</html>
