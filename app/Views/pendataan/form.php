<html>

<head>
    <meta charset="utf-8">
    <title>Penerimaan Santri Baru</title>

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href='http://fonts.googleapis.com/css?family=Roboto:100,400,300,500,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Amaranth' rel='stylesheet'>

    <!-- BEGIN PLUGINS STYLES -->
    <link rel="stylesheet" href="<?= base_url('/css/css1/simple-line-icons.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('/css/css1/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('/css/css1/bootstrap-switch.min.css'); ?>">
    <!-- END PLUGINS STYLES -->
    <link rel="stylesheet" href="<?= base_url('/css/css1/components.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('/css/css1/layout.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('/css/css1/style3.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" media="screen" />
    <!-- END THEMES STYLES -->
    <link rel="shortcut icon" href="favicon.ico" />
</head>

<body>
    <header class="top-header1">
        <div class="container">
            <div class="row">
                <section class="center">
                    <div class="col-md-12 col-xs-12 col-sm-12 header-logo ">
                        <br>
                        <a href="<?php echo base_url(); ?>">
                            <img src="/img/logo.png" height="100px" width="100px">
                            <h1 class="logo">Pondok Pesantren Al-Jihad Surabaya
                                <br><span class="logo-head">(NSPP : 510035780004)</span>
                            </h1>
                        </a>
                    </div>
                </section>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 ">
                <div class="portlet light portlet-fit portlet-form ">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class=" icon-layers font-red"></i>
                            <span class="caption-subject font-red sbold uppercase">Data Diri Santri</span>
                            <br><small>Pastikan Data Terisi dengan Benar</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- BEGIN FORM  -->
            <form action="/pendataan/save" method="post">
                <?= csrf_field(); ?>
                <div class="col-md-6 col-sm-6 col-xs-12 ">
                    <!-- BEGIN VALIDATION STATES-->
                    <div class="portlet light portlet-fit portlet-form">
                        <div class="portlet-body">
                            <div class="form-body">
                                <div class="form-group form-md-line-input">

                                    <select class="form-control" name="thn_masuk" id="thn-masuk" style="width:15vh;" required oninvalid="this.setCustomValidity('Item harus dipilih')" oninput="setCustomValidity('')">
                                        <option value="">Tahun Masuk</option>
                                        <?php for ($i = date("Y"); $i >= 1995; $i--) { ?>
                                            <option value="<?php echo $i ?>"><?php echo $i ?></option>
                                        <?php } ?>
                                    </select>
                                    <label for="form_control_1">Tahun Masuk
                                        <span class="required">*</span>
                                    </label>
                                </div>

                                <div class="form-group form-md-line-input">
                                    <input type="text" class="form-control" name="nama_santri" id="nama_santri" id="form_control_1" placeholder="Masukkan Nama Anda" required oninvalid="this.setCustomValidity('Harus diisi !!!')" oninput="setCustomValidity('')">
                                    <label for="form_control_1">Nama Lengkap</span>
                                        <span class="required">*</span>
                                    </label>
                                    <span class="help-block">Tolong Masukkan Nama Lengkap Anda...</span>

                                </div>

                                <div class="form-group form-md-line-input">
                                    <input type="text" class="form-control" name="nik" id="nik" id="form_control_1" placeholder="Masukkan NIK/No.Passport">
                                    <label for="form_control_1">NIK/No.Passport</span>
                                    </label>
                                </div>

                                <div class="form-group form-md-line-input">
                                    <input type="text" class="form-control" name="nim" id="nim" id="form_control_1" placeholder="Masukkan NIM">
                                    <label for="form_control_1">Nomor Induk Mahasiswa</span>
                                    </label>
                                </div>

                                <div class="form-group form-md-line-input">
                                    <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" id="form_control_1" placeholder="Masukkan Tempat Lahir" required oninvalid="this.setCustomValidity('Harus diisi !!!')" oninput="setCustomValidity('')">
                                    <label for="form_control_1">Tempat Lahir</span>
                                        <span class="required">*</span>
                                    </label>
                                    <span class="help-block">Tolong Masukkan Tempat Lahir Anda...</span>
                                </div>

                                <div class="form-group form-md-line-input">
                                    <input type="date" min="1970-12-31" max="" class="form-control" name="tgl_lahir" id="tgl_lahir" style="width:15vh;float:left;" required oninvalid="this.setCustomValidity('Harus diisi !!!')" oninput="setCustomValidity('')" />
                                    <label for="form_control_1">Tanggal Lahir
                                        <span class="required">*</span>
                                    </label>
                                </div>

                                <div class="form-group form-md-radios">
                                    <label for="form_control_1">Jenis Klamin</label>
                                    <span class="required">*</span>
                                    <div class="md-radio-inline">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-lg-4">
                                                <div class="md-radio">
                                                    <input type="radio" id="checkbox2_1" name="jk" id="jk" value="1" class="md-radiobtn" required>
                                                    <label for="checkbox2_1">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Laki-Laki
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-lg-4">
                                                <div class="md-radio">
                                                    <input type="radio" id="checkbox2_2" name="jk" id="jk" value="2" class="md-radiobtn" required>
                                                    <label for="checkbox2_2">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Perempuan
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group form-md-line-input">
                                    <input type="number" class="form-control" name="no_hp" id="no_hp" id="form_control_1" placeholder="Masukkan Nomor Handphone	" oninvalid="this.setCustomValidity('Harus diisi !!!')" oninput="setCustomValidity('')">
                                    <label for="form_control_1">Nomor Handphone</span>
                                        <span class="required">*</span>
                                    </label>
                                    <span class="help-block">Tolong Masukkan Nomor Handphone Anda...</span>
                                </div>

                                <!-- <div class="form-group form-md-line-input">
                                    <input type="text" class="form-control" name="ig" id="ig" id="form_control_1" placeholder="Masukkan Akun Instagram">
                                    <label for="form_control_1">Instagram</span>
                                    <span class="required">*</span>
                                </label>
                                <span class="help-block">Tolong Masukkan Nama Akun Instagram Anda...</span>
                            </div> -->

                                <div class="col-xs-12 col-sm-12 col-lg-4">
                                    <div class="form-group form-md-line-input">
                                        <input type="number" min="1" class="form-control" name="anak_ke" id="anak_ke" id="form_control_1" placeholder="Anak Ke" required oninvalid="this.setCustomValidity('Harus diisi diatas angka 0 !!!')" oninput="setCustomValidity('')">
                                        <label for="form_control_1">Anak Ke</span>
                                            <span class="required">*</span>
                                        </label>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-lg-4">
                                    <div class="form-group form-md-line-input">
                                        <input type="number" min="1" class="form-control" name="dari_s" id="dari_s" id="form_control_1" placeholder="Dari" required oninvalid="this.setCustomValidity('Harus diisi diatas angka 0 !!!')" oninput="setCustomValidity('')">
                                        <label for="form_control_1">Dari</span>
                                            <span class="required">*</span>
                                        </label>
                                    </div>
                                </div>

                                <!-- END FORM-->
                            </div>
                        </div>
                        <!-- END VALIDATION STATES-->
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12 ">
                    <div class="portlet light portlet-fit portlet-form ">
                        <div class="portlet-body">
                            <div class="form-body">
                                <div class="form-group form-md-checkboxes">

                                    <div class="form-group form-md-line-input">
                                        <input type="text" class="form-control" name="alamat" id="alamat" id="form_control_1" placeholder="Masukkan Alamat Rumah (Sesuai KTP)" required oninvalid="this.setCustomValidity('Harus diisi !!!')" oninput="setCustomValidity('')">
                                        <label for="form_control_1">Alamat Rumah (Sesuai KTP)</span>
                                            <span class="required">*</span>
                                        </label>
                                        <span class="help-block">Tolong Masukkan Alamat Rumah Anda (Sesuai KTP)...</span>
                                    </div>

                                    <div class="form-group form-md-line-input">
                                        <input type="text" class="form-control" name="prov" id="prov" id="form_control_1" placeholder="Masukkan Provinsi" required oninvalid="this.setCustomValidity('Harus diisi !!!')" oninput="setCustomValidity('')">
                                        <label for="form_control_1">Provinsi</span>
                                            <span class="required">*</span>
                                        </label>
                                        <span class="help-block">Tolong Masukkan Provinsi Anda...</span>
                                    </div>

                                    <div class="form-group form-md-line-input">
                                        <input type="text" class="form-control" name="kab" id="kab" id="form_control_1" placeholder="Masukkan Kabupaten/Kota" required oninvalid="this.setCustomValidity('Harus diisi !!!')" oninput="setCustomValidity('')">
                                        <label for="form_control_1">Kabupaten/Kota</span>
                                            <span class="required">*</span>
                                        </label>
                                        <span class="help-block">Tolong Masukkan Kabupaten/Kota Anda...</span>
                                    </div>

                                    <div class="form-group form-md-line-input">
                                        <input type="text" class="form-control" name="kec" id="kec" id="form_control_1" placeholder="Masukkan Kecamatan" required oninvalid="this.setCustomValidity('Harus diisi !!!')" oninput="setCustomValidity('')">
                                        <label for="form_control_1">Kecamatan</span>
                                            <span class="required">*</span>
                                        </label>
                                        <span class="help-block">Tolong Masukkan Kecamatan Anda...</span>
                                    </div>

                                    <div class="form-group form-md-line-input">
                                        <input type="text" class="form-control" name="dusun" id="dusun" id="form_control_1" placeholder="Masukkan Dusun" required oninvalid="this.setCustomValidity('Harus diisi !!!')" oninput="setCustomValidity('')">
                                        <label for="form_control_1">Dusun</span>
                                            <span class="required">*</span>
                                        </label>
                                        <span class="help-block">Tolong Masukkan Dusun Anda...</span>
                                    </div>

                                    <div class="form-group form-md-line-input">
                                        <input type="text" class="form-control" name="desa" id="desa" id="form_control_1" placeholder="Masukkan Desa" required oninvalid="this.setCustomValidity('Harus diisi !!!')" oninput="setCustomValidity('')">
                                        <label for="form_control_1">Desa</span>
                                            <span class="required">*</span>
                                        </label>
                                        <span class="help-block">Tolong Masukkan Desa Anda...</span>
                                    </div>

                                    <div class="form-group form-md-line-input">
                                        <input type="text" class="form-control" name="pos" id="pos" id="form_control_1" placeholder="Masukkan Kode POS" required oninvalid="this.setCustomValidity('Harus diisi !!!')" oninput="setCustomValidity('')">
                                        <label for="form_control_1">Kode POS</span>
                                            <span class="required">*</span>
                                        </label>
                                        <span class="help-block">Tolong Masukkan Kode POS Anda...</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 ">
                    <div class="portlet light portlet-fit portlet-form ">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class=" icon-layers font-red"></i>
                                <span class="caption-subject font-red sbold uppercase">Riwayat Pendidikan</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- BEGIN FORM  -->
                <div class="col-md-6 col-sm-6 col-xs-12 ">
                    <!-- BEGIN VALIDATION STATES-->
                    <div class="portlet light portlet-fit portlet-form">
                        <div class="portlet-body">
                            <div class="form-body">
                                <span class="caption-subject font-red sbold uppercase">Sekolah/Pesantren Asal</span>
                                <div class="form-group form-md-line-input">
                                    <select class="form-control" name="jp" id="jp" required>
                                        <option value="">Pilih</option>
                                        <option value="1">Sekolah Umum</option>
                                        <option value="2">Madrasah</option>
                                    </select>
                                    <label for="form_control_1">Jenis Pendidikan
                                        <span class="required">*</span>
                                    </label>
                                </div>

                                <div class="form-group form-md-line-input">
                                    <input type="text" class="form-control" name="nama_sekolah" id="nama_sekolah" id="form_control_1" placeholder="Masukkan Nama Sekolah" required oninvalid="this.setCustomValidity('Harus diisi !!!')" oninput="setCustomValidity('')">
                                    <label for="form_control_1">Nama Sekolah</span>
                                        <span class="required">*</span>
                                    </label>
                                </div>

                                <div class="form-group form-md-line-input">
                                    <input type="text" class="form-control" name="alamat_sekolah" id="alamat_sekolah" id="form_control_1" placeholder="Masukkan Alamat Sekolah" required oninvalid="this.setCustomValidity('Harus diisi !!!')" oninput="setCustomValidity('')">
                                    <label for="form_control_1">Alamat Sekolah</span>
                                        <span class="required">*</span>
                                    </label>
                                </div>
                                <div class="form-group form-md-line-input">
                                    <input type="text" class="form-control" name="pesantren_asal" id="pesantren_asal" id="form_control_1" placeholder="Masukkan Pesantren Asal">
                                    <label for="form_control_1">Pesantren Asal</span>
                                    </label>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-lg-4">
                                    <div class="form-group form-md-line-input">
                                        <select class="form-control" name="thn_masuk_sek" id="thn_masuk_sek" style="width:15vh;">
                                            <option value="">Tahun</option>
                                            <?php for ($i = date("Y"); $i >= 1945; $i--) { ?>
                                                <option value="<?php echo $i ?>"><?php echo $i ?></option>
                                            <?php } ?>
                                        </select>
                                        <label for="form_control_1">Tahun Masuk</span>
                                            <span class="required">*</span>
                                        </label>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-lg-4">
                                    <div class="form-group form-md-line-input">
                                        <select class="form-control" min="thn_masuk_sek" name="thn_lulus_sek" id="thn_lulus_sek" style="width:15vh;">
                                            <option value="">Tahun</option>
                                            <?php for ($i = date("Y"); $i >= 1945; $i--) { ?>
                                                <option value="<?php echo $i ?>"><?php echo $i ?></option>
                                            <?php } ?>
                                        </select>
                                        <label for="form_control_1">Tahun Lulus</span>
                                            <span class="required">*</span>
                                        </label>
                                    </div>
                                </div>

                                <!-- END FORM-->
                            </div>
                        </div>
                        <!-- END VALIDATION STATES-->
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12 ">
                    <div class="portlet light portlet-fit portlet-form ">
                        <div class="portlet-body">
                            <div class="form-body">
                                <span class="caption-subject font-red sbold uppercase">Pendidikan Pada Saat Masuk</span>
                                <div class="form-group form-md-checkboxes">
                                    <div class="form-group form-md-line-input">
                                        <input type="text" class="form-control" name="pt" id="pt" id="form_control_1" placeholder="Masukkan Perguruan Tinggi (PT)" required oninvalid="this.setCustomValidity('Harus diisi !!!')" oninput="setCustomValidity('')">
                                        <label for="form_control_1">Perguruan Tinggi (PT)</span>
                                            <span class="required">*</span>
                                        </label>
                                        <span class="help-block">Tolong Masukkan Perguruan Tinggi (PT)...</span>
                                    </div>

                                    <div class="form-group form-md-line-input">
                                        <input type="text" class="form-control" name="fakultas" id="fakultas" id="form_control_1" placeholder="Masukkan Fakultas" required oninvalid="this.setCustomValidity('Harus diisi !!!')" oninput="setCustomValidity('')">
                                        <label for="form_control_1">Fakultas</span>
                                            <span class="required">*</span>
                                        </label>
                                        <span class="help-block">Tolong Masukkan Fakultas...</span>
                                    </div>

                                    <div class="form-group form-md-line-input">
                                        <input type="text" class="form-control" name="jur" id="jur" id="form_control_1" placeholder="Masukkan Jurusan" required oninvalid="this.setCustomValidity('Harus diisi !!!')" oninput="setCustomValidity('')">
                                        <label for="form_control_1">Jurusan</span>
                                            <span class="required">*</span>
                                        </label>
                                        <span class="help-block">Tolong Masukkan Jurusan...</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 ">
                    <div class="portlet light portlet-fit portlet-form ">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class=" icon-layers font-red"></i>
                                <span class="caption-subject font-red sbold uppercase">Data Orang Tua/Wali Santri</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- BEGIN FORM  -->
                <div class="col-md-6 col-sm-6 col-xs-12 ">
                    <!-- BEGIN VALIDATION STATES-->
                    <div class="portlet light portlet-fit portlet-form">
                        <div class="portlet-body">
                            <div class="form-body">
                                <div class="form-group form-md-line-input">
                                    <input type="text" class="form-control" name="nama_ayah" id="nama_ayah" id="form_control_1" placeholder="Masukkan Nama Ayah Anda" required oninvalid="this.setCustomValidity('Harus diisi !!!')" oninput="setCustomValidity('')">
                                    <label for="form_control_1">Nama Ayah</span>
                                        <span class="required">*</span>
                                    </label>
                                    <span class="help-block">Tolong Masukkan Nama Ayah Anda...</span>

                                </div>

                                <div class="form-group form-md-line-input">
                                    <input type="text" class="form-control" name="nik_ayah" id="nik_ayah" id="form_control_1" placeholder="Masukkan NIK/Nomor KTP">
                                    <label for="form_control_1">NIK/Nomor KTP</span>
                                    </label>
                                </div>

                                <div class="form-group form-md-line-input">
                                    <select class="form-control" name="pendidikan_ayah" id="pendidikan_ayah">
                                        <option value="">Pilih</option>
                                        <option value="0">Tidak Berpendidikan Formal </option>
                                        <option value="1">
                                            <=SLTP< /option>
                                        <option value="2">SLTA
                                        </option>
                                        <option value="3">D1</option>
                                        <option value="4">D2</option>
                                        <option value="5">D3</option>
                                        <option value="6">D4</option>
                                        <option value="7">S1</option>
                                        <option value="8">S2</option>
                                        <option value="9">S3</option>
                                    </select>
                                    <label for="form_control_1">Pendidikan </label>
                                </div>

                                <div class="form-group form-md-line-input">
                                    <select class="form-control" name="pekerjaan_ayah" id="pekerjaan_ayah">
                                        <option value="">Pilih</option>
                                        <option value="01">Tidak Bekerja (Di Rumah Saja)</option>
                                        <option value="02">Pensiunan</option>
                                        <option value="03">PNS Kementrian/Lembaga/Pemda</option>
                                        <option value="04">TNI/Polosi</option>
                                        <option value="05">Guru/Dosen</option>
                                        <option value="06">Pegawai Swasta</option>
                                        <option value="07">Pengusaha/Wiraswasta</option>
                                        <option value="08">Pengacara/Hakim/Jaksa/Notaris</option>
                                        <option value="09">Seniman/Pelukis/Artis/Sejenis</option>
                                        <option value="10">Dokter/Bidan/Perawat</option>
                                        <option value="11">Pilot/Pramugari</option>
                                        <option value="12">Pedagang</option>
                                        <option value="13">Petani/Peternak</option>
                                        <option value="14">Nelayan</option>
                                        <option value="15">Buruh (Tani/Pabrik/Bangunan)</option>
                                        <option value="16">Sopir/Masinis/Kondektur</option>
                                        <option value="17">Politikus</option>
                                        <option value="18">Lainnya</option>
                                    </select>
                                    <label for="form_control_1">Pekerjaan</span></label>
                                </div>

                                <div class="form-group form-md-line-input">
                                    <input type="text" class="form-control" name="nama_ibu" id="nama_ibu" id="form_control_1" placeholder="Masukkan Nama Ibu Anda" required>
                                    <label for="form_control_1">Nama Ibu</span>
                                        <span class="required">*</span>
                                    </label>
                                    <span class="help-block">Tolong Masukkan Nama Ibu Anda...</span>
                                </div>

                                <div class="form-group form-md-line-input">
                                    <input type="text" class="form-control" name="nik_Ibu" id="nik_Ibu" id="form_control_1" placeholder="Masukkan NIK/Nomor KTP">
                                    <label for="form_control_1">NIK/Nomor KTP</span>
                                    </label>
                                </div>

                                <div class="form-group form-md-line-input">
                                    <select class="form-control" name="pendidikan_ibu" id="pendidikan_ibu">
                                        <option value="">Pilih</option>
                                        <option value="0">Tidak Berpendidikan Formal </option>
                                        <option value="1">
                                            <=SLTP< /option>
                                        <option value="2">SLTA
                                        </option>
                                        <option value="3">D1</option>
                                        <option value="4">D2</option>
                                        <option value="5">D3</option>
                                        <option value="6">D4</option>
                                        <option value="7">S1</option>
                                        <option value="8">S2</option>
                                        <option value="9">S3</option>
                                    </select>
                                    <label for="form_control_1">Pendidikan </label>
                                </div>

                                <div class="form-group form-md-line-input">
                                    <select class="form-control" name="pekerjaan_ibu" id="pekerjaan_ibu">
                                        <option value="">Pilih</option>
                                        <option value="01">Tidak Bekerja (Ibu Rumah Tangga)</option>
                                        <option value="02">Pensiunan</option>
                                        <option value="03">PNS Kementrian/Lembaga/Pemda</option>
                                        <option value="04">TNI/Polosi</option>
                                        <option value="05">Guru/Dosen</option>
                                        <option value="06">Pegawai Swasta</option>
                                        <option value="07">Pengusaha/Wiraswasta</option>
                                        <option value="08">Pengacara/Hakim/Jaksa/Notaris</option>
                                        <option value="09">Seniman/Pelukis/Artis/Sejenis</option>
                                        <option value="10">Dokter/Bidan/Perawat</option>
                                        <option value="11">Pilot/Pramugari</option>
                                        <option value="12">Pedagang</option>
                                        <option value="13">Petani/Peternak</option>
                                        <option value="14">Nelayan</option>
                                        <option value="15">Buruh (Tani/Pabrik/Bangunan)</option>
                                        <option value="16">Sopir/Masinis/Kondektur</option>
                                        <option value="17">Politikus</option>
                                        <option value="18">Lainnya</option>
                                    </select>
                                    <label for="form_control_1">Pekerjaan</span></label>
                                </div>

                            </div>
                        </div>
                        <!-- END VALIDATION STATES-->
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12 ">
                    <div class="portlet light portlet-fit portlet-form ">
                        <div class="portlet-body">
                            <div class="form-body">
                                <div class="form-group form-md-checkboxes">

                                    <div class="form-group form-md-line-input">
                                        <input type="text" class="form-control" name="no_kk" id="no_kk" id="form_control_1" placeholder="Nomor Kartu Keluarga" required>
                                        <label for="form_control_1">Nomor Kartu Keluarga</span>
                                            <span class="required">*</span>
                                        </label>
                                        <span class="help-block">Tolong Masukkan Nomor Kartu Keluarga...</span>
                                    </div>

                                    <div class="form-group form-md-line-input">
                                        <input type="text" class="form-control" name="nama_kk" id="nama_kk" id="form_control_1" placeholder="Masukkan Nama Kepala Keluarga dalam KK" required>
                                        <label for="form_control_1">Nama Kepala Keluarga dalam KK</span>
                                            <span class="required">*</span>
                                        </label>
                                        <span class="help-block">Tolong Masukkan Nama Kepala Keluarga dalam KK...</span>
                                    </div>

                                    <div class="form-group form-md-line-input">
                                        <select class="form-control" name="status_kk" id="status_kk" required>
                                            <option value="">Pilih</option>
                                            <option value="1">Ayah Kandung</option>
                                            <option value="2">Ibu Kandung</option>
                                            <option value="3">Saudara Kandung</option>
                                            <option value="4">Kakek/Nenek</option>
                                            <option value="5">Paman/Bibi</option>
                                            <option value="6">Orang Tua Tiri</option>
                                            <option value="8">Lainnya</option>
                                        </select>
                                        <label for="form_control_1">Status Kepala Keluarga dalam KK
                                            <span class="required">*</span>
                                        </label>
                                        <span class="help-block">Tolong Masukkan Nomor Handphone Anda...</span>
                                    </div>

                                    <div class="form-group form-md-line-input">
                                        <input type="number" class="form-control" name="no_ortu" id="no_ortu" id="form_control_1" placeholder="Masukkan Nomor Handphone	" oninvalid="this.setCustomValidity('Harus diisi !!!')" oninput="setCustomValidity('')">
                                        <label for="form_control_1">Nomor Handphone</span>
                                            <span class="required">*</span>
                                        </label>
                                        <span class="help-block">Tolong Masukkan Nomor Handphone Anda...</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-sm-12 col-xs-12 ">
                    <div class="portlet light portlet-fit portlet-form ">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class=" icon-layers font-red"></i>
                                <span class="caption-subject font-red sbold uppercase">Data Wali Santri</span>
                                <br><small>Isi Data Apabila Wali Bukan Orang Tua Kandung</small>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- BEGIN FORM  -->
                <div class="col-md-6 col-sm-6 col-xs-12 ">
                    <!-- BEGIN VALIDATION STATES-->
                    <div class="portlet light portlet-fit portlet-form">
                        <div class="portlet-body">
                            <div class="form-body">
                                <div class="form-group form-md-checkboxes">
                                    <div class="form-group form-md-line-input">
                                        <input type="text" class="form-control" name="nama_wali" id="nama_wali" id="form_control_1" placeholder="Masukkan Nama Wali Anda">
                                        <label for="form_control_1">Nama Wali</span>
                                        </label>
                                        <span class="help-block">Tolong Masukkan Nama Wali Anda...</span>
                                    </div>

                                    <div class="form-group form-md-line-input">
                                        <select class="form-control" name="hubungan" id="hubungan">
                                            <option value="">Pilih</option>
                                            <option value="1">Kakak</option>
                                            <option value="2">Kakek/Nenek</option>
                                            <option value="3">Paman/Bibi</option>
                                            <option value="4">Orang Tua Angkat</option>
                                            <option value="5">Orang Tua Asuh</option>
                                            <option value="6">Orang Tua Tiri</option>
                                            <option value="7">Keluarga Jauh</option>
                                            <option value="8">Lainnya</option>
                                        </select>
                                        <label for="form_control_1">Hubungan</label>
                                    </div>

                                    <div class="form-group form-md-line-input">
                                        <input type="text" class="form-control" name="nik_wali" id="nik_wali" id="form_control_1" placeholder="Masukkan NIK/Nomor KTP">
                                        <label for="form_control_1">NIK/Nomor KTP</span>
                                        </label>
                                    </div>

                                    <div class="form-group form-md-line-input">
                                        <select class="form-control" name="pendidikan_wali" id="pendidikan_wali">
                                            <option value="">Pilih</option>
                                            <option value="0">Tidak Berpendidikan Formal </option>
                                            <option value="1">
                                                <=SLTP< /option>
                                            <option value="2">SLTA
                                            </option>
                                            <option value="3">D1</option>
                                            <option value="4">D2</option>
                                            <option value="5">D3</option>
                                            <option value="6">D4</option>
                                            <option value="7">S1</option>
                                            <option value="8">S2</option>
                                            <option value="9">S3</option>
                                        </select>
                                        <label for="form_control_1">Pendidikan </label>
                                    </div>

                                    <div class="form-group form-md-line-input">
                                        <select class="form-control" name="pekerjaan_wali" id="pekerjaan_wali">
                                            <option value="">Pilih</option>
                                            <option value="01">Tidak Bekerja (Di Rumah Saja)</option>
                                            <option value="02">Pensiunan</option>
                                            <option value="03">PNS Kementrian/Lembaga/Pemda</option>
                                            <option value="04">TNI/Polosi</option>
                                            <option value="05">Guru/Dosen</option>
                                            <option value="06">Pegawai Swasta</option>
                                            <option value="07">Pengusaha/Wiraswasta</option>
                                            <option value="08">Pengacara/Hakim/Jaksa/Notaris</option>
                                            <option value="09">Seniman/Pelukis/Artis/Sejenis</option>
                                            <option value="10">Dokter/Bidan/Perawat</option>
                                            <option value="11">Pilot/Pramugari</option>
                                            <option value="12">Pedagang</option>
                                            <option value="13">Petani/Peternak</option>
                                            <option value="14">Nelayan</option>
                                            <option value="15">Buruh (Tani/Pabrik/Bangunan)</option>
                                            <option value="16">Sopir/Masinis/Kondektur</option>
                                            <option value="17">Politikus</option>
                                            <option value="18">Lainnya</option>
                                        </select>
                                        <label for="form_control_1">Pekerjaan</span></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END VALIDATION STATES-->
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="portlet light portlet-fit portlet-form ">
                        <div class="portlet-body">
                            <div class="form-body">
                                <div class="form-actions ">
                                    <div class="row  pull-right">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            </form>
        </div>
    </div>
</body>
<!-- END BODY -->

</html>