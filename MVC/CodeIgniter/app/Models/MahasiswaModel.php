<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table = "mahasiswa";
    protected $allowedFields = ['NIM', 'NAMA'];
    public function simpanMahasiswa($data)
    {
        $this->save($data);
    }
}