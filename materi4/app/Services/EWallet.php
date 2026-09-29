<?php

namespace App\Services;

use App\Contracts\PembayaranInterface;

class EWallet implements PembayaranInterface
{
    public function bayar(float $jumlah): string
    {
        return "Pembayaran sebesar Rp " . number_format($jumlah, 0, ',', '.') . " berhasil dilakukan via E-Wallet (Scan QRIS).";
    }
}