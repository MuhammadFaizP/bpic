@extends('layouts.app')

@section('header')
    <div class="flex items-center justify-between">
        <div>
            <h2 class="font-semibold text-xl text-gray-800">
                Laporan Masjid
            </h2>
            <p class="text-sm text-gray-600 mt-1">
                Pilih masjid untuk melihat laporan bulanan
            </p>
        </div>
    </div>
@endsection

@section('content')
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- Filter Section -->
            <div class="bg-white rounded-xl shadow-sm border p-6 mb-6">
                <div class="space-y-4">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <!-- Pilih Masjid -->
                        <div>
                            <label for="masjid_id" class="block text-sm font-medium text-gray-700 mb-2">
                                Pilih Masjid
                            </label>
                            <select id="masjid_id"
                                class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all">
                                <option value="">-- Pilih Masjid --</option>
                                @foreach ($masjids as $m)
                                    <option value="{{ $m->id }}"
                                        {{ isset($masjid) && $masjid->id == $m->id ? 'selected' : '' }}>
                                        {{ $m->nama }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Pilih Tahun -->
                        <div>
                            <label for="tahun" class="block text-sm font-medium text-gray-700 mb-2">
                                Pilih Tahun
                            </label>
                            <select id="tahun"
                                class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all">
                                @for ($y = date('Y'); $y >= date('Y') - 5; $y--)
                                    <option value="{{ $y }}"
                                        {{ request('tahun', date('Y')) == $y ? 'selected' : '' }}>
                                        {{ $y }}
                                    </option>
                                @endfor
                            </select>
                        </div>

                        <!-- Tombol Filter -->
                        <div class="flex items-end">
                            <button type="button" id="btnFilter"
                                class="w-full px-6 py-2.5 bg-blue-600 text-white font-medium rounded-lg 
                                           hover:bg-blue-700 transition-all shadow-sm hover:shadow flex items-center justify-center">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z"
                                        clip-rule="evenodd" />
                                </svg>
                                Filter Laporan
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                document.getElementById('btnFilter').addEventListener('click', function() {
                    const masjidId = document.getElementById('masjid_id').value;
                    const tahun = document.getElementById('tahun').value;

                    if (!masjidId) {
                        alert('Silakan pilih masjid terlebih dahulu!');
                        return;
                    }

                    // Redirect ke route dengan parameter masjid dan query tahun
                    window.location.href = `/superadmin/masjid/${masjidId}/laporan?tahun=${tahun}`;
                });
            </script>

            @if (isset($masjid) && $masjid)
                <!-- Info Masjid Terpilih -->
                <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl p-6 mb-6 border border-blue-100">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <svg class="w-8 h-8 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-gray-900">{{ $masjid->nama }}</h3>
                            <p class="text-sm text-gray-600 mt-1">{{ $masjid->alamat }}</p>
                            <p class="text-xs text-gray-500 mt-2">Menampilkan laporan tahun
                                {{ request('tahun', date('Y')) }}</p>
                        </div>
                    </div>
                </div>

                <!-- Grid Laporan Bulanan -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                    @foreach ($bulanList as $bulan)
                        @php
                            $laporan = $laporans->where('bulan', $bulan['number'])->first();
                            $hasLaporan = $laporan !== null;
                        @endphp

                        <div class="bg-white rounded-xl shadow-sm border hover:shadow-md transition-all overflow-hidden">
                            <!-- Header Card -->
                            <div
                                class="bg-gradient-to-r {{ $hasLaporan ? 'from-green-500 to-emerald-500' : 'from-gray-400 to-gray-500' }} px-6 py-4">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <h3 class="text-white font-bold text-lg">{{ $bulan['name'] }}</h3>
                                        <p class="text-white/80 text-xs mt-0.5">{{ request('tahun', date('Y')) }}</p>
                                    </div>
                                    <svg class="w-8 h-8 text-white/80" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>

                            <!-- Body Card -->
                            <div class="p-5 space-y-3">
                                @if ($hasLaporan)
                                    <!-- Status Upload -->
                                    <div class="flex items-center text-xs text-green-700 bg-green-50 px-3 py-2 rounded-lg">
                                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span class="font-medium">Sudah Upload</span>
                                    </div>

                                    <!-- Tanggal Upload -->
                                    <div class="text-xs text-gray-500 flex items-center">
                                        <svg class="w-3.5 h-3.5 mr-1.5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        Upload: {{ $laporan->created_at->format('d M Y') }}
                                    </div>

                                    <!-- Laporan Items -->
                                    <div class="space-y-2 pt-2 border-t">
                                        <!-- Laporan Kinerja -->
                                        <div class="flex items-center justify-between text-xs">
                                            <span class="text-gray-700 font-medium flex items-center">
                                                <svg class="w-3.5 h-3.5 mr-1.5 text-gray-400" fill="currentColor"
                                                    viewBox="0 0 20 20">
                                                    <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z" />
                                                    <path fill-rule="evenodd"
                                                        d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                                Kinerja
                                            </span>
                                            @if ($laporan->file_kinerja)
                                                <div class="flex gap-1">
                                                    <a href="{{ route('superadmin.masjid.laporan.preview', ['masjid' => $masjid->id, 'id' => $laporan->id, 'type' => 'kinerja']) }}"
                                                        target="_blank" title="Preview"
                                                        class="p-1.5 bg-blue-100 text-blue-700 rounded hover:bg-blue-200 transition-all">
                                                        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20">
                                                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                                            <path fill-rule="evenodd"
                                                                d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                    </a>
                                                    <a href="{{ route('superadmin.masjid.laporan.download', ['masjid' => $masjid->id, 'id' => $laporan->id, 'type' => 'kinerja']) }}"
                                                        title="Download"
                                                        class="p-1.5 bg-green-100 text-green-700 rounded hover:bg-green-200 transition-all">
                                                        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20">
                                                            <path fill-rule="evenodd"
                                                                d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            @else
                                                <span class="text-red-600">✕</span>
                                            @endif
                                        </div>
                                        <!-- Laporan Keuangan -->
                                        <div class="flex items-center justify-between text-xs">
                                            <span class="text-gray-700 font-medium flex items-center">
                                                <svg class="w-3.5 h-3.5 mr-1.5 text-gray-400" fill="currentColor"
                                                    viewBox="0 0 20 20">
                                                    <path
                                                        d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z" />
                                                    <path fill-rule="evenodd"
                                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                                Keuangan
                                            </span>
                                            @if ($laporan->file_keuangan)
                                                <div class="flex gap-1">
                                                    <a href="{{ route('superadmin.masjid.laporan.preview', ['masjid' => $masjid->id, 'id' => $laporan->id, 'type' => 'keuangan']) }}"
                                                        target="_blank" title="Preview"
                                                        class="p-1.5 bg-blue-100 text-blue-700 rounded hover:bg-blue-200 transition-all">
                                                        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20">
                                                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                                            <path fill-rule="evenodd"
                                                                d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                    </a>
                                                    <a href="{{ route('superadmin.masjid.laporan.download', ['masjid' => $masjid->id, 'id' => $laporan->id, 'type' => 'keuangan']) }}"
                                                        title="Download"
                                                        class="p-1.5 bg-green-100 text-green-700 rounded hover:bg-green-200 transition-all">
                                                        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20">
                                                            <path fill-rule="evenodd"
                                                                d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            @else
                                                <span class="text-red-600">✕</span>
                                            @endif
                                        </div>
                                        <!-- Laporan Aset -->
                                        <div class="flex items-center justify-between text-xs">
                                            <span class="text-gray-700 font-medium flex items-center">
                                                <svg class="w-3.5 h-3.5 mr-1.5 text-gray-400" fill="currentColor"
                                                    viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd"
                                                        d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                                Aset
                                            </span>
                                            @if ($laporan->file_aset)
                                                <div class="flex gap-1">
                                                    <a href="{{ route('superadmin.masjid.laporan.preview', ['masjid' => $masjid->id, 'id' => $laporan->id, 'type' => 'aset']) }}"
                                                        target="_blank" title="Preview"
                                                        class="p-1.5 bg-blue-100 text-blue-700 rounded hover:bg-blue-200 transition-all">
                                                        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20">
                                                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                                            <path fill-rule="evenodd"
                                                                d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                    </a>
                                                    <a href="{{ route('superadmin.masjid.laporan.download', ['masjid' => $masjid->id, 'id' => $laporan->id, 'type' => 'aset']) }}"
                                                        title="Download"
                                                        class="p-1.5 bg-green-100 text-green-700 rounded hover:bg-green-200 transition-all">
                                                        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20">
                                                            <path fill-rule="evenodd"
                                                                d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            @else
                                                <span class="text-red-600">✕</span>
                                            @endif
                                        </div>
                                    </div>
                                @else
                                    <!-- Belum Upload -->
                                    <div class="py-8 text-center">
                                        <svg class="w-12 h-12 mx-auto text-gray-300 mb-3" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <p class="text-sm font-medium text-gray-600">Belum Upload</p>
                                        <p class="text-xs text-gray-400 mt-1">Tidak ada laporan</p>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Summary Footer -->
                <div class="bg-white rounded-xl shadow-sm border p-4 mt-6">
                    <div class="flex items-center justify-between text-sm">
                        <span class="text-gray-600">
                            <strong class="font-semibold text-gray-900">{{ $laporans->count() }}</strong> dari 12 bulan
                            telah upload laporan
                        </span>
                        <span class="text-gray-500">
                            Progress: <strong
                                class="text-blue-600">{{ number_format(($laporans->count() / 12) * 100, 1) }}%</strong>
                        </span>
                    </div>
                </div>
            @else
                <!-- Empty State -->
                <div class="bg-white rounded-xl shadow-sm border p-12 text-center">
                    <div class="mb-4">
                        <svg class="w-24 h-24 mx-auto text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-medium text-gray-900 mb-2">Silakan Pilih Masjid</h3>
                    <p class="text-sm text-gray-500">
                        Pilih masjid dan tahun pada filter di atas untuk melihat laporan bulanan
                    </p>
                </div>
            @endif
        </div>
    </div>
@endsection
