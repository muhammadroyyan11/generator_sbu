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
                    <h4 class="card-title">Kualifikasi Subklasifikasi</h4>
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
                                        <th>Kualifikasi</th>
                                        <th>Kode Subkla</th>
                                        <th>Sifat</th>
                                        <th>KBLI</th>
                                        <th>Subklasifikasi</th>
                                        <th>Nama PJSKBU</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    //query ke database SELECT tabel mahasiswa urut berdasarkan id yang paling besar
                                    $sql = mysqli_query($koneksi, "SELECT * FROM kualifikasi_subklasifikasi ORDER BY id_ks DESC") or die(mysqli_error($koneksi));
                                    //jika query diatas menghasilkan nilai > 0 maka menjalankan script di bawah if...
                                    if (mysqli_num_rows($sql) > 0) {
                                        //membuat variabel $no untuk menyimpan nomor urut
                                        $no = 1;
                                        //melakukan perulangan while dengan dari dari query $sql
                                        while ($ks = mysqli_fetch_assoc($sql)) {
                                            // var_dump($ks);
                                            //jika sudah mendapatkan parameter GET id dari URL
                                            include('get_id.php');
                                            // var_dump($ks);
                                            if ($data['id'] == $ks['id_surat']) { ?>

                                                <tr>
                                                    <td><?= $no ?></td>
                                                    <td><?= $ks['kualifikasi'] ?></td>
                                                    <td><?= $ks['kd_subkla'] ?></td>
                                                    <td><?= $ks['sifat'] ?></td>
                                                    <td><?= $ks['klbi'] ?></td>
                                                    <td><?= $ks['subklasifikasi'] ?></td>
                                                    <td><?= $ks['nama_pjskbu'] ?><br><?= $ks['no_nama_pjskbu'] ?></td>
                                                    <td>
                                                        <a href="cetak.php?page=print&id=<?= $ks['id'] ?>" class="btn btn-circle btn-success btn-sm" target="_blank">Cetak</a>
                                                        <hr>
                                                        <a href="index.php?page=lampiran&id=<?= $ks['id'] ?>" class="btn btn-circle btn-danger btn-sm" target="_blank">Cetak</a>
                                                    </td>
                                                </tr>
                                        <?php
                                                $no++;
                                            }
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

<hr><br>
<!-- Zero configuration table -->
<section id="basic-datatable">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Lampiran Pemenuhan Komitmen</h4>
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
                                        <th>Perizinan Berusaha</th>
                                        <th>Pemenuhan Kewajiban</th>
                                        <th>Keterangan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    //query ke database SELECT tabel mahasiswa urut berdasarkan id yang paling besar
                                    $sql = mysqli_query($koneksi, "SELECT * FROM pemenuhan_komitmen ORDER BY id_pk DESC") or die(mysqli_error($koneksi));
                                    //jika query diatas menghasilkan nilai > 0 maka menjalankan script di bawah if...
                                    if (mysqli_num_rows($sql) > 0) {
                                        //membuat variabel $no untuk menyimpan nomor urut
                                        $no = 1;
                                        //melakukan perulangan while dengan dari dari query $sql
                                        while ($pk = mysqli_fetch_assoc($sql)) {
                                            // var_dump($pk);
                                            //jika sudah mendapatkan parameter GET id dari URL
                                            include('get_id.php');
                                            // var_dump($pk);
                                            if ($data['id'] == $pk['id_surat']) { ?>

                                                <tr>
                                                    <td><?= $no ?></td>
                                                    <td><?= $pk['perizinan_berusaha'] ?></td>
                                                    <td><?= $pk['pemenuhan_kewajiban'] ?></td>
                                                    <td><?= $pk['keterangan'] ?></td>
                                                    <td>
                                                        <a href="cetak.php?page=print&id=<?= $pk['id'] ?>" class="btn btn-circle btn-success btn-sm" target="_blank">Cetak</a>
                                                        <hr>
                                                        <a href="index.php?page=lampiran&id=<?= $pk['id'] ?>" class="btn btn-circle btn-danger btn-sm" target="_blank">Cetak</a>
                                                    </td>
                                                </tr>
                                        <?php
                                                $no++;
                                            }
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