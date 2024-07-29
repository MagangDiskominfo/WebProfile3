<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/detail.css') }}">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title text-center">{{ $berita->title }}</h1>
                <p class="card-text">{{ $berita->body }}</p>
                <img src="/storage/berita/{{ $berita->image_berita }}" class="img-fluid mx-auto d-block" alt="Berita Image">
            </div>
        </div>
    </div>
</body>
</html>
