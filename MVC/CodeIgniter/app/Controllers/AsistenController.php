<?php

namespace App\Controllers;

use App\Models\AsistenModels;
use App\Models\AsistenModel;

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
    public function form()
    {
        helper('form');
        return view('asisten/formAsisten');
    }

    public function simpan()
    {
        helper('form');
        if (!$this->request->is('post')) {
            return redirect()->to('/asisten/form');
        }

        $post = $this->request->getPost(['nim', 'nama', 'praktikum', 'ipk']);
        $model = model(AsistenModel::class);
        $model->simpan($post);

        return redirect()->to('/asisten/daftar')->with('message', 'Data berhasil disimpan');
    }

    public function daftar()
    {
        $model = model(AsistenModel::class);
        $data['asisten'] = $model->findAll();

        return view('asisten/daftarAsisten', $data);
    }

    public function formEdit($nim)
    {
        $model = model(AsistenModel::class);
        $data['asisten'] = $model->where('nim', $nim)->first();

        return view('asisten/formEdit', $data);
    }

    public function update()
    {
        $post = $this->request->getPost(['nim', 'nama', 'praktikum', 'ipk']);
        $model = model(AsistenModel::class);
        $model->save($post);

        return redirect()->to('/asisten/daftar')->with('message', 'Data berhasil diperbarui');
    }
    public function formHapus($nim)
    {
        $data['nim'] = $nim;
        return view('asisten/formHapus', $data);
    }

    public function hapus()
    {
        $nim = $this->request->getPost('nim');
        $model = model(AsistenModel::class);
        $model->where('nim', $nim)->delete();

        return redirect()->to('/asisten/daftar')->with('message', 'Data berhasil dihapus');
    }
}
