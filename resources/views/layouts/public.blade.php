<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Website Masjid' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-800">

    {{-- Navbar --}}
    <nav class="fixed top-0 left-0 right-0 z-50 bg-white shadow-md">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                {{-- Logo --}}
                <a href="{{ route('home') }}" class="flex items-center space-x-2 font-bold text-xl text-green-700">
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2L6 5.5V18.5L12 22L18 18.5V5.5L12 2Z" />
                        <path d="M6 5.5L12 9M18 5.5L12 9M12 9V22" stroke="white" stroke-width="0.5" fill="none" />
                    </svg>
                    <span>BPIC</span>
                </a>

                {{-- Desktop Menu --}}
                <div class="hidden md:flex items-center justify-center space-x-8 w-full">
                    <a href="{{ route('home') }}"
                        class="font-medium text-gray-700 hover:text-green-600 transition-colors duration-200">Beranda</a>
                    <a href="{{ route('profil') }}"
                        class="font-medium text-gray-700 hover:text-green-600 transition-colors duration-200">Profil</a>
                    <a href="{{ route('masjid.index') }}"
                        class="font-medium text-gray-700 hover:text-green-600 transition-colors duration-200">Binaan</a>
                    <a href="{{ route('public.galeri') }}"
                        class="font-medium text-gray-700 hover:text-green-600 transition-colors duration-200">Galeri</a>
                    <!-- Dropdown -->
                    <div x-data="{ open: false }" class="relative inline-block text-left">
                        <!-- Tombol -->
                        <button @click="open = !open"
                            class="font-medium text-gray-700 hover:text-green-600 transition-colors duration-200">
                            Laporan
                        </button>

                        <!-- Dropdown -->
                        <div x-show="open" @click.away="open = false"
                            class="absolute bg-white shadow-lg rounded-md mt-2 w-56 z-50">
                            <ul class="py-2 text-sm text-gray-700">
                                <li><a href="{{ url('/admin/login') }}" class="block px-4 py-2 hover:bg-green-100">Al-Jabbar Pangandaran</a></li>
                                <li><a href="{{ url('/admin/login') }}" class="block px-4 py-2 hover:bg-green-100">Al-Jabbar Cikalong</a></li>
                                <li><a href="{{ url('/admin/login') }}" class="block px-4 py-2 hover:bg-green-100">Al-Jabbar Plumbon</a> </li>
                                <li><a href="{{ url('/admin/login') }}" class="block px-4 py-2 hover:bg-green-100">Al-Jabbar Cimangkok</a> </li>
                                <li><a href="{{ url('/admin/login') }}" class="block px-4 py-2 hover:bg-green-100">Al-Jabbar Cipeyeum</a></li>
                                <li><a href="{{ url('/admin/login') }}" class="block px-4 py-2 hover:bg-green-100">Al-Jabbar Cibinong</a> </li>
                                <li><a href="{{ url('/admin/login') }}" class="block px-4 py-2 hover:bg-green-100">Al-Jabbar</a></li>
                                <li><a href="{{ url('/admin/login') }}" class="block px-4 py-2 hover:bg-green-100">Kerta Jati</a></li>
                                <li><a href="{{ url('/admin/login') }}" class="block px-4 py-2 hover:bg-green-100">Masjid Raya Bandung</a> </li>
                                <li><a href="{{ url('/admin/login') }}" class="block px-4 py-2 hover:bg-green-100">Masjid Raya Raudhatul Irfan</a></li>
                                <li><a href="{{ url('/admin/login') }}" class="block px-4 py-2 hover:bg-green-100">Pusdai</a></li>
                                <li><a href="{{ url('/admin/login') }}" class="block px-4 py-2 hover:bg-green-100">At-Tawuun</a></li>
                                <li><a href="{{ url('/admin/login') }}" class="block px-4 py-2 hover:bg-green-100">Nurul Qur'an</a></li>
                            </ul>
                        </div>
                    </div>

                    <a href="{{ route('kontak') }}"
                        class="font-medium text-gray-700 hover:text-green-600 transition-colors duration-200">Kontak</a>
                </div>


                {{-- Mobile Menu Button --}}
                <button @click="open = !open"
                    class="md:hidden p-2 rounded-lg text-gray-600 hover:bg-gray-100 transition-colors duration-200"
                    x-data="{ open: false }">
                    <svg x-show="!open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                    <svg x-show="open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

        {{-- Mobile Menu --}}
        <div x-show="open" x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-2" class="md:hidden bg-white shadow-lg border-t"
            x-data="{ open: false }">
            <div class="px-4 py-2 space-y-1">
                <a href="{{ route('profil') }}"
                    class="block py-3 text-gray-700 hover:text-green-600 font-medium transition-colors duration-200">Profil</a>
                <a href="{{ route('masjid.index') }}"
                    class="block py-3 text-gray-700 hover:text-green-600 font-medium transition-colors duration-200">Mitra</a>
                <a href="{{ route('public.galeri') }}"
                    class="block py-3 text-gray-700 hover:text-green-600 font-medium transition-colors duration-200">Galeri</a>
                <a href="{{ route('kontak') }}"
                    class="block py-3 text-gray-700 hover:text-green-600 font-medium transition-colors duration-200">Kontak</a>
            </div>
        </div>
    </nav>


    {{-- Content --}}
    <main class="pt-16">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="bg-gray-900 text-gray-300">
        <div class="max-w-6xl mx-auto px-4 py-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                {{-- Brand --}}
                <div>
                    <div class="flex items-center space-x-2 mb-4">
                        <svg class="w-8 h-8 text-green-500" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2L6 5.5V18.5L12 22L18 18.5V5.5L12 2Z" />
                        </svg>
                        <h3 class="font-bold text-xl text-white">BPIC </h3>
                    </div>
                    <p class="text-gray-400 leading-relaxed mb-4">
                        Badan Pengelola Islamic Centre
                    </p>
                    <div class="flex space-x-3">
                        <a href="#"
                            class="w-10 h-10 bg-gray-700 hover:bg-green-600 rounded-full flex items-center justify-center transition-colors duration-200">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                            </svg>
                        </a>
                        <a href="#"
                            class="w-10 h-10 bg-gray-700 hover:bg-green-600 rounded-full flex items-center justify-center transition-colors duration-200">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.347-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24.009 12.017 24.009c6.624 0 11.99-5.367 11.99-11.988C24.007 5.367 18.641.001.012.001z" />
                            </svg>
                        </a>
                        <a href="#"
                            class="w-10 h-10 bg-gray-700 hover:bg-green-600 rounded-full flex items-center justify-center transition-colors duration-200">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                            </svg>
                        </a>
                    </div>
                </div>

                {{-- Navigation --}}
                <div>
                    <h4 class="font-semibold text-white mb-4">Navigasi</h4>
                    <ul class="space-y-2">
                        <li><a href="{{ route('profil') }}"
                                class="text-gray-400 hover:text-green-400 transition-colors duration-200">Profil</a>
                        </li>
                        <li><a href="{{ route('masjid.index') }}"
                                class="text-gray-400 hover:text-green-400 transition-colors duration-200">Mitra</a>
                        </li>
                        <li><a href="{{ route('public.galeri') }}"
                                class="text-gray-400 hover:text-green-400 transition-colors duration-200">Galeri</a>
                        </li>
                        <li><a href="{{ route('kontak') }}"
                                class="text-gray-400 hover:text-green-400 transition-colors duration-200">Kontak</a>
                        </li>
                    </ul>
                </div>

                {{-- Contact --}}
                <div>
                    <h4 class="font-semibold text-white mb-4">Kontak</h4>
                    <div class="space-y-2">
                        <div class="flex items-center space-x-2 text-sm">
                            <svg class="w-4 h-4 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-400">Jl. Contoh No. 123, Bandung</span>
                        </div>
                        <div class="flex items-center space-x-2 text-sm">
                            <svg class="w-4 h-4 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                            </svg>
                            <span class="text-gray-400">+62 123 4567 890</span>
                        </div>
                        <div class="flex items-center space-x-2 text-sm">
                            <svg class="w-4 h-4 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                            </svg>
                            <span class="text-gray-400">info@bpicmasjid.com</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Bottom Footer --}}
            <div class="border-t border-gray-700 mt-8 pt-6 text-center">
                <p class="text-sm text-gray-400">
                    &copy; {{ date('Y') }} BPIC Jabar. All rights reserved.
                </p>
            </div>
        </div>
    </footer>

    <!-- Tambahkan Alpine.js (cukup sekali di bawah <body>) -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</body>

</html>
