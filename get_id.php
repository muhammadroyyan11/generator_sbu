<?php
//jika sudah mendapatkan parameter GET id dari URL
if (isset($_GET['id'])) {
    //membuat variabel $id untuk menyimpan id dari GET id di URL
    $id = $_GET['id'];

    //query ke database SELECT tabel mahasiswa berdasarkan id = $id
    $select = mysqli_query($koneksi, "SELECT * FROM sbu_surat WHERE id='$id'") or die(mysqli_error($koneksi));

    //jika hasil query = 0 maka muncul pesan error
    if (mysqli_num_rows($select) == 0) {
        echo '<div class="alert alert-warning">ID tidak ada dalam database.</div>';
        exit();
        //jika hasil query > 0
    } else {
        //membuat variabel $data dan menyimpan data row dari query
        $data = mysqli_fetch_assoc($select);
    }
}
?>