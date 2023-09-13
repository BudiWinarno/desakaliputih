<?php namespace App\Controllers;
 use App\Models\KirimModel;
 use App\Models\PesanModel;
class Kontak extends BaseController

{
    protected $kontak;
 
    function __construct()
    {
        $this->kontak = new KirimModel();
    }

	public function index()
	{
		echo view('layout/headeradmin');
        return view('homepageadmin');
	}
    public function tampilpesan()
    {
        echo view('layout/headerlogin');
        $pager = \Config\Services::pager();
    	$model = new PesanModel();
        $kunci = $this->request->getVar('cari');

        if ($kunci) {
            $query = $model->pencarian($kunci);
            $jumlah = "Pencarian dengan nama <B>$kunci</B> ditemukan ".$query->affectedRows()." Data";
        } else {
            $query = $model;
            $jumlah = "";
        }
    	

        $data['kontak'] = $query->paginate(10);
        $data['pager'] = $model->pager;
        $data['page'] = $this->request->getVar('page') ? $this->request->getVar('page') : 1;
        $data['jumlah'] = $jumlah;

        echo view('tampilpesan',$data);
       
    }
    public function kontakstore()
    {
        if (!$this->validate([
            'nama_lengkap' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'alamat_email' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'no_tlp' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'tulis_pesan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
 
 
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
 
        $this->kontak->insert([
            'nama_lengkap' => $this->request->getVar('nama_lengkap'),
            'alamat_email' => $this->request->getVar('alamat_email'),
            'no_tlp' => $this->request->getVar('no_tlp'),
            'tulis_pesan' => $this->request->getVar('tulis_pesan')
        ]);
        session()->setFlashdata('message', 'Kirim Pesan Berhasil');
        return redirect()->to('/kontakdesa');
    }
    function delete($id)
    {
        $datakontak = $this->kontak->find($id);
        if (empty($datakontak)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Keluarga Tidak ditemukan !');
        }
        $this->kontak->delete($id);
        session()->setFlashdata('message', 'Delete Data Pesan Berhasil');
        return redirect()->to('tampilpesan');
    }
  
}