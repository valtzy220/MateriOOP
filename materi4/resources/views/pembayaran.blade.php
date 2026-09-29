<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studi Kasus Sistem Pembayaran</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background-color: #f4f4f9; }
        .card { background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); max-width: 600px; }
        h2 { color: #333; }
        ul { list-style-type: none; padding: 0; }
        li { background: #eef2ff; margin: 10px 0; padding: 12px; border-left: 4px solid #4f46e5; border-radius: 4px; }
    </style>
</head>
<body>

    <div class="card">
        <h2>Sistem Pembayaran</h2>
        <p><strong>Total Transaksi:</strong> Rp {{ number_format($jumlah, 0, ',', '.') }}</p>
        
        <h3>Hasil Simulasi Berbagai Metode:</h3>
        <ul>
            @foreach ($hasil as $metode => $pesan)
                <li>
                    <strong>{{ $metode }}:</strong><br>
                    {{ $pesan }}
                </li>
            @endforeach
        </ul>
    </div>

</body>
</html>
