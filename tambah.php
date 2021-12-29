<?php include('config.php'); ?>

<?php
if (isset($_POST['submit'])) {
	$pb_umku = $_POST['pb_umku'];
	$nama_pelaku_usaha = $_POST['nama_pelaku_usaha'];
	$nib = $_POST['nib'];
	$alamat_kantor= $_POST['alamat_kantor'];
	$kd_pos_kantor = $_POST['kd_pos_kantor'];
	$status = $_POST['status'];
	$klbi = $_POST['klbi'];
	$lokasi_usaha = $_POST['lokasi_usaha'];
	$kd_pos_lokasi = $_POST['kd_pos_usaha'];
	$date = date("Y-m-d");

	$cek = mysqli_query($koneksi, "SELECT * FROM sbu_surat WHERE pb_umku='$pb_umku'") or die(mysqli_error($koneksi));

	if (mysqli_num_rows($cek) == 0) {
		$sql = mysqli_query($koneksi, "INSERT INTO sbu_surat(pb_umku, nama_pelaku_usaha, nib, alamat_kantor, kd_pos_kantor, status, klbi, lokasi_usaha, kd_pos_usaha, date) VALUES('$pb_umku', '$nama_pelaku_usaha', '$nib', '$alamat_kantor', '$kd_pos_kantor', '$status', '$klbi', '$lokasi_usaha', '$kd_pos_lokasi', '$date')") or die(mysqli_error($koneksi));

		if ($sql) {
			echo '<script>alert("Berhasil menambahkan data."); document.location="index.php?page=tampil_mhs";</script>';
		} else {
			echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
		}
	} else {
		echo '<div class="alert alert-warning">Gagal, NIM sudah terdaftar.</div>';
	}
}
?>

<!-- Input Sizing start -->
<section id="input-sizing">
	<div class="row match-height">
		<div class="col-md-12 col-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title">Tambah Data Sertifikan Badan Usaha</h4>
				</div>
				<div class="card-body">
					<form action="index.php?page=tambah_data" method="post">
						<div class="row">
							<div class="col-12">
								<div class="form-group">
									<label for="largeInput">PB-UMKU</label>
									<input id="pb_umku" name="pb_umku" class="form-control form-control-lg" type="number" placeholder="Masukkan PB-UMKU" />
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
								<!-- <button type="submit" class="btn btn-primary mr-1">Submit</button>
								<button type="reset" class="btn btn-outline-secondary">Reset</button> -->
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