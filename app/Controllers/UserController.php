<?php

namespace App\Controllers;
use App\Models\UserModel;
use App\Models\KelasModel;
use App\Controllers\BaseController;

class UserController extends BaseController
{
    public $userModel;
    public $kelasModel;

    public function __construct(){
        $this->userModel=new UserModel();
        $this->kelasModel=new KelasModel();
    }
    public function index()
    {
        $data=[
            'title' => 'List User',
            'users' => $this->userModel->getUser(),
        ];

        return view ('list_users',$data);
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
        $kelasModel=new KelasModel();

        $kelas=$kelasModel->getKelas();

        
        // $kelas=[
        //     [
        //         'id'=>1,
        //         'nama_kelas'=>'A'
        //     ],
        //     [
        //         'id'=>2,
        //         'nama_kelas'=>'B'
        //     ],
        //     [
        //         'id'=>3,
        //         'nama_kelas'=>'C'
        //     ],
        //     [
        //         'id'=>4,
        //         'nama_kelas'=>'D'
        //     ],
        // ];

        $data=[
            'kelas' => $kelas,
            'validation' => \Config\Services::validation(),
            'title' => 'Create User',
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
    $path='assets/uploads/img/';

    $foto=$this->request->getFile('foto');
    $name=$foto->getRandomName();


    if($foto->move($path, $name)){
        $foto=base_url($path . $name);
        
    }

    $this->userModel->saveUser([
        'nama' => $this->request->getVar('nama'),
        'id_kelas' => $this->request->getVar('kelas'),
        'npm' => $this->request->getVar('npm'),
        'foto' =>$foto,
    ]);

    $data = [
        'nama' => $this->request->getVar('nama'),
        'kelas' => $this->request->getVar('kelas'),
        'npm' => $this->request->getVar('npm'),
    ];

    return redirect()->to('/user');
}

public function show($id){
    $user=$this->userModel->getUser($id);

    $data=[
        'title' => 'Profile',
        'user'  => $user,

    ];
    
    return view('profile',$data);
}

}

