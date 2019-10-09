<?php

	$data = file_get_contents(BASEURL."/data/donasi.json");
	$donasi = json_decode($data, true)[donasi];
	
	// require_once(dirname(__FILE__) . '/../../Veritrans.php');
	require_once('Veritrans.php');

	//Set Your server key
	Veritrans_Config::$serverKey = "SB-Mid-server-vjnasHbf1Rxmx2mz7-DfVyxQ";

	// Uncomment for production environment
	// Veritrans_Config::$isProduction = true;

	// Enable sanitization
	Veritrans_Config::$isSanitized = true;

	// Enable 3D-Secure
	Veritrans_Config::$is3ds = true;
	
	// Required
	$transaction_details = array(
	'order_id' => rand(),
	'gross_amount' => 94000, // no decimal allowed for creditcard
	);

	// Optional
	$item1_details = array(
	'id' => 'a1',
	'price' => 18000,
	'quantity' => 3,
	'name' => "Apple"
	);

	// Optional
	$item2_details = array(
	'id' => 'a2',
	'price' => 20000,
	'quantity' => 2,
	'name' => "Orange"
	);

	// Optional
	$item_details = array ($item1_details, $item2_details);

	// Optional
	$billing_address = array(
	'first_name'    => "Andri",
	'last_name'     => "Litani",
	'address'       => "Mangga 20",
	'city'          => "Jakarta",
	'postal_code'   => "16602",
	'phone'         => "081122334455",
	'country_code'  => 'IDN'
	);

	// Optional
	$shipping_address = array(
	'first_name'    => "Obet",
	'last_name'     => "Supriadi",
	'address'       => "Manggis 90",
	'city'          => "Jakarta",
	'postal_code'   => "16601",
	'phone'         => "08113366345",
	'country_code'  => 'IDN'
	);

	// Optional
	$customer_details = array(
	'first_name'    => "Andri",
	'last_name'     => "Litani",
	'email'         => "andri@litani.com",
	'phone'         => "081122334455",
	'billing_address'  => $billing_address,
	'shipping_address' => $shipping_address
	);

	// Optional, remove this to display all available payment methods
	$enable_payments = array('credit_card','cimb_clicks','mandiri_clickpay','echannel');

	// Fill transaction details
	$transaction = array(
	// 'enabled_payments' => $enable_payments,
	'transaction_details' => $transaction_details,
	// 'customer_details' => $customer_details,
	// 'item_details' => $item_details,
	);

	$snapToken = Veritrans_Snap::getSnapToken($transaction);
	// echo "snapToken = ".$snapToken;
?>

<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="<<?= TOKEN_CLIENT ?>>"></script>

	<title>Donasi</title>
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container">
			<a class="navbar-brand" href="#">
				<img src="<?= BASEURL ?>/img/logo-kauny.png" width="75">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav">
					<a class="nav-item nav-link active" href="#">Home</a>
					<a class="nav-item nav-link" href="#">Donasi</a>
					<a class="nav-item nav-link" href="#">Zakat</a>
					<a class="nav-item nav-link" href="#">Wakaf</a>
				</div>
			</div>
		</div>
	</nav>

	<div class="container">
		<!-- <div class="row mt-3">
			<div class="col">
				<h1>All</h1>
			</div>
		</div> -->

		<div class="row mt-3">
			<?php foreach($donasi as $don) : ?>
			<div class="col-md-4">
				<div class="card mb-3">
					<img src="<?= BASEURL ?>/img/donasi/<?= $don["gambar"] ?>" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title"><?= $don["nama"] ?></h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Donasi</a>
						<!-- <a href="#" class="btn btn-primary">Donasi</a> -->
					</div>
				</div>
			</div>
			<?php endforeach; ?>
		</div>

	</div>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-sm mt-5" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
				<form action="" method="post">
					<div class="form-group">
						<label for="order_id">Order Id</label>
						<input type="text" class="form-control" id="order_id" name="order_id">
					</div>
					<div class="form-group">
						<label for="gross_amount">Amount</label>
						<input type="number" class="form-control" id="gross_amount" name="gross_amount">
					</div>
				
					<!-- <button type="submit" class="btn btn-primary" id="order" name="order">Submit</button> -->
				</form>
				<div class="modal-footer">
					<!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
					<button class="btn btn-primary" id="order">Ajukan Donasi</button>
				</div>
			</div>
		</div>
	</div>

	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    
	<script type="text/javascript">
      document.getElementById('order').onclick = function(){
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
      };
    </script>

</body>
</html>
