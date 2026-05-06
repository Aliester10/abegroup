<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'ABE Group')</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css'>
    {{-- AOS Animation Library --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    @stack('styles')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        html { scroll-behavior: smooth; }
        [data-aos] { pointer-events: none; }
        [data-aos].aos-animate { pointer-events: auto; }
    </style>
</head>
<body class="bg-abe-navy text-white antialiased">
    @include('layouts.navbar')
    @yield('content')
    
    {{-- AOS Scripts --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100,
            easing: 'ease-out-cubic'
        });
    </script>
    @stack('scripts')
</body>
</html>
