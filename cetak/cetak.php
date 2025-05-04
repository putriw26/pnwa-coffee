<?php 
session_start();
require_once 'dompdf/autoload.inc.php';

if (!isset($_SESSION["akun-admin"])) {
    if (isset($_SESSION["akun-user"])) {
        echo "<script>
            alert('Cetak data hanya berlaku untuk admin!');
            location.href = '../index.php';
        </script>";
        exit;
    } else {
        header("Location: ../login.php");
        exit;
    }
}

// Ambil data dari form
$kode_pesanan = $_GET['kode_pesanan'];
$pembayaran = $_GET['pembayaran'];
$nama_pelanggan = $_GET['nama_pelanggan'] ?? '';
$waktu = $_GET['waktu'] ?? '';

// Barcode website kamu (harus gambar, misal PNG)
$barcode_website = "src/img/qrweb.png"; // Gambar barcode yg menuju web kamu

ob_start();
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: Arial, sans-serif; font-size: 14px; }
        h2 { text-align: center; }
        .barcode { text-align: center; margin-top: 30px; }
        .info { margin-top: 10px; }
    </style>
</head>
<body>

    <h2>Struk Pembayaran</h2>

    <p><strong>Kode Pesanan:</strong> <?= $kode_pesanan ?></p>
    <p><strong>Nama Pelanggan:</strong> <?= $nama_pelanggan ?></p>
    <p><strong>Waktu:</strong> <?= $waktu ?></p>
    <p><strong>Metode Pembayaran:</strong> <?= $pembayaran ?></p>

    <div class="barcode">
        <p><strong>Scan Barcode untuk kunjungi website kami:</strong></p>
        <img src="<?= $barcode_website ?>" width="200">
        <div class="info">
            <small>Atau kunjungi langsung: <br><strong>https://putriw26.github.io/Resume-Putri/</strong></small>
        </div>
    </div>

</body>
</html>

<?php
$html = ob_get_clean();

use Dompdf\Dompdf;
$dompdf = new Dompdf();
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();
$dompdf->stream('struk_pesanan_' . $kode_pesanan . '.pdf', array('Attachment' => 0));
?>
