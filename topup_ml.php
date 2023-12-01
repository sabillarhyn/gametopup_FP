<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Top Up Mobile Legend</title>

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<link rel="stylesheet" href="style2.css">
	<link rel="stylesheet" href="tbl.css">

	<!-- js  -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">    
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body class="gradient">

<!-- header -->
<section class="home" id="home">
            <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
                <div class="container">
                <a class="navbar-brand" href="index.html"><img src="logo.png" height="70px"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active akun" style="text-align:center;" aria-current="page" href="masuk.html"><strong>AKUN</strong></a>
                    </li>
                    &ensp;
                    <li class="nav-item dropdown" id="navbarNav">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="idn.png" height="40px"> <b class="caret"></b></a>
                            <ul class="dropdown-menu multi-level">
                                <li><a href="topup_ml.php"><img src="idn.png" height="25px">&nbsp;Indonesia</a></li>
                                <li><a href="topup_ml_eng.php"><img src="eng.png" height="25px">&nbsp;English (US)</a></li>
                                <li class="divider"></li>
                                </li>
                            </ul>
                    </li>
                    </ul>
                </div>
                </div>
            </nav>

    <br>
    <br>
    <br>
    <br>

	<form id="pesan_sekarang" method="POST">
	
		
		<div class="col-10 offset-1">
			<div class="row">
			&emsp; <a href="index.html" type="submit" class="previous round" >&#10094;</a>
				<div class="col-5">
				<br>
				<br>
				<br>
				<br>
					<img src="ml_poster.jpg" width="400px" alt="poster">
					<br>
					<br>
					<h3><strong>Mobile Legend: Bang Bang</strong></h3>
					<p><strong>Top up ML Diamond hanya dalam hitungan detik! Cukup masukan Username MLBB Anda, pilih jumlah Diamond yang Anda inginkan, selesaikan pembayaran, dan Diamond akan secara langsung ditambahkan ke akun Mobile Legends Anda.</strong></p>
					<br>
					<a href="ml_tutor.html" class='tombol'>Tutorial</a>
				</div>


				<div id="card1">
					<div id="card-content1">
						<h3><strong>User ID</strong></h3>
						<input type="text" name="uid" id="uid" placeholder="Masukkan User ID">
						<br>
						<h6>Untuk mengetahui User ID Anda, silakan klik menu profile dibagian kiri atas pada menu utama game. User ID akan terlihat dibagian bawah Nama Karakter Game Anda. Silakan masukkan User ID Anda untuk menyelesaikan transaksi. Contoh : 12345678(1234).</h6>
						<br>
						<br>
						<h3><strong>Pilih Nominal Top-Up</strong></h3>
						<input type="radio" name="diamond" id="diamond" value="172"> 172 Diamonds &ensp; Rp.40.000,-
						<br>
						<input type="radio" name="diamond" id="diamond" value="257"> 257 Diamonds &ensp; Rp.60.000,-
						<br>
						<input type="radio" name="diamond" id="diamond" value="429"> 429 Diamonds &ensp; Rp.100.000,-
						<br>
						<input type="radio" name="diamond" id="diamond" value="514"> 514 Diamonds &ensp; Rp.120.000,-
						<br>
						<input type="radio" name="diamond" id="diamond" value="706"> 706 Diamonds &ensp; Rp.155.000,-
						
						<br>
						<br>
						<div id="card-title1">
							<h3><strong>Email</strong></h3>
							<input type="email" name="email" id="email" placeholder="example@email.com">
							<br>
							<br>
							<button type="submit" name="pesan" id="pesan">Pesan sekarang</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>




<div id="alert_gagal">
</div>

<div id="alert_success">
</div>

<!-- footer  -->
<footer class="col-12">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<br>
				<img src="logo.png" height="80px" alt="logo">
				<p class="col-5"> <strong>Nikmati pengalaman pembelian tanpa repot untuk membeli kredit game di NPC Store, platform top-up  untuk game kegemaran anda.</strong></p>
				<a href="kontak.html"><img src="kontak.png" height="50px"></a>
			</div>
		</div>
	</div>
</footer>


</body>
</html>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>




<script type="text/javascript">
	$(document).ready(function() { 
		$("#pesan_sekarang").submit(function(e) {
			e.preventDefault();
			$.ajax({
				url: 'action.php',
				type: 'post',
				dataType: 'json',
				beforeSend: function (e) {
					$('#pesan').html('Pesanan masuk !');
				},
				data: $(this).serialize(),             
				success: function(data) {
/*
					if (data.status == 0) {
						$('#alert_success').html(data.msg);
						$('#pesan').text('Pesan sekarang');
					} else if (data.status == 1) {
						$('#alert_gagal').text(data.msg);
						$('#pesan').text('Pesan sekarang');
					}*/
				}
			});
		});
	})
</script>