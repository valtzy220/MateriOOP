<?php
namespace App\Services;
use App\Contracts\NotifikasiInterface;
class WhatsAppNotifikasi implements NotifikasiInterface
{
public function kirim($pesan)
{
return "WhatsApp terkirim: " . $pesan;
}
}