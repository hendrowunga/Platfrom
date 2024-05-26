<?php

namespace App\Models;

use CodeIgniter\Model;

class BukuModels extends Model
{
    public function ambilBuku()
    {
        $buku = [
            'author' => 'Yuval Noah Harari',
            'title' => 'Sapiens: A Brief History of Humandkind',
        ];
        return $buku;
    }
}