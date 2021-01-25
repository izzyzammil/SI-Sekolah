<?php

namespace App\Controllers;

class Alumni extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Daftar Alumni'
        ];
        return view('alumni/index', $data);
    }
}
