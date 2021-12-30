<?php include('config.php'); ?>



<!-- Input Sizing start -->
<section id="input-sizing">
	<div class="row match-height">
		<div class="col-md-12 col-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title">Tambah Data Sertifikan Badan Usaha</h4>
				</div>
				<div class="card-body">
					<form action="prosesAdd.php" method="post">
						<div class="row">
							<div class="col-12">
								<div class="form-group">
									<label for="largeInput">PB-UMKU</label>
									<input id="pb_umku" name="pb_umku" class="form-control form-control-lg" type="number" placeholder="Masukkan PB-UMKU" value="085649888272" />
								</div>
								<div class="form-group">
									<label for="defaultInput">Nama Pelaku Usaha</label>
									<input id="nama_pelaku_usaha" name="nama_pelaku_usaha" class="form-control" type="text" placeholder="Masukkan Nama Lengkap" />
								</div>
								<div class="form-group">
									<label for="largeInput">NIB</label>
									<input id="nib" name="nib" class="form-control form-control-lg" type="number" placeholder="Masukkan NIB" />
								</div>
							</div>
							<div class="col-6">
								<div class="">
									<label for="largeInput">Alamat Kantor</label>
									<input id="alamat_kantor" name="alamat_kantor" class="form-control form-control-lg" type="text" placeholder="Masukkan Alamat Kantor" />
								</div>
							</div>
							<div class="col-xl-6 col-md-12 col-12 mb-1">
								<div class="form-group">
									<label for="basicInput">Kode Pos Alamat Kantor</label>
									<input id="kd_pos_kantor" name="kd_pos_kantor" type="text" class="form-control form-control-lg" placeholder="Masukkan Kode Pos" />
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<label for="largeInput">Status Penanaman Modal</label>
									<input id="status" name="status" class="form-control form-control-lg" type="text" placeholder="Masukkan Status Penanaman Modal" />
								</div>
								<div class="form-group">
									<label for="defaultInput">Kode Klasifikasi Baku Lapangan Usaha Indonesia (KBLI)</label>
									<input id="klbi" name="klbi" class="form-control" type="text" placeholder="Masukkan KBLI" />
								</div>
							</div>
							<div class="col-6">
								<div class="">
									<label for="largeInput">Lokasi usaha</label>
									<input id="lokasi_usaha" name="lokasi_usaha" class="form-control form-control-lg" type="text" placeholder="Masukkan Lokasi usaha" />
								</div>
							</div>
							<div class="col-xl-6 col-md-12 col-12 mb-1">
								<div class="form-group">
									<label for="basicInput">Kode Pos Lokasi Usaha</label>
									<input id="kd_pos_usaha" name="kd_pos_usaha" type="text" class="form-control form-control-lg" placeholder="Masukkan Kode Pos" />
								</div>
							</div>
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