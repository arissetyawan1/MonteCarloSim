<!-- <html>
	<head>
		<title>Program Simulasi Monte Carlo - Kelompok 2</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/main.css">
	  	<link rel="stylesheet" href="css/bootstrap.min.css">
	  	<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="icon" href="img/favicon.ico">
	  	<script src="js/jquery.js"></script>
	  	<script src="js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
		<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" rel="stylesheet"/>
	</head>
	<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
					<h1>Prediksi Permintaan (Monte Carlo)</h1>
			</div>
		</div>
	</nav>

	<!-- Container -->
	<!-- <div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">Deskripsi</div>
				<div class="panel-body">
					<ul class="nav nav-tabs">
						   <li class="active"><a data-toggle="tab" href="#monte">Simulasi Monte Carlo</a></li>
						   <li><a data-toggle="tab" href="#sejarah">Laporan Penjualan</a></li>
						   <li><a data-toggle="tab" href="#metode">Laporan Prediksi</a></li>
						<li><a data-toggle="tab" href="#batasan">Batasan</a></li> 

						</ul>
			  			 <div class="tab-content">
			  			 	  <div id="monte" class="tab-pane fade in active" style="padding-top: 20px;">
							    	<div class="col-md-8">
							      		<p>Topik yang diambil pada Tugas Besar Teknik Simulasi dan Pemodelan ini adalah Simulasi Monte Carlo. </p>
										<p>
										Tahapan simulasi:
										<ul>
											<li>Tentukan jumlah data permintaan</li>
											<li>Perhitungan distribusi dari data permintaan yang telah dimasukan</li>
											<li>Simulasi berdasarkan distribusi di atas</li>
										</ul>
									   </p>
							      	</div>
							    </div>
							    <div id="sejarah" class="tab-pane fade" style="padding-top: 20px;">
										Tab Laporan Penjualan
						    	</div>
						    	<div id="batasan" class="tab-pane fade" style="padding-top: 20px;">
								
						    	</div>
								<div id="metode" class="tab-pane fade" style="padding-top: 20px;">
									Tab Laporan Prediksi Permintaan
						    	</div>
						 </div>
		   		</div>
		   	</div> -->
<?php require 'templates/header.php';?>
<?php require 'templates/side_bar.php';?>

		<div class="container-fluid" style="width: 80%;left:0;">
			<div class="row">
				<div class="panel panel-primary" style="margin-top: 20px; margin-right: 10px">
							<div class="panel-heading">Input Data Permintaan</div>
								<div class="panel-body">
									<?php if(empty($_POST)): ?>
									<div class="input-group">
										<form action="prediksi_permintaan.php" method="post">
											<table class="custom-padding-table">
												<tr>
													<td>Masukan jumlah data</td>
													<td>:</td>
													<td><input type="number" min="0" name="jumlah" class="form-control" required="" oninvalid="this.setCustomValidity('Harap di isi !')" oninput="setCustomValidity('')"></td>
													<td>Masukan tahun</td>
													<td>:</td>
													<td>
														<div class="input-group">
															<label class ="mr-3"> Tahun </label>
															<input type="text" id="datepicker" name="tahun" />
													<div class="input-group-btn">
														<td><input type="submit" value="Ok" class="btn btn-success"></td>
													</div>
												</tr>			
											</table>
										</form>
									</div>
									<?php else: ?>
										<?php 
										$bulan =['Januari', 'Februari', 'Maret', 'April', 'May', 'Juni', 'Juli', 'August', 'September', 'Oktober', 'November', 'Desember'];
											$banyak = $_POST['jumlah'] ;
											$tahun = $_POST['tahun'];
											// var_dump($tahun);	
										;?>
											<?php if(!empty($banyak)): ?>
											<div class="input-group">
											<h1><center>Tahap 1</center></h1>
											<p><center>Silahkan masukan data permintaan</center></p>
											  <form action="proses_prediksi_permintaan.php" method="post">
												  <div class="table table-responsive">
												  <table class="table table-hover custom-table-header">
														  <tr>
															<th>Permintaan</th>
															<th>Frekuensi</th>
														  <tr>
													<?php for($i=0; $i<$banyak; $i++): ?>
														  <tr>
															<td>
																<input type=number min=0 name=demand[] placeholder="0" class="form-control" required="" oninvalid="this.setCustomValidity('Harap di isi !')" oninput="setCustomValidity('')">
																<input min=0 name=year[] placeholder="0" value='<?php echo $tahun; ?>' hidden>
																<input name="month[]" placeholder="0" value='<?php echo $bulan[$i]; ?>' hidden>
															</td>
															<td>
																<input type=number min=1 name=freq[] placeholder="0" class="form-control" required="" oninvalid="this.setCustomValidity('Harap di isi !')" oninput="setCustomValidity('')">
															</td>
														  </tr>
													<?php endfor; ?>
												  </table>
												  <!-- <table class="table table-hover custom-table-header">
														  <tr>
															<th>Biaya Produksi / Unit</th>
															<th>Harga Penjualan / Unit</th>
														  <tr>
														  <tr>
															  <td><input type=number min=1 name="biaya" placeholder="0" class="form-control" required="" oninvalid="this.setCustomValidity('Harap di isi !')" oninput="setCustomValidity('')"></td>
															  <td><input type=number min=1 name="penjualan" placeholder="0" class="form-control" required="" oninvalid="this.setCustomValidity('Harap di isi !')" oninput="setCustomValidity('')"></td>
														  </tr>
												  </table> -->
												  <div class="input-group-btn">
													<input type="hidden" name="jumlah" value="<?php echo $banyak; ?>">
													<center><input type="submit" value="Hitung" name="submit" class="btn btn-success" style="padding-left: 30px; padding-right: 30px;"></center>
												  </div>
												</div>
											  </form>
											</div>
											<?php endif; ?>
									<?php endif; ?>
											</div>
								</div>
							</div>
			</div>
		</div>
	</div>
	</body>
	<script>
			 $("#datepicker").datepicker({
					format: " yyyy", // Notice the Extra space at the beginning
					viewMode: "years", 
					minViewMode: "years"
			});
			console.log($("#datepicker").val());
			 $("#datepicker").on("change",function(){
				var selected = $(this).val();
				console.log(selected);
				$(".year").val(selected);
			});
	</script>
</html>
