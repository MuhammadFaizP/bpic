 <nav class="fixed top-0 left-0 right-0 z-50 bg-white shadow-md">
     <div class="max-w-6xl mx-auto px-4">
         <div class="flex justify-between items-center h-16">
             {{-- Logo --}}
             <a href="" class="flex items-center space-x-2 font-bold text-xl text-green-700">
                 <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                     <path d="M12 2L6 5.5V18.5L12 22L18 18.5V5.5L12 2Z" />
                     <path d="M6 5.5L12 9M18 5.5L12 9M12 9V22" stroke="white" stroke-width="0.5" fill="none" />
                 </svg>
                 <span>BPIC</span>
             </a>

             {{-- Desktop Menu --}}
             <div class="flex-1 flex items-center justify-center space-x-8">
                 <a href=""
                     class="font-medium text-gray-700 hover:text-green-600 transition-colors duration-200">Beranda</a>
                 <a href=""
                     class="font-medium text-gray-700 hover:text-green-600 transition-colors duration-200">Profil</a>
                 <a href=""
                     class="font-medium text-gray-700 hover:text-green-600 transition-colors duration-200">Binaan</a>
                 <a href=""
                     class="font-medium text-gray-700 hover:text-green-600 transition-colors duration-200">Galeri</a>
                 <a href=""
                     class="font-medium text-gray-700 hover:text-green-600 transition-colors duration-200">Kontak</a>
             </div>
             <div>
                 <a href="{{ route('login') }}"
                     class="px-4 py-2 bg-green-600 text-white rounded-lg font-medium hover:bg-green-700 transition-colors duration-200">
                     Login
                 </a>

             </div>


             {{-- Mobile Menu Button --}}
             <button @click="open = !open"
                 class="md:hidden p-2 rounded-lg text-gray-600 hover:bg-gray-100 transition-colors duration-200"
                 x-data="{ open: false }">
                 <svg x-show="!open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                 </svg>
                 <svg x-show="open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
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
             <a href=""
                 class="block py-3 text-gray-700 hover:text-green-600 font-medium transition-colors duration-200">Profil</a>
             <a href=""
                 class="block py-3 text-gray-700 hover:text-green-600 font-medium transition-colors duration-200">Mitra</a>
             <a href=""
                 class="block py-3 text-gray-700 hover:text-green-600 font-medium transition-colors duration-200">Galeri</a>
             <a href=""
                 class="block py-3 text-gray-700 hover:text-green-600 font-medium transition-colors duration-200">Kontak</a>
         </div>
     </div>
 </nav>
