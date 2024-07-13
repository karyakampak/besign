<?php

require_once 'BeSign.php';

use Karyadidk\BeSign\BeSign;

$pdf_path = "./input/example.pdf";
$image_path = "./input/visualku.png";
$output_path = "./output/output.pdf";
$p12Path = "./input/usertesting.p12";
$tokenApi = "";
$cmsApi = "";
$nik = "";
$passphraseBSrE = "";
$passphraseCert = "123456";
$page = 1;
$visibility = 1;
$x = 100;
$y = 100;
$width = 128;
$height = 45.374;
$id = "";
$secret = "";
$isLTV = 0;
$isSeal = 0;

// Tandatangan dengan hit API diluar shared library
// $besignDetached = new BeSign([
//     "pdf_path" => $pdf_path,
//     "output_path" => $output_path,
//     "nik" => $nik,
//     "passphraseBSrE" => $passphraseBSrE,
//     "id" => $id,
//     "secret" => $secret,
//     "tokenApi" => $tokenApi,
//     "cmsApi" => $cmsApi
// ]);
// $besignDetached->detachedSign();

// Tandatangan dengan hit API dalam shared library
// $besignSign = new BeSign([
//     "pdf_path" => $pdf_path,
//     "output_path" => $output_path,
//     "nik" => $nik,
//     "passphraseBSrE" => $passphraseBSrE,
//     "id" => $id,
//     "secret" => $secret
// ]);
// $besignSign->sign();

// Tandatangan dengan sertifikat P12
$besignWithCertificate = new BeSign([
    "pdf_path" => $pdf_path,
    "output_path" => $output_path,
    "nik" => $nik,
    "passphraseBSrE" => $passphraseBSrE,
    "id" => $id,
    "secret" => $secret
]);
$besignWithCertificate->signWithCertificate();

?>