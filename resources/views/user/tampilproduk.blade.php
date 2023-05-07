<?php
include '../koneksi.php'; 
//dapatkan id_toko dari user yang login 
$id_toko = $_SESSION['User']['id_toko'];

//dapatkan produk sesuai id toko ini
$produk =array();
$ambil = $koneksi ->query("SELECT * FROM produk WHERE id_toko='$id_toko' ORDER BY id_produk");
while($tiap = $ambil -> fetch_assoc())
{
    $produk[] = $tiap;
}

// echo"<pre>";
// print_r($produk);
// echo"</pre>";
?>
<div class="row">
                <?php foreach ($produk as $key => $value): ?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2" >
                        <img class="img-fluid" src="../asset/image/image-admin/produk/<?php echo $value["foto_produk"] ?>" alt="" style="height:250px;width=600px;">
                        <div class="p-4">
                            <div >
                                <div class="d-flex justify-content-between">
                                    <a class="h5 text-decoration-none link-produk" href="#" idnya="<?php echo $value["id_produk"] ?>"><?php echo $value["nama_produk"] ?></a>
                                    <h5 class=""><s>Rp. <?php echo $value["harga_coret"]?></s></h5>
                                </div>
                                <div>
                                    <p><?php echo $value["keterangan_produk"]?></p>
                                </div>
                            </div>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>Stock <small>( <?php echo $value["stock_produk"] ?> )</small></h6>
                                    <h5 class="m-0">Rp. <?php echo number_format($value["jual_produk"]) ?></h5>
                                </div>
                            </div>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <button class ="btn-primary btn-sm link-produk" href="#" idnya="<?php echo $value["id_produk"] ?>">Masukkan Keranjang</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
            <script>
        $(document).ready(function() {
            $(".link-produk").on("click", function(){
                // Dapatkan idnya
                var id_produk = $(this).attr("idnya");
                $.ajax({
                    type : 'post',
                    url : 'masukkeranjang.php',
                    data : 'id_produk='+id_produk,
                    success: function(hasil){
                            $.ajax({
                                url: 'tampilkeranjang.php',
                                success:function(hasil){
                                $(".keranjang").html(hasil);
                            }
                        })
                    }
                })
            })
        });
    </script>