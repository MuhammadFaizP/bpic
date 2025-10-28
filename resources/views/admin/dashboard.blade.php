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
                                {{-- <th class="px-6 py-4 text-xs font-medium text-gray-500 uppercase tracking-wider text-center">Aksi</th> --}}
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
                                            <div class="inline-flex gap-2">
                                                <a href="{{ route('laporan.preview', ['id' => $laporan->id, 'type' => 'kinerja']) }}" 
                                                   target="_blank"
                                                   class="inline-flex items-center px-3 py-1 bg-blue-100 
                                                          text-blue-700 rounded-full text-sm hover:bg-blue-200 
                                                          transition-colors" title="Preview">
                                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                                                    </svg>
                                                </a>
                                                <a href="{{ route('laporan.download', ['id' => $laporan->id, 'type' => 'kinerja']) }}" 
                                                   class="inline-flex items-center px-3 py-1 bg-green-100 
                                                          text-green-700 rounded-full text-sm hover:bg-green-200 
                                                          transition-colors" title="Download">
                                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                                        <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                                    </svg>
                                                </a>
                                            </div>
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
                                            <div class="inline-flex gap-2">
                                                <a href="{{ route('laporan.preview', ['id' => $laporan->id, 'type' => 'keuangan']) }}" 
                                                   target="_blank"
                                                   class="inline-flex items-center px-3 py-1 bg-blue-100 
                                                          text-blue-700 rounded-full text-sm hover:bg-blue-200 
                                                          transition-colors" title="Preview">
                                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                                                    </svg>
                                                </a>
                                                <a href="{{ route('laporan.download', ['id' => $laporan->id, 'type' => 'keuangan']) }}" 
                                                   class="inline-flex items-center px-3 py-1 bg-green-100 
                                                          text-green-700 rounded-full text-sm hover:bg-green-200 
                                                          transition-colors" title="Download">
                                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                                        <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                                    </svg>
                                                </a>
                                            </div>
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
                                            <div class="inline-flex gap-2">
                                                <a href="{{ route('laporan.preview', ['id' => $laporan->id, 'type' => 'aset']) }}" 
                                                   target="_blank"
                                                   class="inline-flex items-center px-3 py-1 bg-blue-100 
                                                          text-blue-700 rounded-full text-sm hover:bg-blue-200 
                                                          transition-colors" title="Preview">
                                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                                                    </svg>
                                                </a>
                                                <a href="{{ route('laporan.download', ['id' => $laporan->id, 'type' => 'aset']) }}" 
                                                   class="inline-flex items-center px-3 py-1 bg-green-100 
                                                          text-green-700 rounded-full text-sm hover:bg-green-200 
                                                          transition-colors" title="Download">
                                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                                        <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                                    </svg>
                                                </a>
                                            </div>
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
                                    {{-- <td class="px-6 py-4 text-center">
                                        <div class="inline-flex gap-2">
                                            <a href="{{ route('laporan.edit', $laporan->id) }}"
                                               class="inline-flex items-center px-3 py-1 bg-yellow-100 
                                                      text-yellow-700 rounded-full text-sm hover:bg-yellow-200 
                                                      transition-colors" title="Edit">
                                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"/>
                                                </svg>
                                            </a>
                                            <form action="{{ route('laporan.destroy', $laporan->id) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus laporan ini?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                        class="inline-flex items-center px-3 py-1 bg-red-100 
                                                               text-red-700 rounded-full text-sm hover:bg-red-200 
                                                               transition-colors" title="Hapus">
                                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                                        <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                                    </svg>
                                                </button>
                                            </form>
                                        </div>
                                    </td> --}}
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="px-6 py-12 text-center text-gray-500">
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