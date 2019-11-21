<section id="kampanye" class="kampanye ">
    <div class="container">
        <div class="row">
            <h3 class="light center green-text text-darken-3">Yuuks Berbagi dengan Mereka</h3>
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
                        <a href="<?= BASEURL ?>/transaksi/index/<?= $don['donasi_id'] ?>" class="waves-effect waves-light btn green">Donasi Sekarang</a>

                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>