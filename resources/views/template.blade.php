<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Lapor.Pal')</title>
    <link rel="icon" href="{{ asset('img/logo/icon.png') }}" type="image/png">

    <!-- Link Google Fonts Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,600&display=swap" rel="stylesheet">

    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

    <!-- Link CSS untuk Leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <!-- Link CSS untuk Swiper -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
</head>
<body class="font-poppins bg-gray-100 min-h-screen flex flex-col">
    <!-- Header -->
    <header class="bg-white h-[90px] w-full flex items-center shadow-lg fixed top-0 left-0 z-10">
        <div class="container mx-auto flex justify-between items-center px-4 lg:px-8">
            <!-- Logo -->
            <div>
                <a href="{{ route('dashboard') }}" class="font-bold text-black flex items-center py-6 pl-4">
                    <img src="{{ asset('img/logo/Hitam2.png') }}" alt="Logo Lapor.Pal!" class="h-12" />
                </a>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow pt-[100px] container mx-auto px-0 py-8">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="w-full mt-auto">
        <!-- Gambar ilustrasi kota Malang -->
        <img src="{{ asset('img/logo/Footer.png') }}" alt="Ilustrasi Kota Malang" class="w-full h-auto" style="max-height: 250px; object-fit: cover;">

        <!-- Background kuning dengan copyright text -->
        <div class="w-full bg-yellow-400 text-center py-4">
            <p class="text-black font-semibold text-[13px]">Copyright © 2025 Pemerintah Kota Malang. - All Rights Reserved.</p>
        </div>
    </footer>

    <!-- Script untuk Leaflet -->
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</body>
</html>
