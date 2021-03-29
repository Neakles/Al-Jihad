  <?= $this->extend('layout/template'); ?>

  <?= $this->section('content'); ?>
  <img src="/img/slider/1.jpg" class="img-fluid" alt="Responsive image" style="width: 100%; height:400px;">
  <div class="row" id="artikel">
      <!-- <div class="rowx">
          <img src="/img/slider/1.jpg" alt="..." class="img-thumbnail" style="width: 150px; height:150px;">
          <h1>ArtikelArtikelArtikelArtikelArtikelArtikelArtikelArtikelArtikelArtikelArtikelArtikel</h1>
          <p>mine</p>
      </div> -->

      <div class="rowx">
          <div class="col-lg-10 text-justify">
              <h3 class="section-heading text-uppercase text-center">Yayasan Al-Jihad</h3>
              <div class="" style="border: 2px solid #AF8429;margin-bottom:30px;"></div>
              <img src="/img/slider/1.jpg" alt="..." class="img-thumbnail" style="width: 300px; height:300px;">
              <p>Yayasan Al-Jihad merupakan suatu lembaga sosial untuk mengaktualisasikan misi Islam sebagai Rahmatan Lil ‘alamin dalam bingkai pendidikan Pondok Pesantren dan segala aktifitas pembelajaran. Serta melahirkan dan mengorbitkan generasi muslim masa depan yang memiliki bekal life skill tinggi, tangguh, unggul, luas keilmuannya serta berbudi mulia (berakhlakul karimah).</p>
              <p>Yayasan Al-Jihad berdiri tanggal 15 April 2002 sampai saat ini terus berkembang dalam hal meningkatkan bangunan Pondok Pesantren, Panti Asuhan, Program Tahfidz, dan memperluas jaringan donatur yang bersedia menyisihkan sebagian hartanya untuk perkembangan Yayasan Al-Jihad melalui program DASA.</p>

          </div>
      </div>
      <?= $this->include('layout/sidebar'); ?>
  </div>


  <?= $this->endSection(); ?>