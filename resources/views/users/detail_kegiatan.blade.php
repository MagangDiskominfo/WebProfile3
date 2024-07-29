<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 0;
        }

        .card {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .card-title {
            font-size: 2.5em;
            margin-bottom: 20px;
            color: #333;
        }

        .card-text {
            font-size: 1.1em;
            margin-bottom: 20px;
            line-height: 1.8;
            text-align: justify;
        }

        img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title text-center">{{ $kegiatan->judul_kegiatan }}</h1>
                <p class="card-text">{{ $kegiatan->deskripsi_kegiatan }}</p>
                <img src="/storage/kegiatan/{{ $kegiatan->gambar_kegiatan }}" class="img-fluid mx-auto d-block" alt="Gambar Kegiatan">
            </div>
        </div>
    </div>
</body>
</html>
