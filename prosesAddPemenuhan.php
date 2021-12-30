<?php
include('config.php');
include('get_id.php');
// var_dump($data);
if (isset($_POST['submit'])) {
    //input form
    $perizinan_berusaha = $_POST['perizinan_berusaha'];
    $pemenuhan_kewajiban = $_POST['pemenuhan_kewajiban'];
    $keterangan = $_POST['keterangan'];
    $id_surat = $_POST['id_surat'];

    $cek = mysqli_query($koneksi, "SELECT * FROM pemenuhan_komitmen WHERE perizinan_berusaha='$perizinan_berusaha'") or die(mysqli_error($koneksi));


    $sql = "INSERT INTO pemenuhan_komitmen(perizinan_berusaha ,pemenuhan_kewajiban, keterangan, id_surat) VALUES('$perizinan_berusaha','$pemenuhan_kewajiban', '$keterangan', '$id_surat')";
    if (mysqli_query($koneksi, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }
    mysqli_close($koneksi);
}
