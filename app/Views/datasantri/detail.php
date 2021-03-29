<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Data Santri</a>
                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Riwayat Pendidikan </a>
                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Orang Tua Santri</a>
                    <a href="" class="btn btn-success">Edit</a>
                </div>
            </nav>

            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <br>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">NISP</th>
                                <td>:</td>
                                <td><?= $datasantri['nisp']; ?></td>
                            </tr>
                            <tr>
                                <th scope="col">NIK/No.Passport</th>
                                <td>:</td>
                                <td><?= $datasantri['nik']; ?></td>
                            </tr>
                            <tr>
                                <th scope="col">Nama Lengkap</th>
                                <td>:</td>
                                <td><?= $datasantri['nama_santri']; ?></td>
                            </tr>
                            <tr>
                                <th scope="col">Tempat, Tanggal Lahir</th>
                                <td>:</td>
                                <td><?= $datasantri['tempat_lahir']; ?>, <?= $datasantri['tgl_lahir']; ?></td>
                            </tr>
                            <tr>
                                <th scope="col">Jenis Kelamin</th>
                                <td>:</td>
                                <td><?= $datasantri['jk']; ?></td>
                            </tr>
                            <tr>
                                <th colspan="3">Anak Ke : <?= $datasantri['anak_ke']; ?> dari <?= $datasantri['anak_ke']; ?> Bersaudara</th>
                            </tr>
                            <tr>
                                <th scope="col">Nomor Handphone</th>
                                <td>:</td>
                                <td><?= $datasantri['no_hp']; ?></td>
                            </tr>
                            <tr>
                                <th scope="col">Instagram</th>
                                <td>:</td>
                                <td><?= $datasantri['ig']; ?></td>
                            </tr>
                            <tr>
                                <th scope="col">Alamat</th>
                                <td>:</td>
                                <td><?= $datasantri['alamat']; ?></td>
                            </tr>
                            <tr>
                                <th scope="col">Provinsi</th>
                                <td>:</td>
                                <td><?= $datasantri['prov']; ?></td>
                            </tr>
                            <tr>
                                <th scope="col">Kabupaten/Kota</th>
                                <td>:</td>
                                <td><?= $datasantri['kab']; ?></td>
                            </tr>
                            <tr>
                                <th scope="col">Kecamatan</th>
                                <td>:</td>
                                <td><?= $datasantri['kec']; ?></td>
                            </tr>
                            <tr>
                                <th scope="col">Dusun</th>
                                <td>:</td>
                                <td><?= $datasantri['dusun']; ?></td>
                            </tr>
                            <tr>
                                <th scope="col">Desa</th>
                                <td>:</td>
                                <td><?= $datasantri['desa']; ?></td>
                            </tr>
                            <tr>
                                <th scope="col">Kode POS</th>
                                <td>:</td>
                                <td><?= $datasantri['pos']; ?></td>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <br>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th colspan="3" scope="col">Sekolah/Pesantren Asal</th>
                            </tr>
                            <tr>
                                <th scope="col">Nama Sekolah</th>
                                <td>:</td>
                                <td><?= $datasantri['nama_sekolah']; ?></td>
                            </tr>
                            <tr>
                                <th scope="col">Alamat Sekolah</th>
                                <td>:</td>
                                <td><?= $datasantri['alamat_sekolah']; ?></td>
                            </tr>
                            <tr>
                                <th scope="col">Pesantren Asal</th>
                                <td>:</td>
                                <td><?= $datasantri['pesantren_asal']; ?></td>
                            </tr>
                            <tr>
                                <th scope="col">Tahun Masuk</th>
                                <td>:</td>
                                <td><?= $datasantri['thn_masuk_sek']; ?></td>
                            </tr>
                            <tr>
                                <th scope="col">Tahun Lulus</th>
                                <td>:</td>
                                <td><?= $datasantri['thn_lulus_sek']; ?></td>
                            </tr>
                            <tr>
                                <th colspan="3" scope="col">Pendidikan Saat Ini</th>
                            </tr>
                            <tr>
                                <th scope="col">Perguruaan Tinggi (PT)</th>
                                <td>:</td>
                                <td><?= $datasantri['pt']; ?></td>
                            </tr>
                            <tr>
                                <th scope="col">Fakultas</th>
                                <td>:</td>
                                <td><?= $datasantri['fakultas']; ?></td>
                            </tr>
                            <tr>
                                <th scope="col">Jurusan</th>
                                <td>:</td>
                                <td><?= $datasantri['jur']; ?></td>
                            </tr>
                            <tr>
                                <th scope="col">NIM</th>
                                <td>:</td>
                                <td><?= $datasantri['nim']; ?></td>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <br>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Nomor Kartu Keluarga</th>
                                <td>:</td>
                                <td><?= $datasantri['no_kk']; ?></td>
                            </tr>
                            <tr>
                                <th scope="col">Nama Kepala Keluarga</th>
                                <td>:</td>
                                <td><?= $datasantri['nama_kk']; ?></td>
                            </tr>
                            <tr>
                                <th scope="col">Status Kepala Keluarga dalam KK</th>
                                <td>:</td>
                                <td><?= $datasantri['status_kk']; ?></td>
                            </tr>
                            <tr>
                                <th scope="col">Nomor Handphone Wali</th>
                                <td>:</td>
                                <td><?= $datasantri['hp_wali']; ?></td>
                            </tr>
                            <tr>
                                <th scope="col">Nama Ayah</th>
                                <td>:</td>
                                <td><?= $datasantri['nama_ayah']; ?></td>
                            </tr>
                            <tr>
                                <th scope="col">NIK</th>
                                <td>:</td>
                                <td><?= $datasantri['nik_ayah']; ?></td>
                            </tr>
                            <tr>
                                <th scope="col">Pendidikan</th>
                                <td>:</td>
                                <td><?= $datasantri['pendidikan_ayah']; ?></td>
                            </tr>
                            <tr>
                                <th scope="col">Pekerjaan</th>
                                <td>:</td>
                                <td><?= $datasantri['pekerjaan_ayah']; ?></td>
                            </tr>
                            <tr>
                                <th scope="col">Nama Ibu</th>
                                <td>:</td>
                                <td><?= $datasantri['nama_ibu']; ?></td>
                            </tr>
                            <tr>
                                <th scope="col">NIK</th>
                                <td>:</td>
                                <td><?= $datasantri['nik_ibu']; ?></td>
                            </tr>
                            <tr>
                                <th scope="col">Pendidikan</th>
                                <td>:</td>
                                <td><?= $datasantri['pendidikan_ibu']; ?></td>
                            </tr>
                            <tr>
                                <th scope="col">Pekerjaan</th>
                                <td>:</td>
                                <td><?= $datasantri['pekerjaan_ibu']; ?></td>
                            </tr>
                            <tr>
                                <th scope="col">Nama Wali</th>
                                <td>:</td>
                                <td><?= $datasantri['nama_wali']; ?></td>
                            </tr>
                            <tr>
                                <th scope="col">Hubungan Dengan Wali</th>
                                <td>:</td>
                                <td><?= $datasantri['hubungan']; ?></td>
                            </tr>
                            <tr>
                                <th scope="col">NIK/Nomor KTP</th>
                                <td>:</td>
                                <td><?= $datasantri['nik_wali']; ?></td>
                            </tr>
                            <tr>
                                <th scope="col">Pendidikan</th>
                                <td>:</td>
                                <td><?= $datasantri['pendidikan_wali']; ?></td>
                            </tr>
                            <tr>
                                <th scope="col">Pekerjaan</th>
                                <td>:</td>
                                <td><?= $datasantri['pekerjaan_wali']; ?></td>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>


        </div>
    </div>
</div>
<?= $this->endSection(); ?>