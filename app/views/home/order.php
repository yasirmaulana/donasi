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
		
		var_dump($_POST);
		echo "<br>";
		var_dump($transaction_details);

		$jalan = 1;
	}

?>

	<div class="container">

		<div class="row mt-3">
			<div class="col-md-8 mt-3">ini penjelasan</div>
			
			<div class="col-md-4 mt-3 bg-light"> 
				<div class="container">
					<div class="row mt-4 mb-4">
						<div class="col-md-12">
							<form action="" method="post">
								<div class="form-group">
									<input type="hidden" class="form-control" id="order_id" name="order_id" placeholder="order id">
									<small class="form-text text-muted">Masukan Nilai Donasi Anda</small>
									<input type="number" class="form-control" id="gross_amount" name="gross_amount">
								</div>
								<hr>
								<div class="form-group">
									<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" id="no_wa" name="no_wa" placeholder="Nomor Whatsapp">
								</div>
								<button type="submit" class="btn btn-outline-success btn-block" name="btn-order">Ajukan Donasi</button>

							</form>
						</div>
					</div>
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
            /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
          }
        });
			
			}
    </script>

</body>
</html>
