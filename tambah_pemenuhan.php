<?php include('config.php');
include('get_id.php');
// var_dump($data);
?>

<!-- Input Sizing start -->
<section id="input-sizing">
	<div class="row match-height">
		<div class="col-md-12 col-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title">Tambah Data Pemenuhan Komitmen</h4>
				</div>
				<div class="card-body">
					<form action="prosesAddPemenuhan.php" method="post">
						<div class="row">
							<div class="col-12">
								<div class="form-group">
									<label for="largeInput">Perizinan Berusaha</label>
									<input id="perizinan_berusaha" name="perizinan_berusaha" class="form-control form-control-lg" type="text" placeholder="Masukkan Kualifikasi" />
								</div>
								<div class="form-group">
									<label for="defaultInput">pemenuhan_kewajiban</label>
									<input id="pemenuhan_kewajiban" name="pemenuhan_kewajiban" class="form-control" type="text" placeholder="Masukkan Nama Lengkap" />
								</div>
								<div class="form-group">
									<label for="largeInput">Keterangan</label>
									<input id="keterangan" name="keterangan" class="form-control form-control-lg" type="text" placeholder="Masukkan NIB" />
								</div>

								<input id="id_surat" name="id_surat" type="hidden" class="form-control form-control-lg" value="<?= $data['id'] ?>" />


								<div class="col-12">
									<input type="submit" name="submit" id="submit">
								</div>

							</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Input Sizing end -->