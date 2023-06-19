<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;400;700&display=swap" rel="stylesheet">
    <link rel="icon" href="{{ asset('images/favicon.png') }}">
    <title>DV Bouw | @yield('page-title')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-primary">
    @include('components.header')
    <main>
        @yield('content')
    </main>
    @include('components.footer')
    @vite('resources/js/app.js')
</body>