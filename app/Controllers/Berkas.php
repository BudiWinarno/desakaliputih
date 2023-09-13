<?php
 
namespace App\Controllers;
use App\Models\BerkasModel;
use App\Controllers\BaseController;
 
class Berkas extends BaseController
{
   
	public function index()
	{
        echo view('layout/headerform');
		$berkas = new BerkasModel();
		$data['berkas'] = $berkas->findAll();
		return view('view_berkas', $data);
	}
    public function home()
	{
        echo view('layout/header');
		$berkas = new BerkasModel();
		$data['berkas'] = $berkas->findAll();
		return view('view_berkashome', $data);
	}
	public function create()
	{
        echo view('layout/headerform');
		return view('form_upload');
	}
    public function save()
	{
		if (!$this->validate([
			'keterangan' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} Tidak boleh kosong'
				]
			],
			'berkas' => [
				'rules' => 'uploaded[berkas]|mime_in[berkas,application/pdf]|max_size[berkas,2048]',
				'errors' => [
					'uploaded' => 'Harus Ada File yang diupload',
					'mime_in' => 'File Extention Harus Berupa pdf',
					'max_size' => 'Ukuran File Maksimal 2 MB'
				]
 
			]
		])) {
			session()->setFlashdata('error', $this->validator->listErrors());
			return redirect()->back()->withInput();
		}
 
		$berkas = new BerkasModel();
		$dataBerkas = $this->request->getFile('berkas');
		$fileName = $dataBerkas->getRandomName();
		$berkas->insert([
			'berkas' => $fileName,
			'keterangan' => $this->request->getPost('keterangan')
		]);
		$dataBerkas->move('uploads/berkas/', $fileName);
		session()->setFlashdata('success', 'Berkas Berhasil diupload');
		return redirect()->to(base_url('/tampilberkas'));
	}
    function download($id)
	{
		$berkas = new BerkasModel();
		$data = $berkas->find($id);
		return $this->response->download('uploads/berkas/' . $data->berkas, null);
	}
}