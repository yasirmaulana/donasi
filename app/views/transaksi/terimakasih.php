<?php
	date_default_timezone_set("Asia/Bangkok");

	require_once('Veritrans.php');

	//Set Your server key
	Veritrans_Config::$serverKey = TOKEN_SERVER;

	// Uncomment for production environment
	// Veritrans_Config::$isProduction = true;

	// Enable sanitization
	Veritrans_Config::$isSanitized = true;

	// Enable 3D-Secure
	Veritrans_Config::$is3ds = true;
	
	// if(isset($_POST['btn-order'])){

		$kodeId 	= $data['transaksi']['kodeDonasi']; 
		$amount 	= $data['transaksi']['gross_amount'];
		$nama 		= $data['transaksi']['nama'];
		$nowa 		= $data['transaksi']['no_wa'];
		$email 		= $data['transaksi']['email'];
		$itemName 	= $data['transaksi']['itemName'];

		// Required
		$transaction_details = array(
			'order_id' => $kodeId,
			'gross_amount' => $amount, // no decimal allowed for creditcard
		);
				
		$customer_details = array (
			'email' => $email,
			'phone' => $nowa
		); 

		$item_detail = array (
			'price' => $amount,
			'quantity' => 1,
			'name' => $itemName
		);

		$item_details = array ($item_detail);

		$transaction = array(
			'transaction_details' => $transaction_details,
			'customer_details' => $customer_details,
			'item_details' => $item_details
		);
		
		$snapToken = Veritrans_Snap::getSnapToken($transaction);
		// echo "snapToken = ".$snapToken;

		// $jalan = 1;
	// } 

// var_dump($data);

?>

<div class="container">
    <div class="row">
        <div class="col m4 s12"></div>
        <div class="col m4 s12">
            <div class="card center hoverable">
                <div class="card-content">
                    <div class="row">
                        <b><?= $nama ?></b> terima kasih sudah bersedia mendukung program <b>“<?= $itemName ?>”</b>.
                    </div>
                    <div class="row">
                        <p>Kini, Anda menjadi bagian dari #SahabatKauny… 
                        <p>Kebaikan Anda menjadi salah satu upaya kita bersama, untuk membangun peradaban Quran.
                    </div>
                    <div class="row">
                        selain detail jumlah donasi dan cara pembayaran di pop up tadi, kami juga akan 
                        mengirimkan email
                        <p>Terima kasih
                    </div>
                    <div class="row">
                        <div class="col m6 s12">
                            <a href="" class=" red-text text-lighten-3">Lihat Program Lainnya</a>
                        </div>
                        <div class="col m6 s12">
                            <a href="" class=" green-text text-darken-1">Kontak Admin Kami</a>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

// if (<?= $jalan ?> == 1) {
            
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
// }

// function numberWithCommas(x) {
//         return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
// }
</script>
