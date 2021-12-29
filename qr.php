<?php
require_once('assets/phpqrcode/qrlib.php');
$tempDir = "img/qr/";
// $kode = "sbu_generator/" . $data['pb_umku'] . "/" . $data['nib'] . "";
// $kode = $data['pb_umku'];
$kode = '
Nama : Royyan
Tes : 1923
NIB : 23812';
$codeContents = $kode;
$fileName = 'qr_' . md5($kode) . '.png';
$pngAbsoluteFilePath = $tempDir . $fileName;
$urlRelativeFilePath = $tempDir . $fileName;
if (!file_exists($pngAbsoluteFilePath)) {
    QRcode::png($codeContents, $pngAbsoluteFilePath);
} else {
    echo 'File already generated! We can use this cached file to speed up site on common codes!';
    echo '<hr />';
}
