<?php

namespace App\Controllers\Admin;

use App\Models\DataMobilModel;
use App\Controllers\BaseController;

class DataMobil extends BaseController
{
    protected $datamobilModel;
    public function __construct()
    {
        $this->datamobilModel = new datamobilModel();
    }
    public function index()
    {
        $datamobil = $this->datamobilModel->findAll();
        $data = [
            'title' => 'Daftar Data Mobil',
            'datamobil' => $datamobil

        ];
        //cara konect db tanpa model
        /*       $db = \Config\Database::connect();
        $komik = $db->query("SELECT * FROM komik");
        foreach ($komik->getResultArray() as $row)
            d($row); */
        // cara connect dengan model
        // $komikModel = new \app\Models\KomikModel();



        return view('Admin/datamobil', $data);
    }
}
