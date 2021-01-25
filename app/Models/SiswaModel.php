<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaModel extends Model
{
    protected $table = 'siswa';
    protected $primaryKey = 'noInduk';
    protected $allowedFields = [
        'noInduk', 'NISN', 'namaSiswa', 'jenisKelamin', 'tempatLahir', 'tanggalLahir', 'alamat',
        'namaIbu', 'namaAyah', 'tanggalMasuk', 'status'
    ];

    public function getSiswa()
    {
        return $this->findAll();
    }
}
