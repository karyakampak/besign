
Copy code
# BeSign

BeSign adalah library PHP yang dirancang untuk memudahkan penambahan tanda tangan digital pada dokumen PDF. Dengan BeSign, Anda dapat menandatangani dokumen PDF secara programatik, memberikan fleksibilitas tinggi untuk aplikasi Anda dalam mengelola dan mengotentikasi dokumen.

## Fitur Utama

- **Tanda Tangan Digital**: Tambahkan tanda tangan digital ke dokumen PDF dengan mudah.
- **Dukungan Berbagai Format**: Mendukung berbagai format tanda tangan dan konfigurasi.
- **Fleksibilitas Penempatan**: Konfigurasi posisi dan ukuran tanda tangan sesuai kebutuhan.
- **Validasi Jangka Panjang (LTV)**: Mendukung tanda tangan dengan validasi jangka panjang.
- **Tanda Tangan Segel (Seal Signature)**: Dukungan untuk tanda tangan segel untuk keamanan tambahan.

## Instalasi

Untuk menginstal BeSign, gunakan npm dengan menjalankan perintah berikut di terminal:

```sh
composer require karyadidk/besign
```
## Penggunaan
Berikut adalah contoh cara menggunakan BeSign dalam proyek PHP Anda:


```sh
use Karyadidk\BeSign\BeSign;

$pdf_path = 'path/to/pdf;
$image_path = 'path/to/image';
$output_path = 'path/to/output';
$p12Path = 'path/to/p12/cerificate';
$tokenApi = 'your-token-api';
$cmsApi = 'your-cms-api';
$nik = 'your-nik';
$passphraseBSrE = 'your-BSrE-passphrase';
$passphraseCert = 'your-certificate-passphrase';
$page = 1;
$visibility = 1;
$x = 100;
$y = 100;
$width = 128;
$height = 45.374;
$id = 'your-id;
$secret = 'your-secret';
$isLTV = 0;
$isSeal = 0;

// Tandatangan dengan hit API diluar shared library
$besignDetached = new BeSign([
    "pdf_path" => $pdf_path,
    "output_path" => $output_path,
    "nik" => $nik,
    "passphraseBSrE" => $passphraseBSrE,
    "id" => $id,
    "secret" => $secret,
    "tokenApi" => $tokenApi,
    "cmsApi" => $cmsApi
]);
$besignDetached->detachedSign();

// Tandatangan dengan hit API dalam shared library
$besignSign = new BeSign([
    "pdf_path" => $pdf_path,
    "output_path" => $output_path,
    "nik" => $nik,
    "passphraseBSrE" => $passphraseBSrE,
    "id" => $id,
    "secret" => $secret
]);
$besignSign->sign();

// Tandatangan dengan sertifikat P12
$besignWithCertificate = new BeSign([
    "pdf_path" => $pdf_path,
    "output_path" => $output_path,
    "p12Path" => $p12Path,
    "passphraseCert" => $passphraseCert
]);
$besignWithCertificate->signWithCertificate();
```
