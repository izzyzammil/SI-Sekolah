<?php

namespace App\Controllers;

class Guru extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Daftar Guru'
        ];
        return view('guru/index', $data);
    }
}
