<?php

namespace App\Models;

use CodeIgniter\Model;

class DatasantriModel extends Model
{

    protected $table = 'data_santri';
    protected $primaryKey = 'nisp';
    protected $useTimestamps = true;

    public function getdatasantri($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    public function simpan_data($data)
    {
        return $this->db->table('data_santri')->insert($data);
    }

    public function buat_kode($auto_nisp, $prefix)
    {

        $this->query('SELECT RIGHT data_santri.nisp, 4 as kode', FALSE);
        $this->orderBy('nisp', 'DESC');
        $this->limit(1);
        $query = $this->get('data_santri');     //cek dulu apakah ada sudah ada kode di tabel.    
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

        //Untuk menjalankannya, kamu cuma perlu manggil $kodeunik di text field kamu. Kalo aku kayak gini gan :

        //<td><input type="text" name='id_odojers' class="form-control" value="<?= $kodeunik; " readonly> </td>

    }
}
