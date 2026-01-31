@extends('layout.landing_layout')

@section('content')
    <nav class="bg-primary text-white sticky top-0 z-50 shadow-md">
        <div class="container mx-auto px-4 py-3">
            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-2">
                    <i class="fas fa-school text-2xl"></i>
                    <span class="text-xl font-bold">SIPASAR</span>
                </div>

                <div class="hidden md:flex space-x-8">
                    <a href="#beranda" class="hover:text-blue-200 transition duration-300">Beranda</a>
                    <a href="#fitur" class="hover:text-blue-200 transition duration-300">Fitur</a>
                    <a href="#cara-kerja" class="hover:text-blue-200 transition duration-300">Cara Kerja</a>
                    <a href="#testimoni" class="hover:text-blue-200 transition duration-300">Testimoni</a>
                    <a href="#kontak" class="hover:text-blue-200 transition duration-300">Kontak</a>
                </div>

                <div class="flex items-center space-x-4">
                    <a href="{{ route('student.login.form') }}"
                        class="hidden md:inline-block border border-white px-5 py-2 rounded-full font-semibold hover:bg-white hover:text-primary transition duration-300">
                        Masuk
                    </a>
                </div>

                <button id="mobile-menu-button" class="md:hidden text-2xl">
                    <i class="fas fa-bars"></i>
                </button>
            </div>

            <div id="mobile-menu" class="md:hidden mt-4 hidden">
                <div class="flex flex-col space-y-4 pb-4">
                    <a href="#beranda" class="hover:text-blue-200 transition duration-300">Beranda</a>
                    <a href="#fitur" class="hover:text-blue-200 transition duration-300">Fitur</a>
                    <a href="#cara-kerja" class="hover:text-blue-200 transition duration-300">Cara Kerja</a>
                    <a href="#testimoni" class="hover:text-blue-200 transition duration-300">Testimoni</a>
                    <a href="#kontak" class="hover:text-blue-200 transition duration-300">Kontak</a>
                    <a href="{{ route('student.login.form') }}"
                        class="hover:text-blue-200 transition duration-300">Masuk</a>
                </div>
            </div>
        </div>
    </nav>

    <section id="beranda" class="bg-gray-50 py-12 md:py-20">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-10 md:mb-0">
                    <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-6">
                        Laporan Kerusakan Sarana Sekolah Menjadi Lebih Mudah
                    </h1>
                    <p class="text-lg text-gray-600 mb-8">
                        Sipasar adalah aplikasi pengaduan sarana dan prasarana sekolah yang memudahkan siswa
                        untuk melaporkan kerusakan fasilitas sekolah dengan cepat dan transparan.
                    </p>


                    <div class="mt-10 flex items-center">
                        <div class="flex -space-x-3">
                            <div
                                class="w-10 h-10 rounded-full bg-blue-100 border-2 border-white flex items-center justify-center">
                                <span class="text-blue-700 font-bold">S</span>
                            </div>
                            <div
                                class="w-10 h-10 rounded-full bg-green-100 border-2 border-white flex items-center justify-center">
                                <span class="text-green-700 font-bold">G</span>
                            </div>
                            <div
                                class="w-10 h-10 rounded-full bg-yellow-100 border-2 border-white flex items-center justify-center">
                                <span class="text-yellow-700 font-bold">T</span>
                            </div>
                            <div
                                class="w-10 h-10 rounded-full bg-purple-100 border-2 border-white flex items-center justify-center">
                                <span class="text-purple-700 font-bold">K</span>
                            </div>
                        </div>
                        <div class="ml-4">
                            <p class="font-semibold">Digunakan oleh 500+ sekolah</p>
                            <p class="text-sm text-gray-500">Siswa, Guru, Tata Usaha, dan Kepala Sekolah</p>
                        </div>
                    </div>
                </div>

                <div class="md:w-1/2 flex justify-center">
                    <div class="relative w-full max-w-md">
                        <div class="bg-white rounded-2xl shadow-xl p-6 border border-gray-100">
                            <div class="flex justify-between items-center mb-6">
                                <h3 class="text-xl font-bold text-gray-800">Laporan Terkini</h3>
                            </div>

                            <div class="space-y-4">
                                <div class="flex items-start">
                                    <div class="bg-blue-50 p-3 rounded-lg">
                                        <i class="fas fa-tools text-primary"></i>
                                    </div>
                                    <div class="ml-4">
                                        <h4 class="font-semibold">Meja Rusak di Kelas 8A</h4>
                                        <p class="text-sm text-gray-600">Dilaporkan oleh: Andi - 15 menit lalu</p>
                                    </div>
                                </div>

                                <div class="flex items-start">
                                    <div class="bg-yellow-50 p-3 rounded-lg">
                                        <i class="fas fa-faucet text-yellow-600"></i>
                                    </div>
                                    <div class="ml-4">
                                        <h4 class="font-semibold">Kran Air Bocor di Toilet</h4>
                                        <p class="text-sm text-gray-600">Dilaporkan oleh: Bu Sari - 1 jam lalu</p>
                                    </div>
                                </div>

                                <div class="flex items-start">
                                    <div class="bg-red-50 p-3 rounded-lg">
                                        <i class="fas fa-lightbulb text-red-600"></i>
                                    </div>
                                    <div class="ml-4">
                                        <h4 class="font-semibold">Lampu Kelas 9B Mati</h4>
                                        <p class="text-sm text-gray-600">Dilaporkan oleh: Rina - 2 jam lalu</p>
                                    </div>
                                </div>

                                <div class="flex items-start">
                                    <div class="bg-green-50 p-3 rounded-lg">
                                        <i class="fas fa-check-circle text-green-600"></i>
                                    </div>
                                    <div class="ml-4">
                                        <h4 class="font-semibold">Pintu Kelas 7C Sudah Diperbaiki</h4>
                                        <p class="text-sm text-gray-600">Diselesaikan oleh: Tim Maintenance</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="fitur" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Fitur Unggulan Aplikasi</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">SIPASAR dilengkapi dengan berbagai fitur yang
                    memudahkan proses pelaporan dan perbaikan sarana sekolah</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div
                    class="bg-white p-8 rounded-2xl border border-gray-200 shadow-sm hover:shadow-md transition duration-300">
                    <div class="bg-blue-100 w-14 h-14 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-bullhorn text-primary text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Pelaporan Cepat</h3>
                    <p class="text-gray-600 mb-4">Laporkan kerusakan sarana sekolah hanya dengan beberapa klik. Unggah foto
                        dan deskripsi kerusakan dengan mudah.</p>
                    <ul class="space-y-2">
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Unggah foto kerusakan</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Pilih kategori kerusakan</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Lokasi spesifik di sekolah</span>
                        </li>
                    </ul>
                </div>

                <div
                    class="bg-white p-8 rounded-2xl border border-gray-200 shadow-sm hover:shadow-md transition duration-300">
                    <div class="bg-green-100 w-14 h-14 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-tasks text-green-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Tracking Status</h3>
                    <p class="text-gray-600 mb-4">Pantau status laporan Anda dari awal hingga selesai. Dapatkan notifikasi
                        real-time tentang progres perbaikan.</p>
                    <ul class="space-y-2">
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Status real-time</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Notifikasi progres</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Estimasi waktu perbaikan</span>
                        </li>
                    </ul>
                </div>

                <div
                    class="bg-white p-8 rounded-2xl border border-gray-200 shadow-sm hover:shadow-md transition duration-300">
                    <div class="bg-purple-100 w-14 h-14 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-chart-bar text-purple-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Analitik & Laporan</h3>
                    <p class="text-gray-600 mb-4">Admin dapat melihat data statistik kerusakan dan analisis untuk
                        perencanaan perawatan sarana sekolah.</p>
                    <ul class="space-y-2">
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Dashboard lengkap</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Laporan bulanan/tahunan</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Analisis pola kerusakan</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="cara-kerja" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Cara Kerja Aplikasi</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">Hanya dengan 4 langkah mudah, laporan kerusakan sarana
                    sekolah Anda akan segera ditindaklanjuti</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="relative">
                        <div
                            class="bg-primary w-20 h-20 rounded-full flex items-center justify-center text-white text-2xl font-bold mx-auto mb-6 shadow-md">
                            1
                        </div>
                        <div
                            class="absolute top-0 right-0 md:right-[-20px] lg:right-0 xl:right-[-20px] h-full flex items-center">
                            <div class="hidden lg:block text-gray-300">
                                <i class="fas fa-arrow-right text-3xl"></i>
                            </div>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Masuk ke SIPASAR</h3>
                    <p class="text-gray-600">Gunakan akun Anda untuk masuk dan mulai membuat laporan.</p>
                </div>

                <div class="text-center">
                    <div class="relative">
                        <div
                            class="bg-primary w-20 h-20 rounded-full flex items-center justify-center text-white text-2xl font-bold mx-auto mb-6 shadow-md">
                            2
                        </div>
                        <div
                            class="absolute top-0 right-0 md:right-[-20px] lg:right-0 xl:right-[-20px] h-full flex items-center">
                            <div class="hidden lg:block text-gray-300">
                                <i class="fas fa-arrow-right text-3xl"></i>
                            </div>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Buat Laporan</h3>
                    <p class="text-gray-600">Laporkan kerusakan dengan foto, deskripsi, dan lokasi spesifik.</p>
                </div>

                <div class="text-center">
                    <div class="relative">
                        <div
                            class="bg-primary w-20 h-20 rounded-full flex items-center justify-center text-white text-2xl font-bold mx-auto mb-6 shadow-md">
                            3
                        </div>
                        <div
                            class="absolute top-0 right-0 md:right-[-20px] lg:right-0 xl:right-[-20px] h-full flex items-center">
                            <div class="hidden lg:block text-gray-300">
                                <i class="fas fa-arrow-right text-3xl"></i>
                            </div>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Proses Perbaikan</h3>
                    <p class="text-gray-600">Tim maintenance menerima notifikasi dan segera menindaklanjuti.</p>
                </div>

                <div class="text-center">
                    <div
                        class="bg-primary w-20 h-20 rounded-full flex items-center justify-center text-white text-2xl font-bold mx-auto mb-6 shadow-md">
                        4
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Konfirmasi Selesai</h3>
                    <p class="text-gray-600">Anda mendapat notifikasi saat perbaikan selesai dan dapat memberikan
                        konfirmasi.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="testimoni" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Apa Kata Pengguna?</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">Dengarkan pengalaman sekolah-sekolah yang telah
                    menggunakan SIPASAR</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-2xl border border-gray-200 shadow-sm">
                    <div class="flex items-center mb-6">
                        <div
                            class="w-14 h-14 rounded-full bg-blue-100 flex items-center justify-center text-primary font-bold text-xl">
                            SM
                        </div>
                        <div class="ml-4">
                            <h4 class="font-bold text-lg">Siswa Mulyono</h4>
                            <p class="text-gray-500">Siswa Kelas 11, SMA Negeri 1 Jakarta</p>
                        </div>
                    </div>
                    <p class="text-gray-600 italic mb-6">"Dulu kalau ada kursi rusak harus lapor ke guru dulu, sekarang
                        tinggal foto pakai aplikasi, besoknya sudah diperbaiki. Sangat membantu!"</p>
                    <div class="flex text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>

                <div class="bg-white p-8 rounded-2xl border border-gray-200 shadow-sm">
                    <div class="flex items-center mb-6">
                        <div
                            class="w-14 h-14 rounded-full bg-green-100 flex items-center justify-center text-green-600 font-bold text-xl">
                            GP
                        </div>
                        <div class="ml-4">
                            <h4 class="font-bold text-lg">Guru Pratama</h4>
                            <p class="text-gray-500">Guru SMP Negeri 5 Bandung</p>
                        </div>
                    </div>
                    <p class="text-gray-600 italic mb-6">"Sebagai guru, saya sangat terbantu dengan aplikasi ini. Sekarang
                        siswa bisa langsung melaporkan kerusakan tanpa harus melalui saya terlebih dahulu."</p>
                    <div class="flex text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="bg-white p-8 rounded-2xl border border-gray-200 shadow-sm">
                    <div class="flex items-center mb-6">
                        <div
                            class="w-14 h-14 rounded-full bg-purple-100 flex items-center justify-center text-purple-600 font-bold text-xl">
                            KS
                        </div>
                        <div class="ml-4">
                            <h4 class="font-bold text-lg">Kepala Sekolah</h4>
                            <p class="text-gray-500">SD Negeri 3 Surabaya</p>
                        </div>
                    </div>
                    <p class="text-gray-600 italic mb-6">"Aplikasi ini sangat membantu administrasi sekolah. Data kerusakan
                        dan perbaikan menjadi terorganisir, anggaran perawatan pun bisa lebih tepat sasaran."</p>
                    <div class="flex text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-primary">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">Siap Mengoptimalkan Perawatan Sarana Sekolah?</h2>
            <p class="text-xl text-blue-100 mb-10 max-w-2xl mx-auto">Bergabung dengan 500+ sekolah yang telah menggunakan
                SIPASAR untuk pengelolaan sarana prasarana yang lebih baik</p>

        </div>
    </section>

    <footer id="kontak" class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center space-x-2 mb-6">
                        <i class="fas fa-school text-3xl text-primary"></i>
                        <span class="text-2xl font-bold">SIPASAR</span>
                    </div>
                    <p class="text-gray-400 mb-6">Aplikasi pengaduan sarana prasarana sekolah yang memudahkan pelaporan dan
                        perbaikan fasilitas pendidikan.</p>
                    <div class="flex space-x-4">
                        <a href="#"
                            class="bg-gray-800 w-10 h-10 rounded-full flex items-center justify-center hover:bg-primary transition duration-300">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#"
                            class="bg-gray-800 w-10 h-10 rounded-full flex items-center justify-center hover:bg-primary transition duration-300">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#"
                            class="bg-gray-800 w-10 h-10 rounded-full flex items-center justify-center hover:bg-primary transition duration-300">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#"
                            class="bg-gray-800 w-10 h-10 rounded-full flex items-center justify-center hover:bg-primary transition duration-300">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>

                <div>
                    <h4 class="text-xl font-bold mb-6">Tautan Cepat</h4>
                    <ul class="space-y-3">
                        <li>
                            <a href="#beranda" class="text-gray-400 hover:text-white transition duration-300">Beranda

                            </a>
                        </li>
                        <li>
                            <a href="#fitur" class="text-gray-400 hover:text-white transition duration-300">Fitur

                            </a>
                        </li>
                        <li>
                            <a href="#cara-kerja" class="text-gray-400 hover:text-white transition duration-300">Cara
                                Kerja
                            </a>
                            </li>
                        <li>
                            <a href="#testimoni"
                                class="text-gray-400 hover:text-white transition duration-300">Testimoni
                            </a>
                            </li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-xl font-bold mb-6">Kontak Kami</h4>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt text-primary mt-1 mr-3"></i>
                            <span class="text-gray-400">Jl. Pendidikan No. 123, Jakarta Pusat</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-phone text-primary mr-3"></i>
                            <span class="text-gray-400">(021) 1234-5678</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-envelope text-primary mr-3"></i>
                            <span class="text-gray-400">info@sekolahexample.com</span>
                        </li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-xl font-bold mb-6">Tim Pengembang</h4>
                    <p class="text-gray-400 mb-4">Aplikasi ini dibuat dan dikembangkan dengan penuh dedikasi oleh:</p>
                    <ul class="text-gray-400 space-y-2">
                        <li class="flex items-center"><i class="fas fa-code text-primary mr-2"></i> Siswa XII RPL 2</li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-800 mt-10 pt-6 text-center text-gray-400">
                <p>&copy; 2026 SIPASAR. Hak cipta dilindungi undang-undang.</p>
                <p class="mt-2">Dikembangkan dengan <i class="fas fa-heart text-red-500"></i> untuk pendidikan Indonesia
                    yang lebih baik</p>
            </div>
        </div>
    </footer>

    @push('scripts')
        <script>
            document.getElementById('mobile-menu-button').addEventListener('click', function() {
                const mobileMenu = document.getElementById('mobile-menu');
                if (mobileMenu.classList.contains('hidden')) {
                    mobileMenu.classList.remove('hidden');
                } else {
                    mobileMenu.classList.add('hidden');
                }
            });

            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();

                    const targetId = this.getAttribute('href');
                    if (targetId === '#') return;

                    const targetElement = document.querySelector(targetId);
                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop - 80,
                            behavior: 'smooth'
                        });

                        const mobileMenu = document.getElementById('mobile-menu');
                        mobileMenu.classList.add('hidden');
                    }
                });
            });
        </script>
    @endpush
@endsection
