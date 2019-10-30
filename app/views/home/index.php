<!DOCTYPE html>
    <html>
        <head>
            <!--Import Google Icon Font-->
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            <!--Import materialize.css-->
            <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
            <link rel="stylesheet" href="css/style.css">
            <!--Let browser know website is optimized for mobile-->
            <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
            <title>Berbagi</title>
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
                                <li><a href="">Donasi</a></li>
                                <li><a href="">Zakat</a></li>
                                <li><a href="">Wakaf</a></li>
                                <li><a href="">Qurban</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <ul class="sidenav" id="mobile-nav">
                    <li><a href="">Donasi</a></li>
                    <li><a href="">Zakat</a></li>
                    <li><a href="">Wakaf</a></li>
                    <li><a href="">Qurban</a></li>
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
                    <li>
                        <img src="<?= BASEURL ?>/img/slider/zakat.jpg">
                        <div class="caption left-align">
                            <h3>#YuksZakat</h3>
                            <h5 class="light grey-text text-lighten-3">Bersihkan Harta, Sucikan Jiwa.</h5>
                        </div>
                    </li>
                    <li>
                        <img src="<?= BASEURL ?>/img/slider/wakaf.jpg">
                        <div class="caption left-align">
                            <h3>#KekalkanHarta</h3>
                            <h5 class="light grey-text text-lighten-3">Harta itu dibawa mati, dengan cara di Wakafkan.</h5>
                        </div>
                    </li>
                    <li>
                        <img src="<?= BASEURL ?>/img/slider/kurban.jpg">
                        <div class="caption left-align">
                            <h3>This is our big Tagline!</h3>
                            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- status penerimaan -->
            <section id="stPenerima" name="stPernerima">
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
            </section>

            <!-- kampanye -->
            <section id="kampanye" class="kampanye grey lighten-3">
                <div class="container">
                    <div class="row">
                        <h3 class="light center green-text text-darken-3">Our Campaign</h3>
                        <?php foreach($data['kampanye'] as $don) : ?>
                        <div class="col m4 s12">
                            <div class="card center hoverable">
                                <div class="card-image">
                                    <img src="<?= BASEURL ?>/img/donasi/<?= $don["poster"] ?>">
                                    <!-- <span class="card-title"><?= $don["judul"] ?></span> -->
                                </div>
                                <div class="card-content">
                                    <?= $don["deskripsi"] ?>
                                </div>
                                <div class="card-action">
                                    <a href="<?= BASEURL ?>/home/formOrder/<?= $don['donasi_id'] ?>" class="waves-effect waves-light btn green">Donasi Sekarang</a>

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
                        <a href="<?= BASEURL ?>/home/formOrder/<?= $don['donasi_id'] ?>" class="waves-effect waves-light btn green darken-2">Lihat semua program donasi</a>

                    </div>
                </div>
            </section>

            <div class="parallax-container">
              <div class="parallax"><img src="<?= BASEURL ?>/img/slider/wakaf.jpg" height="900"></div>
            </div>


            <!-- footer -->
            <footer class="page-footer grey darken-1">
                <div class="container">
                    <div class="row">
                        <div class="col l6 s12">
                            <h5 class="white-text">
                            <img src="<?= BASEURL ?>/img/logo-kauny.png" width="90">
                            <!-- Askar Kauny -->
                            </h5>
                            <p class="grey-text light text-lighten-4">sebuah lembaga filantropi yang bergerak dibidang "membumikan quran".</p>
                        </div>

                        <div class="col l4 offset-l2 s12">
                            <h5 class="white-text light">Tautan</h5>
                            <ul>
                                <li><a class="grey-text light text-lighten-3" href="#!"> Beranda</a></li>
                                <li><a class="grey-text light text-lighten-3" href="#!"> Laporan</a></li>
                                <li><a class="grey-text light text-lighten-3" href="#!"> Tentang Kami</a></li>
                            </ul>
                        </div>


                    </div>
                </div>
                <div class="footer-copyright">
                    <div class="container light ">
                        © 2019 Copyright Askar Kauny
                        <a class="grey-text text-lighten-4 right" href="https://atsiri.id">Power By atsiri.id All rights reserved.</a>
                    </div>
                </div>
            </footer>


        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="js/materialize.min.js"></script>
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
        </script>

        </body>
  </html>
        