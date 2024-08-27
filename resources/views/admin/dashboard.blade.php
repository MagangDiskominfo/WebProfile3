<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
</head>

<body>
    <div class="container-fluid d-flex flex-column min-vh-100">
        <div class="row flex-grow-1">
            @include('admin/layout/sidebar')
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-0" style="margin-top:6rem">
                @include('admin/layout/navbar')
                @yield('content')
                <footer class="shadow-lg mt-3 mb-0 pb-1 bg-white">
                    <div class="container text-center">
                        {{-- <p>&copy; 2024 Pemerintah Provinsi Jambi. All rights reserved. © </p> --}}
                        <p>Copyright &copy; Dinas Komunikasi dan Informatika Kota Jambi 2024</p>
                    </div>
                </footer>
            </main>
        </div>


    </div>
    <script>
        feather.replace(); // Initialize Feather Icons
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
