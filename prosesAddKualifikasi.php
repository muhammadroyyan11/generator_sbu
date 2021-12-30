<?php
include('config.php');
include('get_id.php');
// var_dump($data);
if (isset($_POST['submit'])) {
    //input form
    $kualifikasi = $_POST['kualifikasi'];
    $kd_subkla = $_POST['kd_subkla'];
    $sifat = $_POST['sifat'];
    $klbi = $_POST['klbi'];
    $subklasifikasi = $_POST['subklasifikasi'];
    $nama_pjskbu = $_POST['nama_pjskbu'];
    $no_nama_pjskbu = $_POST['no_nama_pjskbu'];
    $id_surat = $_POST['id_surat'];

    $cek = mysqli_query($koneksi, "SELECT * FROM kualifikasi_subklasifikasi WHERE id_surat='$id_surat'") or die(mysqli_error($koneksi));

    if (mysqli_num_rows($cek) == 0) {
        $sql = mysqli_query($koneksi, "INSERT INTO kualifikasi_subklasifikasi(kualifikasi ,kd_subkla, sifat, klbi, subklasifikasi, nama_pjskbu, no_nama_pjskbu, id_surat) VALUES('$kualifikasi','$kd_subkla', '$sifat', '$klbi', '$subklasifikasi', '$nama_pjskbu', '$no_nama_pjskbu', '$id_surat')") or die(mysqli_error($koneksi));

        if ($sql) {
            echo '<script>alert("Berhasil menambahkan data."); document.location="index.php?page=tampil_data";</script>';
        } else {
            echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Gagal, NIM sudah terdaftar.</div>';
    }
}
