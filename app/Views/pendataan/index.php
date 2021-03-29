<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="<?= base_url('/css/style1.css'); ?>">

    <title><?= $title; ?></title>
</head>

<body>
    <header class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12 col-sm-12 header-logo ">
                    <br>
                    <a href="<?= base_url('/'); ?>">
                        <h1 class="logo">Yayasan Al-Jihad Surabaya</h1>
                    </a>
                </div>
            </div>
        </div>
    </header>
    <div id="wrapper">
        <div id="header" class="content-block">
            <section class="center">
                <div class="slogan1">
                    <img src="/img/logo.png" height="200px" width="200px;">
                </div>
                <div class="slogan">
                    <br>
                    <br>
                    Pendataan Santri
                </div>
                <div class="secondary-slogan">
                    Pondok Pesantren Al-Jihad Surabaya
                </div>
                <div class="secondary-slogan">
                    NSPP : 510035780004
                    <br>
                    <br>
                    <br>
                </div>
                <!-- <a href="<?= base_url('/pendataan/form'); ?>"><button class="btn btn-lg" style="background-color:#bee291; width:20vh; color: black;">Yatim</button></a> -->
                <a href="<?= base_url('/pendataan/form'); ?>"><button class="btn btn-lg" style="background-color:#bee291; width:20vh; color: black;">Santri</button></a>
            </section>
        </div><!-- header -->
    </div>
</body>