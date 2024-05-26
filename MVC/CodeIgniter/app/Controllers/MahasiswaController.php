<?php

namespace App\Controllers;

use App\Models\MahasiswaModels;

class MahasiswaController extends BaseController
{
    public function index(): string
    {
        $mhsModel = model(MahasiswaModels::class);
        $data = [
            "daftarMhs" => $mhsModel->getAllMahasiswa(),
            "judul" => "Daftar Mahasiswa"
        ];
        return view('mahasiswa_view', $data);
    }
}