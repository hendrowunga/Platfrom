<?php

namespace App\Controllers;

use App\Models\AsistenModels;

class AsistenController extends BaseController
{
    public function index()
    {
        $asistenModel = model(AsistenModels::class);
        $data = [
            "daftarAsisten" => $asistenModel->getAllAsisten(),
            "judul" => "Daftar Asisten"
        ];
        return view('asisten_view', $data);
    }
}