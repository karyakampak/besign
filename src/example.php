<?php

require_once 'BeSign.php';

use Karyadidk\BeSign\BeSign;

$pdf_path = "./input/example.pdf";
$image_path = "./input/visualku.png";
$output_path = "./output/output.pdf";
$p12Path = "./input/usertesting.p12";
$nik = "6372032607970001";
$passphraseBSrE = "333GokuBuild!";
$passphraseCert = "123456";
$page = 1;
$visibility = 1;
$x = 100;
$y = 100;
$width = 128;
$height = 45.374;
$id = "L3IqxuKvTRHKUvHim2YPXBEj7U0a";
$secret = "oAH8f9DGsWd4XJLZZiKGhlaRk2ca";
$isLTV = 0;
$isSeal = 0;

// Create an instance of the Car class
$besign = new BeSign([
    "pdf_path" => $pdf_path,
    "output_path" => $output_path,
    "nik" => $nik,
    "passphraseBSrE" => $passphraseBSrE,
    "id" => $id,
    "secret" => $secret
]);

// Call the display method to show car details
$besign->sign();
// $besign->embededSign();
// $besign->signWithCertificate();

?>