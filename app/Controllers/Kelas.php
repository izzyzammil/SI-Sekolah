<?php

namespace App\Controllers;

class Kelas extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Daftar Kelas'
        ];
        return view('kelas/index', $data);
    }
}
