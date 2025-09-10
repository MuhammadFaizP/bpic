@extends('layouts.public')

@section('content')
    <div x-data="{ scrolled: false }" @scroll.window="scrolled = window.scrollY > 50">

        {{-- ===== Hero Section ===== --}}
        <section
            class="relative bg-gradient-to-br from-green-600 via-green-700 to-green-800 text-white overflow-hidden py-20">
            <div class="absolute inset-0 bg-black/20"></div>
            <div class="absolute inset-0"
                style="background-image: radial-gradient(circle at 25% 25%, rgba(255,255,255,0.1) 0%, transparent 50%)">
            </div>

            <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h1 class="text-4xl md:text-6xl font-bold mb-6 opacity-0 animate-fade-in">
                    Hubungi <span class="text-green-200">BPIC</span>
                </h1>
                <p class="text-xl md:text-2xl text-green-100 mb-8 max-w-3xl mx-auto opacity-0 animate-fade-in"
                    style="animation-delay:.2s">
                    Kami siap mendengar aspirasi, pertanyaan, dan saran dari Anda.
                </p>
                <div class="w-24 h-1 bg-green-300 mx-auto rounded-full opacity-0 animate-fade-in"
                    style="animation-delay:.4s"></div>
            </div>
        </section>

        {{-- Info Kontak Section --}}
        <section class="py-20 bg-white">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-10 text-center">
                    <div class="bg-green-50 rounded-2xl p-8 shadow-md">
                        <svg class="w-12 h-12 text-green-600 mx-auto mb-4" fill="currentColor" viewBox="0 0 20 20"
                            stroke="currentColor">
                            <path fill-rule="evenodd"
                                d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                clip-rule="evenodd" />
                        </svg>
                        <h3 class="text-xl font-semibold mb-2 text-gray-800">Alamat</h3>
                        <p class="text-gray-600">Jl. Contoh Raya No.123, Bandung, Jawa Barat</p>
                    </div>

                    <div class="bg-green-50 rounded-2xl p-8 shadow-md">
                        <svg class="w-12 h-12 text-green-600 mx-auto mb-4" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                        </svg>
                        <h3 class="text-xl font-semibold mb-2 text-gray-800">Telepon</h3>
                        <p class="text-gray-600">+62 812 3456 7890</p>
                    </div>

                    <div class="bg-green-50 rounded-2xl p-8 shadow-md">
                        <svg class="w-12 h-12 text-green-600 mx-auto mb-4" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                        </svg>
                        <h3 class="text-xl font-semibold mb-2 text-gray-800">Email</h3>
                        <p class="text-gray-600">info@bpic.or.id</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- Form Kontak --}}
        {{-- Form Kontak --}}
        <section class="py-20 bg-gray-50">
            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <span class="bg-yellow-100 text-yellow-800 px-4 py-2 rounded-full text-sm font-medium">Kirim
                        Pesan</span>
                    <h2 class="mt-4 text-4xl lg:text-5xl font-bold text-gray-900">Formulir Kontak</h2>
                    <p class="mt-4 text-lg text-gray-600 max-w-2xl mx-auto">
                        Silakan isi formulir di bawah ini untuk menghubungi kami secara langsung.
                    </p>
                </div>

                <form action="#" method="POST" class="bg-white shadow-lg rounded-2xl p-10 grid grid-cols-1 gap-8">
                    <div>
                        <label class="block text-gray-700 font-medium mb-3">Nama Lengkap</label>
                        <input type="text" name="name"
                            class="w-full px-4 py-3 border-gray-300 rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500"
                            required>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium mb-3">Email</label>
                        <input type="email" name="email"
                            class="w-full px-4 py-3 border-gray-300 rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500"
                            required>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium mb-3">Pesan</label>
                        <textarea name="message" rows="6"
                            class="w-full px-4 py-3 border-gray-300 rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500" required></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit"
                            class="bg-green-600 text-white px-10 py-4 rounded-full font-semibold hover:bg-yellow-400 hover:text-green-800 transition-all duration-300 transform hover:scale-105 shadow-lg">
                            Kirim Pesan
                        </button>
                    </div>
                </form>

            </div>
        </section>

        {{-- Peta Lokasi --}}
        <section class="py-20 bg-white">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6">Lokasi Kami</h2>
                <div class="rounded-2xl overflow-hidden shadow-lg h-96">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.7423022433277!2d107.62114667499613!3d-6.921908367700565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e64fa3a7c76f%3A0xb65cb3b1e7bbfdf6!2sPusdai%20Bandung!5e0!3m2!1sen!2sid!4v1693812345678!5m2!1sen!2sid"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </section>
    </div>

    <style>
        [x-cloak] {
            display: none !important;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in {
            animation: fadeIn .8s ease-out forwards;
        }
    </style>
@endsection
