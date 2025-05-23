<table class="table table-bordered table-hover" style="margin-top: 100px;">

    <tr style="background-color: #A8D5BA; color: white;">

        <th>No</th>

        <th>Kode Pesanan</th>

        <th>Nama Pelanggan</th>

        <th>Waktu</th>

        <th>Total Harga</th>

        <th>Pembayaran</th>

        <th>Cetak</th>

    </tr>
    <?php $i = 1;
    foreach ($menu as $m) {
        $kode_pesanan = $m["kode_pesanan"];
        $total_pembayaran = ambil_data("SELECT DISTINCT * FROM pesanan
    JOIN transaksi ON (pesanan.kode_pesanan = transaksi.kode_pesanan)
    JOIN menu ON (menu.kode_menu = pesanan.kode_menu)
    WHERE transaksi.kode_pesanan = '$kode_pesanan'");
    ?>

        <form action="cetak/cetak.php" target="_blank" method="GET">

            <input type="hidden" name="kode_pesanan" value="<?= $m["kode_pesanan"]; ?>">

            <tr style="background-color: white;">

                <td><?= $i; ?></td>

                <td><?= $m["kode_pesanan"]; ?></td>

                <td><?= $m["nama_pelanggan"]; ?></td>

                <td><?= $m["waktu"]; ?></td>
                <td>
                    <?php
                    $total = 0;
                    foreach ($total_pembayaran as $tp) {
                        $total += $tp["qty"] * $tp["harga"];
                    }
                    echo "Rp." . $total;
                    ?>
                </td>
                <td><input name="pembayaran" min="0" type="number"></td>
                <td>

                    <button class="btn" style="background-color: #D1C4E9; color: white;">Cetak</button>

                    <a class="btn" href="hapus.php?kode_pesanan=<?= $m["kode_pesanan"]; ?>" onclick="return confirm('Hapus Data Transaksi?')" style="background-color: #FFCDD2; color: white;">Hapus</a>

                </td>

            </tr>

        </form>
    <?php $i++;
    } ?>

</table>
