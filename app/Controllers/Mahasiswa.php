<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MahasiswaModel;
use CodeIgniter\Validation\Rules;

class Mahasiswa extends BaseController
{
    //protected $mahasiswaModel;

    public function __construct()
    {
        $this->MahasiswaModel = new MahasiswaModel();
    }
    public function index()
    {

        $katakunci = $this->request->getGet('katakunci');
        if ($katakunci) {
            $pencarian = $this->MahasiswaModel->cari($katakunci);
        } else {
            $pencarian = $this->MahasiswaModel;
        }


        $Mahasiswa = $this->MahasiswaModel->findAll();

        $data = [
            'mahasiswa' => $Mahasiswa
        ];
        $data['katakunci'] = $katakunci;
        $data['title'] = "Mahasiswa";
        $data['activeMenu'] = "mahasiswa";

        echo view("admin_header", $data);
        echo view('mahasiswa_view', $data);
        echo view("admin_footer");
    }

    public function detail($id)
    {
        $mahasiswa = $this->MahasiswaModel->find($id);
        $data = [
            'data' => $mahasiswa,
        ];
        $data['title'] = "Mahasiswa";
        $data['activeMenu'] = "mahasiswa";

        echo view("admin_header", $data);
        echo view('detail_view', $data);
        echo view("admin_footer");
    }



    public function create()
    {
        //session();
        $data['validation'] = \Config\Services::validation();
        $data['title'] = "Mahasiswa";
        $data['activeMenu'] = "mahasiswa";

        echo view("admin_header", $data);
        echo view('create', $data);
        echo view("admin_footer");
    }

    public function save()
    {

        if (!$this->validate(
            [
                'nama' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} mahasiswa harus diisi',
                    ]
                ],
                'npm' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field}  harus diisi',
                    ]
                ],
                'universitas' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field}  harus diisi',
                    ]
                ],
                'created_at' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'waktu pkl harus diisi',
                    ]
                ],
                'selesai' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'waktu harus diisi',
                    ]
                ]
            ]
        )) {
            $validation = \Config\Services::validation();
            return redirect()->to('/mahasiswa/create')->withInput()->with('validation', $validation);
        }

        $this->MahasiswaModel->save([
            //'id' => $this->request->getVar('id'),
            'nama' => $this->request->getVar('nama'),
            'npm' => $this->request->getVar('npm'),
            'universitas' => $this->request->getVar('universitas'),
            'lokasi_pkl' => $this->request->getVar('lokasi_pkl'),
            'created_at' => $this->request->getVar('created_at'),
            'selesai' => $this->request->getVar('selesai'),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');


        return redirect()->to(base_url('mahasiswa'));
    }
    public function edit($id)
    {
        $mahasiswa = $this->MahasiswaModel->find($id);
        $data = [
            'data' => $mahasiswa,
        ];
        $data['title'] = "Mahasiswa";
        $data['activeMenu'] = "mahasiswa";

        echo view("admin_header", $data);
        echo view('detail_view', $data);
        echo view("admin_footer");
    }


    public function ubah($id)
    {
        $this->MahasiswaModel->update($id, $this->request->getPost());
        return redirect()->to(base_url('mahasiswa'));
    }

    public function delete($id)
    {
        $this->MahasiswaModel->delete($id);
        return redirect()->to(base_url('mahasiswa'));
    }
}
