<?php

namespace App\Controllers;

use App\Models\SiswaModel;

class Siswa extends BaseController
{
    protected $siswaModel;

    public function __construct()
    {
        $this->siswaModel = new SiswaModel();
    }


    public function index()
    {
        $data = [
            'title' => 'Daftar Siswa',
            'siswa' => $this->siswaModel->getSiswa()
        ];
        return view('siswa/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Form Tambah Data Siswa',
            // 'validation' => \Config\Services::validation()
        ];

        return view('siswa/create', $data);
    }

    public function save()
    {
        //validai input
        // if (!$this->validate([
        //     'judul' => [
        //         'rules' => 'required|is_unique[komik.judul]',
        //         'errors' => [
        //             'required' => 'Data tidak boleh kosong',
        //             'is_unique' => '{field} komik sudah terdaftar'
        //         ]
        //     ],
        //     'sampul' => [
        //         'rules' => 'max_size[sampul,1024]|is_image[sampul]|mime_in[sampul,image/jpg,image/jpeg,image/png]',
        //         'errors' => [
        //             'max_size' => 'Ukuran gambar terlalu besar',
        //             'is_image' => 'Yang anda pilih bukan gambar',
        //             'mime_in' => 'Yang anda pilih bukan gambar'
        //         ]
        //     ]
        // ])) {
        //     // $validation = \Config\Services::validation();
        //     // return redirect()->to('/Komik/create')->withInput()->with('validation', $validation);
        //     return redirect()->to('/Komik/create')->withInput();
        // }

        // //ambil file gambar
        // $fileSampul = $this->request->getFile('sampul');
        // //apakah tidak ada gambar yang diupload
        // if ($fileSampul->getError() == 4) {
        //     $namaSampul = 'default.png';
        // } else {
        //     //pindahkan gambar ke folder img
        //     $fileSampul->move('img');
        //     //ambil nama file
        //     $namaSampul = $fileSampul->getName();
        // }


        //$slug = url_title($this->request->getVar('judul'), '-', true);
        $this->siswaModel->save([
            'noInduk' => $this->request->getVar('noInduk'),
            'NISN' => $this->request->getVar('NISN'),
            'namaSiswa' => $this->request->getVar('namaSiswa'),
            'jenisKelamin' => $this->request->getVar('jenisKelamin'),
            'tempatLahir' => $this->request->getVar('tempatLahir'),
            'tanggalLahir' => $this->request->getVar('tanggalLahir'),
            'alamat' => $this->request->getVar('alamat'),
            'namaIbu' => $this->request->getVar('namaIbu'),
            'namaAyah' => $this->request->getVar('namaAyah'),
            'tanggalMasuk' => $this->request->getVar('tanggalMasuk'),
            'status' => $this->request->getVar('status')
        ]);

        // $_SESSION['pesan'] = 'Data Berhasil Ditambahkan';
        // $session = session();
        // $session->('pesan');

        return redirect()->to('/siswa');
    }
}
