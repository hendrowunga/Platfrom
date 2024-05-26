<?php

namespace App\Models;

use CodeIgniter\Model;

class AsistenModels extends Model
{
    protected $table = "asisten";
    protected $allowedFields = ['NIM', 'NAMA', 'PRAKTIKUM', 'IPK'];
    public function getAllAsisten()
    {
        $daftarAsisten = $this->findAll();
        return $daftarAsisten;
    }
}