@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800">
        Unggah Laporan Baru
    </h2>
@endsection

@section('content')
    <div class="py-6">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <!-- Form Card -->
            <div class="bg-white rounded-xl p-6 shadow-sm border">
                <div class="flex items-center justify-between border-b pb-4 mb-4">
                    <h3 class="text-lg font-semibold text-gray-800">
                        Formulir Unggah Laporan
                    </h3>
                    <a href="{{ route('laporan.index') }}" 
                       class="text-sm text-gray-600 hover:text-gray-900 transition-colors">
                        &larr; Kembali ke Dashboard
                    </a>
                </div>

                <!-- Display Validation Errors -->
                @if ($errors->any())
                    <div class="mb-4 bg-red-50 border-l-4 border-red-400 text-red-700 p-4 rounded-md">
                        <p class="font-bold">Ada beberapa masalah dengan input Anda:</p>
                        <ul class="mt-2 list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                
                <!-- Upload Form -->
                <form action="{{ route('laporan.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="space-y-6">
                        <!-- Month and Year -->
                        <div class="flex flex-col md:flex-row md:space-x-4 space-y-4 md:space-y-0">
                            <div class="flex-1">
                                <label for="bulan" class="block text-sm font-medium text-gray-700 mb-1">
                                    Bulan <span class="text-red-500">*</span>
                                </label>
                                <select name="bulan" id="bulan" required
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                    <option value="">Pilih Bulan</option>
                                    @for ($i = 1; $i <= 12; $i++)
                                        <option value="{{ $i }}" {{ old('bulan') == $i ? 'selected' : '' }}>
                                            {{ \Carbon\Carbon::create()->month($i)->format('F') }}
                                        </option>
                                    @endfor
                                </select>
                                @error('bulan')
                                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="flex-1">
                                <label for="tahun" class="block text-sm font-medium text-gray-700 mb-1">
                                    Tahun <span class="text-red-500">*</span>
                                </label>
                                <select name="tahun" id="tahun" required
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                    <option value="">Pilih Tahun</option>
                                    @for ($i = date('Y'); $i >= 2000; $i--)
                                        <option value="{{ $i }}" {{ old('tahun') == $i ? 'selected' : '' }}>
                                            {{ $i }}
                                        </option>
                                    @endfor
                                </select>
                                @error('tahun')
                                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- File Uploads -->
                        <div>
                            <p class="block text-sm font-medium text-gray-700 mb-2">Unggah File Laporan <span class="text-red-500">*</span></p>
                            <div class="space-y-4">
                                <!-- Kinerja -->
                                <div class="bg-gray-50 border border-gray-200 rounded-lg p-4">
                                    <label for="file_kinerja" class="flex items-center text-sm font-medium text-gray-700 mb-1">
                                        Laporan Kinerja
                                    </label>
                                    <input type="file" name="file_kinerja" id="file_kinerja" required
                                           class="mt-1 block w-full text-sm text-gray-500
                                                  file:mr-4 file:py-2 file:px-4
                                                  file:rounded-full file:border-0
                                                  file:text-sm file:font-semibold
                                                  file:bg-indigo-50 file:text-indigo-700
                                                  hover:file:bg-indigo-100 cursor-pointer"/>
                                    @error('file_kinerja')
                                        <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>
                                
                                <!-- Keuangan -->
                                <div class="bg-gray-50 border border-gray-200 rounded-lg p-4">
                                    <label for="file_keuangan" class="flex items-center text-sm font-medium text-gray-700 mb-1">
                                        Laporan Keuangan
                                    </label>
                                    <input type="file" name="file_keuangan" id="file_keuangan" required
                                           class="mt-1 block w-full text-sm text-gray-500
                                                  file:mr-4 file:py-2 file:px-4
                                                  file:rounded-full file:border-0
                                                  file:text-sm file:font-semibold
                                                  file:bg-teal-50 file:text-teal-700
                                                  hover:file:bg-teal-100 cursor-pointer"/>
                                    @error('file_keuangan')
                                        <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Aset -->
                                <div class="bg-gray-50 border border-gray-200 rounded-lg p-4">
                                    <label for="file_aset" class="flex items-center text-sm font-medium text-gray-700 mb-1">
                                        Laporan Aset
                                    </label>
                                    <input type="file" name="file_aset" id="file_aset" required
                                           class="mt-1 block w-full text-sm text-gray-500
                                                  file:mr-4 file:py-2 file:px-4
                                                  file:rounded-full file:border-0
                                                  file:text-sm file:font-semibold
                                                  file:bg-amber-50 file:text-amber-700
                                                  hover:file:bg-amber-100 cursor-pointer"/>
                                    @error('file_aset')
                                        <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="flex justify-end">
                            <button type="submit"
                                    class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-blue-500 to-purple-600 
                                           text-white font-medium rounded-lg shadow-lg hover:shadow-xl transform 
                                           hover:-translate-y-0.5 transition-all duration-200">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                          d="M7 16a4 4 0 01-4-4v-1c0-1.077 0-2.341 0-3.616C3 4.606 4.606 3 6.616 3h10.768C19.394 3 21 4.606 21 6.384v1C21 8.341 21 9.606 21 11c0 2.21-1.79 4-4 4H7zM12 8v4m-2-2h4"/>
                                </svg>
                                Unggah Laporan
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
