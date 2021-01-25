<?php

namespace App\Controllers;

class Rekap extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Rekap Data Siswa'
        ];
        return view('rekap/index', $data);
    }
}
