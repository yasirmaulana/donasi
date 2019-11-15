<!DOCTYPE html>
    <html>
        <head>
            <!--Import Google Icon Font-->
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            <!--Import materialize.css-->
            <link type="text/css" rel="stylesheet" href="<?= BASEURL ?>/css/materialize.min.css"  media="screen,projection"/>
            <link rel="stylesheet" href="<?= BASEURL ?>/css/style.css">
            <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="<<?= TOKEN_CLIENT ?>>"></script>
            <!-- <script type="text/javascript" src="https://app.midtrans.com/snap/snap.js" data-client-key="<<?= TOKEN_CLIENT ?>>"></script> -->
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
                            <a href="<?= BASEURL ?>" class="brand-logo">
                                <img src="<?= BASEURL ?>/img/logo-kauny.png" width="60">
                            </a>
                            <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                            <ul class="right hide-on-med-and-down">
                                <li><a href="">Donasi</a></li>
                                <!-- <li><a href="">Zakat</a></li> -->
                                <li><a href="">Wakaf</a></li>
                                <li><a href="">Laporan</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <ul class="sidenav" id="mobile-nav">
                    <li><a href="">Donasi</a></li>
                    <!-- <li><a href="">Zakat</a></li> -->
                    <li><a href="">Wakaf</a></li>
                    <li><a href="">Laporan</a></li>
                </ul>
            </div>
