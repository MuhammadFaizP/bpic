{{-- File: resources/views/galeri/index.blade.php --}}

@extends('layouts.public')

@section('content')
<!-- Hero Section -->
<div class="relative bg-gradient-to-br from-blue-900 via-purple-800 to-indigo-900 py-20 overflow-hidden">
    <!-- Simple Background Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 25% 25%, white 2px, transparent 2px), radial-gradient(circle at 75% 75%, white 2px, transparent 2px); background-size: 50px 50px;"></div>
    </div>
    
    <!-- Floating Decorations -->
    <div class="absolute top-20 left-10 w-20 h-20 bg-pink-400/20 rounded-full blur-2xl animate-pulse"></div>
    <div class="absolute bottom-20 right-16 w-32 h-32 bg-yellow-400/20 rounded-full blur-3xl animate-pulse delay-1000"></div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
        <div class="inline-block bg-white/10 backdrop-blur-sm border border-white/20 px-6 py-3 rounded-full text-sm font-medium mb-6">
            Galeri Kegiatan Badan Pengelola Islamic Centre
        </div>
        
        <h1 class="text-5xl md:text-6xl font-bold mb-6 leading-tight">
            <span class="bg-gradient-to-r from-pink-300 to-yellow-300 bg-clip-text text-transparent">
                Momen Berharga
            </span>
            <br>
            <span class="text-white">Kami</span>
        </h1>
        
        <p class="text-xl md:text-2xl text-white/90 max-w-3xl mx-auto leading-relaxed mb-8">
            Saksikan keindahan setiap momen dalam perjalanan spiritual dan kebersamaan komunitas masjid kami
        </p>
        
        <!-- Simple Stats -->
        <div class="inline-flex items-center bg-white/10 backdrop-blur-sm rounded-2xl px-8 py-4 border border-white/20">
            <div class="text-center">
                <div class="text-3xl font-bold text-yellow-300">{{ count($galeris) }}</div>
                <div class="text-sm text-white/80">Total Foto</div>
            </div>
        </div>
    </div>
</div>

<!-- Search Section -->
<div class="bg-white py-8 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-md mx-auto">
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center">
                    <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </div>
                <input type="text" id="search-gallery" class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-xl bg-gray-50 placeholder-gray-500 focus:outline-none focus:bg-white focus:border-purple-500 focus:ring-2 focus:ring-purple-200 transition-all duration-300" placeholder="Cari foto berdasarkan judul atau lokasi...">
            </div>
        </div>
    </div>
</div>

<!-- Main Gallery -->
<div class="bg-gradient-to-b from-gray-50 to-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Gallery Grid -->
        <div id="gallery-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($galeris as $foto)
            <div class="gallery-item bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 overflow-hidden cursor-pointer"
                 data-title="{{ strtolower($foto->judul) }}" 
                 data-location="{{ strtolower($foto->lokasi) }}"
                 onclick="openModal('{{ $foto->gambar }}', '{{ $foto->judul }}', '{{ $foto->lokasi }}', '{{ $foto->tanggal }}')">
                
                <!-- Image Container -->
                <div class="relative overflow-hidden">
                    <img src="{{ $foto->gambar }}" 
                         alt="{{ $foto->judul }}" 
                         class="w-full h-64 object-cover transition-transform duration-500 hover:scale-105">
                    
                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                            <h3 class="text-lg font-bold mb-1">{{ $foto->judul }}</h3>
                            <div class="flex items-center text-sm text-gray-200">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                                </svg>
                                <span class="mr-4">{{ $foto->lokasi }}</span>
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                                </svg>
                                <span>{{ $foto->tanggal }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        <!-- No Results -->
        <div id="no-results" class="hidden text-center py-16">
            <div class="mx-auto w-20 h-20 bg-gray-100 rounded-full flex items-center justify-center mb-4">
                <svg class="w-10 h-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                </svg>
            </div>
            <h3 class="text-xl font-semibold text-gray-900 mb-2">Foto tidak ditemukan</h3>
            <p class="text-gray-600">Coba kata kunci yang berbeda untuk pencarian Anda.</p>
        </div>
    </div>
</div>

<!-- Simple Modal -->
<div id="photo-modal" class="fixed inset-0 bg-black bg-opacity-75 z-50 hidden flex items-center justify-center p-4" onclick="closeModal()">
    <div class="relative max-w-4xl max-h-full" onclick="event.stopPropagation()">
        <!-- Close Button -->
        <button onclick="closeModal()" class="absolute -top-10 right-0 text-white hover:text-gray-300 text-2xl">
            ×
        </button>
        
        <!-- Image -->
        <img id="modal-image" src="" alt="" class="max-w-full max-h-full object-contain rounded-lg">
        
        <!-- Info -->
        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent text-white p-6 rounded-b-lg">
            <h3 id="modal-title" class="text-xl font-bold mb-2"></h3>
            <div class="flex items-center space-x-4 text-sm text-gray-200">
                <div class="flex items-center">
                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                    </svg>
                    <span id="modal-location"></span>
                </div>
                <div class="flex items-center">
                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                    </svg>
                    <span id="modal-date"></span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Simple Styles -->
<style>
.gallery-item {
    opacity: 0;
    animation: fadeInUp 0.6s ease-out forwards;
}

.gallery-item:nth-child(1) { animation-delay: 0.1s; }
.gallery-item:nth-child(2) { animation-delay: 0.2s; }
.gallery-item:nth-child(3) { animation-delay: 0.3s; }
.gallery-item:nth-child(4) { animation-delay: 0.4s; }
.gallery-item:nth-child(5) { animation-delay: 0.5s; }
.gallery-item:nth-child(6) { animation-delay: 0.6s; }

@keyframes fadeInUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>

<!-- Simple JavaScript -->
<script>
// Search functionality
document.getElementById('search-gallery').addEventListener('input', function() {
    const searchTerm = this.value.toLowerCase();
    const galleryItems = document.querySelectorAll('.gallery-item');
    const noResults = document.getElementById('no-results');
    const galleryGrid = document.getElementById('gallery-grid');
    let visibleCount = 0;

    galleryItems.forEach(item => {
        const title = item.getAttribute('data-title');
        const location = item.getAttribute('data-location');
        
        if (title.includes(searchTerm) || location.includes(searchTerm)) {
            item.style.display = 'block';
            visibleCount++;
        } else {
            item.style.display = 'none';
        }
    });

    // Show/hide no results
    if (visibleCount === 0 && searchTerm !== '') {
        noResults.classList.remove('hidden');
        galleryGrid.classList.add('opacity-50');
    } else {
        noResults.classList.add('hidden');
        galleryGrid.classList.remove('opacity-50');
    }
});

// Modal functions
function openModal(imageSrc, title, location, date) {
    document.getElementById('modal-image').src = imageSrc;
    document.getElementById('modal-title').textContent = title;
    document.getElementById('modal-location').textContent = location;
    document.getElementById('modal-date').textContent = date;
    document.getElementById('photo-modal').classList.remove('hidden');
    document.body.style.overflow = 'hidden';
}

function closeModal() {
    document.getElementById('photo-modal').classList.add('hidden');
    document.body.style.overflow = 'auto';
}

// Close modal with Escape key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeModal();
    }
});
</script>
@endsection