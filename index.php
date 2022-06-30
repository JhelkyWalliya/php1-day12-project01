<?php
	
	// INTEGRASI CONFIG

	// Koneksi
	require_once('./config/connection.php');

	// Site Info
	require_once('./config/site_info.php');
	

	//integrasi functions

	//viuw all 
	//menampilakn data dari semua data base
	require_once('./funcgtions/view-all.php');
	


?>


<!DOCTYPE html>
<html>
<head>
	<title><?php echo $site_title; ?></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


</head>
<body class="bg-light p-3">

	<div class="container bg-dark text-light rounded shadow p-4">

		<h1 class="text-warning fw-bolder"><?php echo $site_title; ?></h1>

		<p><?php echo $site_tag_line; ?></p>

		<small class="text-secondary">
			<i><?php echo $site_description; ?></i>
		</small>
		
	</div>




	<!-- CONTENT -->

	<!-- .container -->
	<div class="container p-5">

		<!-- .row -->
		<div class="row">
			<?php if($result->num_rows > 0){while($row = $result->fetch_assoc()){ ?>
			
			<!-- .col -->
			<div class="col-lg-4">
				
				<!-- .card -->
				<div class="card bg-dark text-light shadow border-warning">
					<!-- .card-body -->
					<div class="card-body">
						<small><i>Sayur</i></small>
						<h3 class="text-warning fs-1 fw-bolder">Tomat</h3>
					</div>
					<!-- end .card-body -->

					<!-- .card-footer -->
					<div class="card-footer d-flex justify-content-between">
						<div class="fw-bolder fs-4">
							Rp. 500.000,-
						</div>
						<div>
							<a href="#" class="btn btn-warning btn-small">Masuk Keranjang</a>
						</div>
					</div>
					<!-- .card-footer -->

				</div>
				<!-- end .card -->

			</div>
			<!-- end .col -->
			<?php }}  ?>


			



		</div>
		<!-- end .row -->
		
	</div>
	<!-- end .container -->

	<!-- END CONTENT -->

</body>
</html>