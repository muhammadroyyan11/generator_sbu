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
					<h4 class="card-title">Tambah Data Klasifikasi Subklasifikasi</h4>
				</div>
				<div class="card-body">
					<form action="prosesAddKualifikasi.php" method="post">
						<div class="row">
							<div class="col-12">
								<div class="form-group">
									<label for="largeInput">Kualifikasi</label>
									<input id="kualifikasi" name="kualifikasi" class="form-control form-control-lg" type="text" placeholder="Masukkan Kualifikasi" />
								</div>
								<div class="form-group">
									<label for="defaultInput">Kode Subkla</label>
									<input id="kd_subkla" name="kd_subkla" class="form-control" type="text" placeholder="Masukkan Nama Lengkap" />
								</div>
								<div class="form-group">
									<label for="largeInput">Sifat</label>
									<input id="sifat" name="sifat" class="form-control form-control-lg" type="text" placeholder="Masukkan NIB" />
								</div>
								<div class="form-group">
									<label for="largeInput">KBLI</label>
									<input id="klbi" name="klbi" class="form-control form-control-lg" type="text" placeholder="Masukkan NIB" />
								</div>
								<div class="form-group">
									<label for="largeInput">Subklasifikasi</label>
									<input id="subklasifikasi" name="subklasifikasi" class="form-control form-control-lg" type="text" placeholder="Masukkan NIB" />
								</div>
								<div class="form-group">
									<label for="defaultInput">Pemenuhan Kewajiban</label>
									<input id="pemenuhan_kewajiban" name="pemenuhan_kewajiban" class="form-control" type="text" placeholder="Masukkan Nama Lengkap" />
								</div>
							</div>
							<div class="col-6">
								<div class="">
									<label for="largeInput">Nama PJSKBU</label>
									<input id="nama_pjskbu" name="nama_pjskbu" class="form-control form-control-lg" type="text" placeholder="Masukkan Lokasi usaha" />
								</div>
							</div>
							<div class="col-xl-6 col-md-12 col-12 mb-1">
								<div class="form-group">
									<label for="basicInput">No Nama PJSKBU(NIP)</label>
									<input id="no_nama_pjskbu" name="no_nama_pjskbu" type="text" class="form-control form-control-lg" placeholder="Masukkan Kode Pos" />
								</div>
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