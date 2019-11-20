<!DOCTYPE html>
    <html>
        <head>
            <!--Import Google Icon Font-->
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            <!--Import materialize.css-->
            <link type="text/css" rel="stylesheet" href="<?= BASEURL ?>/css/materialize.min.css"  media="screen,projection"/>
            <link rel="stylesheet" href="<?= BASEURL ?>/css/style.css">
            <!--Let browser know website is optimized for mobile-->
            <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
            <title>Berbagi</title>
            <style>
                .label {
                    width: 100px;
                    height: 20px;
                    background-color: green;
                }
            </style>
        </head>

        <body>

            <!-- Navbar  -->
            <div class="navbar-fixed">
                <nav class="green darken-1">
                    <div class="container">
                        <div class="nav-wrapper">
                            <a href="#!" class="brand-logo">
                                <img src="<?= BASEURL ?>/img/logo-kauny.png" width="60">
                            </a>
                            <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                            <ul class="right hide-on-med-and-down">
                                <li><a href="#kampanye">Donasi</a></li>
                                <!-- <li><a href="">Zakat</a></li> -->
                                <!-- <li><a href="">Wakaf</a></li> -->
                                <li><a href="<?= BASEURL ?>/laporan/">Laporan</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <ul class="sidenav" id="mobile-nav">
                    <li><a href="#kampanye">Donasi</a></li>
                    <!-- <li><a href="">Zakat</a></li> -->
                    <!-- <li><a href="">Wakaf</a></li> -->
                    <li><a href="<?= BASEURL ?>/laporan/">Laporan</a></li>
                </ul>
            </div>

            <!-- slider  -->
            <div class="slider">
                <ul class="slides">
                    <li>
                        <img src="<?= BASEURL ?>/img/slider/donasi.jpg">
                        <div class="caption left-align">
                            <h3>#Berbagi</h3>
                            <h5 class="light grey-text text-lighten-3">Membuat mereka tersenyum.</h5>
                        </div>
                    </li>
                    <!-- <li>
                        <img src="<?= BASEURL ?>/img/slider/zakat.jpg">
                        <div class="caption left-align">
                            <h3>#YuksZakat</h3>
                            <h5 class="light grey-text text-lighten-3">Bersihkan Harta, Sucikan Jiwa.</h5>
                        </div>
                    </li> -->
                    <li>
                        <img src="<?= BASEURL ?>/img/slider/wakaf.jpg">
                        <div class="caption left-align">
                            <h3>#KekalkanHarta</h3>
                            <h5 class="light grey-text text-lighten-3">Harta itu dibawa mati, dengan cara di Wakafkan.</h5>
                        </div>
                    </li>
                    <!-- <li>
                        <img src="<?= BASEURL ?>/img/slider/kurban.jpg">
                        <div class="caption left-align">
                            <h3>This is our big Tagline!</h3>
                            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                        </div>
                    </li> -->
                </ul>
            </div>

            <!-- status penerimaan -->
            <!-- <section id="stPenerima" name="stPernerima">
                <div class="container">
                    <div class="row">
                        <h3 class="center light green-text text-darken-3">Status Penerimaan</h3>
                        <div class="col m4 s12 light">
                            <h5 class="center">1.234.456.789</h5>
                            <p class="center">Dana terkumpul</p>
                        </div>
                        <div class="col m4 s12 light">
                            <h5 class="center">35.234</h5>
                            <p class="center">Donatur</p>
                        </div>
                        <div class="col m4 s12 light">
                            <h5 class="center">13</h5>
                            <p class="center">Program</p>
                        </div>
                    </div>
                </div>
            </section> -->

            <!-- kampanye -->
            <section id="kampanye" class="kampanye grey lighten-3 scrollspy">
                <div class="container">
                    <div class="row">
                        <!-- <h3 class="light center green-text text-darken-3">Our Campaign</h3> -->
                        <?php foreach($data['kampanye'] as $don) : ?>
                        <div class="col m4 s12">
                            <div class="card center hoverable">
                                <div class="card-image">
                                    <img src="<?= BASEURL ?>/img/donasi/<?= $don["poster"] ?>">
                                    <!-- <span class="card-title"><?= $don["judul"] ?></span> -->
                                </div>
                                <!-- <div class="card-title">
                                    <div class="label"></div>         
                                </div> -->
                                <div class="card-content">
                                    <?= $don["deskripsi"] ?>
                                </div>
                                <div class="card-action">
                                    <a href="<?= BASEURL ?>/transaksi/index/<?= $don['donasi_id'] ?>" class="waves-effect waves-light btn green">Donasi Sekarang</a>

                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>

                </div>
            </section>

            <!-- lihat semua program -->
            <section class="green lighten-4">
                <div class="container">
                    <div class="row center green lighten-4">
                        <h5>Lihat Semua Program Donasi Yang Sudah Diselenggarakan</h5>
                        <a href="<?= BASEURL ?>/home/allCampaign" class="waves-effect waves-light btn green darken-2">Lihat semua program donasi</a>

                    </div>
                </div>
            </section>

            <!-- <div class="parallax-container">
              <div class="parallax"><img src="<?= BASEURL ?>/img/slider/wakaf.jpg" height="900"></div>
            </div> -->

            <!-- zakat -->
            <!-- <section>
                <div class="container">
                    <div class="row">
                        <div class="col m8">
                            <div class="card">
                                <div class="card-content">
                                <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                                </div>
                                <div class="card-tabs">
                                <ul class="tabs tabs-fixed-width">
                                    <li class="tab"><a href="#test4">Test 1</a></li>
                                    <li class="tab"><a class="active" href="#test5">Test 2</a></li>
                                    <li class="tab"><a href="#test6">Test 3</a></li>
                                </ul>
                                </div>
                                <div class="card-content grey lighten-4">
                                <div id="test4">Test 1</div>
                                <div id="test5">Test 2</div>
                                <div id="test6">Test 3</div>
                                </div>
                            </div>
                        </div>
                        <div class="col m4">

                        </div>
                    </div>
                </div>
            </section> -->
         

        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="<?= BASEURL ?>/js/materialize.min.js"></script>
        <script>
            const sideNav = document.querySelectorAll('.sidenav')
            M.Sidenav.init(sideNav)
        
            const slider = document.querySelectorAll('.slider')
            M.Slider.init(slider, {
                indicators: false,
                height: 500,
                duration: 500,
                interval: 3000
            })

            const parallax = document.querySelectorAll('.parallax')
            M.Parallax.init(parallax)

            const scroll = document.querySelectorAll('.scrollspy')
            M.ScrollSpy.init(scroll, {
                 scrollOffset: 20
            })
        </script>

        </body>
  </html>
        