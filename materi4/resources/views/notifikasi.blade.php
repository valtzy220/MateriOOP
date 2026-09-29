<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifikasi Pesanan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            padding: 40px;
            margin: 0;
        }

        .container {
            max-width: 700px;
            margin: auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }

        .notifikasi {
            padding: 15px;
            margin-top: 10px;
            background-color: #e8f5e9;
            border-radius: 8px;
            color: #2e7d32;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Sistem Notifikasi</h1>
        <p>Pesanan <strong>#001</strong> berhasil diproses.</p>

        @foreach ($hasil as $pesan)
            <div class="notifikasi">
                {{ $pesan }}
            </div>
        @endforeach
    </div>

</body>
</html>