<?php
include('config.php');
include('tgl_indo.php');
?>

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

<!DOCTYPE html>
<html>

<style>
    body {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        margin-top: 35px;
    }

    th,
    td {

        border-collapse: collapse;
    }

    .textCenter {
        text-align: center;
    }

    .center {
        margin-left: auto;
        margin-right: auto;
    }

    .borderTable {
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>

<head>
    <title>PB UMKU-<?= $data['nama_pelaku_usaha'] ?></title>
</head>


<body>

    <table style="width:90%; height: 100px;">
        <tr>
            <th><img src="img/garuda1.png" alt="" style="max-width: 80px; margin-top: 35px;"></th>
        </tr>
    </table>
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
            <td style="font-size: 9pt; font-family: Arial; width: 43%;" align="justify">Kode Klasifikasi Baku Lapangan Usaha&nbsp; Indonesia (KBLI)
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
    <table style="width:90%; margin-top: 15px;">
        <tr>
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
                <img src="img/<?= $data['qr_code'] ?>" alt="" style="height: 50px; weight: 50px">
            </th>
        </tr>
        <tr>
            <td style="font-size: 9pt; font-family: Arial; width: 57%;"></td>
            <th style="font-size: 9pt; font-family: Arial; width: 58%;">Ditandatangani secara elektronik</th>
        </tr>
    </table>
    <table style="width:90%;">
        <tr>
            <td style="font-size: 9pt; font-family: Arial; " align="justify ">Dicetak tanggal: <?= tgl_indo(date('Y-m-d')); ?></td>
        </tr>
    </table>

    <br></br><br><br><br>
    <table style="width:93%;  border: 1px solid;">
        <tr>
            <td style="font-size: 6.5pt; font-family: Arial; width: 1%; font-style: italic;" valign="top ">&nbsp;</td>
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

    <!-- <script>
        window.print();
    </script> -->
</body>

<body>

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
            <th style="font-family: Arial; font-size: 13.5pt;">LAMPIRAN</th>
        </tr>
        <tr>
            <th style="font-family: Arial; font-size: 13.5pt;">PB-UMKU: <?= $data['pb_umku'] ?></th>
        </tr>
    </table>

    <table style="width:90%">
        <tr style="height:40px">
            <td style="font-size: 9pt; font-family: Arial;" align="justify">Lampiran berikut memuat data teknis Lisensi Sertifikat Badan Usaha (SBU) konstruksi <?= $data['nama_pelaku_usaha'] ?> sebagai berikut:
            </td>
        </tr>
    </table>
    <div style="width:90%;  border: 1px solid #3b7dbf; margin-top: 1px; margin-bottom: 5px;">
        <!-- <b><p class="textCenter" style="font-family: Arial; font-size: 12pt;">Rincian Kualifikasi dab Subklasifikasi</p></b> -->
        <table class="center" style="width:90%; margin-bottom:10px;">
            <tr>
                <td valign="top ">&nbsp;</td>
            </tr>
            <tr>
                <th style="font-family: Arial; font-size: 11pt;">Rincian Kualifiksi dan Subklasifikasi</th>
            <tr>
        </table>
        <table style="width:88%;" class="center borderTable">
            <thead>
                <tr class="borderTable" style="height: 20px;">
                    <th class="borderTable" style="font-size: 9pt; font-family: Arial; width: 5%;">No</th>
                    <th class="borderTable" style="font-size: 9pt; font-family: Arial; width: 15%;">Kualifikasi</th>
                    <th class="borderTable" style="font-size: 9pt; font-family: Arial; width: 12%;">Kode Subkla</th>
                    <th class="borderTable" style="font-size: 9pt; font-family: Arial; width: 10%;">Sifat</th>
                    <th class="borderTable" style="font-size: 9pt; font-family: Arial; width: 11%;">KBLI</th>
                    <th class="borderTable" style="font-size: 9pt; font-family: Arial; width: 17%;">Subklasifikasi</th>
                    <th class="borderTable" style="font-size: 9pt; font-family: Arial; width: 60%;">Nama PJSKBU</th>
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
                            <tr class="textCenter borderTable" style="height: 70px;">
                                <td class="borderTable" style="font-size: 9pt; font-family: Arial; width: 5%;"><?= $no ?></td>
                                <td class="borderTable" style="font-size: 9pt; font-family: Arial; width: 15%;"><?= $ks['kualifikasi'] ?></td>
                                <td class="borderTable" style="font-size: 9pt; font-family: Arial; width: 12%;"><?= $ks['kd_subkla'] ?></td>
                                <td class="borderTable" style="font-size: 9pt; font-family: Arial; width: 10%;"><?= $ks['sifat'] ?></td>
                                <td class="borderTable" style="font-size: 9pt; font-family: Arial; width: 11%;"><?= $ks['klbi'] ?></td>
                                <td class="borderTable" style="font-size: 9pt; font-family: Arial; width: 17%;"><?= $ks['subklasifikasi'] ?></td>
                                <td class="borderTable" style="font-size: 9pt; font-family: Arial; width: 60%;"><?= $ks['nama_pjskbu'] ?><br><?= $ks['no_nama_pjskbu'] ?></td>
                            </tr>
                            <tr class="borderTable">
                                <td class="borderTable" colspan="7" style="font-size: 9pt; font-family: Arial; height: 20px;">Pemenuhan kewajiban penyediaan peralatan konstruksi : <?= $ks['pemenuhan_kewajiban'] ?></td>
                            </tr>
                            <tr class="borderTable">
                                <td class="borderTable" colspan="7" style="font-size: 9pt; font-family: Arial; height: 20px;">Pelaksana sertifikasi : Gamana Krida Bhakti (GAPENSI)</td>
                            </tr>
                    <?php
                            $no++;
                        }
                    }
                    //jika query menghasilkan nilai 0
                } else { ?>
                    <tr class="textCenter borderTable">
                        <td class="borderTable" style="font-size: 9pt; font-family: Arial; width: 2%;" colspan="6">Tidak ada data.</td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <table class="center" style="width:90%; margin-bottom:10px;">
            <tr>
                <td valign="top ">&nbsp;</td>
            </tr>
            <tr>
                <th style="font-family: Arial; font-size: 11pt;">Pemenuhan Komitmen</th>
            <tr>
            <tr>
                <th style="font-family: Arial; font-size: 11pt;">(Kewajiban sesuai ketentuan PP Nomor 5 Tahun 2021 dan PP Nomor 14</th>
            <tr>
            <tr>
                <th style="font-family: Arial; font-size: 11pt;">Tahun 2021)</th>
            <tr>
        </table>
        <table style="width:88%;" class="center borderTable">
            <thead>
                <tr class="borderTable">
                    <th class="borderTable" style="font-size: 9pt; font-family: Arial; width: 2%;">No</th>
                    <th class="borderTable" style="font-size: 9pt; font-family: Arial; width: 24%;">Kewajiban Perizinan Berusaha</th>
                    <th class="borderTable" style="font-size: 9pt; font-family: Arial; width: 6%;">Pemenuhan Kewajiban</th>
                    <th class="borderTable" style="font-size: 9pt; font-family: Arial; width: 6%;">Keterangan</th>
                </tr>
            </thead>
            <tbody class="center borderTable">
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
                            <tr class="textCenter borderTable">
                                <td class="borderTable" style="font-size: 9pt; font-family: Arial; width: 2%;"><?= $no ?></td>
                                <td class="borderTable" style="font-size: 9pt; font-family: Arial; width: 24%;"><?= $pk['perizinan_berusaha'] ?></td>
                                <td class="borderTable" style="font-size: 9pt; font-family: Arial; width: 6%;"><?= $pk['pemenuhan_kewajiban'] ?></td>
                                <td class="borderTable" style="font-size: 9pt; font-family: Arial; width: 6%;"><?= $pk['keterangan'] ?></td>
                            </tr>
                    <?php
                            $no++;
                        }
                    }
                    //jika query menghasilkan nilai 0
                } else { ?>
                    <tr class="textCenter borderTable">
                        <td class="borderTable" style="font-size: 9pt; font-family: Arial; width: 2%;" colspan="6">Tidak ada data.</td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <table style="width:90%;">
            <tr class="">
                <th class="">&nbsp;</th>
                <th class="">&nbsp;</th>
                <th class="">&nbsp;</th>
                <th class="">&nbsp;</th>
            </tr>
            <tr class="textCenter ">
                <td class="">&nbsp;</td>
                <td class="">&nbsp;</td>
                <td class="">&nbsp;</td>
                <td class="">&nbsp;</td>
            </tr>
            <tr class="textCenter ">
                <td class="">&nbsp;</td>
                <td class="">&nbsp;</td>
                <td class="">&nbsp;</td>
                <td class="">&nbsp;</td>
            </tr>
        </table>
    </div>

    <table style="width:93%;  border: 1px solid;">
        <tr style="height: 1px;">
            <td style="font-size: 6.5pt; font-family: Arial; width: 1%; font-style: italic;" valign="top ">&nbsp;</td>
            <td style="width: 1px; font-size: 6.5pt; font-family: Arial; font-style: italic;" valign="top ">&nbsp;</td>
            <td rowspan="6" style="width: 1px; font-size: 9pt; font-family: Arial;" valign="top "><img src="img/footer.png" alt="" style="max-width: 140px;"></td>
        </tr>
        <tr style="height: 1px;">
            <td style=" font-size: 6.5pt; font-family: Arial; width: 1%; font-style: italic;" valign="top ">&nbsp;&nbsp;1.</td>
            <td style="width: 2500px; font-size: 6.5pt; font-family: Arial; font-style: italic;" valign="top ">&nbsp;&nbsp;Dokumen ini diterbitkan sistem OSS berdasarkan data dari Pelaku Usaha, tersimpan dalam sistem OSS, yang menjadi &nbsp;&nbsp;tanggung jawab Pelaku Usaha.</td>

        </tr>
        <tr style="height: 1px;">
            <td style=" font-size: 6.5pt; font-family: Arial; width: 1%; font-style: italic;" valign="top ">&nbsp;&nbsp;2.</td>
            <td style="width: 1px; font-size: 6.5pt; font-family: Arial; font-style: italic;" valign="top ">&nbsp;&nbsp;Dalam hal terjadi kekeliruan isi dokumen ini akan dilakukan perbaikan sebagaimana mestinya</td>
        </tr>
        <tr style="height: 1px;">
            <td style=" font-size: 6.5pt; font-family: Arial; width: 1%; font-style: italic;" valign="top ">&nbsp;&nbsp;3.</td>
            <td style="width: 1px; font-size: 6.5pt; font-family: Arial; font-style: italic; " valign="top ">&nbsp;&nbsp;Dokumen ini telah ditandatangani secara elektronik menggunakan sertifikat elektronik yang diterbitkan oleh BSrE-BSSN</td>
        </tr>
        <tr style="height: 1px;">
            <td style=" font-size: 6.5pt; font-family: Arial; width: 1%; font-style: italic;" valign="top ">&nbsp;&nbsp;4.</td>
            <td style="width: 1px; font-size: 6.5pt; font-family: Arial; font-style: italic;" valign="top ">&nbsp;&nbsp;Data lengkap Perizinan Berusaha dapat diperoleh melalui sistem OSS menggunakan hak akses.</td>
        </tr>
        <tr style="height: 1px;">
            <td style=" font-size: 6.5pt; font-family: Arial; width: 1%; font-style: italic;" valign="top ">&nbsp;</td>
            <td style="width: 1px; font-size: 6.5pt; font-family: Arial; font-style: italic;" valign="top ">&nbsp;</td>
        </tr>
    </table>

    <!-- <script>
      window.print();
  </script> -->
</body>

</html>