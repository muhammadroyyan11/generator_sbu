<?php include('config.php');
function tgl_indo($tanggal)
{
    $bulan = array(
        1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    $pecahkan = explode('-', $tanggal);

    // variabel pecahkan 0 = tanggal
    // variabel pecahkan 1 = bulan
    // variabel pecahkan 2 = tahun

    return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
}

?>


<!DOCTYPE html>
<html>

<style>
    body {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    table,
    th,
    p,
    td {
        border: 1px;
        border-collapse: collapse;
    }

    .fivesolidblue {
        display: flex;
        border: 0.5px solid #6d9eed;
        border-radius: 5px;
    }

    .fivedottedbrown {
        border: 5px dotted brown;
    }

    .fivedashedblue {
        border: 5px dashed red;
    }
</style>

<head>
    <title>PB UMKU</title>
</head>

<body>
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

    <table style="width:90%; height: 60px;">
        <tr>
            <th><img src="img/garuda1.png" alt="" style="max-width: 85px;"></th>
        </tr>
    </table>
    <br>
    <table style="width:90%; height: 50px;">
        <tr>
            <th style="font-family: Arial; font-size: 13.5pt;">PEMERINTAH REPUBLIK INDONESIA</th>
        </tr>

    </table>
    <table style="width:90%; height: 50px;">
        <tr>
            <th style="font-family: Arial; font-size: 13.5pt;">PERIZINAN BERUSAHA UNTUK MENUNJANG KEGIATAN USAHA</th>
        </tr>
        <tr>
            <th style="font-family: Arial; font-size: 13.5pt;">SERTIFIKAT BADAN USAHA (SBU) KONSTRUKSI</th>
        </tr>
        <tr>
            <th style="font-family: Arial; font-size: 13.5pt;">PB-UMKU: 0198273235162837903987</th>
        </tr>
    </table>

    <h5 class="fivesolidblue" style="width:90%; height: 150px;">
	<table style="width:90%; border:1px solid; margin-top:50px; margin-right:50px; margin-bottom:50px; margin-left:50px;">
		<thead border:1px solid;>
            <tr style="border:1px solid;">
                <th style="border:1px solid;">tEs</th>
                <th style="border:1px solid;">Tes</th>
            </tr>
           
        </thead>
        <tbody style="border:1px solid;">
        	 <tr style="border:1px solid;">
                <td style="border:1px solid;">TESS</td>
                <td style="border:1px solid;">tes</td>
            </tr>
        </tbody>
        </table>
    </h5>



    
    <!-- <h5 class="fivesolidblue">
        <table style="width:90%; border:1px solid; margin-top:50px; margin-left:50px; margin-bottom:50px; margin-left:50px;">
            <thead border:1px solid;>
                <tr style="border:1px solid;">
                    <th style="border:1px solid;">tEs</th>
                    <th style="border:1px solid;">Tes</th>
                </tr>

            </thead>
            <tbody style="border:1px solid;">
                <tr style="border:1px solid;">
                    <td style="border:1px solid;">TESS</td>
                    <td style="border:1px solid;">tes</td>
                </tr>
            </tbody>
        </table>
    </h5> -->

    
    <!-- <script>
        window.print();
    </script> -->
</body>

</html>