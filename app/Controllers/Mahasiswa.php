<?php

namespace App\Controllers;

class Mahasiswa extends BaseController
{
    public function index()
    {
        $data['title'] = "Mahasiswa";
        $data['activeMenu'] = "mahasiwa";

        echo view("admin_header", $data);
        echo view('mahasiswa_view', $data);
        echo view("admin_footer");
    }
}
