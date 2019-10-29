<!DOCTYPE html>
    <html>
        <head>
            <!--Import Google Icon Font-->
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            <!--Import materialize.css-->
            <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
            <link rel="stylesheet" href="style.css">
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
                            <h3>This is our big Tagline!</h3>
                            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                        </div>
                    </li>
                    <li>
                        <img src="<?= BASEURL ?>/img/slider/zakat.jpg">
                        <div class="caption right-align">
                            <h3>This is our big Tagline!</h3>
                            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                        </div>
                    </li>
                    <li>
                        <img src="<?= BASEURL ?>/img/slider/wakaf.jpg">
                        <div class="caption center-align">
                            <h3>This is our big Tagline!</h3>
                            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
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
                        <div class="col m4 light">
                            <h5 class="center">1.234.456.789</h5>
                            <p class="center">Dana terkumpul</p>
                        </div>
                        <div class="col m4 light">
                            <h5 class="center">35.234</h5>
                            <p class="center">Donatur</p>
                        </div>
                        <div class="col m4 light">
                            <h5 class="center">13</h5>
                            <p class="center">Program</p>
                        </div>
                    </div>
                </div>
            </section>















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
        </script>

        </body>
  </html>
        