<?php

namespace App\DTO;

abstract class KaryawanDTO {
    public function __construct(
        protected readonly string $nama,
        protected readonly string $nip,
        protected readonly string $departemen,
        protected readonly string $email
    ) {}

    public function getNama(): string       { return $this->nama; }
    public function getNip(): string        { return $this->nip; }
    public function getDepartemen(): string { return $this->departemen; }
    public function getEmail(): string      { return $this->email; }

    abstract public function getStatus(): string;
    abstract public function hitungGaji(): float;

    public function getGajiFormatted(): string {
        return 'Rp ' . number_format($this->hitungGaji(), 0, ',', '.');
    }
}