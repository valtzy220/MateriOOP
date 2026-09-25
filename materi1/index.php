<?php 

class Karyawan {
    protected string $nama;
    protected string $nip;
    protected string $departemen;

    public function __construct(string $nama, string $nip, string $departemen) {
        $this->nama = $nama;
        $this->nip = $nip;
        $this->departemen = $departemen;
    }

    public function getInfo(): string {
        return "Nama: {$this->nama} | NIP: {$this->nip} | Departemen: {$this->departemen}";
    }

    public function hitungGaji(): float {
        return 0;
    }
}

class KaryawanTetap extends Karyawan {
    private float $gajiPokok;
    private float $tunjangan;

    public function __construct(
        string $nama,
        string $nip,
        string $departemen,
        float $gajiPokok,
        float $tunjangan
    ) {
        parent::__construct($nama, $nip, $departemen);
        $this->gajiPokok = $gajiPokok;
        $this->tunjangan = $tunjangan;
    }

    public function hitungGaji(): float {
        return $this->gajiPokok + $this->tunjangan;
    }

    public function getStatus(): string { 
        return "Karyawan Tetap"; 
    }
} 

class KaryawanParuhWaktu extends Karyawan {
    private int $jumlahJam;
    private float $tarifPerJam;

    public function __construct(
        string $nama,
        string $nip,
        string $departemen,
        int $jumlahJam,
        float $tarifPerJam
    ) {
        parent::__construct($nama, $nip, $departemen);
        $this->jumlahJam = $jumlahJam;
        $this->tarifPerJam = $tarifPerJam;
    }

    public function hitungGaji(): float {
        return $this->jumlahJam * $this->tarifPerJam;
    }

    public function getStatus(): string {
        return "Karyawan Paruh Waktu";
    }
}

$daftarKaryawan = [
    new KaryawanTetap("Budi", "12345", "IT", 5000000, 1000000),
    new KaryawanParuhWaktu("Siti", "67890", "HR", 20, 50000),
    new KaryawanParuhWaktu("Agus", "54321", "Finance", 15, 60000),
    new KaryawanTetap("Dewi", "98765", "Marketing", 6000000, 1500000)
];

echo "=== LAPORAN PENGGAJIAN BULANAN ===\n";
echo str_repeat("-", 50) . "\n";

$totalGaji = 0;

foreach ($daftarKaryawan as $index => $karyawan) {
    $no    = $index + 1;
    $gaji  = $karyawan->hitungGaji();
    $totalGaji += $gaji;

    echo "\n[{$no}] " . $karyawan->getStatus() . "\n";
    echo "    " . $karyawan->getInfo() . "\n";
    echo "    Gaji Bulan Ini : Rp " . number_format($gaji, 0, ',', '.') . "\n";
}

echo "\n" . str_repeat("=", 50) . "\n";
echo "TOTAL PENGELUARAN GAJI: Rp " . number_format($totalGaji, 0, ',', '.') . "\n";
echo str_repeat("=", 50) . "\n";