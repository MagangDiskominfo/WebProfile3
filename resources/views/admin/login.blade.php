<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Dinas Komunikasi dan Informatika Kota Jambi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 87vh;
            background-color: #f8f8f8;
        }

        .container {
            display: flex;
            width: 100%;
            height: 100%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .left {
            background-color: #003f88;
            color: #fff;
            padding: 50px;
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            height: 100%;
        }

        .left img {
            width: 150px;
            margin-bottom: 20px;
        }

        .left h1 {
            font-size: 24px;
            line-height: 1.4;
        }

        .right {
            background-color: #fff;
            padding: 50px;
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 100%;
        }

        .back-link {
            display: inline-block;
            margin-bottom: 20px;
            color: #003f88;
            text-decoration: none;
            font-weight: bold;
        }

        h2 {
            margin: 0 0 20px;
            font-size: 24px;
            color: #333;
        }

        p {
            margin: 0 0 20px;
            color: #666;
        }

        .input-group {
            margin-bottom: 20px;
        }

        .input-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #333;
        }

        .input-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #003f88;
            border: none;
            color: #fff;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #002f6c;
        }

        .forgot-password {
            display: block;
            margin-top: 10px;
            color: #003f88;
            text-decoration: none;
            font-size: 14px;
        }

        .forgot-password:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="left">
            <div class="logo">
                <img src="../img/login.png" alt="Logo">
            </div>
            <h1>Dinas Komunikasi dan Informatika<br>Kota Jambi</h1>
        </div>
        <div class="right">
            <a href="#" class="back-link">Kembali</a>
            <h2>Masuk ke Dashboard Admin</h2>
            <p>Silahkan isi dengan benar untuk mengakses dashboard Admin!</p>
            <form action='/login' method="POST">
                @csrf
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Masukkan Akun Email">
                </div>
                <div class="input-group">
                    <label for="password">Kata Sandi</label>
                    <input type="password" id="password" name="password" placeholder="Masukkan Kata Sandi">
                </div>
                <button type="submit">Masuk</button>
                <a href="#" class="forgot-password">Lupa Kata Sandi?</a>
            </form>
        </div>
    </div>
</body>
</html>
