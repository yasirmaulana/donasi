<?php

	$data = file_get_contents(BASEURL."/data/donasi.json");
	$donasi = json_decode($data, true)[donasi];

?>

	<div class="container">

		<div class="row mt-3">
			<?php foreach($donasi as $don) : ?>
			<div class="col-md-4">
				<div class="card mb-3">
					<img src="<?= BASEURL ?>/img/donasi/<?= $don["gambar"] ?>" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title"><?= $don["nama"] ?></h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="<?= BASEURL ?>/home/formOrder" class="btn btn-primary">Donasi</a>
					</div>
				</div>
			</div>
			<?php endforeach; ?>
		</div>

	</div>

	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    

</body>
</html>
