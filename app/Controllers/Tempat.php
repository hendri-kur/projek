<?php

namespace App\Controllers;

class Tempat extends BaseController
{
    public function index()
    {
        $data['title'] = "Tempat";
        $data['activeMenu'] = "tempat";

        echo view("admin_header", $data);
        echo view('tempat_view', $data);
        echo view("admin_footer");
    }
}
