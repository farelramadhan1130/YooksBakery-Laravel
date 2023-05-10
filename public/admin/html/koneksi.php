<?php
session_start();
$koneksi = new mysqli("localhost", "root", "","db_yooksbakery");
$koneksi->query("UPDATE produk SET stock_produk=0, keterangan='Kadaluarsa' WHERE DATEDIFF(CURDATE(), tanggal_produksi) > 3 ");
?>