@php
    use App\Models\Produk;

    $distinctIdToko = Produk::distinct()->pluck('id_toko');
@endphp
@foreach ($distinctIdToko as $idToko)
@endforeach
@php

    $produk = \App\Models\Produk::where('id_toko', $idToko)->orderBy('id_produk')->get();
@endphp
<div class="row">
    @foreach ($produk as $value)
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="package-item bg-white mb-2">
            <img class="img-fluid" src="{{ asset('asset/image/image-admin/produk/' . $value->foto_produk) }}" alt="" style="height:250px;width=600px;">
                <div class="p-4">
                    <div>
                        <div class="d-flex justify-content-between">
                            <a class="h5 text-decoration-none link-produk" href="#" idnya="{{ $value->id_produk }}">{{ $value->nama_produk }}</a>
                            <h5 class=""><s>Rp. {{ $value->harga_coret }}</s></h5>
                        </div>
                        <div>
                            <p>{{ $value->keterangan_produk }}</p>
                        </div>
                    </div>
                    <div class="border-top mt-4 pt-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>Stock <small>( {{ $value->stock_produk }} )</small></h6>
                            <h5 class="m-0">Rp. {{ number_format($value->jual_produk) }}</h5>
                        </div>
                    </div>
                    <div class="border-top mt-4 pt-4">
                        <div class="d-flex justify-content-between">
                            <button class="btn-primary btn-sm link-produk" href="#" idnya="{{ $value->id_produk }}">Masukkan Keranjang</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
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
        });
    });
</script>