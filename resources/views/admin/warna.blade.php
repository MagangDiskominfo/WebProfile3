{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

    </style>
</head>
<body>
    <h1>Ganti Warna</h1>
    <input type="text" id="gantiWarnaText">
    <input type="color" id="inputWarna">
    <input type="button" id="tombolWarna" value= "Ganti Warna" onclick="gantiWarna()">
    
    <script>
        function gantiWarna() {
            let color = document.getElementById('inputWarna').value;
            document.body.style.backgroundColor = color;
            document.getElementById('gantiWarnaText').value = color;
        }
    </script>
</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ubah Warna Latar Belakang</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Ubah Warna Latar Belakang</h1>
        <input type="color" id="inputWarna" class="form-control mt-3">
        <button class="btn btn-primary mt-3" onclick="gantiWarna()">Simpan Warna</button>
    </div>
    
    <script>
        function gantiWarna() {
            let color = document.getElementById('inputWarna').value;
            localStorage.setItem('backgroundColor', color);
            alert('Warna latar belakang disimpan!');
        }
    </script>
</body>
</html>
