<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\SercingModel;
 
class Cari extends BaseController
{
    public function index()
    {
        $pager = \Config\Services::pager();
    	$model = new SercingModel();
    	$kunci = $this->request->getVar('cari');

        if ($kunci) {
            $query = $model->pencarian($kunci);
            $jumlah = "Pencarian dengan nama <B>$kunci</B> ditemukan ".$query->affectedRows()." Data";
        } else {
            $query = $model;
            $jumlah = "";
        }

        $data['keluarga'] = $query->paginate(10);
        $data['pager'] = $model->pager;
        $data['page'] = $this->request->getVar('page') ? $this->request->getVar('page') : 1;
        $data['jumlah'] = $jumlah;

        echo view('vw_cari',$data);
    }
}