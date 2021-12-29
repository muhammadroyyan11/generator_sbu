<?php
//memasukkan file config.php
include('config.php');
?>

<!-- Zero configuration table -->
<section id="basic-datatable">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title">Data SBU</h4>
					<div class="pull-right">
						<a href="index.php?page=tambah_data" class="btn btn-primary btn-flat">
							<i class="fa fa-files-plus"></i> Tambah Data
						</a>
					</div>
				</div>
				<div class="card-content">
					<div class="card-body card-dashboard">
						<div class="table-responsive">
							<table class="table zero-configuration">
								<thead>
									<tr>
										<th>NO.</th>
										<th>PB-UMKU</th>
										<th>Nama Pelaku Usaha</th>
										<th>NIB</th>
										<th>Alamat Kantor</th>
										<th>Status Penanaman Modal</th>
										<th>Lokasi Usaha</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php
									//query ke database SELECT tabel mahasiswa urut berdasarkan id yang paling besar
									$sql = mysqli_query($koneksi, "SELECT * FROM sbu_surat ORDER BY id DESC") or die(mysqli_error($koneksi));
									//jika query diatas menghasilkan nilai > 0 maka menjalankan script di bawah if...
									if (mysqli_num_rows($sql) > 0) {
										//membuat variabel $no untuk menyimpan nomor urut
										$no = 1;
										//melakukan perulangan while dengan dari dari query $sql
										while ($data = mysqli_fetch_assoc($sql)) { ?>

											<tr>
												<td><?= $no ?></td>
												<td><?= $data['pb_umku'] ?></td>
												<td><?= $data['nama_pelaku_usaha'] ?></td>
												<td><?= $data['nib'] ?></td>
												<td><?= $data['alamat_kantor'] ?>, <?= $data['kd_pos_kantor'] ?></td>
												<td><?= $data['status'] ?></td>
												<td><?= $data['lokasi_usaha'] ?>, <?= $data['kd_pos_usaha'] ?></td>
												<th>
													<a href="cetak.php?page=print&id=<?= $data['id'] ?>" class="btn btn-circle btn-success btn-sm" target="_blank">Cetak</a>
												</th>
											</tr>
										<?php
											$no++;
										}
										//jika query menghasilkan nilai 0
									} else { ?>
										<tr>
											<td colspan="6">Tidak ada data.</td>
										</tr>
									<?php
									}
									?>
								<tbody>

							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>