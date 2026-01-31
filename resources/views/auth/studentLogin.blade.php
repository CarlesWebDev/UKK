@extends('layout.login_layout')

@section('content')
    <div class="min-h-screen flex items-center justify-center bg-white p-4">
        <div class="w-full max-w-4xl flex flex-col md:flex-row rounded-2xl overflow-hidden border border-gray-100 shadow-sm">
            <div class="md:w-1/2 bg-blue-600 p-10 md:p-14 text-white flex flex-col justify-center">
                <div class="flex items-center space-x-3 mb-10">
                    <i class="fas fa-school text-3xl"></i>
                    <span class="text-2xl font-bold tracking-tight">SIPASAR</span>
                </div>

                <h2 class="text-4xl font-bold leading-tight mb-6">Selamat Datang, Siswa.</h2>
                <p class="text-blue-100 text-lg mb-10 leading-relaxed">
                    Akses akun Anda untuk mengelola laporan fasilitas sekolah secara transparan.
                </p>

                <div class="space-y-6">
                    <div class="flex items-center space-x-4">
                        <div class="w-1 h-1 bg-white rounded-full"></div>
                        <p class="text-sm font-medium">Pelaporan cepat & mudah</p>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="w-1 h-1 bg-white rounded-full"></div>
                        <p class="text-sm font-medium">Pantau status secara real-time</p>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="w-1 h-1 bg-white rounded-full"></div>
                        <p class="text-sm font-medium">Sistem poin apresiasi</p>
                    </div>
                </div>
            </div>

            <div class="md:w-1/2 bg-white p-10 md:p-14 flex flex-col justify-center">
                <div class="mb-10">
                    <h1 class="text-3xl font-bold text-gray-900">Login</h1>
                    <p class="text-gray-500 mt-2">Silakan masuk menggunakan kredensial Anda.</p>
                </div>

                @if ($errors->any())
                    <div class="mb-6 bg-red-50 border-l-4 border-red-500 p-4 rounded">
                        <div class="flex items-center">
                            <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                    clip-rule="evenodd" />
                            </svg>
                            <p class="ml-2 text-sm text-red-700">{{ $errors->first() }}</p>
                        </div>
                    </div>
                @endif

                <form action="{{ route('student.login') }}" method="POST" class="space-y-5">
                    @csrf

                    <div>
                        <label class="block text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2">NIS</label>
                        <input type="text" name="nis" value="{{ old('nis') }}" placeholder="Nomor Induk Siswa"
                            class="w-full rounded-lg border border-gray-200 px-4 py-3 text-gray-700 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 transition-all
                        @error('nis') border-red-500 @enderror">
                        @error('nis')
                            <p class="mt-1 text-red-500 text-xs">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <div class="relative">
                            <label
                                class="block text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2">Password</label>
                            <input type="password" name="password" placeholder="••••••••"
                                class="w-full rounded-lg border border-gray-200 px-4 py-3 text-gray-700 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 transition-all
                            @error('password') border-red-500 @enderror">
                        </div>
                        @error('password')
                            <p class="mt-1 text-red-500 text-xs">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit"
                        class="w-full bg-blue-600 hover:bg-blue-700 text-white py-3 rounded-lg font-bold transition-colors shadow-sm">
                        Masuk
                    </button>
                </form>

                <div class="mt-12 text-center">
                    <p class="text-sm text-gray-500">
                        Bukan siswa?
                        <a href="{{ route('admin.login.form') }}" class="text-blue-600 font-bold hover:underline ml-1">Admin
                            Login</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
