<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Bouwbedrijf Van Rijn uw betrouwbare en vakbekwame partner in de bouw. Wij bieden een compleet pakket van diensten aan.">
    <meta name="keywords" content="Bouwbedrijf, Aannemer, Bouwkundig advies, Renovatie, Verbouwing, Nieuwbouw, Woningbouw, Utiliteitsbouw, Timmerman, Metselaar, Schilder, Elektricien, Loodgieter, Dakdekker, Stukadoor, Architectuur, Bouwprojecten, Bouwsector, Bouwtechniek, Vakmanschap, DVBouw, DV Bouw, DVOnderhoud, DV Onderhoud">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
