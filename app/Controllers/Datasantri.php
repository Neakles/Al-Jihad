<?php

namespace App\Controllers;

use App\Models\DatasantriModel;

class Datasantri extends BaseController
{
    protected $datasantriModel;
    public function __construct()
    {
        $this->datasantriModel = new DatasantriModel();
    }
    public function index()
    {
        // $pendataan = $this->datasantriModel->findAll();


        $data = [
            'title' => 'Data Santri',
            'datasantri' => $this->datasantriModel->getDatasantri()
        ];

        //$datasantriModel = new \App\Models\DatasantriMode();
        //$datasantriModel = new DatasantriModel();

        return view('datasantri/index', $data);
    }

    public function detail($slug)
    {
        $data = [
            'title' => 'Detail Data',
            'datasantri' => $this->datasantriModel->getDatasantri($slug)
        ];
        return view('datasantri/detail', $data);
    }

    //--------------------------------------------------------------------

}
