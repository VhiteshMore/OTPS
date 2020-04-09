<?php
// include QR_BarCode class
include "QR_BarCode.php";

// QR_BarCode object
$qr = new QR_BarCode();

// create text QR code
$qr->text('latctygjvhdbkufeygaioifuew1264e8173t889');

$qr->qrCode(350,'images/cw-qr.png');
// display QR code image
$qr->qrCode();
?>
