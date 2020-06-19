<?php


namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Halaman Dashboard Admin'


        ];
        return view('admin/dashboard', $data);
    }

    //--------------------------------------------------------------------

}
