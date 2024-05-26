<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModels extends Model
{
    protected $table = "mahasiswa";
    protected $allowedFields = ['NIM', 'NAMA'];

    public function getAllMahasiswa()
    {
        $daftarMhs = $this->findAll();
        return $daftarMhs;
    }
}