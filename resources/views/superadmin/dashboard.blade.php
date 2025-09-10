@extends('layouts.app')

@section('header')
<div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
    <h2 class="text-2xl font-bold text-gray-800">
        Dashboard Super Admin
    </h2>
    <div class="inline-flex items-center px-4 py-2 rounded-xl bg-indigo-600 text-white shadow-md">
        <span class="text-sm font-semibold">Periode:</span>
        <span class="ml-2 text-base font-bold">
            {{ DateTime::createFromFormat('!m', $bulan)->format('F') }} {{ $tahun }}
        </span>
    </div>
</div>

@endsection

@section('content')
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            
            <!-- Welcome Card -->
            <div class="bg-gradient-to-r from-blue-500 to-purple-600 rounded-xl p-6 text-white shadow-lg">
                <div class="flex items-center">
                    <div class="p-3 bg-white/20 rounded-lg mr-4">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold">Control Panel Super Admin</h3>
                        <p class="text-blue-100 mt-1">Monitor dan kelola laporan dari semua masjid dalam sistem</p>
                    </div>
                </div>
            </div>

            <!-- Filter Section -->
            <div class="bg-white rounded-xl shadow-sm border p-6">
                <div class="flex items-center mb-4">
                    <svg class="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                              d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"/>
                    </svg>
                    <h4 class="text-lg font-semibold text-gray-800">Filter Laporan</h4>
                </div>
                
                <form method="GET" class="grid grid-cols-1 md:grid-cols-3 gap-4 items-end">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Bulan</label>
                        <select name="bulan" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            @for ($i = 1; $i <= 12; $i++)
                                <option value="{{ $i }}" {{ $i == $bulan ? 'selected' : '' }}>
                                    {{ DateTime::createFromFormat('!m', $i)->format('F') }}
                                </option>
                            @endfor
                        </select>
                    </div>
                    
                    <div>
                        <label for="tahun" class="block text-sm font-medium text-gray-700 mb-2">Tahun</label>
                        <select name="tahun" id="tahun"
                            class="w-full px-3 py-2 border border-gray-300 rounded-lg bg-white shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            @for ($y = 2020; $y <= 2030; $y++)
                                <option value="{{ $y }}" {{ $tahun == $y ? 'selected' : '' }}>
                                    {{ $y }}
                                </option>
                            @endfor
                        </select>
                    </div>

                    
                    <div>
                        <button type="submit" class="w-full px-4 py-2 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition-colors flex items-center justify-center">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                            Filter
                        </button>
                    </div>
                </form>
            </div>

            <!-- Summary Cards -->
            @php
                $totalMasjid = $masjids->count();
                $totalLaporan = $masjids->sum(function($m) { return $m->laporans->count() > 0 ? 1 : 0; });
                $kinerjaComplete = $masjids->sum(function($m) { 
                    $l = $m->laporans->first(); 
                    return $l && $l->file_kinerja ? 1 : 0; 
                });
                $keuanganComplete = $masjids->sum(function($m) { 
                    $l = $m->laporans->first(); 
                    return $l && $l->file_keuangan ? 1 : 0; 
                });
                $overallProgress = $totalMasjid > 0 ? round(($totalLaporan / $totalMasjid) * 100) : 0;
            @endphp
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Total Masjid -->
                <div class="bg-white rounded-xl p-6 shadow-sm border">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-600">Total Masjid</p>
                            <p class="text-2xl font-bold text-gray-900">{{ $totalMasjid }}</p>
                        </div>
                        <div class="p-3 bg-blue-100 rounded-full">
                            <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3z"/>
                            </svg>
                        </div>
                    </div>
                </div>
                
                <!-- Laporan Kinerja -->
                <div class="bg-white rounded-xl p-6 shadow-sm border">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-600">Laporan Kinerja</p>
                            <p class="text-2xl font-bold text-gray-900">{{ $kinerjaComplete }}/{{ $totalMasjid }}</p>
                            <div class="w-full bg-gray-200 rounded-full h-2 mt-2">
                                <div class="bg-green-600 h-2 rounded-full" style="width: {{ $totalMasjid > 0 ? ($kinerjaComplete / $totalMasjid) * 100 : 0 }}%"></div>
                            </div>
                        </div>
                        <div class="p-3 bg-green-100 rounded-full">
                            <svg class="w-6 h-6 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                    </div>
                </div>
                
                <!-- Laporan Keuangan -->
                <div class="bg-white rounded-xl p-6 shadow-sm border">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-600">Laporan Keuangan</p>
                            <p class="text-2xl font-bold text-gray-900">{{ $keuanganComplete }}/{{ $totalMasjid }}</p>
                            <div class="w-full bg-gray-200 rounded-full h-2 mt-2">
                                <div class="bg-yellow-500 h-2 rounded-full" style="width: {{ $totalMasjid > 0 ? ($keuanganComplete / $totalMasjid) * 100 : 0 }}%"></div>
                            </div>
                        </div>
                        <div class="p-3 bg-yellow-100 rounded-full">
                            <svg class="w-6 h-6 text-yellow-600" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zM14 6a2 2 0 012 2v4a2 2 0 01-2 2H6a2 2 0 01-2-2V8a2 2 0 012-2h8z"/>
                            </svg>
                        </div>
                    </div>
                </div>
                
                <!-- Progress Keseluruhan -->
                <div class="bg-white rounded-xl p-6 shadow-sm border">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-600">Progress Keseluruhan</p>
                            <p class="text-2xl font-bold text-gray-900">{{ $overallProgress }}%</p>
                            <div class="w-full bg-gray-200 rounded-full h-2 mt-2">
                                <div class="bg-purple-600 h-2 rounded-full" style="width: {{ $overallProgress }}%"></div>
                            </div>
                        </div>
                        <div class="p-3 bg-purple-100 rounded-full">
                            <svg class="w-6 h-6 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Reports Table -->
            <div class="bg-white rounded-xl shadow-sm border overflow-hidden">
                <div class="px-6 py-4 border-b border-gray-200">
                    <h4 class="text-lg font-semibold text-gray-800 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                        </svg>
                        Status Laporan Masjid
                    </h4>
                </div>
                
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Masjid</th>
                                <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Kinerja</th>
                                <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Keuangan</th>
                                <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Aset</th>
                                <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @forelse ($masjids as $masjid)
                                @php
                                    $laporan = $masjid->laporans->first();
                                    $hasKinerja = $laporan && $laporan->file_kinerja;
                                    $hasKeuangan = $laporan && $laporan->file_keuangan;
                                    $hasAset = $laporan && $laporan->file_aset;
                                    $completeness = ($hasKinerja ? 1 : 0) + ($hasKeuangan ? 1 : 0) + ($hasAset ? 1 : 0);
                                @endphp
                                <tr class="hover:bg-gray-50">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-8 w-8">
                                                <div class="h-8 w-8 rounded-full bg-blue-100 flex items-center justify-center">
                                                    <svg class="w-4 h-4 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                                        <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3z"/>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="ml-3">
                                                <div class="text-sm font-medium text-gray-900">{{ $masjid->nama }}</div>
                                                <div class="text-sm text-gray-500">ID: {{ $masjid->id }}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        @if($hasKinerja)
                                            <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">
                                                ✓ Selesai
                                            </span>
                                        @else
                                            <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-800">
                                                ✗ Belum
                                            </span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        @if($hasKeuangan)
                                            <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">
                                                ✓ Selesai
                                            </span>
                                        @else
                                            <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-800">
                                                ✗ Belum
                                            </span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        @if($hasAset)
                                            <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">
                                                ✓ Selesai
                                            </span>
                                        @else
                                            <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-800">
                                                ✗ Belum
                                            </span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        @if($completeness == 3)
                                            <span class="inline-flex px-3 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">
                                                Lengkap
                                            </span>
                                        @elseif($completeness >= 1)
                                            <span class="inline-flex px-3 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                                Sebagian ({{ $completeness }}/3)
                                            </span>
                                        @else
                                            <span class="inline-flex px-3 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-800">
                                                Kosong
                                            </span>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="px-6 py-12 text-center">
                                        <div class="flex flex-col items-center">
                                            <svg class="w-12 h-12 text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                            </svg>
                                            <h3 class="text-lg font-medium text-gray-900 mb-2">Belum ada data masjid</h3>
                                            <p class="text-gray-500">Tidak ada masjid yang terdaftar dalam sistem</p>
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