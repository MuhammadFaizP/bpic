@extends('layouts.public')

@section('content')
    <div x-data="{ scrolled: false }" @scroll.window="scrolled = window.scrollY > 50">

        {{-- ===== Hero Section ===== --}}
        <section
            class="relative bg-gradient-to-br from-green-600 via-green-700 to-green-800 text-white overflow-hidden py-20">
            <div class="absolute inset-0 bg-black/20"></div>
            <div class="absolute inset-0"
                style="background-image: url('https://i.pinimg.com/736x/1f/c0/72/1fc072b3b1739247c367267e03225d53.jpg');
            background-size: cover;
            background-position: center;">
            </div>




            <div class="relative
                z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h1 class="text-4xl md:text-6xl font-bold mb-6 opacity-0 animate-fade-in">
                    Profil <span class="text-green-200">BPIC</span>
                </h1>
                <p class="text-xl md:text-2xl text-green-100 mb-8 max-w-3xl mx-auto opacity-0 animate-fade-in"
                    style="animation-delay:.2s">
                    Badan Pengelola Islamic Centre - Mengelola dan Memberdayakan Masjid untuk Umat
                </p>
                <div class="w-24 h-1 bg-green-300 mx-auto rounded-full opacity-0 animate-fade-in"
                    style="animation-delay:.4s"></div>
            </div>
        </section>

        {{-- Sejarah Section --}}
        <section class="py-20 bg-white" id="sejarah">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <span class="bg-green-100 text-green-800 px-4 py-2 rounded-full text-sm font-medium">Latar
                        Belakang</span>
                    <h2 class="mt-4 text-4xl lg:text-5xl font-bold text-gray-900">Sejarah Lembaga BPIC</h2>
                    <p class="mt-4 text-lg text-gray-600 max-w-3xl mx-auto">
                        Menelusuri perjalanan dan perkembangan BPIC dari awal berdiri hingga saat ini.
                    </p>
                </div>

                <div class="relative timeline">
                    {{-- Garis Timeline --}}
                    <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 w-1 h-full bg-green-200"></div>

                    {{-- Item Timeline --}}
                    <div class="flex flex-col md:flex-row items-center w-full my-12 md:my-0">
                        <div class="md:w-1/2 md:pr-12">
                            <div class="bg-green-50 rounded-lg p-6 shadow-md md:text-right">
                                <div class="text-lg font-bold text-green-600">Pergub No 62 Tahun 2011</div>
                                <h3 class="text-2xl font-semibold text-gray-800 mt-2">Pembentukan BPIC JAWA BARATs</h3>
                                <p class="mt-2 text-gray-600">
                                    Peraturan ini menjadi dasar pembentukan Badan Pengelola Islamic Centre Jawa Barat (BPIC)
                                    sebagai lembaga non-struktural yang dibentuk oleh Pemerintah Provinsi Jawa Barat. BPIC
                                    diberi mandat untuk mengelola Islamic Centre Jawa Barat melalui pemanfaatan aset daerah
                                    secara efektif dan efisien guna mendukung dakwah Islam yang terarah dan
                                    berkesinambungan.
                                </p>
                            </div>
                        </div>
                        <div class="hidden md:block w-10 h-10 bg-green-600 rounded-full border-4 border-white z-10"></div>
                        <div class="hidden md:block md:w-1/2 md:pl-12"></div>
                    </div>

                    {{-- Item Timeline 2 --}}
                    <div class="flex flex-col md:flex-row-reverse items-center w-full my-12 md:my-0">
                        <div class="md:w-1/2 md:pl-12">
                            <div class="bg-green-50 rounded-lg p-6 shadow-md md:text-left">
                                <div class="text-lg font-bold text-green-600">Pergub No 13 Tahun 2017</div>
                                <h3 class="text-2xl font-semibold text-gray-800 mt-2">Perubahan Kedua BPIC Jawa Barat</h3>
                                <p class="mt-2 text-gray-600">
                                    Melalui perubahan kedua atas Pergub 62/2011, kedudukan BPIC diperkuat dengan memperluas
                                    fungsi dan perannya. BPIC tidak hanya berfokus pada penyediaan sarana ibadah, tetapi
                                    juga diarahkan untuk mengembangkan masjid dan lembaga keislaman sebagai pusat
                                    pendidikan, pembinaan, dan pemberdayaan ekonomi umat. Peraturan ini menegaskan peran
                                    strategis BPIC dalam memperkuat syiar Islam dan meningkatkan kualitas kehidupan beragama
                                    di Jawa Barat.
                                </p>
                            </div>
                        </div>
                        <div class="hidden md:block w-10 h-10 bg-green-600 rounded-full border-4 border-white z-10"></div>
                        <div class="hidden md:block md:w-1/2 md:pr-12"></div>
                    </div>

                    {{-- Item Timeline 3 --}}
                    <div class="flex flex-col md:flex-row items-center w-full my-12 md:my-0">
                        <div class="md:w-1/2 md:pr-12">
                            <div class="bg-green-50 rounded-lg p-6 shadow-md md:text-right">
                                <div class="text-lg font-bold text-green-600">Pergub No 55 Tahun 2023</div>
                                <h3 class="text-2xl font-semibold text-gray-800 mt-2">Perubahan Ketiga BPIC Jawa Barat</h3>
                                <p class="mt-2 text-gray-600">
                                    Sebagai perubahan ketiga, peraturan ini menyempurnakan ketentuan sebelumnya dengan
                                    memperkuat kelembagaan dan tata kelola BPIC agar lebih adaptif terhadap perkembangan
                                    zaman. Pergub ini menekankan pengelolaan yang profesional, terstruktur, dan
                                    berkesinambungan, sehingga BPIC dapat lebih optimal dalam mengelola aset utama, yaitu
                                    Pusdai, LPTQ, dan Masjid Atta’awun, sebagai pusat dakwah, pendidikan Islam, dan
                                    pemberdayaan masyarakat.
                                </p>
                            </div>
                        </div>
                        <div class="hidden md:block w-10 h-10 bg-green-600 rounded-full border-4 border-white z-10"></div>
                        <div class="hidden md:block md:w-1/2 md:pl-12"></div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Visi & Misi Section --}}
        <section class="py-20 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <span class="bg-yellow-100 text-yellow-800 px-4 py-2 rounded-full text-sm font-medium">Tujuan Kami</span>
                <h2 class="mt-4 text-4xl lg:text-5xl font-bold text-gray-900">Tugas & Fungsi BPIC</h2>
                <p class="mt-4 text-lg text-gray-600 max-w-3xl mx-auto">
                    Tugas dan Fungsi BPIC dalam berkontribusi untuk kemajuan umat.
                </p>
            </div>

            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 mt-12">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
                    <div class="bg-white rounded-2xl p-8 shadow-lg">
                        <h3 class="text-3xl font-bold text-green-700 mb-4">Tugas</h3>
                        <p class="text-lg text-gray-600 leading-relaxed">
                            BPIC mempunyai tugas pokok mengelola dan mengembangkan
                            Jawa Barat Islamic Centre, meliputi Pusdai, Pengembangan
                            Pengamalan Qur'an dan Masjid Atta'awun berikut sarana dan
                            prasarana pendukung pengelolaan Jawa Barat Islamic Centre secara
                            efektif dan efisien.
                        </p>
                    </div>

                    <div class="bg-white rounded-2xl p-8 shadow-lg">
                        <h3 class="text-3xl font-bold text-green-700 mb-4">Fungsi</h3>
                        <ul class="space-y-4 text-gray-600">
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-green-500 mr-2 flex-shrink-0 mt-1" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span>Pengelolaan Islamic Centre Jawa Barat, meliputi Pusdai,
                                    Pengembangan Pengamalan Qur'an dan Masjid Atta'awun secara
                                    efektif dan efisien;</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-green-500 mr-2 flex-shrink-0 mt-1" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span>Pelaksanaan kerjasama pengelolaan dan pengembangan Islamic
                                    Centre Jawa Barat; dan</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-green-500 mr-2 flex-shrink-0 mt-1" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span>Penggunaan dan pengamanan aset Islamic Centre Jawa Barat.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        {{-- Struktur Organisasi Section (Placeholder) --}}
        {{-- Struktur Organisasi Section --}}
        <section class="py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <span class="bg-blue-100 text-blue-800 px-4 py-2 rounded-full text-sm font-medium">Tim Kami</span>
                <h2 class="mt-4 text-4xl lg:text-5xl font-bold text-gray-900">Struktur Organisasi</h2>
                <p class="mt-4 text-lg text-gray-600 max-w-3xl mx-auto">
                    Struktur organisasi BPIC berdasarkan Pergub Jawa Barat Nomor 55 Tahun 2023
                </p>
                
                <div class="mt-16 max-w-5xl mx-auto">
                    {{-- Bagan Organisasi --}}
                    <div class="relative">
                        {{-- Level 1: Pembina --}}
                        <div class="mb-12">
                            <div class="bg-gradient-to-r from-blue-600 to-blue-700 text-white rounded-xl p-6 shadow-lg mx-auto max-w-md">
                                <div class="flex items-center justify-center mb-3">
                                    <svg class="w-8 h-8 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"></path>
                                    </svg>
                                    <h3 class="text-xl font-bold">PEMBINA</h3>
                                </div>
                                <div class="text-sm space-y-1">
                                    <p>• Gubernur Jawa Barat</p>
                                    <p>• Wakil Gubernur Jawa Barat</p>
                                    <p>• Kepala Badan Perancangan Pembangunan Daerah</p>
                                    <p>• Inspektur Daerah Provinsi</p>
                                    <p>• Kepala Badan Pengelola Keuangan dan Aset Daerah</p>
                                </div>
                            </div>
                        </div>

                        {{-- Garis Vertikal --}}
                        <div class="flex justify-center mb-8">
                            <div class="w-1 h-12 bg-gray-300"></div>
                        </div>

                        {{-- Level 2: Kepala Badan --}}
                        <div class="mb-12">
                            <div class="bg-gradient-to-r from-green-600 to-green-700 text-white rounded-xl p-6 shadow-lg mx-auto max-w-md">
                                <div class="flex items-center justify-center mb-3">
                                    <svg class="w-8 h-8 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z"></path>
                                    </svg>
                                    <h3 class="text-xl font-bold">KEPALA BADAN</h3>
                                </div>
                                <p class="text-sm text-center">
                                    Kepala Biro Kesejahteraan Rakyat<br>
                                    Sekretariat Daerah Provinsi Jawa Barat
                                </p>
                            </div>
                        </div>

                        {{-- Garis Vertikal --}}
                        <div class="flex justify-center mb-8">
                            <div class="w-1 h-12 bg-gray-300"></div>
                        </div>

                        {{-- Level 3: Sekretaris --}}
                        <div class="mb-12">
                            <div class="bg-gradient-to-r from-yellow-500 to-yellow-600 text-white rounded-xl p-6 shadow-lg mx-auto max-w-md">
                                <div class="flex items-center justify-center mb-3">
                                    <svg class="w-8 h-8 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                                    </svg>
                                    <h3 class="text-xl font-bold">SEKRETARIS</h3>
                                </div>
                                <p class="text-sm text-center">
                                    Analisis Kebijakan Ahli Madya<br>
                                    pada Biro Kesejahteraan Rakyat<br>
                                    Sekretariat Daerah Provinsi Jawa Barat
                                </p>
                            </div>
                        </div>
                    </div>

                    {{-- Keterangan --}}
                    <div class="mt-12 bg-gray-50 rounded-lg p-6">
                        <h4 class="text-lg font-semibold text-gray-800 mb-3">Dasar Hukum:</h4>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            Struktur organisasi ini ditetapkan berdasarkan Peraturan Gubernur Jawa Barat Nomor 55 Tahun 2023 
                            tentang Perubahan Ketiga atas Peraturan Gubernur Jawa Barat Nomor 62 Tahun 2011 tentang 
                            Badan Pengelola Islamic Centre Jawa Barat.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        {{-- CTA Section - Mirip Home --}}
        {{-- <section class="py-20 bg-green-600 text-white">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-4xl lg:text-5xl font-bold mb-6">
                    Mari Bergabung Bersama Kami
                </h2>
                <p class="text-xl text-green-100 mb-8 leading-relaxed">
                    Bersama membangun komunitas muslim yang lebih kuat dan berkualitas di seluruh provinsi
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('kontak') }}"
                        class="bg-white text-green-700 px-8 py-4 rounded-full font-semibold hover:bg-yellow-400 hover:text-green-800 transition-all duration-300 transform hover:scale-105 shadow-xl">
                        Hubungi Kami Sekarang
                    </a>
                </div>
            </div>
        </section> --}}
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
