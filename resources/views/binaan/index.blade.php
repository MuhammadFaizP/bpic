@extends('layouts.public')

@section('content')
    <!-- Hero Section with Background -->
    <div class="relative bg-gradient-to-br from-green-900 via-green-800 to-blue-900 py-20 overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0 bg-cover bg-center"
                style="background-image: url('https://cdn.pixabay.com/photo/2015/01/28/23/10/mosque-615415_1280.jpg');">
            </div>
        </div>

        <!-- Floating Decorations -->
        <div class="absolute top-20 left-10 w-32 h-32 bg-yellow-200/10 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-20 right-16 w-24 h-24 bg-green-100/10 rounded-full blur-2xl animate-pulse delay-1000">
        </div>
        <div class="absolute top-40 right-20 w-16 h-16 bg-blue-400/20 rounded-full blur-xl animate-pulse delay-500"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
            <div
                class="inline-flex items-center bg-white/10 backdrop-blur-sm border border-white/20 px-6 py-3 rounded-full text-sm font-medium mb-6">
                <span class="text-white">Masjid Binaan Islamic Centre</span>
            </div>

            <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold mb-6 leading-tight">
                <span class="bg-gradient-to-r from-yellow-300 via-white to-green-300 bg-clip-text text-transparent">
                    Masjid-Masjid
                </span>
                <br>
                <span class="text-white">Kami</span>
            </h1>

            <p class="text-xl md:text-2xl text-white/90 max-w-3xl mx-auto leading-relaxed mb-8">
                Jelajahi keindahan dan kesakralan masjid-masjid yang berada di bawah naungan
                <span class="text-yellow-300 font-semibold">Islamic Centre</span>
            </p>

            <!-- Enhanced Statistics -->
            <div class="flex justify-center items-center space-x-4 text-center flex-wrap gap-4">
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl px-6 py-4 border border-white/20">
                    <div class="text-3xl font-bold text-yellow-300" id="total-count">{{ $totalMasjid }}</div>
                    <div class="text-sm text-white/80">Total Masjid</div>
                </div>
                
                @if(isset($masjidByKategori))
                    @foreach($masjidByKategori as $kategori => $masjids)
                        <div class="bg-white/10 backdrop-blur-sm rounded-2xl px-4 py-3 border border-white/20">
                            <div class="text-2xl font-bold text-white" id="count-{{ str_replace(' ', '-', strtolower($kategori)) }}">{{ count($masjids) }}</div>
                            <div class="text-xs text-white/80">{{ $kategori }}</div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="py-16 bg-gradient-to-b from-gray-50 to-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Filter/Search Bar -->
            <div class="mb-12 max-w-2xl mx-auto">
                <div class="flex flex-col sm:flex-row gap-4">
                    <!-- Search Input -->
                    <div class="relative flex-1">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                        <input type="text" id="search-input"
                            class="block w-full pl-10 pr-3 py-4 border border-gray-300 rounded-2xl leading-5 bg-white placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:ring-2 focus:ring-green-500 focus:border-transparent shadow-sm"
                            placeholder="Cari masjid...">
                    </div>
                    
                    <!-- Category Filter -->
                    <div class="relative">
                        <select id="category-filter" 
                            class="block w-full sm:w-48 px-4 py-4 border border-gray-300 rounded-2xl bg-white text-gray-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent shadow-sm">
                            <option value="">Semua Kategori</option>
                            <option value="bpic">BPIC</option>
                            <option value="al-jabbar">Al-Jabbar</option>
                            <option value="al-jabbar-gedebage">Al-Jabbar Gedebage</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Category Sections -->
            @if(isset($masjidByKategori))
                @foreach($masjidByKategori as $kategori => $masjids)
                    <div class="category-section mb-16" data-category="{{ str_replace(' ', '-', strtolower($kategori)) }}">
                        <!-- Category Header -->
                        <div class="flex items-center mb-8">
                            <div class="flex-1">
                                <h2 class="text-4xl font-bold text-gray-900 mb-2">{{ $kategori }}</h2>
                                <div class="h-1 w-20 bg-gradient-to-r from-green-600 to-blue-600 rounded-full"></div>
                            </div>
                            <div class="bg-green-100 text-green-800 px-4 py-2 rounded-full font-semibold">
                                {{ count($masjids) }} Masjid
                            </div>
                        </div>

                        <!-- Masjid Grid for this category -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                            @foreach ($masjids as $masjid)
                                <div class="masjid-card group" 
                                     data-name="{{ strtolower($masjid->nama) }}" 
                                     data-category="{{ str_replace(' ', '-', strtolower($kategori)) }}">
                                    <a href="{{ route('binaan.show', ['id' => $masjid->id]) }}"
                                        class="block bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 overflow-hidden border border-gray-100 hover:border-green-200">

                                        <!-- Image Container -->
                                        <div class="relative overflow-hidden">
                                            <div class="aspect-w-16 aspect-h-10 bg-gray-200">
                                                <img src="{{ $masjid->gambar }}" alt="{{ $masjid->nama }}"
                                                    class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-700">
                                            </div>

                                            <!-- Overlay Gradient -->
                                            <div
                                                class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                                            </div>

                                            <!-- Category Badge -->
                                            <div class="absolute top-4 left-4 
                                                @if($kategori == 'BPIC') bg-green-600 
                                                @elseif($kategori == 'Al-Jabbar') bg-blue-600 
                                                @else bg-purple-600 @endif
                                                text-white px-3 py-1 rounded-full text-xs font-medium transform -translate-y-2 group-hover:translate-y-0 opacity-90 group-hover:opacity-100 transition-all duration-500 delay-100">
                                                {{ $kategori }}
                                            </div>

                                            <!-- Quick View Button -->
                                            <div
                                                class="absolute top-4 right-4 opacity-0 group-hover:opacity-100 transform translate-x-2 group-hover:translate-x-0 transition-all duration-500 delay-200">
                                                <button
                                                    class="bg-green-600 hover:bg-green-700 text-white p-2 rounded-full shadow-lg transition-colors duration-300">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>

                                        <!-- Content -->
                                        <div class="p-8">
                                            <div class="flex items-start justify-between mb-4">
                                                <h3
                                                    class="text-2xl font-bold text-gray-900 group-hover:text-green-700 transition-colors duration-300 leading-tight">
                                                    {{ $masjid->nama }}
                                                </h3>
                                                <div class="ml-2 flex-shrink-0">
                                                    <div class="w-2 h-2 
                                                        @if($kategori == 'BPIC') bg-green-500 
                                                        @elseif($kategori == 'Al-Jabbar') bg-blue-500 
                                                        @else bg-purple-500 @endif
                                                        rounded-full animate-pulse"></div>
                                                </div>
                                            </div>

                                            <p class="text-gray-600 mb-6 leading-relaxed">
                                                Klik untuk menjelajahi sejarah, struktur organisasi, dan informasi lengkap tentang
                                                masjid ini.
                                            </p>

                                            <!-- Action Button -->
                                            <div class="flex items-center justify-between">
                                                <span
                                                    class="inline-flex items-center text-green-600 font-semibold group-hover:text-green-700 transition-colors duration-300">
                                                    <span class="mr-2">Selengkapnya</span>
                                                    <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform duration-300"
                                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                                    </svg>
                                                </span>

                                                <!-- Info Icons -->
                                                <div
                                                    class="flex items-center space-x-2 opacity-60 group-hover:opacity-100 transition-opacity duration-300">
                                                    <div class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center">
                                                        <svg class="w-3 h-3 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                                            <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                        </svg>
                                                    </div>
                                                    <div class="w-6 h-6 bg-purple-100 rounded-full flex items-center justify-center">
                                                        <svg class="w-3 h-3 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                                                            <path fill-rule="evenodd"
                                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            @endif

            <!-- Empty State -->
            <div id="no-results" class="hidden text-center py-16">
                <div class="mx-auto w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Masjid tidak ditemukan</h3>
                <p class="text-gray-600">Coba gunakan kata kunci yang berbeda atau pilih kategori lain untuk pencarian Anda.</p>
            </div>
        </div>
    </div>

    <!-- Custom Styles -->
    <style>
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .masjid-card {
            animation: fadeInUp 0.6s ease-out forwards;
        }

        .category-section:nth-child(1) .masjid-card:nth-child(1) { animation-delay: 0.1s; }
        .category-section:nth-child(1) .masjid-card:nth-child(2) { animation-delay: 0.2s; }
        .category-section:nth-child(1) .masjid-card:nth-child(3) { animation-delay: 0.3s; }
        .category-section:nth-child(2) .masjid-card:nth-child(1) { animation-delay: 0.4s; }
        .category-section:nth-child(2) .masjid-card:nth-child(2) { animation-delay: 0.5s; }
        .category-section:nth-child(2) .masjid-card:nth-child(3) { animation-delay: 0.6s; }

        /* Aspect ratio utility */
        .aspect-w-16 {
            position: relative;
            padding-bottom: 62.5%;
        }

        .aspect-w-16>* {
            position: absolute;
            height: 100%;
            width: 100%;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f5f9;
        }

        ::-webkit-scrollbar-thumb {
            background: #10b981;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #059669;
        }
    </style>

    <!-- Enhanced JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('search-input');
            const categoryFilter = document.getElementById('category-filter');
            const masjidCards = document.querySelectorAll('.masjid-card');
            const categorySections = document.querySelectorAll('.category-section');
            const noResults = document.getElementById('no-results');

            function filterMasjids() {
                const searchTerm = searchInput.value.toLowerCase();
                const selectedCategory = categoryFilter.value;
                let visibleCards = 0;
                let visibleSections = 0;

                categorySections.forEach(section => {
                    const sectionCategory = section.getAttribute('data-category');
                    let sectionHasVisibleCards = false;

                    // Check if this section should be shown based on category filter
                    const showSection = !selectedCategory || selectedCategory === sectionCategory;

                    if (showSection) {
                        const cardsInSection = section.querySelectorAll('.masjid-card');
                        
                        cardsInSection.forEach(card => {
                            const masjidName = card.getAttribute('data-name');
                            const matchesSearch = masjidName.includes(searchTerm);

                            if (matchesSearch) {
                                card.style.display = 'block';
                                visibleCards++;
                                sectionHasVisibleCards = true;
                            } else {
                                card.style.display = 'none';
                            }
                        });

                        // Show/hide section based on whether it has visible cards
                        if (sectionHasVisibleCards) {
                            section.style.display = 'block';
                            visibleSections++;
                        } else {
                            section.style.display = 'none';
                        }
                    } else {
                        section.style.display = 'none';
                    }
                });

                // Show/hide no results message
                if (visibleCards === 0) {
                    noResults.classList.remove('hidden');
                } else {
                    noResults.classList.add('hidden');
                }
            }

            // Event listeners
            searchInput.addEventListener('input', filterMasjids);
            categoryFilter.addEventListener('change', filterMasjids);

            // Animate counters
            function animateCounter(element, target) {
                let current = 0;
                const increment = target / 30;
                const timer = setInterval(() => {
                    current += increment;
                    if (current >= target) {
                        element.textContent = target;
                        clearInterval(timer);
                    } else {
                        element.textContent = Math.floor(current);
                    }
                }, 50);
            }

            // Trigger counter animations when page loads
            const totalCountElement = document.getElementById('total-count');
            if (totalCountElement) {
                const totalCount = {{ $totalMasjid }};
                animateCounter(totalCountElement, totalCount);
            }

            // Animate category counters
            @if(isset($masjidByKategori))
                @foreach($masjidByKategori as $kategori => $masjids)
                    const counter{{ str_replace([' ', '-'], '', $kategori) }} = document.getElementById('count-{{ str_replace(' ', '-', strtolower($kategori)) }}');
                    if (counter{{ str_replace([' ', '-'], '', $kategori) }}) {
                        setTimeout(() => {
                            animateCounter(counter{{ str_replace([' ', '-'], '', $kategori) }}, {{ count($masjids) }});
                        }, 200);
                    }
                @endforeach
            @endif

            // Add loading state for images
            const images = document.querySelectorAll('.masjid-card img');
            images.forEach(img => {
                img.addEventListener('load', function() {
                    this.classList.add('loaded');
                });
            });
        });
    </script>
@endsection