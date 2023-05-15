<?php
include '../koneksi.php';
$id_produk = $_POST['id_produk'];
$id_toko = $_SESSION['User']['id_toko'];

$ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='$id_produk' AND id_toko='$id_toko' ");
$produk = $ambil->fetch_assoc();

if ($produk['stock_produk'] > 0 ) 
{
    // Jika dikeranjang belum ada id produk itu, maka jumlahnya default 1
    if (!isset($_SESSION['keranjang'][$id_produk])) {
        $_SESSION['keranjang'][$id_produk] = 1;
    }
    else {
        $jumlahdikeranjang = $_SESSION['keranjang'][$id_produk];
        if ($produk["stock_produk"] > $jumlahdikeranjang) {
            $_SESSION['keranjang'][$id_produk] += 1;
        }
    }
}
?>