<!DOCTYPE html>
<html lang="id" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login - Sistem Manajemen Masjid</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600&display=swap" rel="stylesheet" />
    
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="h-full">
    <div class="min-h-full flex">
        <!-- Left Panel - Islamic Background -->
        <div class="flex-1 hidden lg:block relative overflow-hidden">
            <!-- Background with Islamic pattern -->
            <div class="absolute inset-0 bg-gradient-to-br from-emerald-600 via-teal-700 to-cyan-800">
                <!-- Islamic geometric pattern overlay -->
                <div class="absolute inset-0 opacity-10">
                    <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <pattern id="islamic-pattern" x="0" y="0" width="120" height="120" patternUnits="userSpaceOnUse">
                                <g fill="none" stroke="white" stroke-width="1">
                                    <circle cx="60" cy="60" r="50"/>
                                    <circle cx="60" cy="60" r="30"/>
                                    <path d="M60,10 L110,60 L60,110 L10,60 Z"/>
                                    <path d="M60,30 L90,60 L60,90 L30,60 Z"/>
                                </g>
                            </pattern>
                        </defs>
                        <rect width="100%" height="100%" fill="url(#islamic-pattern)"/>
                    </svg>
                </div>
                
                <!-- Mosque silhouette -->
                <div class="absolute bottom-0 left-0 right-0 h-64 bg-black bg-opacity-20">
                    <svg viewBox="0 0 400 160" class="w-full h-full">
                        <path fill="rgba(0,0,0,0.3)" d="M0,160 L0,80 Q50,60 80,80 L80,40 Q100,20 120,40 L120,80 Q150,60 180,80 L180,120 Q200,100 220,120 L220,80 Q250,60 280,80 L280,40 Q300,20 320,40 L320,80 Q350,60 400,80 L400,160 Z"/>
                    </svg>
                </div>
            </div>
            
            <!-- Content overlay -->
            <div class="relative z-10 flex flex-col justify-center px-12 py-24 text-white">
                <div class="max-w-md">
                    <div class="mb-8">
                        <div class="w-16 h-16 bg-white bg-opacity-20 rounded-full flex items-center justify-center mb-6">
                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3z"/>
                            </svg>
                        </div>
                        <h1 class="text-4xl font-bold mb-4">Sistem Manajemen Masjid</h1>
                        <p class="text-xl text-emerald-100">Kelola laporan dan administrasi masjid dengan mudah dan efisien</p>
                    </div>
                    
                    <div class="space-y-4 text-emerald-100">
                        <div class="flex items-center">
                            <div class="w-2 h-2 bg-emerald-300 rounded-full mr-3"></div>
                            <span>Dashboard monitoring laporan real-time</span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-2 h-2 bg-emerald-300 rounded-full mr-3"></div>
                            <span>Manajemen data masjid terpusat</span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-2 h-2 bg-emerald-300 rounded-full mr-3"></div>
                            <span>Upload laporan bulanan otomatis</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Panel - Login Form -->
        <div class="flex-1 flex flex-col justify-center px-4 sm:px-6 lg:px-8 bg-gray-50">
            <div class="mx-auto w-full max-w-md">
                <!-- Header -->
                <div class="text-center mb-8">
                    <div class="flex justify-center mb-6">
                        <div class="w-12 h-12 bg-emerald-600 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3z"/>
                            </svg>
                        </div>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-900 mb-2">Selamat Datang</h2>
                    <p class="text-gray-600">Masuk ke akun Anda untuk melanjutkan</p>
                </div>

                <!-- Session Status -->
                @if (session('status'))
                    <div class="mb-4 p-4 bg-green-50 border border-green-200 rounded-lg">
                        <p class="text-sm text-green-800">{{ session('status') }}</p>
                    </div>
                @endif

                <!-- Login Form -->
                <form method="POST" action="{{ route('login') }}" class="space-y-6">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                            Email
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                                </svg>
                            </div>
                            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username"
                                   class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 @error('email') border-red-500 @enderror"
                                   placeholder="Masukkan email Anda">
                        </div>
                        @error('email')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-2">
                            Password
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                            </div>
                            <input id="password" type="password" name="password" required autocomplete="current-password"
                                   class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 @error('password') border-red-500 @enderror"
                                   placeholder="Masukkan password Anda">
                        </div>
                        @error('password')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Remember Me -->
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input id="remember_me" type="checkbox" name="remember" 
                                   class="h-4 w-4 rounded border-gray-300 text-emerald-600 focus:ring-emerald-500">
                            <label for="remember_me" class="ml-2 block text-sm text-gray-700">
                                Ingat saya
                            </label>
                        </div>

                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" 
                               class="text-sm text-emerald-600 hover:text-emerald-500 font-medium">
                                Lupa password?
                            </a>
                        @endif
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" 
                            class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-emerald-600 hover:bg-emerald-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500 transition-colors duration-200">
                        Masuk
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>