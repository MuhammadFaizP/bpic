@extends('layouts.public')

@section('content')
    <!-- Hero Section -->
    <div class="relative h-96 flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0">
            <img src="{{ $mitras->gambar }}" alt="{{ $mitras->nama }}" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-black/50 to-black/70"></div>
        </div>

        <div class="relative z-10 text-center text-white max-w-4xl mx-auto px-4">
            <div class="inline-block px-4 py-2 bg-green-600/90 rounded-full text-sm font-medium mb-4 backdrop-blur-sm">
                Profil Mitra Masjid
            </div>
            <h1 class="text-4xl md:text-5xl font-bold mb-4 drop-shadow-lg">
                {{ $mitras->nama }}
            </h1>
            <div class="w-24 h-1 bg-gradient-to-r from-yellow-400 to-green-400 mx-auto rounded-full"></div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="bg-gray-50 min-h-screen py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Navigation Tabs -->
            <div class="mb-8">
                <div class="border-b border-gray-200 bg-white rounded-lg shadow-sm">
                    <nav class="flex space-x-8 px-6 justify-center" aria-label="Tabs">
                        <button
                            class="tab-button active py-4 px-1 border-b-2 border-green-500 font-medium text-sm text-green-600"
                            data-target="sejarah">
                            <div class="flex items-center space-x-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                                    </path>
                                </svg>
                                <span>Latar Belakang</span>
                            </div>
                        </button>
                        <button
                            class="tab-button py-4 px-1 border-b-2 border-transparent font-medium text-sm text-gray-500 hover:text-gray-700 hover:border-gray-300"
                            data-target="struktur">
                            <div class="flex items-center space-x-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                                    </path>
                                </svg>
                                <span>Struktur Organisasi</span>
                            </div>
                        </button>
                        <button
                            class="tab-button py-4 px-1 border-b-2 border-transparent font-medium text-sm text-gray-500 hover:text-gray-700 hover:border-gray-300"
                            data-target="galeri">
                            <div class="flex items-center space-x-2">
                                <svg class="w-9 h-9" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <rect x="5" y="4" width="16" height="12" rx="2" ry="2"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        transform="rotate(6 13 10)" />
                                    <path d="M7 15 L10 11 L13 13 L16 10 L19 15" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="1.5" />
                                    <circle cx="15" cy="8" r="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="1.5" />
                                </svg>
                                <span>Galeri</span>
                            </div>
                        </button>
                    </nav>
                </div>
            </div>

            <!-- Content Sections -->
            <div class="space-y-8">

                <!-- Sejarah Section -->
                <div id="sejarah" class="tab-content active">
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
                        <div class="px-8 py-6 border-b border-gray-100 bg-gradient-to-r from-green-50 to-blue-50">
                            <div class="flex items-center space-x-3">
                                <div class="p-2 bg-green-100 rounded-lg">
                                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                                        </path>
                                    </svg>
                                </div>
                                <h2 class="text-2xl font-bold text-gray-900">Latar Belakang {{ $mitras->nama }}</h2>
                            </div>
                        </div>
                        <div class="px-8 py-8">
                            <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
                                <!-- Format teks sejarah dengan paragraf yang terstruktur -->
                                <div class="space-y-6 text-justify">
                                    {!! nl2br(e($mitras->sejarah)) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Struktur Organisasi Section -->
                <div id="struktur" class="tab-content hidden">
                    <div class="grid lg:grid-cols-3 gap-8">

                        <!-- Bagan Organisasi -->
                        <div class="lg:col-span-2">
                            <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
                                <div class="px-8 py-6 border-b border-gray-100 bg-gradient-to-r from-blue-50 to-indigo-50">
                                    <div class="flex items-center space-x-3">
                                        <div class="p-2 bg-blue-100 rounded-lg">
                                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                                                </path>
                                            </svg>
                                        </div>
                                        <h2 class="text-2xl font-bold text-gray-900">Bagan Struktur Organisasi</h2>
                                    </div>
                                </div>
                                <div class="p-8">
                                    <!-- Organizational Chart -->
                                    <div class="space-y-6">
                                        <!-- Level 1: Ketua -->
                                        <div class="flex justify-center">
                                            <div class="org-card bg-gradient-to-r from-green-500 to-green-600 text-white">
                                                <div class="font-bold">Ketua </div>
                                                <div class="text-sm opacity-90">Pimpinan Tertinggi</div>
                                            </div>
                                        </div>

                                        <!-- Connector Line -->
                                        <div class="flex justify-center">
                                            <div class="w-px h-8 bg-gray-300"></div>
                                        </div>

                                        <!-- Level 2: Wakil Ketua -->
                                        <div class="flex justify-center">
                                            <div class="org-card bg-gradient-to-r from-blue-500 to-blue-600 text-white">
                                                <div class="font-bold">Wakil Ketua</div>
                                                <div class="text-sm opacity-90">Pendamping Pimpinan</div>
                                            </div>
                                        </div>

                                        <!-- Connector Line -->
                                        <div class="flex justify-center">
                                            <div class="w-px h-8 bg-gray-300"></div>
                                        </div>

                                        <!-- Level 3: Bendahara & Sekretaris -->
                                        <div class="flex justify-center space-x-12">
                                            <div
                                                class="org-card bg-gradient-to-r from-yellow-500 to-orange-500 text-white">
                                                <div class="font-bold">Bendahara</div>
                                                <div class="text-sm opacity-90">Keuangan</div>
                                            </div>
                                            <div
                                                class="org-card bg-gradient-to-r from-purple-500 to-purple-600 text-white">
                                                <div class="font-bold">Sekretaris</div>
                                                <div class="text-sm opacity-90">Administrasi</div>
                                            </div>
                                        </div>

                                        <!-- Connector Lines -->
                                        <div class="flex justify-center">
                                            <div class="w-px h-8 bg-gray-300"></div>
                                        </div>

                                        <!-- Level 4: Bidang Divisi -->
                                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                            <!-- Bidang Idaroh -->
                                            <div class="org-card bg-gradient-to-r from-teal-500 to-cyan-500 text-white">
                                                <div class="font-bold">Bidang Idaroh</div>
                                                <div class="text-sm opacity-90">Pengelolaan Masjid</div>
                                            </div>

                                            <!-- Bidang Imaroh -->
                                            <div class="org-card bg-gradient-to-r from-pink-500 to-rose-500 text-white">
                                                <div class="font-bold">Bidang Imaroh</div>
                                                <div class="text-sm opacity-90">Pengembangan Masjid</div>
                                            </div>

                                            <!-- Bidang Ri’ayah -->
                                            <div class="org-card bg-gradient-to-r from-indigo-500 to-blue-500 text-white">
                                                <div class="font-bold">Bidang Ri’ayah</div>
                                                <div class="text-sm opacity-90">Pemeliharaan Masjid</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Deskripsi Struktur -->
                        <div class="lg:col-span-1">
                            <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden h-fit">
                                <div class="px-6 py-4 border-b border-gray-100 bg-gray-50">
                                    <h3 class="text-lg font-bold text-gray-900">Deskripsi Organisasi</h3>
                                </div>
                                <div class="p-6">
                                    <div class="prose prose-sm max-w-none text-gray-600">
                                        {!! nl2br(e($mitras->strukturOrganisasi)) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            <!-- Galeri Section -->
<div id="galeri" class="tab-content hidden">
    <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
        <div class="px-8 py-6 border-b border-gray-100 bg-gradient-to-r from-purple-50 to-pink-50">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-3">
                    <div class="p-2 bg-purple-100 rounded-lg">
                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-900">Galeri {{ $mitras->nama }}</h2>
                </div>
            </div>
        </div>

        <div class="p-8">

            <!-- Grid Galeri -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4" id="gallery-grid">
                
                <!-- Foto Kegiatan -->
                <div class="gallery-item relative group cursor-pointer overflow-hidden rounded-lg shadow-md hover:shadow-xl transition-all duration-300" data-category="kegiatan">
                    <div class="aspect-square bg-gradient-to-br from-green-400 to-blue-500 flex items-center justify-center">
                        <div class="text-white text-center">
                            <svg class="w-12 h-12 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                            <p class="text-sm font-medium">Kegiatan Gotong Royong</p>
                        </div>
                    </div>
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-40 transition-all duration-300 flex items-center justify-center">
                        <div class="text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Foto Bangunan -->
                <div class="gallery-item relative group cursor-pointer overflow-hidden rounded-lg shadow-md hover:shadow-xl transition-all duration-300" data-category="bangunan">
                    <div class="aspect-square bg-gradient-to-br from-amber-400 to-orange-500 flex items-center justify-center">
                        <div class="text-white text-center">
                            <svg class="w-12 h-12 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                            <p class="text-sm font-medium">Tampak Depan Masjid</p>
                        </div>
                    </div>
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-40 transition-all duration-300 flex items-center justify-center">
                        <div class="text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Foto Perayaan -->
                <div class="gallery-item relative group cursor-pointer overflow-hidden rounded-lg shadow-md hover:shadow-xl transition-all duration-300" data-category="perayaan">
                    <div class="aspect-square bg-gradient-to-br from-pink-400 to-rose-500 flex items-center justify-center">
                        <div class="text-white text-center">
                            <svg class="w-12 h-12 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <p class="text-sm font-medium">Perayaan Idul Fitri</p>
                        </div>
                    </div>
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-40 transition-all duration-300 flex items-center justify-center">
                        <div class="text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Foto Pengajian -->
                <div class="gallery-item relative group cursor-pointer overflow-hidden rounded-lg shadow-md hover:shadow-xl transition-all duration-300" data-category="pengajian">
                    <div class="aspect-square bg-gradient-to-br from-teal-400 to-cyan-500 flex items-center justify-center">
                        <div class="text-white text-center">
                            <svg class="w-12 h-12 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                            <p class="text-sm font-medium">Pengajian Rutin</p>
                        </div>
                    </div>
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-40 transition-all duration-300 flex items-center justify-center">
                        <div class="text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Tambahan foto dengan berbagai kategori -->
                <div class="gallery-item relative group cursor-pointer overflow-hidden rounded-lg shadow-md hover:shadow-xl transition-all duration-300" data-category="bangunan">
                    <div class="aspect-square bg-gradient-to-br from-indigo-400 to-purple-500 flex items-center justify-center">
                        <div class="text-white text-center">
                            <svg class="w-12 h-12 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10.1V21M20 10.1V21"></path>
                            </svg>
                            <p class="text-sm font-medium">Interior Masjid</p>
                        </div>
                    </div>
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-40 transition-all duration-300 flex items-center justify-center">
                        <div class="text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="gallery-item relative group cursor-pointer overflow-hidden rounded-lg shadow-md hover:shadow-xl transition-all duration-300" data-category="kegiatan">
                    <div class="aspect-square bg-gradient-to-br from-emerald-400 to-teal-500 flex items-center justify-center">
                        <div class="text-white text-center">
                            <svg class="w-12 h-12 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                            <p class="text-sm font-medium">Kegiatan Sosial</p>
                        </div>
                    </div>
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-40 transition-all duration-300 flex items-center justify-center">
                        <div class="text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="gallery-item relative group cursor-pointer overflow-hidden rounded-lg shadow-md hover:shadow-xl transition-all duration-300" data-category="perayaan">
                    <div class="aspect-square bg-gradient-to-br from-red-400 to-pink-500 flex items-center justify-center">
                        <div class="text-white text-center">
                            <svg class="w-12 h-12 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                            </svg>
                            <p class="text-sm font-medium">Perayaan Maulid</p>
                        </div>
                    </div>
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-40 transition-all duration-300 flex items-center justify-center">
                        <div class="text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="gallery-item relative group cursor-pointer overflow-hidden rounded-lg shadow-md hover:shadow-xl transition-all duration-300" data-category="pengajian">
                    <div class="aspect-square bg-gradient-to-br from-violet-400 to-indigo-500 flex items-center justify-center">
                        <div class="text-white text-center">
                            <svg class="w-12 h-12 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            <p class="text-sm font-medium">Kajian Al-Quran</p>
                        </div>
                    </div>
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-40 transition-all duration-300 flex items-center justify-center">
                        <div class="text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Load More Button -->
            <div class="text-center mt-8">
                <button class="inline-flex items-center space-x-2 bg-purple-600 hover:bg-purple-700 text-white px-6 py-3 rounded-lg font-medium transition-all duration-300 transform hover:scale-105">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                    </svg>
                    <span>Muat Lebih Banyak</span>
                </button>
            </div>
        </div>
    </div>
</div>    

            </div>

            <!-- Back Button -->
            <div class="mt-12 text-center">
                <a href="{{ route('binaan.index') }}"
                    class="inline-flex items-center space-x-3 bg-green-600 hover:bg-green-700 text-white px-8 py-4 rounded-full font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    <span>Kembali ke Daftar Masjid</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Custom CSS & JavaScript -->
    <style>
        .org-card {
            @apply px-4 py-3 rounded-lg text-center shadow-md hover:shadow-lg transition-all duration-300 transform hover:scale-105;
            min-width: 120px;
        }

        .tab-button.active {
            @apply border-green-500 text-green-600;
        }

        .tab-content {
            @apply transition-all duration-300;
        }

        .tab-content.hidden {
            @apply opacity-0 pointer-events-none;
        }

        .tab-content.active {
            @apply opacity-100;
        }

        .prose {
            font-size: 16px;
            line-height: 1.8;
        }

        /* Reading progress styles */
        #reading-progress {
            position: fixed;
            top: 0;
            left: 0;
            width: 0%;
            height: 3px;
            background: linear-gradient(to right, #10b981, #3b82f6);
            z-index: 9999;
            transition: width 0.3s ease;
        }
    </style>

    

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Tab functionality
            const tabButtons = document.querySelectorAll('.tab-button');
            const tabContents = document.querySelectorAll('.tab-content');

            tabButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const target = button.getAttribute('data-target');

                    // Remove active class from all buttons and contents
                    tabButtons.forEach(btn => {
                        btn.classList.remove('active');
                        btn.classList.add('border-transparent', 'text-gray-500');
                        btn.classList.remove('border-green-500', 'text-green-600');
                    });

                    tabContents.forEach(content => {
                        content.classList.add('hidden');
                        content.classList.remove('active');
                    });

                    // Add active class to clicked button and corresponding content
                    button.classList.add('active');
                    button.classList.remove('border-transparent', 'text-gray-500');
                    button.classList.add('border-green-500', 'text-green-600');

                    document.getElementById(target).classList.remove('hidden');
                    document.getElementById(target).classList.add('active');
                });
            });

            // Calculate reading time
            const sejarahText = document.querySelector('#sejarah .prose').textContent;
            const wordsPerMinute = 200;
            const words = sejarahText.split(' ').length;
            const readingTime = Math.ceil(words / wordsPerMinute);
            document.getElementById('reading-time').textContent = readingTime;

            // Reading progress bar
            const progressBar = document.createElement('div');
            progressBar.id = 'reading-progress';
            document.body.appendChild(progressBar);

            window.addEventListener('scroll', () => {
                const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
                const height = document.documentElement.scrollHeight - document.documentElement
                    .clientHeight;
                const scrolled = (winScroll / height) * 100;
                progressBar.style.width = scrolled + '%';
            });
        });
    </script>
@endsection
