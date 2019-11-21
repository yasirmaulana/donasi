<!-- contact -->
<section id="contact" class="contact grey lighten-3 scrollspy light">
    <div class="container">
        <div class="row">
            <div class="col m7 s12">
                <h3>GET IN TOUCH</h3>
                <p><b>Yayasan Askar Kauny</b> adalah lembaga non profit yang bergerak di bidang sosial dan pendidikan, 
                    serta berkhidmat dalam mencetak generasi penghafal Alquran. Mengaplikasin Metode Kauny dengan taglinenya 
                    <b>Menghafal Alquran Semudah Tersenyum</b> dalam setiap program dan kegiatan, yaitu metode yang menyelaraskan otak kanan, 
                    hati dan gerakan tangan sehingga menghafal Alqur’an lebih mudah dan menyenangkan, semudah tersenyum.</p>
                <p><i class="material-icons">map</i> JL. Raya Setu No. 63 RT 003/003 Cipayung Jakarta Timur 13880</p>
                <p><i class="material-icons">phone_android</i> (021) 2867 2216 / 0878 7722 1200 (wa)</p>
                <p><i class="material-icons">email</i> crm@askarkauny.com</p>
            </div>
            <div class="col m5 s12">
                <!-- <h3>say what you need?</h3> -->
                <form action="<?= BASEURL; ?>/feedback/index" method="post">
                    <div class="card-panel">
                        <div class="input-field">
                            <input type="text" id="name" name="nama" required class="validate">
                            <label for="name">Name</label>
                        </div>
                        <div class="input-field">
                            <input type="number" id="nowa" name="no_wa" required class="validate">
                            <label for="nowa">Whatsapp Number</label>
                        </div>
                        <div class="input-field">
                            <input type="email" id="email" name="email" required class="validate">
                            <label for="email">Email</label>
                        </div>
                        <div class="input-field">
                            <textarea id="textarea1" name="pesan" required class="materialize-textarea"></textarea>
                            <label for="textarea1">Message</label>
                        </div>
                        <button type="submit" name="submit" class="btn green darken-3">
                            SEND MESSAGE
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </form>
            </div>
        </div>                    
    </div>
</section>

<section class="footer green lighten-3 light">
    <div class="container">
        <div class="row">
            <div class="col m6 s12">
                © 2019 Copyright Askar Kauny
            </div>
            <div class="col m6 s12">
                <a class="black-text text-darken-1 right" href="https://atsiri.id">Power By atsiri.id All rights reserved.</a>                
            </div>
        </div>
    </div>
</section>

<div class="fixed-action-btn">
    <a class="btn-floating btn-large orange" href="https://api.whatsapp.com/send?phone=6287877221200&text=Assalamu'alaikum">
        <i class="large material-icons">chat</i>
        <!-- <img src="img/wa.png"> -->
        <!-- <i>WA</i> -->
    </a>
</div>

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

    const floatBtn = document.querySelectorAll('.fixed-action-btn')
    M.FloatingActionButton.init(floatBnt, {
        direction: 'top'
    })

</script>
        
</body>
</html>