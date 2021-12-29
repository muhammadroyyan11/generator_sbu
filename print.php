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
        justify-content: center;
        margin-top: 20px;
    }

    table,
    th,
    p,
    td {
        border: 1px;
        border-collapse: collapse;
    }
</style>

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

    <table style="width:90%; height: 100px;">
        <tr>
            <th><img src="img/garuda1.png" alt="" style="max-width: 85px; margin-top: 35px;"></th>
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
            <th style="font-family: Arial; font-size: 13.5pt;">PB-UMKU: <?= $data['pb_umku'] ?></th>
        </tr>
    </table>


    <br>
    <table style="width:90%">
        <tr style="height:40px">
            <td style="font-size: 9pt; font-family: Arial;" align="justify">Pemerintah Republik Indonesia menerbitkan Perizinan Berusaha Untuk Menunjang Kegiatan Usaha (PB-UMKU), yang merupakan Sertifikat Badan Usaha (SBU) konstruksi kepada Pelaku Usaha berikut ini:</td>
        </tr>
    </table>
    <table style="width:90%; margin-top: 1px;  margin-left: 10px;">
        <tr>
            <td style=" font-size: 9pt; font-family: Arial; width: 1%; " valign="top ">1.</td>
            <td style="font-size: 9pt; font-family: Arial; width: 43%;">Nama Pelaku Usaha</td>
            <td style="width: 1px; font-size: 9pt; font-family: Arial;" valign="top">:</td>
            <td style="font-size: 9pt; font-family: Arial; width: 58%;"><?= $data['nama_pelaku_usaha'] ?></td>
        </tr>
        <tr>
            <td style=" font-size: 9pt; font-family: Arial; width: 1%; " valign="top ">2.</td>
            <td style="font-size: 9pt; font-family: Arial; width: 43%;">Nomor Induk Berusaha (NIB)</td>
            <td style="width: 1px; font-size: 9pt; font-family: Arial;" valign="top">:</td>
            <td style="font-size: 9pt; font-family: Arial; width: 58%;"><?= $data['nib'] ?></td>
        </tr>
        <tr>
            <td style=" font-size: 9pt; font-family: Arial; width: 1%; " valign="top ">3.</td>
            <td style="font-size: 9pt; font-family: Arial; width: 43%;" valign="top">Alamat Kantor</td>
            <td style="width: 1px; font-size: 9pt; font-family: Arial;" valign="top">:</td>
            <td style="font-size: 9pt; font-family: Arial; width: 58%;" align="justify"><?= $data['alamat_kantor'] ?></td>
        </tr>
        <tr>
            <td style=" font-size: 9pt; font-family: Arial; width: 1%; " valign="top "></td>
            <td style="font-size: 9pt; font-family: Arial; width: 43%;" valign="top"></td>
            <td style="width: 1px; font-size: 9pt; font-family: Arial;" valign="top"></td>
            <td style="font-size: 9pt; font-family: Arial; width: 58%;">Kode Pos : <?= $data['kd_pos_kantor'] ?></td>
        </tr>
        <tr>
            <td style=" font-size: 9pt; font-family: Arial; width: 1%; " valign="top ">4.</td>
            <td style="font-size: 9pt; font-family: Arial; width: 43%;">Status Penanaman Modal</td>
            <td style="width: 1px; font-size: 9pt; font-family: Arial;" valign="top">:</td>
            <td style="font-size: 9pt; font-family: Arial; width: 58%;"><?= $data['status'] ?></td>
        </tr>
        <tr>
            <td style=" font-size: 9pt; font-family: Arial; width: 1%; " valign="top ">5.</td>
            <td style="font-size: 9pt; font-family: Arial; width: 43%;">Kode Klasifikasi Baku Lapangan Usaha Indonesia (KBLI)
            </td>
            <td style="width: 1px; font-size: 9pt; font-family: Arial;" valign="top">:</td>
            <td style="font-size: 9pt; font-family: Arial; width: 58%;" valign="top"><?= $data['klbi'] ?></td>
        </tr>
        <tr>
            <td style=" font-size: 9pt; font-family: Arial; width: 1%; " valign="top ">6.</td>
            <td style="font-size: 9pt; font-family: Arial; width: 43%;" valign="top">Lokasi Usaha</td>
            <td style="width: 1px; font-size: 9pt; font-family: Arial;" valign="top">:</td>
            <td style="font-size: 9pt; font-family: Arial; width: 58%;"><?= $data['lokasi_usaha'] ?></td>
        </tr>
        <tr>
            <td style=" font-size: 9pt; font-family: Arial; width: 1%; " valign="top "></td>
            <td style="font-size: 9pt; font-family: Arial; width: 43%;" valign="top"></td>
            <td style="width: 1px; font-size: 9pt; font-family: Arial;" valign="top"></td>
            <td style="font-size: 9pt; font-family: Arial; width: 58%;">Kode Pos : <?= $data['kd_pos_usaha'] ?></td>
        </tr>
    </table>

    <table style="width:90%; margin-top: 1px;">
        <tr>
            <td colspan="2" style="font-size: 9pt; font-family: Arial;" align="justify">Telah memenuhi persyaratan:</td>
        </tr>
    </table>
    <table style="width:90%; margin-left: 10px;">
        <tr>
            <td style=" font-size: 9pt; font-family: Arial; width: 1%; " valign="top ">1.</td>
            <td style="width: 1px; font-size: 9pt; font-family: Arial; " valign="top "> Standar Penetapan Kemampuan Badan Usaha Jasa Konstruksi (Pekerjaan Konstruksi dan/atau Pekerjaan Konstruksi Terintegrasi)
            </td>
        </tr>
        <tr>
            <td style="font-size: 9pt; font-family: Arial; width: 1%; " valign="top ">2.</td>
            <td style="width: 1px; font-size: 9pt; font-family: Arial; " valign="top "> Standar Penetapan Kemampuan Badan Usaha Jasa Konstruksi (Jasa Konsultansi Konstruksi)
            </td>
        </tr>
    </table>
    <table style="width:90%; margin-top: 5px; ">
        <tr style="height:40px ">
            <td style="font-size: 9pt; font-family: Arial; " align="justify ">Lampiran Perizinan Berusaha Untuk Menunjang Kegiatan Usaha ini memuat data teknis yang merupakan bagian tidak terpisahkan dari dokumen ini. Pelaku Usaha tersebut di atas wajib menjalankan kegiatan usahanya sesuai dengan ketentuan perundang-undangan
                yang berlaku.</td>
        </tr>
    </table>
    <table style="width:90%;">
        <tr style="height:40px ">
            <td style="font-size: 9pt; font-family: Arial; " align="justify ">Diterbitkan tanggal: <?= tgl_indo($data['date']); ?></td>
        </tr>
    </table>
    <table style="width:99%; margin-top: 1px;  margin-left: 10px;">
        <tr>
            <td style="font-size: 9pt; font-family: Arial; width: 57%;"></td>
            <th style="font-size: 9pt; font-family: Arial; width: 58%;">a.n. Menteri Pekerjaan Umum dan Perumahan Rakyat Menteri Investasi/
                <br>Kepala Badan Koordinasi Penanaman Modal,
            </th>
        </tr>
        <tr>
            <td style="font-size: 9pt; font-family: Arial; width: 57%;"></td>
            <th style="font-size: 9pt; font-family: Arial; width: 58%;">
                <img src="img/<?= $data['qr_code']?>" alt=""  style="height: 50px; weight: 50px">
            </th>
        </tr>
        <tr>
            <td style="font-size: 9pt; font-family: Arial; width: 57%;"></td>
            <th style="font-size: 9pt; font-family: Arial; width: 58%;">Ditandatangani secara elektronik</th>
        </tr>
    </table>
    <table style="width:90%;">
        <tr style="height:40px ">
            <td style="font-size: 9pt; font-family: Arial; " align="justify ">Dicetak tanggal: <?= tgl_indo(date('Y-m-d')); ?></td>
        </tr>
    </table>

    <br></br><br><br><br>
    <table style="width:90%;  border: 1px solid;">
        <tr>
            <td style=" font-size: 6.5pt; font-family: Arial; width: 1%; font-style: italic;" valign="top ">&nbsp;</td>
            <td style="width: 1px; font-size: 6.5pt; font-family: Arial; font-style: italic;" valign="top ">&nbsp;</td>
            <td rowspan="6" style="width: 1px; font-size: 9pt; font-family: Arial;" valign="top "><img src="img/footer.png" alt="" style="max-width: 140px;"></td>
        </tr>
        <tr>
            <td style=" font-size: 6.5pt; font-family: Arial; width: 1%; font-style: italic;" valign="top ">&nbsp;&nbsp;1.</td>
            <td style="width: 2500px; font-size: 6.5pt; font-family: Arial; font-style: italic;" valign="top ">&nbsp;&nbsp;Dokumen ini diterbitkan sistem OSS berdasarkan data dari Pelaku Usaha, tersimpan dalam sistem OSS, yang menjadi &nbsp;&nbsp;tanggung jawab Pelaku Usaha.</td>

        </tr>
        <tr>
            <td style=" font-size: 6.5pt; font-family: Arial; width: 1%; font-style: italic;" valign="top ">&nbsp;&nbsp;2.</td>
            <td style="width: 1px; font-size: 6.5pt; font-family: Arial; font-style: italic;" valign="top ">&nbsp;&nbsp;Dalam hal terjadi kekeliruan isi dokumen ini akan dilakukan perbaikan sebagaimana mestinya</td>
        </tr>
        <tr>
            <td style=" font-size: 6.5pt; font-family: Arial; width: 1%; font-style: italic;" valign="top ">&nbsp;&nbsp;3.</td>
            <td style="width: 1px; font-size: 6.5pt; font-family: Arial; font-style: italic; " valign="top ">&nbsp;&nbsp;Dokumen ini telah ditandatangani secara elektronik menggunakan sertifikat elektronik yang diterbitkan oleh BSrE-BSSN</td>
        </tr>
        <tr>
            <td style=" font-size: 6.5pt; font-family: Arial; width: 1%; font-style: italic;" valign="top ">&nbsp;&nbsp;4.</td>
            <td style="width: 1px; font-size: 6.5pt; font-family: Arial; font-style: italic;" valign="top ">&nbsp;&nbsp;Data lengkap Perizinan Berusaha dapat diperoleh melalui sistem OSS menggunakan hak akses.</td>
        </tr>
        <tr>
            <td style=" font-size: 6.5pt; font-family: Arial; width: 1%; font-style: italic;" valign="top ">&nbsp;</td>
            <td style="width: 1px; font-size: 6.5pt; font-family: Arial; font-style: italic;" valign="top ">&nbsp;</td>
        </tr>
    </table>

    <script>
        window.print();
    </script>
</body>

</html>