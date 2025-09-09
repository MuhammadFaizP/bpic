@extends('layouts.app')

@section('header')
    <div class="flex items-center space-x-4">
        <a href="{{ route('superadmin.masjid.index') }}" class="text-gray-500 hover:text-gray-700">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
            </svg>
        </a>
        <h2 class="font-semibold text-xl text-gray-800">Tambah Masjid Baru</h2>
    </div>
@endsection

@section('content')
    <div class="py-6">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white rounded-xl shadow-sm border p-6">
                <form action="{{ route('superadmin.masjid.store') }}" method="POST" class="space-y-6">
                    @csrf
                    
                    <!-- Nama Masjid -->
                    <div>
                        <label for="nama" class="block text-sm font-medium text-gray-700 mb-2">Nama Masjid</label>
                        <input type="text" id="nama" name="nama" value="{{ old('nama') }}" 
                               class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 @error('nama') border-red-500 @enderror"
                               placeholder="Contoh: Masjid Al-Ikhlas" required>
                        @error('nama')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <!-- Alamat -->
                    <div>
                        <label for="alamat" class="block text-sm font-medium text-gray-700 mb-2">Alamat</label>
                        <textarea id="alamat" name="alamat" rows="3" 
                                  class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 @error('alamat') border-red-500 @enderror"
                                  placeholder="Alamat lengkap masjid">{{ old('alamat') }}</textarea>
                        @error('alamat')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <!-- Admin Masjid (Optional) -->
                    <div>
                        <label for="admin_id" class="block text-sm font-medium text-gray-700 mb-2">
                            Admin Masjid <span class="text-sm text-gray-500">(Opsional)</span>
                        </label>
                        <select id="admin_id" name="admin_id" 
                                class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 @error('admin_id') border-red-500 @enderror">
                            <option value="">Pilih Admin (atau kosongkan)</option>
                            @foreach($availableAdmins as $admin)
                                <option value="{{ $admin->id }}" {{ old('admin_id') == $admin->id ? 'selected' : '' }}>
                                    {{ $admin->name }} ({{ $admin->email }})
                                </option>
                            @endforeach
                        </select>
                        @error('admin_id')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                        <p class="mt-1 text-xs text-gray-500">
                            Hanya menampilkan admin yang belum terikat dengan masjid lain
                        </p>
                    </div>
                    
                    <!-- Submit Buttons -->
                    <div class="flex justify-end space-x-3 pt-4">
                        <a href="{{ route('superadmin.masjid.index') }}" 
                           class="px-4 py-2 text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-200 transition-colors">
                            Batal
                        </a>
                        <button type="submit" 
                                class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition-colors">
                            Simpan Masjid
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection