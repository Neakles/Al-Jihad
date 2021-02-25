<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Yayasan Al-Jihad Surabaya'
        ];
        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About'
        ];
        return view('pages/about', $data);
    }

    public function artikel()
    {
        $data = [
            'title' => 'Artikel'
        ];
        return view('pages/artikel', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact',
            'alamat' => [
                'tipe' => 'Kantor',
                'alamat' => 'Jemursari Utara III/9',
                'kota' => 'Surabaya'
            ]
        ];
        return view('pages/contact', $data);
    }
}
