<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Mahasiswa_Controller extends BaseController
{
    public function toInputMahasiswa(): string
    {
        return view('mahasiswa_input');
    }

    public function submitMahasiswa(): string
    {
        helper('form');
        $data = $this->request->getPost(['nim', 'nama']);
        $model = model(MahasiswaModel::class);
        $model->simpanMahasiswa($data);
        return view('mahasiswa_input', ['message' => 'Data berhasil disimpan']);
    }
}
