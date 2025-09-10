@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800">
        Manajemen Laporan
    </h2>
@endsection

@section('content')
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Action buttons and messages -->
            <div class="flex items-center justify-between mb-6">
                <a href="{{ route('laporan.create') }}" 
                   class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-blue-500 to-indigo-600 
                          text-white font-medium rounded-lg shadow hover:shadow-lg transition-all duration-200">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" fill-rule="evenodd"/>
                    </svg>
                    Unggah Laporan Baru
                </a>

                @if (session('success'))
                    <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded-lg shadow" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
            </div>

            <!-- Laporan List Table -->
            <div class="bg-white rounded-xl shadow-sm border overflow-hidden">
                @if ($laporans->isEmpty())
                    <div class="p-6 text-gray-500 text-center">
                        <p class="mb-2 text-3xl opacity-75">
                            <i class="fas fa-file-alt"></i>
                        </p>
                        <p class="text-lg font-medium">Belum ada laporan yang diunggah.</p>
                        <p class="text-sm">Silakan unggah laporan pertama Anda untuk memulai.</p>
                    </div>
                @else
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Bulan & Tahun
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Tanggal Unggah
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Laporan
                                    </th>
                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">Aksi</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($laporans as $laporan)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="font-medium text-gray-900">
                                                {{ \Carbon\Carbon::create()->month($laporan->bulan)->format('F') }} {{ $laporan->tahun }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            {{ $laporan->created_at->format('d M Y') }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 space-y-2">
                                            @if($laporan->file_kinerja)
                                                <a href="{{ Storage::url($laporan->file_kinerja) }}" target="_blank" class="block text-indigo-600 hover:text-indigo-900 transition-colors">
                                                    Laporan Kinerja
                                                </a>
                                            @endif
                                            @if($laporan->file_keuangan)
                                                <a href="{{ Storage::url($laporan->file_keuangan) }}" target="_blank" class="block text-teal-600 hover:text-teal-900 transition-colors">
                                                    Laporan Keuangan
                                                </a>
                                            @endif
                                            @if($laporan->file_aset)
                                                <a href="{{ Storage::url($laporan->file_aset) }}" target="_blank" class="block text-amber-600 hover:text-amber-900 transition-colors">
                                                    Laporan Aset
                                                </a>
                                            @endif
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <a href="{{ route('laporan.edit', $laporan->id) }}" class="text-indigo-600 hover:text-indigo-900 transition-colors">Edit</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
