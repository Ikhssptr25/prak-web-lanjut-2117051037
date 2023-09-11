<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function profile($nama="dafa",$kelas ="2",$npm="2"): string
    {
        $data=[
            'nama' => $nama,
            'kelas'  => $kelas,
            'npm' => $npm,

        ];
        return view('profile',$data);
    }
}
