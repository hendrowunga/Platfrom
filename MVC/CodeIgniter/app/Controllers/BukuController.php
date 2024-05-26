<?php
namespace App\Controllers;
use App\Models\BukuModels;

class BukuController extends BaseController{

    public function index(){
        $model=model (BukuModels::class);
        $data=$model ->ambilBuku();
        return view('bukuView',$data);
    }
}