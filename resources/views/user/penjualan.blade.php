<?php include 'header.php' ?>

<?php
// Dapatkan id user dari admin yang login 
$id_user = $_SESSION['User']['id_user'];
$id_toko = $_SESSION['User']['id_toko'];

$penjualan = array();
$ambil = $koneksi->query("SELECT * FROM penjualan 
                        LEFT JOIN user ON penjualan.id_user = user.id_user
                        WHERE penjualan.id_user='$id_user' AND penjualan.id_toko='$id_toko'");
while($tiap = $ambil->fetch_assoc()){
    $penjualan = $tiap;
}

echo "<pre>";
print_r($penjualan);
echo "</pre>";
?>

<div class="container">
    <div class="card border-0 shadow">
        <div class="card-body">
            <h6>Transaksi Penjualan</h6>
            <table id="produk" class="table table-bordered display" style="width:100%">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Id Penjualan</th>
                        <th>Customers</th>
                        <th>Tanggal Penjualan</th>
                        <th>Tanggal Ambil</th>
                        <th>Total</th>
                        <th>Bayar</th>
                        <th>Kembalian</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <?php foreach ($penjualan as $key => $value): ?>
                      <tr>
                        <td><?php echo $key+1 ?></td>
                        <td><?php echo $value["id_penjualan"] ?></td>
                        <td>
                            <?php echo $value["nama_user"] ?> ( <?php echo $value["telepon_user"] ?> )
                        </td>
                        <td><?php echo date("d M Y H:i", strtotime($value["tanggal_penjualan"])) ?></td>
                        <td><?php echo date("d M Y H:i", strtotime($value["tanggal_ambil_penjualan"])) ?></td>
                        <td>Rp. <?php echo number_format($value["total_penjualan"]) ?></td>
                        <td>Rp. <?php echo number_format($value["bayar_penjualan"]) ?></td>
                        <td>Rp. <?php echo number_format($value["kembalian_penjualan"]) ?></td>
                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" data-toggle="modal" data-target="#detailorder" href="penjualan-produk.ph?&id=<?php echo $value["id_penjualan"] ?>"
                                ><i class="bx bx-edit-alt me-1"></i> Detail</a
                              >
                              <a class="dropdown-item" href="javascript:void(0);"
                                ><i class="bx bx-trash me-1"></i> Delete</a
                              >
                            </div>
                          </div>
                        </td>
                      </tr>
                      <?php endforeach ?>
                    </tbody>
            </table>
        </div>
    </div>
</div>

<?php include 'footer.php' ?>