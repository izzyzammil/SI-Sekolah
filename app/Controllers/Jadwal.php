<?php

namespace App\Controllers;

class Jadwal extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Jadwal Pembelajaran'
        ];
        return view('jadwal/index', $data);
    }
}
