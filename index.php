<?php
session_start();
require_once "function.php";

if (!isset($_SESSION["akun-admin"]) && !isset($_SESSION["akun-user"])) {
    header("Location: login.php");
    exit;
}

if (isset($_GET["transaksi"])) {
    $menu = ambil_data("SELECT * FROM transaksi");
} else if (isset($_GET["pesanan"])) {
    $menu = ambil_data("SELECT p.kode_pesanan, tk.nama_pelanggan, p.kode_menu, p.qty
                        FROM pesanan AS p
                        JOIN transaksi AS tk ON (tk.kode_pesanan = p.kode_pesanan)
    ");
} else {
    if (!isset($_GET["search"])) {
        $menu = ambil_data("SELECT * FROM menu ORDER BY kode_menu DESC");
    } else {
        $key_search = $_GET["key-search"];
        $menu = ambil_data("SELECT * FROM menu WHERE nama LIKE '%$key_search%' OR
                                                    harga LIKE '%$key_search%' OR
                                                    kategori LIKE '%$key_search%' OR
                                                    `status` LIKE '%$key_search%'
                                                    ORDER BY kode_menu DESC
        ");
    }
}

if (isset($_POST["pesan"])) {
    $pesanan = tambah_data_pesanan();
    echo $pesanan > 0
    ? "<script>
        alert('Pesanan Berhasil Dikirim!');
    </script>"
    : "<script>
        alert('Pesanan Gagal Dikirim!');
    </script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/css/bootstrap-5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="./src/css/bootstrap-icons-1.8.3/bootstrap-icons.css">
    <title>Beranda</title>
</head>

<body style="background-color: #fff0f5;"> 

    <!-- Header -->
    <div class="container-fluid position-fixed top-0 p-2 d-flex justify-content-between" style="background-color: #ffcad4; z-index: 2;">
        <div class="h3 d-flex" style="color: #cc6699;">
            <span id="menu-list" role="button"><i class="bi bi-list"></i></span>
            <span class="mx-3">pnwa-coffee</span>
        </div>
        <a class="btn fw-bold" href="logout.php" style="background-color: #ff99cc; color: white;" onclick="return confirm('Ingin Logout?')">Logout</a>
    </div>

    <!-- List Menu -->
    <div id="dropdown-menu" class="container-fluid position-fixed float-start w-auto vh-100" style="background-color: #ffe6f0; color: #cc6699; display: none; z-index: 1; top: 50px;">
        <ul style="list-style: none;">
            <br>
            <li><a class="text-decoration-none p-2 h5" href="index.php" style="color: #cc6699;">MENU</a></li><br>
            <?php if (isset($_SESSION["akun-admin"])) { ?>
            <li><a class="text-decoration-none p-2 h5" href="index.php?pesanan" style="color: #cc6699;">PESANAN</a></li><br>
            <li><a class="text-decoration-none p-2 h5" href="index.php?transaksi" style="color: #cc6699;">TRANSAKSI</a></li>
            <?php } ?>
        </ul>
    </div>

    <!-- Content -->
    <div class="container" style="z-index: -1; margin-top: 60px;">
        <?php
        if (isset($_GET["pesanan"])) include "halaman/pesanan.php";
        else if (isset($_GET["transaksi"])) include "halaman/transaksi.php";
        else include "halaman/beranda.php";
        ?>
    </div>

    <script src="./src/css/bootstrap-5.2.0/js/bootstrap.min.js"></script>
    <script src="src/js/beranda.js"></script>
</body>
</html>
