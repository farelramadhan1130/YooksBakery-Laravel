@include('user.header')
@php
    use App\Models\Produk;
@endphp
<body>
    <!-- Header Start -->
    <div class="container-fluid page-header">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-4 text-white text-uppercase">Keranjang</h3>
                <h4 class="display-7 text-white text-uppercase">{{Auth::user()->nama_user}}</h4>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="{{ url('/home') }}">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Keranjang</p>
                </div>
                <div class="d-inline-flex text-white"><?php echo date('l, d-m-Y')?>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
    <div class="container-fluid py-5">
    <!-- <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card border-0 shadow">
                        <div class="card-body keranjang"></div>
                    </div>
    </div> -->
    <div class="col-md-12">
                    <div class="card border-0 shadow">
                        <div class="card-body keranjang"></div>
                    </div>
    </div>
    <script>
        $(document).ready(function(){
            $.ajax({
                url: '{{route("tampilcart")}}',
                success:function(hasil){
                    $(".keranjang").html(hasil);
                }
            })
        }) 
    </script>
    

    <!-- <script>
        $(document).ready(function(){
            $(document).on("keyup", ".bayar", function(){
                // Dapatkan inputan bayar
                var bayar =$(this).val();

                // Dapatkan inputan total
                var total =$(".total").val();

                var kembalian = parseInt(bayar) - parseInt(total);

                $(".kembalian").val(kembalian);
            })
        })
    </script>
 -->
