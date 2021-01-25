<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Beranda | SI Sekolah'
        ];

        return view('pages/home', $data);
    }

    //--------------------------------------------------------------------

}
