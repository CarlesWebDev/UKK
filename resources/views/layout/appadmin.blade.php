<head>
    @vite('resources/css/app.css')
</head>


<body class="flex flex-col md:flex-row">
    @include('partials.sidebaradmin')

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
</body>
