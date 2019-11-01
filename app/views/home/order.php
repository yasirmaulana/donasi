<?php

	require_once('Veritrans.php');

	//Set Your server key
	Veritrans_Config::$serverKey = TOKEN_SERVER;

	// Uncomment for production environment
	// Veritrans_Config::$isProduction = true;

	// Enable sanitization
	Veritrans_Config::$isSanitized = true;

	// Enable 3D-Secure
	Veritrans_Config::$is3ds = true;
	
	if(isset($_POST['btn-order'])){

		$amount = $_POST['gross_amount'];
		// Required
		$transaction_details = array(
			'order_id' => rand(),
			'gross_amount' => $amount, // no decimal allowed for creditcard
		);
				
		// Fill transaction details
		$transaction = array(
			'transaction_details' => $transaction_details,
		);
		
		$snapToken = Veritrans_Snap::getSnapToken($transaction);
		// echo "snapToken = ".$snapToken;
		
		// var_dump($_POST);
		// echo "<br>";
		// var_dump($transaction_details);

		$jalan = 1;
	}

	// var_dump($data['kampanye']);
?>

	<div class="container">
		<div class="row">

			<div class="col m6 s12">
				<img src="<?= BASEURL ?>/img/donasi/<?= $data['kampanye']['poster'] ?> " height="300">
				<h4><?= $data['kampanye']['judul']; ?></h4>
				<?= $data['kampanye']['deskripsi']; ?>
			</div>
			
			<div class="col m6 s12">
				<div class="card center hoverable">
					<div class="card-image"></div>
					<div class="card-content">
						<h5 class="light green-text">Masukan Nilai Donasi Anda</h5>
						<div class="row">
							<form  action="" method="post" class="col s12">
								<!-- <div class="row"> -->
									<div class="input-field col s12">
										<input type="hidden" class="form-control" id="order_id" name="order_id">
										<input placeholder="Rupiah" type="number" class="validate" min="5000" maxlength="13" id="grossAmount" name="gross_amount" Required>
									</div>
								<!-- </div> -->
								<!-- <div class="row"> -->
									<div class="input-field col s12">
										<input placeholder="Nama" type="text" class="validate" id="nama" name="nama">
									</div>
								<!-- </div> -->
								<!-- <div class="row"> -->
									<div class="input-field col s12">
										<input placeholder="Nomor Whatsapp (Wajib diisi)" type="text" class="validate" id="no_wa" name="no_wa" Required>
									</div>
								<!-- </div> -->
							<button type="submit" class="btn btn-outline-success btn-block" name="btn-order">Ajukan Donasi</button>
							</form>
						</div>
					</div>
					<!-- <div class="card-action"> -->
							<!-- <a href="<?= BASEURL ?>/home/formOrder/<?= $don['donasi_id'] ?>" class="waves-effect waves-light btn green">Donasi Sekarang</a> -->
						<!-- </form> -->

					<!-- </div> -->
				</div>
			</div>


		</div>

	</div>


	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    
	<script type="text/javascript">

			if (<?= $jalan ?> == 1) {
						
					// SnapToken acquired from previous step
					snap.pay('<?=$snapToken?>', {
						// Optional
						onSuccess: function(result){
							/* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
						},
						// Optional
						onPending: function(result){
							/* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
						},
						// Optional
						onError: function(result){
							console.log(result)
							/* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
						}
					});
			}

			function numberWithCommas(x) {
					return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
			}
    </script>

<!-- </body>
</html> -->
