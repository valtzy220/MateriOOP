<?php

namespace App\Http\Controllers;

use App\Services\EmailNotifikasi;
use App\Services\WhatsAppNotifikasi;
use App\Services\SmsNotifikasi;

class NotifikasiController extends Controller
{
    public function index()
    {
        $pesan = "Pesanan #001 berhasil diproses.";
        
        $notifikasi = [
            new EmailNotifikasi(),
            new WhatsAppNotifikasi(),
            new SmsNotifikasi(),
        ];
        
        $hasil = [];
        
        
        foreach ($notifikasi as $item) {
            $hasil[] = $item->kirim($pesan);
        }

       
        return view('notifikasi', [
            'hasil' => $hasil
        ]);
    }
}