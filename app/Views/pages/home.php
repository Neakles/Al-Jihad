    <?= $this->extend('layout/template'); ?>
    <?= $this->section('content'); ?>
    <!-- MASTHEAD -->
    <section class="masthead">
        <div class="intro-text">
            <div class="intro-lead-in">Selamat Datang di Website</div>
            <div class="intro-heading ">Yayasan Al-Jihad Surabaya</div>
        </div>
    </section>
    <!-- Teks Berjalan -->
    <section id="teks_berjalan">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <marquee>
                        <span class="teks_berjalan1">Sabar Itu Indah | </span>
                        <span class="teks_berjalan1">Ikhlas Itu Mujarab | </span>
                        <span class="teks_berjalan1">Istiqomah Itu Karomah</span>
                    </marquee>
                </div>
            </div>
        </div>
    </section>
    <section id="info">
        <div class="container">
            <div class="row">
                <!-- BERITA -->
                <div class="col-md-6" id="">
                    <div class="head-agenda">
                        <div class="col-md-12 tes">
                            <h6><i class="fa fa-calendar-alt"></i>Agenda</h6>
                        </div>
                    </div>
                    <div class="isi-agenda">
                        <a href="#" class="">
                            <div class="media">
                                <div class="agenda">
                                    <h6 class="col-md-7 tgl">29</h6>
                                    <h6 class="col-md-7 bln">Jan</h6>
                                </div>
                                <a class="mt-0 mb-1 h6 judul-agenda">Pengajian Umum oleh KH Much Imam Chambali</a>
                            </div>
                        </a>
                        <a href="#" class="">
                            <div class="media">
                                <div class="agenda">
                                    <h6 class="col-md-7 tgl">30</h6>
                                    <h6 class="col-md-7 bln">Jan</h6>
                                </div>
                                <a class="mt-0 mb-1 h6 judul-agenda">Dzikir Rahmatan Lilalamin</a>
                            </div>
                        </a>
                        <a href="#" class="">
                            <div class="media">
                                <div class="agenda">
                                    <h6 class="col-md-7 tgl">02</h6>
                                    <h6 class="col-md-7 bln">Feb</h6>
                                </div>
                                <a class="mt-0 mb-1 h6 judul-agenda">Pengajian Umum oleh KH Sukron Jazilan</a>
                            </div>
                        </a>
                        <div class="col-md-12 text-center">
                            <a href="#"><button type="button" class="btn btn-primary" name="button">Agenda Lainnya</button></a>
                        </div>
                    </div>
                </div>
                <!-- PENGUMUMAN -->
                <div class="col-md-6" id="">
                    <div class="head-pengumuman">
                        <div class="col-md-12 pengumuman">
                            <h6><i class="fa fa-bullhorn"></i>Pengumuman</h6>
                        </div>
                    </div>
                    <div class="isi-pengumuman">
                        <a href="#" class="">
                            <div class="media">
                                <div class="pengumuman">
                                    <i class="fa fa-bullhorn"></i>
                                </div>
                                <a class="mt-0 mb-1 h6 judul-pengumuman">Untuk semetara Pengajian Malam masih libur.</a>
                            </div>
                        </a>
                        <a href="#" class="">
                            <div class="media">
                                <div class="pengumuman">
                                    <i class="fa fa-bullhorn"></i>
                                </div>
                                <a class="mt-0 mb-1 h6 judul-pengumuman">Per Januari 2021 Syahriah pondok dipotong 50%</a>
                            </div>
                        </a>
                        <a href="#" class="">
                            <div class="media">
                                <div class="pengumuman">
                                    <i class="fa fa-bullhorn"></i>
                                </div>
                                <a class="mt-0 mb-1 h6 judul-pengumuman">Pondok libur sampai semester genap</a>
                            </div>
                        </a>
                        <div class="col-md-12 text-center">
                            <a href="#"><button type="button" class="btn btn-primary" name="button">Pengumuman Lainnya</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="sec3">
        <div class="container">
            <div class="row">
                <!-- VIDEO -->
                <div class="col-md-5" #id="video">
                    <div class="video-head">
                        <h6><i class="fas fa-film"></i>Ngaji Panguripan</h6>
                        <div class="garis"></div>
                    </div>
                    <div class="isi-video">
                        <iframe class="uk-video" src="https://www.youtube.com/embed/EumQnY06WZY" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <!-- BERITA -->
                <div class="col-md-7" id="news">
                    <div class="news-head">
                        <h6><i class="fa fa-newspaper"></i>Berita</h6>
                        <div class="garis"></div>
                    </div>
                    <div id="news-title">
                        <a href="#" class="col-md-6 col-xs-12  list-group-item list-group-item-action flex-column align-items-start border-0">
                            <div class="media">
                                <div class="media-body">
                                    <img class="rounded lazyload blur-up lazyloaded" src="<?= base_url('/img/slider/5.jpg'); ?> " alt="">
                                    <h6 class="mt-0 mb-1 h6">Anggap Saja Ini Judul Artikel Anggap Saja Judul Artikel Anggap Saja Judul Artikel Anggap Saja</h6>
                                    <p class="date-media"><i class="fa fa-calendar"></i>20 April 2021</p>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="col-md-6 col-xs-12  list-group-item list-group-item-action flex-column align-items-start border-0">
                            <div class="media">
                                <div class="media-body">
                                    <img class="rounded lazyload blur-up lazyloaded" src="<?= base_url('/img/slider/5.jpg'); ?>" alt="">
                                    <h6 class="mt-0 mb-1 h6">Anggap Saja Ini Judul Artikel Anggap Saja Judul Artikel Anggap Saja Judul Artikel Anggap Saja</h6>
                                    <p class="date-media"><i class="fa fa-calendar"></i>20 April 2021</p>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="col-md-6 col-xs-12  list-group-item list-group-item-action flex-column align-items-start border-0">
                            <div class="media">
                                <div class="media-body">
                                    <img class="rounded lazyload blur-up lazyloaded" src="<?= base_url('/img/slider/5.jpg'); ?>" alt="">
                                    <h6 class="mt-0 mb-1 h6">Anggap Saja Ini Judul Artikel Anggap Saja Judul Artikel Anggap Saja Judul Artikel Anggap Saja</h6>
                                    <p class="date-media"><i class="fa fa-calendar"></i>20 April 2021</p>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="col-md-6 col-xs-12  list-group-item list-group-item-action flex-column align-items-start border-0">
                            <div class="media">
                                <div class="media-body">
                                    <img class="rounded lazyload blur-up lazyloaded" src="<?= base_url('/img/slider/5.jpg'); ?>" alt="">
                                    <h6 class="mt-0 mb-1 h6">Anggap Saja Ini Judul Artikel Anggap Saja Judul Artikel Anggap Saja Judul Artikel Anggap Saja</h6>
                                    <p class="date-media"><i class="fa fa-calendar"></i>20 April 2021</p>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="col-md-6 col-xs-12 list-group-item list-group-item-action flex-column align-items-start border-0">
                            <div class="media">
                                <div class="media-body">
                                    <img class="rounded lazyload blur-up lazyloaded" src="<?= base_url('/img/slider/5.jpg'); ?>" alt="">
                                    <h6 class="mt-0 mb-1 h6">Anggap Saja Ini Judul Artikel Anggap Saja Judul Artikel Anggap Saja Judul Artikel Anggap Saja</h6>
                                    <p class="date-media"><i class="fa fa-calendar"></i>20 April 2021</p>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="col-md-6 col-xs-12 list-group-item list-group-item-action flex-column align-items-start border-0">
                            <div class="media">
                                <div class="media-body">
                                    <img class="rounded lazyload blur-up lazyloaded" src="<?= base_url('/img/slider/5.jpg'); ?>" alt="">
                                    <h6 class="mt-0 mb-1 h6">Anggap Saja Ini Judul Artikel Anggap Saja Judul Artikel Anggap Saja Judul Artikel Anggap Saja</h6>
                                    <p class="date-media"><i class="fa fa-calendar"></i>20 April 2021</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Slider -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/img/slider/1.jpg" style="width: 100%; height:100%">
            </div>
            <div class="carousel-item">
                <img src="/img/slider/2.jpg" style="width: 100%; height:100%">
            </div>
            <div class="carousel-item">
                <img src="/img/slider/3.jpg" style="width: 100%; height:100%">
            </div>
            <div class="carousel-item">
                <img src="/img/slider/4.jpg" style="width: 100%; height:100%">
            </div>
            <div class="carousel-item">
                <img src="/img/slider/5.jpg" style="width: 100%; height:100%">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- ARTIKEL -->
    <section id="sec4">
        <div class="container">
            <div class="row">
                <div class="col-md-12" id="article">
                    <div class="article-head">
                        <h6><i class="fa fa-list-alt"></i>Artikel</h6>
                        <div class="garis"></div>
                    </div>
                    <div id="article-title">
                        <a href="#" class="col-md-6 col-xs-12  list-group-item list-group-item-action flex-column align-items-start border-0">
                            <div class="media">
                                <div class="media-body">
                                    <img class="rounded lazyload blur-up lazyloaded" src="<?= base_url('/img/slider/5.jpg'); ?>" alt="">
                                    <h6 class="mt-0 mb-1 h6">Anggap Saja Ini Judul Artikel Anggap Saja Judul Artikel Anggap Saja Judul Artikel Anggap Saja</h6>
                                    <p class="date-media"><i class="fa fa-calendar"></i>20 April 2021</p>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="col-md-6 col-xs-12  list-group-item list-group-item-action flex-column align-items-start border-0">
                            <div class="media">
                                <div class="media-body">
                                    <img class="rounded lazyload blur-up lazyloaded" src="<?= base_url('/img/slider/5.jpg'); ?>" alt="">
                                    <h6 class="mt-0 mb-1 h6">Anggap Saja Ini Judul Artikel Anggap Saja Judul Artikel Anggap Saja Judul Artikel Anggap Saja</h6>
                                    <p class="date-media"><i class="fa fa-calendar"></i>20 April 2021</p>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="col-md-6 col-xs-12  list-group-item list-group-item-action flex-column align-items-start border-0">
                            <div class="media">
                                <div class="media-body">
                                    <img class="rounded lazyload blur-up lazyloaded" src="<?= base_url('/img/slider/5.jpg'); ?>" alt="">
                                    <h6 class="mt-0 mb-1 h6">Anggap Saja Ini Judul Artikel Anggap Saja Judul Artikel Anggap Saja Judul Artikel Anggap Saja</h6>
                                    <p class="date-media"><i class="fa fa-calendar"></i>20 April 2021</p>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="col-md-6 col-xs-12  list-group-item list-group-item-action flex-column align-items-start border-0">
                            <div class="media">
                                <div class="media-body">
                                    <img class="rounded lazyload blur-up lazyloaded" src="<?= base_url('/img/slider/5.jpg'); ?>" alt="">
                                    <h6 class="mt-0 mb-1 h6">Anggap Saja Ini Judul Artikel Anggap Saja Judul Artikel Anggap Saja Judul Artikel Anggap Saja</h6>
                                    <p class="date-media"><i class="fa fa-calendar"></i>20 April 2021</p>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="col-md-6 col-xs-12 list-group-item list-group-item-action flex-column align-items-start border-0">
                            <div class="media">
                                <div class="media-body">
                                    <img class="rounded lazyload blur-up lazyloaded" src="<?= base_url('/img/slider/5.jpg'); ?>" alt="">
                                    <h6 class="mt-0 mb-1 h6">Anggap Saja Ini Judul Artikel Anggap Saja Judul Artikel Anggap Saja Judul Artikel Anggap Saja</h6>
                                    <p class="date-media"><i class="fa fa-calendar"></i>20 April 2021</p>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="col-md-6 col-xs-12 list-group-item list-group-item-action flex-column align-items-start border-0">
                            <div class="media">
                                <div class="media-body">
                                    <img class="rounded lazyload blur-up lazyloaded" src="<?= base_url('/img/slider/5.jpg'); ?>" alt="">
                                    <h6 class="mt-0 mb-1 h6">Anggap Saja Ini Judul Artikel Anggap Saja Judul Artikel Anggap Saja Judul Artikel Anggap Saja</h6>
                                    <p class="date-media"><i class="fa fa-calendar"></i>20 April 2021</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?= $this->endSection(); ?>>