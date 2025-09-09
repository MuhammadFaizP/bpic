@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800">
        Dashboard Admin - {{ Auth::user()->masjid->nama }}
    </h2>
@endsection

@section('content')
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            
            <!-- Welcome Card -->
            <div class="bg-white rounded-xl p-6 shadow-sm border">
                <h3 class="text-lg font-semibold text-gray-800 mb-2">
                    Selamat datang kembali! 👋
                </h3>
                <p class="text-gray-600">
                    Kelola laporan dan data masjid Anda dengan mudah
                </p>
            </div>

            <!-- Action Button -->
            <div class="flex justify-start">
                <a href="{{ route('laporan.create') }}" 
                   class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-blue-500 to-purple-600 
                          text-white font-medium rounded-lg shadow-lg hover:shadow-xl transform 
                          hover:-translate-y-0.5 transition-all duration-200 group">
                    <svg class="w-5 h-5 mr-2 group-hover:scale-110 transition-transform" 
                         fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                              d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                    </svg>
                    Upload Laporan Baru
                </a>
            </div>

            <!-- Reports Table -->
            <div class="bg-white rounded-xl shadow-sm border overflow-hidden">
                <div class="px-6 py-4 border-b border-gray-200">
                    <h4 class="text-lg font-semibold text-gray-800 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                        </svg>
                        Daftar Laporan
                    </h4>
                </div>
                
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-gray-50">
                            <tr class="text-left">
                                <th class="px-6 py-4 text-xs font-medium text-gray-500 uppercase tracking-wider">Bulan</th>
                                <th class="px-6 py-4 text-xs font-medium text-gray-500 uppercase tracking-wider">Tahun</th>
                                <th class="px-6 py-4 text-xs font-medium text-gray-500 uppercase tracking-wider text-center">Kinerja</th>
                                <th class="px-6 py-4 text-xs font-medium text-gray-500 uppercase tracking-wider text-center">Keuangan</th>
                                <th class="px-6 py-4 text-xs font-medium text-gray-500 uppercase tracking-wider text-center">Aset</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @forelse ($laporans as $laporan)
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-4 text-gray-800 font-medium">
                                        {{ DateTime::createFromFormat('!m', $laporan->bulan)->format('F') }}
                                    </td>
                                    <td class="px-6 py-4 text-gray-600">
                                        {{ $laporan->tahun }}
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        @if($laporan->file_kinerja)
                                            <a href="{{ Storage::url($laporan->file_kinerja) }}" 
                                               target="_blank"
                                               class="inline-flex items-center px-3 py-1 bg-green-100 
                                                      text-green-700 rounded-full text-sm hover:bg-green-200 
                                                      transition-colors">
                                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"/>
                                                </svg>
                                                Lihat
                                            </a>
                                        @else
                                            <span class="inline-flex items-center px-3 py-1 bg-red-100 
                                                         text-red-700 rounded-full text-sm">
                                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" 
                                                          d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" 
                                                          clip-rule="evenodd"/>
                                                </svg>
                                                Kosong
                                            </span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        @if($laporan->file_keuangan)
                                            <a href="{{ Storage::url($laporan->file_keuangan) }}" 
                                               target="_blank"
                                               class="inline-flex items-center px-3 py-1 bg-green-100 
                                                      text-green-700 rounded-full text-sm hover:bg-green-200 
                                                      transition-colors">
                                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"/>
                                                </svg>
                                                Lihat
                                            </a>
                                        @else
                                            <span class="inline-flex items-center px-3 py-1 bg-red-100 
                                                         text-red-700 rounded-full text-sm">
                                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" 
                                                          d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" 
                                                          clip-rule="evenodd"/>
                                                </svg>
                                                Kosong
                                            </span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        @if($laporan->file_aset)
                                            <a href="{{ Storage::url($laporan->file_aset) }}" 
                                               target="_blank"
                                               class="inline-flex items-center px-3 py-1 bg-green-100 
                                                      text-green-700 rounded-full text-sm hover:bg-green-200 
                                                      transition-colors">
                                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"/>
                                                </svg>
                                                Lihat
                                            </a>
                                        @else
                                            <span class="inline-flex items-center px-3 py-1 bg-red-100 
                                                         text-red-700 rounded-full text-sm">
                                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" 
                                                          d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" 
                                                          clip-rule="evenodd"/>
                                                </svg>
                                                Kosong
                                            </span>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="px-6 py-12 text-center text-gray-500">
                                        <div class="flex flex-col items-center">
                                            <svg class="w-12 h-12 text-gray-300 mb-4" fill="none" 
                                                 stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" 
                                                      stroke-width="1" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                            </svg>
                                            <p class="text-lg font-medium text-gray-900 mb-2">Belum ada laporan</p>
                                            <p class="text-sm">Upload laporan pertama Anda untuk memulai</p>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection