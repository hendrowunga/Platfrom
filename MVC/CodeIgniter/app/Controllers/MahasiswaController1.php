<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class MahasiswaController1 extends BaseController
{
    public function updateMahasiswa(): string
    {
        $nim = "225314087";
        $data = [
            'nim' => '575757',
            'nama' => 'John'
        ];
        $model = model(MahasiswaModel::class);
        $model->updateMahasiswa($nim, $data);
        return view('update_success');
    }
}
