<?php

namespace App\Services;

use App\Contracts\PembayaranInterface;

class Cash implements PembayaranInterface
{
    public function bayar(float $jumlah): string
    {
        return "Pembayaran sebesar Rp " . number_format($jumlah, 0, ',', '.') . " berhasil diterima secara Tunai (Cash).";
    }
}