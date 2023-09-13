<?php

namespace App\Controllers;
use App\Models\KaliputihModel;
use App\Models\SercingModel;
use App\Models\CariModel;
use App\Models\ModelsBlog;


class Peges extends BaseController
{
    protected $keluarga;
 
    function __construct()
    {
        $this->keluarga = new KaliputihModel();
    }

    public function index()
    {
        
        echo view('layout/header');
        echo view('homepage');
        echo view('layout/footer');
    }
    public function profildesa()
    {
        echo view('layout/header');
        echo view('profil');
        echo view('layout/footer');
    }
    public function infor1()
    {
        echo view('layout/header');
        echo view('info1');
        echo view('layout/footer');
    }
    public function infor2()
    {
        echo view('layout/header');
        echo view('info2');
        echo view('layout/footer');
    }
    public function infor3()
    {
        echo view('layout/header');
        echo view('info3');
        echo view('layout/footer');
    }
    public function infor4()
    {
        echo view('layout/header');
        echo view('info4');
        echo view('layout/footer');
    }
    public function infor5()
    {
        echo view('layout/header');
        echo view('info5');
        echo view('layout/footer');
    }
    public function infor6()
    {
        echo view('layout/header');
        echo view('info6');
        echo view('layout/footer');
    }
    public function informasidesa()
    {
        echo view('layout/header');
        $model = new ModelsBlog();
        if (!$this->validate([]))
        {
            $data['validation'] = $this->validator;
            $data['artikel'] = $model->getArtikel();
            return view('informasi',$data);
        }
    }

    public function kontakdesa()
    {
        echo view('layout/header');
        echo view('kontak');
    }
    public function daftarkeluargadesa()
    {
        echo view('layout/header');
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
    public function admindesa()
    {
        echo view('layout/header');
        echo view('admin');
    }
    public function tabelkeluarga()
    {
        $data['keluarga'] = $this->keluarga->findAll();
        echo view('layout/header');
        echo view('viewkeluarga',$data);
        echo view('layout/footer');
    }
    public function tampiladmin()
    {
        echo view('layout/headerlogin');
        $pager = \Config\Services::pager();
    	$model = new CariModel();
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

       
        echo view('admintampil_keluarga',$data);
       
    }
    public function tampilinfo()
    {
        echo view('layout/headerlogin');
        

       
        echo view('vw_berita');
       
    }
    public function creatdata()
    {
        echo view('layout/headerlogin');
        echo view('creatdata');
       
    }
    public function store()
    {
        if (!$this->validate([
            'kepala_keluarga' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'dusun' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'jumlah_keluarga' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'rt_rw' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'kartu_keluarga' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'kecamatan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'kabupaten' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'provinsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
 
 
 
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
 
        $this->keluarga->insert([
            'kepala_keluarga' => $this->request->getVar('kepala_keluarga'),
            'dusun' => $this->request->getVar('dusun'),
            'jumlah_keluarga' => $this->request->getVar('jumlah_keluarga'),
            'rt_rw' => $this->request->getVar('rt_rw'),
            'kartu_keluarga' => $this->request->getVar('kartu_keluarga'),
            'kecamatan' => $this->request->getVar('kecamatan'),
            'kabupaten' => $this->request->getVar('kabupaten'),
            'provinsi' => $this->request->getVar('provinsi')
        ]);
        session()->setFlashdata('message', 'Tambah Data Keluarga Berhasil');
        return redirect()->to('/tampilkeluarga');
    }
    function delete($id)
    {
        $dataKeluarga = $this->keluarga->find($id);
        if (empty($dataKeluarga)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Keluarga Tidak ditemukan !');
        }
        $this->keluarga->delete($id);
        session()->setFlashdata('message', 'Delete Data Keluarga Berhasil');
        return redirect()->to('/tampilkeluarga');
    }
    function edit($id)
    {
        $dataKeluarga = $this->keluarga->find($id);
        if (empty($dataKeluarga)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Keluarga Tidak ditemukan !');
        }
        $data['keluarga'] = $dataKeluarga;
        echo view('layout/header');
        return view('edit', $data);
        
    }

    public function update($id)
    {
        if (!$this->validate([
            'kepala_keluarga' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'dusun' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'jumlah_keluarga' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'rt_rw' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'kartu_keluarga' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'kecamatan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'kabupaten' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'provinsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
 
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back();
        }
        $this->keluarga->update($id, [
            'kepala_keluarga' => $this->request->getVar('kepala_keluarga'),
            'dusun' => $this->request->getVar('dusun'),
            'jumlah_keluarga' => $this->request->getVar('jumlah_keluarga'),
            'rt_rw' => $this->request->getVar('rt_rw'),
            'kartu_keluarga' => $this->request->getVar('kartu_keluarga'),
            'kecamatan' => $this->request->getVar('kecamatan'),
            'kabupaten' => $this->request->getVar('kabupaten'),
            'provinsi' => $this->request->getVar('provinsi')
        ]);
        session()->setFlashdata('message', 'Update Data Keluarga Berhasil');
        return redirect()->to('/tampilkeluarga');
    }
    public function view($id){
        echo view('layout/headerblogviewhome');
        $model = new ModelsBlog();
        $data['artikel'] = $model->PilihBlog($id)->getRow();
        return view('view',$data);
    }
}
 

