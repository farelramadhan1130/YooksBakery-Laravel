<!-- <script src="asset/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="../farel-project/asset/plugins/sweetalert/sweetalert2.all.min.js"></script> -->

<?php
include '../koneksi.php';

// //cek user
// if(empty($_SESSION['id_user'])){
//     echo "<script>
//                         Swal.fire({
//                             icon: 'error',
//                             title: 'SOMETHING WENT WRONG :(',
//                             text: 'Silahkan login terlebih dahulu !!!'
//                         }).then((result) => {
//                             window.location.href = 'index.php'
//                         })
//                     </script>";
// }

echo"<pre>";
print_r($_POST);
print_r($_SESSION['keranjang']);
echo"</pre>";

date_default_timezone_set('Asia/Jakarta');

$total = $_POST['total'];
// $bayar = $_POST['bayar'];
// $kembalian = $_POST['kembalian'];
$metode = $_POST['bank'];
$telepon = $_POST['telepon'];
$tanggal = date("Y-m-d H:i:s");
$id_toko = $_SESSION['User']['id_toko'];
$id_user = $_SESSION['User']['id_user'];
$tanggal_ambil = $_POST['date'];
$jam = date("H:i:s");
$namafoto = $_FILES['foto']['name'];
$lokasifoto = $_FILES['foto']['tmp_name'];

// Jika kosong teleponnya
if (empty($telepon)) {
    $id_user = null;
}
else {
    // Cek ke tabel user
    $ambil = $koneksi->query("SELECT * FROM user WHERE telepon_user='$telepon'");
    $user = $ambil->fetch_assoc();

    if(empty($user)){
        $koneksi->query("INSERT INTO user (telepon_user) VALUES('$telepon')");
        $id_user = $koneksi->insert_id;
    }
    else {
        $id_user = $user['id_user'];
        
    }
}
// Simpan Penjualan
if(!empty($lokasifoto)){
    move_uploaded_file($lokasifoto, "../asset/image/image-admin/bukti/".$namafoto);
$koneksi->query("INSERT INTO penjualan
    (id_toko, id_user, tanggal_penjualan ,tanggal_ambil_penjualan, total_penjualan , metode_pembayaran, bukti) 
    VALUES ('$id_toko', '$id_user', '$tanggal','$tanggal_ambil $jam','$total', '$metode', '$namafoto');
    ");
}
// Dapatkan Id Penjualan Barusan
$id_penjualan = $koneksi->insert_id;

// Simpan Penjualan Produk
foreach ($_SESSION['keranjang'] as $id_produk => $jumlah) {
    $ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='$id_produk'");
    $produk = $ambil->fetch_assoc();

    $harga_beli = $produk['biaya_produk'];
    $harga_jual = $produk['jual_produk'];
    $nama_jual = $produk['nama_produk'];
    $subtotal_jual = $produk['jual_produk'] * $jumlah;
	
    $koneksi->query("INSERT INTO penjualan_produk (id_penjualan, id_produk, id_toko, nama_produk, biaya_produk, harga_produk, jumlah_produk, subtotal_produk)
        VALUES ('$id_penjualan', '$id_produk', '$id_toko', '$nama_jual', $harga_beli, $harga_jual, $jumlah, $subtotal_jual) ") or die(mysqli_error($koneksi));

    // Kurangi Stock Produk itu 
    $koneksi->query("UPDATE produk SET stock_produk=stock_produk-$jumlah WHERE id_produk='$id_produk'"); 
}

// Kosongkan Keranjang
unset($_SESSION['keranjang']);
// Larikan ke halaman nota
echo "<script>location='nota_customer.php?id=$id_penjualan'</script>";
?>