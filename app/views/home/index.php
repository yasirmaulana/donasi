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
                                <li><a href="#kampanye">Program</a></li>
                                <!-- <li><a href="<?= BASEURL ?>/laporan/">Laporan</a></li> -->
                            </ul>
                        </div>
                    </div>
                </nav>

                <!-- <ul class="sidenav" id="mobile-nav"> -->
                <ul class="sidenav" id="mobile-nav">
                    <!-- <li>
                        <div class="user-view">
                            <div class="background">
                                <img src="images/office.jpg">
                            </div>
                            <a href="#user"><img class="circle" src="images/yuna.jpg"></a>
                            <a href="#name"><span class="white-text name">John Doe</span></a>
                            <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
                        </div>
                    </li>
                    <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
                    <li><a href="#!">Second Link</a></li>
                    <li><div class="divider"></div></li>
                    <li><a class="subheader">Subheader</a></li>
                    <li><a class="waves-effect" href="#!">Third Link With Waves</a></li> -->
                    <li><a href="#kampanye">Program</a></li>

                </ul>
                            
            </div>

            <!-- slider  -->
            <div class="slider">
                <ul class="slides">
                    <li>
                        <img src="<?= BASEURL ?>/img/slider/santri4.png">
                        <div class="caption left-align">
                            <h3>#SantriPalestina</h3>
                            <h5 class="light grey-text text-lighten-3">Palestina adalah jantung umat Islam Dunia.</h5>
                            <a href="<?= BASEURL ?>/transaksi/index/4" class="waves-effect waves-light btn orange darken-2">Donasi Sekarang</a>
                        </div>
                    </li>
                    <li>
                        <img src="<?= BASEURL ?>/img/slider/santri.jpeg">
                        <div class="caption left-align">
                            <h3>#SedekahQuranUntukSantri</h3>
                            <h5 class="light grey-text text-lighten-3">Pahala mengalir tanpa henti, menjadi investasi abadi.</h5>
                            <a href="<?= BASEURL ?>/transaksi/index/1" class="waves-effect waves-light btn orange darken-2">Donasi Sekarang</a>
                        </div>
                    </li>
                    <li>
                        <img src="<?= BASEURL ?>/img/slider/ota.JPG">
                        <div class="caption left-align">
                            <h3>#OrangTuaAsuh</h3>
                            <h5 class="light grey-text text-lighten-3">bila ingin bahagia, berbagi kebahagianlah dengan orang lain</h5>
                            <a href="<?= BASEURL ?>/transaksi/index/2" class="waves-effect waves-light btn orange darken-2">Donasi Sekarang</a>
                        </div>
                    </li>
                    <!-- <li>
                        <img src="<?= BASEURL ?>/img/slider/santri3.png">
                        <div class="caption left-align">
                            <h3>This is our big Tagline!</h3>
                            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                        </div>
                    </li> -->
                </ul>
            </div>

            <!-- kampanye -->
            <section id="kampanye" class="kampanye grey lighten-3 scrollspy">
                <div class="container">
                    <div class="row">
                        <h3 class="light center green-text text-darken-3">Yuuks Berbagi dengan Mereka</h3>
                        <?php foreach($data['kampanye'] as $don) : ?>
                        <div class="col m4 s12">
                            <div class="card center hoverable">
                                <div class="card-image">
                                    <img src="<?= BASEURL ?>/img/donasi/<?= $don["poster"] ?>">
                                    <!-- <span class="card-title">
                                        <div class="label">
                                            <?= $don["judul"] ?>
                                        </div>
                                    </span> -->
                                </div>
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

         

        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="<?= BASEURL ?>/js/materialize.min.js"></script>
        <script>
            const sideNav = document.querySelectorAll('.sidenav')
            M.Sidenav.init(sideNav)
        
            const slider = document.querySelectorAll('.slider')
            M.Slider.init(slider, {
                indicators: false,
                height: 600,
                duration: 500,
                interval: 10000
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
        