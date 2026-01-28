{{-- <head>
    @vite('resources/css/app.css')
</head>


<body class="flex flex-col md:flex-row">
    @include('partials.sidebarstudent')

    <main class="flex-1 p-4 md:p-10 overflow-x-hidden ml-0 md:ml-64 mt-8">
        @yield('content')
    </main>

    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Sukses!',
                text: '{{ session('success') }}',
                showConfirmButton: false,
                timer: 2000
            });
        </script>
    @endif

    @if (session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Gagal!',
                text: '{{ session('error') }}',
                showConfirmButton: false,
                timer: 2000
            });
        </script>
    @endif
</body> --}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <script src="https://unpkg.com/flowbite@2.3.0/dist/flowbite.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.7/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    @vite('resources/css/app.css')
    @stack('scripts')
    <title>@yield('title', '')</title>
</head>
<body class="bg-gray-50">

    @include('partials.sidebarstudent')

    <div class="p-4 sm:ml-64">
        <div class="p-4 mt-14">
            @yield('content')
        </div>
    </div>

    <script>
        // Script Logout
        const btnLogout = document.getElementById('btn-logout-sidebar');
        if(btnLogout){
            btnLogout.addEventListener('click', function () {
                Swal.fire({
                    title: 'Keluar?',
                    text: "Apakah kamu yakin ingin keluar?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, keluar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById('logout-sidebar-form').submit();
                    }
                });
            });
        }
    </script>
</body>
</html>
