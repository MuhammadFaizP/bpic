<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Scripts & Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">
    <div x-data="{ scrolled: false }" @scroll.window="scrolled = window.scrollY > 50">
        @include('layouts.nav')
        {{-- Hero Section --}}
        <section class="relative min-h-screen flex items-center justify-center overflow-hidden">
            <div class="absolute inset-0">
                <img src="https://upload.wikimedia.org/wikipedia/en/b/b4/Masjid_Raya_Al_Jabbar_25.jpg" alt="Background"
                    class="w-full h-full object-cover">
            </div>
            <div class="absolute inset-0 bg-black/40"></div>
            <div class="relative z-10 text-center text-white px-4 sm:px-6 lg:px-8 max-w-5xl mx-auto">
                <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold mb-6 leading-tight">
                    <span class="block text-white/90">Badan Pengelola</span>
                    <span class="block bg-gradient-to-r from-yellow-300 to-yellow-400 bg-clip-text text-transparent">
                        Islamic Centre
                    </span>
                </h1>
                <p class="text-xl md:text-2xl text-white/120 mb-8 max-w-3xl mx-auto leading-relaxed">
                    Memberdayakan masjid di Jawa Barat untuk kemajuan umat
                </p>
                <a href="#tentang"
                    class="bg-white text-green-700 px-8 py-4 rounded-full font-semibold hover:bg-yellow-400 hover:text-green-800 transition-all duration-300 transform hover:scale-105 shadow-xl">
                    Pelajari Lebih Lanjut
                </a>
            </div>
        </section>

        {{-- Tentang Section --}}
        <section id="tentang" class="py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                    <div class="space-y-6">
                        <span class="bg-green-100 text-green-800 px-4 py-2 rounded-full text-sm font-medium">Profil
                            Kami</span>
                        <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 leading-tight">
                            Badan Pengelola Islamic Centre
                        </h2>
                        <p class="text-lg text-gray-600 leading-relaxed">
                            Pengelolaan Islamic Centre Jawa Barat merupakan upaya merencanakan, mengatur, dan
                            mengembangkan
                            dakwah Islam dengan memanfaatkan fasilitas yang dimiliki atau dikelola oleh Pemerintah
                            Provinsi Jawa Barat.
                        </p>
                    </div>
                    <div class="relative">
                        <iframe class="rounded-xl w-full aspect-video"
                            src="https://www.youtube.com/embed/mm3lgg-FvdM?autoplay=1&mute=1&loop=1&playlist=mm3lgg-FvdM"
                            title="Video Masjid" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
        </section>

        {{-- Layanan Section --}}
        <section class="py-20 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <span class="bg-green-100 text-green-800 px-4 py-2 rounded-full text-sm font-medium">Layanan
                        Kami</span>
                    <h2 class="mt-4 text-4xl lg:text-5xl font-bold text-gray-900">Program & Kegiatan</h2>
                    <p class="mt-4 text-lg text-gray-600 max-w-2xl mx-auto">
                        Berbagai program yang kami selenggarakan untuk kemajuan umat Islam di provinsi
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    {{-- Card 1 --}}
                    <div
                        class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 group">
                        <div
                            class="w-16 h-16 bg-green-100 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Pembinaan Masjid</h3>
                        <p class="text-gray-600 leading-relaxed">Program pembinaan manajemen dan pengelolaan masjid
                            untuk
                            meningkatkan fungsi masjid sebagai pusat kegiatan umat.</p>
                    </div>

                    {{-- Card 2 --}}
                    <div
                        class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 group">
                        <div
                            class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Pendidikan Islam</h3>
                        <p class="text-gray-600 leading-relaxed">Menyelenggarakan program pendidikan Islam untuk
                            meningkatkan pemahaman agama dan pengamalan Al-Qur’an di kalangan umat Muslim.</p>
                    </div>

                    {{-- Card 3 --}}
                    <div
                        class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 group">
                        <div
                            class="w-16 h-16 bg-yellow-100 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Pemberdayaan Umat</h3>
                        <p class="text-gray-600 leading-relaxed">Pemberdayaan umat yang diwujudkan melalui dakwah Islam
                            sebagai upaya membangun kemandirian dan kemaslahatan masyarakat.</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- Statistik Section --}}
        <section class="py-20 bg-green-600 text-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-2 md:grid-cols-2 gap-8 text-center">
                <div>
                    <div class="text-4xl md:text-5xl font-bold">14</div>
                    <div class="text-green-100">Masjid Binaan</div>
                </div>
                <div>
                    <div class="text-4xl md:text-5xl font-bold">1,200+</div>
                    <div class="text-green-100">Jamaah Aktif</div>
                </div>
            </div>
        </section>

        {{-- CTA Section --}}
        <section class="py-20 bg-gray-900 text-center text-white">
            <h2 class="text-4xl lg:text-5xl font-bold mb-6">Mari Bergabung Bersama Kami</h2>
            <p class="text-xl text-gray-300 mb-8 leading-relaxed">
                Bersama membangun komunitas muslim yang lebih kuat dan berkualitas di seluruh provinsi
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href=""
                    class="bg-green-600 text-white px-8 py-4 rounded-full font-semibold hover:bg-green-700 transition-all duration-300">
                    Hubungi Kami Sekarang
                </a>
                <a href=""
                    class="border-2 border-gray-600 text-gray-300 px-8 py-4 rounded-full font-semibold hover:bg-gray-800">
                    Lihat Profil Lengkap
                </a>
            </div>
        </section>
    </div>
    @include('layouts.footer')

    <script>
        // Smooth scroll anchor link
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>

</html>
