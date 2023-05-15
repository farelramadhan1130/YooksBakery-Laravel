<?php include '../koneksi.php'; 
date_default_timezone_set('Asia/Jakarta');
//Mendapatkan ID Toko user yang login
$id_toko = $_SESSION['User']['id_toko'];

//Mendapatkan ID Penjualan yang di detailkan dari URL
$id_penjualan = $_GET['id'];

//Ambil dari tabel Penjualan yang idnya ini
$ambil = $koneksi->query("SELECT * FROM penjualan LEFT JOIN user ON penjualan.id_user=user.id_user 
                        WHERE penjualan.id_penjualan='$id_penjualan' AND penjualan.id_toko='$id_toko' ");
$penjualan = $ambil->fetch_assoc();

$produk = array();
$ambil = $koneksi->query("SELECT * FROM penjualan_produk WHERE id_penjualan='$id_penjualan' AND id_toko='$id_toko' ");
while($tiap = $ambil->fetch_assoc()){
$produk[] = $tiap; 
}
// echo "<pre>";
//                 print_r($penjualan);
//                 print_r($produk );
//                 echo "<pre>";
// }

?>
<script>
    window.print();
    window.onfocus=function() {window.close();}
</script>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Nota Pemesanan</title>
    <link rel="stylesheet" href="../asset/css/bootstrap.min.css">
</head>
<body onload="window.print()">
<div class="table-responsive text-nowrap">
    <table>
        <tbody>
            <tr>
                <td>Yooks Bakery</td>
            </tr>
            <tr>
                <td>Jalan Melon No. 5B, Kec. Patrang, Kab. Jember</td>
            </tr>
            <tr>
                <td>Telp. 083857726588</td>
            </tr>
        </tbody>
    </table>

        <hr width="50%" align="left">

    <table>
        <tbody>
            <tr>
                <td>Id Pemesanan</td>
                <td>:</td>
                <td><?php echo $id_penjualan?></td>
            <tr>
                <td>Pelanggan</td>
                <td>:</td>
                <td><?php echo $penjualan['nama_user']?></td>
            </tr>
            <tr>
                <td>No.Telp</td>
                <td>:</td>
                <td><?php echo $penjualan['telepon_user']?></td>
            </tr>
            <tr>
                <td>Tanggal Pemesanan</td>
                <td>:</td>
                <td><?php echo $penjualan['tanggal_penjualan']?></td>
            </tr>
            <tr>
                <td>Tanggal Pengambilan Pesanan</td>
                <td>:</td>
                <td><?php echo $penjualan['tanggal_ambil_penjualan']?></td>
            </tr>
        </tbody>
    </table>
</br>
        <table class="table">
                    <thead>
                        <th>No.</th>
                        <th>Nama Roti</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>Subtotal</th>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <?php $keuntungan = 0; ?>
                      <?php foreach ($produk as $key => $value): ?>
                        <?php $keuntungan += ($value['harga_produk'] - $value['biaya_produk']) * $value['jumlah_produk'] ?>
                      <tr>
                        <td><?php echo $key+1 ?></td>
                        <td><?php echo $value["nama_produk"] ?></td>
                        <td>Rp. <?php echo number_format($value["harga_produk"]) ?></td>
                        <td><?php echo $value["jumlah_produk"] ?></td>
                        <td>Rp. <?php echo number_format($value["subtotal_produk"]) ?></td>
                      </tr>
                      <?php endforeach ?>
                    </tbody>
                    <tfoot>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><b>Total</b></td>
                        <td>Rp. <?php echo number_format($penjualan['total_penjualan']) ?></td>
                    </tr>
                    </tfoot>
    </table>
    <br>
    <table>
        <tr>
            <td>Catatan :</td>
        </tr>
        <tr>
            <td>Simpan nota ini, kemudian tunjukkan kepada kami ketika mengambil pesanan</td>
        </tr>
    </table>
</div>
</body>