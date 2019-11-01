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
        <script type="<?= BASEURL ?>text/javascript" src="js/materialize.min.js"></script>
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