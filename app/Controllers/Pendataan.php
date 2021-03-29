<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\DatasantriModel;


class Pendataan extends Controller
{

    var $db;
    var $table = "data_santri";

    public function index()
    {
        $data = [
            'title' => 'Yayasan Al-Jihad Surabaya'
        ];

        return view('pendataan/index', $data);
    }

    public function form()
    {
        $data = [
            'title' => 'Form'
        ];
        return view('pendataan/form', $data);
    }

    // $slug = url_title($this->request->getVar('judul'), '-', true); 

    // public function get_nisp()
    // {
    //     $new_Nisp = model('App\Models\DatasantriModel\data_santri');
    //     $int = (int)$new_Nisp;
    //     if ($int > 0) {
    //         foreach ($new_Nisp as $key) {
    //             $auto_nisp = $key->nisp;
    //         }
    //     }
    //     return $new_Nisp = model('App\Models\DatasantriModel')->buat_kode($auto_nisp, '510035780004');
    // }

    public function get_nisp()
    {
        $this->db->query('SELECT RIGHT data_santri.nisp, 4 as kode', FALSE);
        $this->db->orderBy('nisp', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('data_santri');     //cek dulu apakah ada sudah ada kode di tabel.    
        if ($query->num_rows() <> 0) {
            //jika kode ternyata sudah ada.      
            $data = $query->row();
            $kode = intval($data->kode) + 1;
        } else {
            //jika kode belum ada      
            $kode = 1;
        }

        $kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
        $kodejadi = "510035780004" . $kodemax;    // hasilnya ODJ-9921-0001 dst.
        return $kodejadi;
    }


    public function save()
    {
        $data = [
            'nspp' => "510035780004",
            // 'nisp' => $this->get_nisp(),
            // 'nisp' => $this->request->getPost('nisp'),
            // 'slug => $slug,'
            'tgl_daftar' => date('Y-m-d H-i-s'),
            'thn_masuk' => $this->request->getVar('thn_masuk'),
            'nama_santri' => $this->request->getVar('nama_santri'),
            'nik' => $this->request->getVar('nik'),
            'nim' => $this->request->getVar('nim'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'tgl_lahir' => $this->request->getVar('tgl_lahir'),
            'jk' => $this->request->getVar('jk'),
            'no_hp' => $this->request->getVar('no_hp'),
            // 'ig' => $this->request->getVar('ig'),
            'anak_ke' => $this->request->getVar('anak_ke'),
            'dari_s' => $this->request->getVar('dari_s'),
            'alamat' => $this->request->getVar('alamat'),
            'prov' => $this->request->getVar('prov'),
            'kab' => $this->request->getVar('kab'),
            'kec' => $this->request->getVar('kec'),
            'dusun' => $this->request->getVar('dusun'),
            'desa' => $this->request->getVar('desa'),
            'pos' => $this->request->getVar('pos'),
            'rt' => $this->request->getVar('rt'),
            'rw' => $this->request->getVar('rw'),
            'jp' => $this->request->getVar('jp'),
            'nama_sekolah' => $this->request->getVar('nama_sekolah'),
            'alamat_sekolah' => $this->request->getVar('alamat_sekolah'),
            'pesantren_asal' => $this->request->getVar('pesantren_asal'),
            'thn_masuk_sek' => $this->request->getVar('thn_masuk_sek'),
            'thn_lulus_sek' => $this->request->getVar('thn_lulus_sek'),
            'pt' => $this->request->getVar('pt'),
            'fakultas' => $this->request->getVar('fakultas'),
            'jur' => $this->request->getVar('jur'),
            'nama_ayah' => $this->request->getVar('nama_ayah'),
            'nama_ayah' => $this->request->getVar('sh_ayah'),
            'nik_ayah' => $this->request->getVar('nik_ayah'),
            'pendidikan_ayah' => $this->request->getVar('pendidikan_ayah'),
            'pekerjaan_ayah' => $this->request->getVar('pekerjaan_ayah'),
            'nama_ibu' => $this->request->getVar('nama_ibu'),
            'nama_ibu' => $this->request->getVar('sh_ibu'),
            'nik_Ibu' => $this->request->getVar('nik_Ibu'),
            'pendidikan_ibu' => $this->request->getVar('pendidikan_ibu'),
            'pekerjaan_ibu' => $this->request->getVar('pekerjaan_ibu'),
            'no_ortu' => $this->request->getVar('no_ortu'),
            'nama_wali' => $this->request->getVar('nama_wali'),
            'hubungan' => $this->request->getVar('hubungan'),
            'nik_wali' => $this->request->getVar('nik_wali'),
            'pendidikan_wali' => $this->request->getVar('pendidikan_wali'),
            'pekerjaan_wali' => $this->request->getVar('pekerjaan_wali'),
            'no_kk' => $this->request->getVar('no_kk'),
            'nama_kk' => $this->request->getVar('nama_kk'),
            'status_kk' => $this->request->getVar('status_kk'),
            'alamat_wali' => $this->request->getVar('alamat'),
            // 'prov_wali' => $this->request->getVar('prov'),
            // 'kab_wali' => $this->request->getVar('kab'),
            // 'kec_wali' => $this->request->getVar('kec'),
            // 'dusun_wali' => $this->request->getVar('dusun'),
            // 'desa_wali' => $this->request->getVar('desa'),
            // 'pos_wali' => $this->request->getVar('pos')
        ];

        /* 
    Membuat variabel simpan yang isinya merupakan memanggil function 
    insert_product dan membawa parameter data 
    */
        // // $simpan = $this->data_santri->simpan_data($data);
        // $santri = new DatasantriModel();
        // $simpan_data = $santri->simpan_data($data);

        // // Jika simpan berhasil, maka ...
        // if ($simpan_data) {
        //     // Deklarasikan session flashdata dengan tipe success
        //     session()->setFlashdata('success', 'Created product successfully');
        //     // Redirect halaman ke product
        //     return redirect()->to('/pendataan/form');
        // }

        $santri = new DatasantriModel();
        $simpan_data = $santri->simpan_data($data);
        return redirect()->to('/pendataan/form');
    }
}
