@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800">Kelola Data Masjid</h2>
@endsection

@section('content')
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            
            <!-- Action Button -->
            <div class="flex justify-between items-center">
                <div></div>
                <a href="{{ route('superadmin.masjid.create') }}" 
                   class="inline-flex items-center px-4 py-2 bg-green-600 text-white font-medium rounded-lg hover:bg-green-700 transition-colors">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                    </svg>
                    Tambah Masjid Baru
                </a>
            </div>

            <!-- Masjid Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse ($masjids as $masjid)
                    <div class="bg-white rounded-xl shadow-sm border p-6 hover:shadow-md transition-shadow">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center gap-2">
                                <!-- Tombol Edit -->
                                <a href="{{ route('superadmin.masjid.edit', $masjid) }}"
                                class="inline-flex items-center px-3 py-1.5 bg-blue-100 text-blue-700 text-sm font-medium rounded-lg hover:bg-blue-200 transition">
                                    Edit
                                </a>

                                <!-- Tombol Hapus -->
                                <form action="{{ route('superadmin.masjid.destroy', $masjid) }}" method="POST"
                                    onsubmit="return confirm('Yakin hapus masjid ini? Admin yang terkait akan kehilangan akses.')" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="inline-flex items-center px-3 py-1.5 bg-red-100 text-red-700 text-sm font-medium rounded-lg hover:bg-red-200 transition">
                                        Hapus
                                    </button>
                                </form>
                            </div>
                        </div>
                        
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">{{ $masjid->nama }}</h3>
                        
                        <div class="space-y-2 text-sm text-gray-600">
                            <div class="flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                                {{ $masjid->alamat ?? 'Alamat belum diisi' }}
                            </div>
                            
                            @if($masjid->user)
                                <div class="flex items-center">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                    </svg>
                                    Admin: {{ $masjid->user->name }}
                                </div>
                                <div class="flex items-center">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                    </svg>
                                    {{ $masjid->user->email }}
                                </div>
                            @else
                                <div class="flex items-center text-red-600">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z"/>
                                    </svg>
                                    Belum ada admin
                                </div>
                            @endif
                        </div>
                        
                        <!-- Stats -->
                        <div class="mt-4 pt-4 border-t border-gray-200">
                            <div class="text-xs text-gray-500">
                                Total Laporan: {{ $masjid->laporans()->count() }}
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full">
                        <div class="bg-white rounded-xl shadow-sm border p-12 text-center">
                            <svg class="w-12 h-12 text-gray-300 mx-auto mb-4" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3z"/>
                            </svg>
                            <p class="text-lg font-medium text-gray-900 mb-2">Belum ada masjid</p>
                            <p class="text-sm text-gray-500">Tambahkan masjid pertama untuk memulai</p>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
@endsection