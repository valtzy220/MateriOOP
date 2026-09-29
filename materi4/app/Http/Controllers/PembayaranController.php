<?php

namespace App\Http\Controllers;

use App\Contracts\PembayaranInterface;
use App\Services\TransferBank;
use App\Services\EWallet;
use App\Services\Cash;

class PembayaranController extends Controller
{
    public function indeks()
    {
        $jumlahTransaksi = 150000;

        // Inisialisasi masing-masing metode pembayaran yang mengimplementasikan PembayaranInterface
        $metodePembayaran = [
            'Transfer Bank' => new TransferBank(),
            'E-Wallet'      => new EWallet(),
            'Cash'          => new Cash(),
        ];

        $hasilTransaksi = [];

        // Memanggil method bayar() pada setiap instance
        foreach ($metodePembayaran as $namaMetode => $opsi) {
            if ($opsi instanceof PembayaranInterface) {
                $hasilTransaksi[$namaMetode] = $opsi->bayar($jumlahTransaksi);
            }
        }

        return view('pembayaran', [
            'jumlah' => $jumlahTransaksi,
            'hasil'  => $hasilTransaksi
        ]);
    }
}