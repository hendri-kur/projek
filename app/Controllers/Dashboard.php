<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $data['title'] = "Dashboard";
        $data['activeMenu'] = "dashboard";

        echo view("admin_header", $data);
        echo view('dahsboard_view', $data);
        echo view("admin_footer");
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to('login');
    }
}
