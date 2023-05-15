<?php include '../koneksi.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nota Penjualan</title>
    <link rel="stylesheet" href="../asset/css/bootstrap.min.css">
</head>
<body>
        <div class="container">
            <!-- Content wrapper -->
            <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <!-- Basic Bootstrap Table -->
              <div class="card shadow">
                <h5 class="card-header">Detail Customers
                <?php 
                date_default_timezone_set('Asia/Jakarta');
                //Mendapatkan ID Toko user yang login
                $id_toko = $_SESSION['User']['id_toko'];

                //Mendapatkan ID Penjualan yang di detailkan dari URL
                $id_penjualan = $_GET['id'];

                //Ambil dari tabel Penjualan yang idnya ini
                $ambil = $koneksi->query("SELECT * FROM penjualan 
                                        LEFT JOIN user ON penjualan.id_user=user.id_user 
                                        WHERE penjualan.id_penjualan='$id_penjualan' AND penjualan.id_toko='$id_toko' ");
                $penjualan = $ambil->fetch_assoc();

                $produk = array();
                $ambil = $koneksi->query("SELECT * FROM penjualan_produk WHERE id_penjualan='$id_penjualan' AND id_toko='$id_toko' ");
                while($tiap = $ambil->fetch_assoc()){
                    $produk[] = $tiap; 
                }

                echo "<pre>";
                print_r($penjualan);
                print_r($produk );
                echo "<pre>";
                ?>
                </h5>
                <div class="table-responsive text-nowrap">
                  <table class="table mb-5">
                    <tr>
                        <td>Id Penjualan</td>
                        <td><?php echo $id_penjualan ?></td>
                    </tr>
                    <tr>
                        <td>Tanggal</td>
                        <td><?php echo date("d M Y H:i", strtotime($penjualan["tanggal_penjualan"])) ?></td>
                    </tr>
                    <tr>
                        <td>Tanggal Pengambilan</td>
                        <td><?php echo date("d M Y H:i", strtotime($penjualan["tanggal_ambil_penjualan"])) ?></td>
                    </tr>
                    <tr>
                        <td>Customers</td>
                        <td><?php echo $penjualan["nama_user"] ?> ( <?php echo $penjualan["telepon_user"] ?> )</td>
                    </tr>
                  </table>
                  <table class="table">
                    <thead>
                        <th>No</th>
                        <th>Produk</th>
                        <th>Harga Produksi</th>
                        <th>Harga Jual</th>
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
                        <td>Rp. <?php echo number_format($value["biaya_produk"]) ?></td>
                        <td>Rp. <?php echo number_format($value["harga_produk"]) ?></td>
                        <td><?php echo $value["jumlah_produk"] ?></td>
                        <td>Rp. <?php echo number_format($value["subtotal_produk"]) ?></td>
                      </tr>
                      <?php endforeach ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td>Total</td>
                            <td>Rp. <?php echo number_format($penjualan['total_penjualan']) ?></td>
                        </tr>
                        <tr>
                            <td>Bayar</td>
                            <td>Rp. <?php echo number_format($penjualan['bayar_penjualan']) ?></td>
                        </tr>
                        <tr>
                            <td>Kembalian</td>
                            <td>Rp. <?php echo number_format($penjualan['kembalian_penjualan']) ?></td>
                        </tr>
                        <tr>
                            <td>Keuntungan</td>
                            <td>Rp. <?php echo number_format($keuntungan) ?></td>
                        </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
              <!--/ Basic Bootstrap Table -->
            </div>
            <!-- / Content -->
        </div>
    <script>print()</script>
    <script>location='testimonial_form.php'</script>
</body>
</html>