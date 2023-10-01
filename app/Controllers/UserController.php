<?php

namespace App\Controllers;
use App\Models\UserModel;
use App\Controllers\BaseController;

class UserController extends BaseController
{
    public function index()
    {
        //
    }

    public function profile($nama="",$kelas ="",$npm=""): string
    {
        $data=[
            'nama' => $nama,
            'kelas'  => $kelas,
            'npm' => $npm,

        ];
        return view('profile',$data);
    }

    public function create(){
        $kelas=[
            [
                'id'=>1,
                'nama_kelas'=>'A'
            ],
            [
                'id'=>2,
                'nama_kelas'=>'B'
            ],
            [
                'id'=>3,
                'nama_kelas'=>'C'
            ],
            [
                'id'=>4,
                'nama_kelas'=>'D'
            ],
        ];

        $data=[
            'kelas' => $kelas,
            'validation' => \Config\Services::validation()
        ];
        return view('create_user',$data);
    }

   
    public function store()
{
    $validationRules = [
        'nama' => [
            'rules' => 'required',
            'errors' => [
                'required' => '{field} mahasiswa harus di isi.'
            ]
        ],
        'npm' => [
            'rules' => 'required|is_unique[user.npm]',
            'errors' => [
                'required' => '{field} mahasiswa harus di isi.',
                'is_unique' => '{field} mahasiswa sudah terdaftar.'
            ]
        ]
    ];

    if (!$this->validate($validationRules)) {
        // Store validation errors and old input in flash data
        $session = session();
        $session->setFlashdata('validationErrors', $this->validator->getErrors());
        $session->setFlashdata('oldInput', $this->request->getPost());
        return redirect()->to(base_url('/user/create'));
    }

    // Validation passed, save the user
    $userModel = new UserModel();
    $userModel->saveUser([
        'nama' => $this->request->getVar('nama'),
        'id_kelas' => $this->request->getVar('kelas'),
        'npm' => $this->request->getVar('npm'),
    ]);

    $data = [
        'nama' => $this->request->getVar('nama'),
        'kelas' => $this->request->getVar('kelas'),
        'npm' => $this->request->getVar('npm'),
    ];

    return view('profile', $data);
}

}

