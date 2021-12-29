<?php
include('config.php');
if (isset($_POST['submit'])) {
    //generate QR CODE
    require_once('assets/phpqrcode/qrlib.php');
    $tempDir = "img/";
    // $kode = "sbu_generator/" . $data['pb_umku'] . "/" . $data['nib'] . "";
    // $kode = $_POST['pb_umku']$_POST['pb_umku']
    $kode = '
            NOMER PB_UMKU : '.$_POST['pb_umku'].'
            Pelaku Badan Usaha : '.$_POST['nama_pelaku_usaha'].'
            NIB : '.$_POST['nib'].'';
    $codeContents = $kode;

    $fileName = 'qr_' . md5($_POST['pb_umku']) . '.png';
    $pngAbsoluteFilePath = $tempDir . $fileName;
    $urlRelativeFilePath = $tempDir . $fileName;

    if (!file_exists($pngAbsoluteFilePath)) {
        QRcode::png($codeContents, $pngAbsoluteFilePath, QR_ECLEVEL_L, 3);
    } else {
        echo 'File already generated! We can use this cached file to speed up site on common codes!';
        echo '<hr />';
    }
    //input form
    // $qr_code = md5($_POST['pb_umku']);
    $pb_umku = $_POST['pb_umku'];
    $nama_pelaku_usaha = $_POST['nama_pelaku_usaha'];
    $nib = $_POST['nib'];
    $alamat_kantor = $_POST['alamat_kantor'];
    $kd_pos_kantor = $_POST['kd_pos_kantor'];
    $status = $_POST['status'];
    $klbi = $_POST['klbi'];
    $lokasi_usaha = $_POST['lokasi_usaha'];
    $kd_pos_lokasi = $_POST['kd_pos_usaha'];
    $date = date("Y-m-d");

    $cek = mysqli_query($koneksi, "SELECT * FROM sbu_surat WHERE pb_umku='$pb_umku'") or die(mysqli_error($koneksi));

    if (mysqli_num_rows($cek) == 0) {
        $sql = mysqli_query($koneksi, "INSERT INTO sbu_surat(qr_code ,pb_umku, nama_pelaku_usaha, nib, alamat_kantor, kd_pos_kantor, status, klbi, lokasi_usaha, kd_pos_usaha, date) VALUES('$fileName','$pb_umku', '$nama_pelaku_usaha', '$nib', '$alamat_kantor', '$kd_pos_kantor', '$status', '$klbi', '$lokasi_usaha', '$kd_pos_lokasi', '$date')") or die(mysqli_error($koneksi));

        if ($sql) {
            echo '<script>alert("Berhasil menambahkan data."); document.location="index.php?page=tampil_data";</script>';
        } else {
            echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Gagal, NIM sudah terdaftar.</div>';
    }
}
