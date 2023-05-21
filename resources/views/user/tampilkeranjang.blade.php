<link rel="stylesheet" href="{{ asset('user/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}">
<script src="{{ asset('user/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('user/bootstrap-datepicker/locales/bootstrap-datepicker.id.min.js') }}"></script>


  <script>
  $( function() {
    $( "#date" ).datepicker({
      autoclose:true,
      todayHighlight:true,
      format:'yyyy-mm-dd',
      language: 'id'
    });
  } );
  </script>
@php
@if (!empty($cartItems) && count($cartItems) > 0)
@foreach ($cartItems as $item)
{{ $item->produk->nama_produk }}
{{ $item->produk->jual_produk }}
{{ $item->produk->jual_produk * $item->quantity }}
@endforeach
@else
Your cart is empty.
@endif
Total: {{ $totalPrice }}
@foreach ($produkItems as $produk)
            {{ $produk->nama_produk }}
        @endforeach
@endphp
<?php
$telp = $_SESSION['User']['telepon_user'];
$keranjang = array();
$total = 0;
if (isset($_SESSION['keranjang'])) 
{
    foreach ($_SESSION['keranjang'] as $id_produk => $jumlah) {
        $ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='$id_produk'");
        $produk = $ambil->fetch_assoc();
        $produk['jumlah'] = $jumlah;
        $keranjang[] = $produk;
        $total+=$produk['jual_produk'] * $jumlah;
    }
}
?>
@if (!empty($cartItems) && count($cartItems) > 0)
@foreach ($cartItems as $item)
 <div class="row">
    <div class="col-md-11">
        <h6>{{ $item->produk->nama_produk }}</h6>
        <span class="small text-muted"> {{ $item->produk->jual_produk }}</span>
        <p class="small"> X {{ $perproduk['jumlah'] }} </p>
    </div>
    <div class="col-md-1">
        <button type="button" class="btn btn-outline-primary btn-sm">
            <i class="bi bi-plus tambahi" idnya="{{ $perproduk['id_produk'] }}"></i>
        </button>
        <button type="button" class="btn btn-outline-primary btn-sm">
            <i class="bi bi-dash kurangi" idnya="{{ $perproduk['id_produk'] }}"></i>
        </button>
    </div>
 </div>
 <hr>
@endforeach

<?php
foreach ($keranjang as $key => $perproduk): ?>
 <div class="row">
    <div class="col-md-11">
        <h6><?php echo $perproduk["nama_produk"] ?></h6>
        <span class="small text-muted"> <?php echo number_format($perproduk['jual_produk']) ?> </span>
        <p class="small"> X <?php echo $perproduk['jumlah'] ?> </p>
    </div>
    <div class="col-md-1">
        <button type="button" class="btn btn-outline-primary btn-sm">
            <i class="bi bi-plus tambahi" idnya="<?php echo $perproduk['id_produk'] ?>"></i>
        </button>
        <button type="button" class="btn btn-outline-primary btn-sm">
            <i class="bi bi-dash kurangi" idnya="<?php echo $perproduk['id_produk'] ?>"></i>
        </button>
    </div>
 </div>
 <hr>
<?php endforeach ?>

<form method="POST" action="checkout.php" target="_blank" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="">Total</label>
        <Input type="number" name="total" class="form-control total" value="<?php echo $total ?>" readonly></Input>
    </div>
    <!-- <div class="mb-3">
        <label for="">Bayar</label>
        <Input type="number" name="bayar" class="form-control bayar" required></Input>
    </div>
    <div class="mb-3">
        <label for="">Kembalian</label>
        <Input type="number" name="kembalian" class="form-control kembalian" readonly></Input>
    </div> -->
    <div class="mb-3">
        <label for="">No. Telepon</label>
        <input type="text" name="telepon" class="form-control" placeholder="+62" value="<?php echo $telp?>">
    </div>
    <div class="mb-3">
        <label>Tanggal Pengambilan</label>
        <input type="text" name="date" id="date" class="form-control"></input>
    </div>
</br>
    <p>Silahkan transfer terlebih dahulu sesuai harga total ke akun Bank kami sebelum klik tombol checkout.</p>
    <div class="mb-3">
    <label>Pilih Akun Bank</label>
    <select class="form-control" name="bank">
        <option value="">Pilih</option>
        <option>Bank BNI - 092213345687 a/n Yooks Teknik</option>
        <option>Bank BCA - 5220304356 a/n Yooks Bakery</option>
        <option>DANA - 083857726588 a/n Fajar</option>
    </select>
    
    <div class="mb-3">
        <label>Bukti Pembayaran</label>
        <input type="file" name="foto" class="form-control" accept="image/png, image/gif, image/jpeg"></input>
    </div>
    <button class="btn btn-primary btn-sm">Checkout</button>
</form>
</body>
