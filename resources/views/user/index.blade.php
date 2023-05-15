@include('user.header')
<!DOCTYPE html>
<html lang="en">

<body>


    <!-- Carousel Start -->
    <div class="container-fluid p-0">
    <div id="header-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="{{ asset('user/img/carousel roti-1.jpg') }}" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h4 class="text-white text-uppercase mb-md-3">Yooks Bakery</h4>
                        <h1 class="display-3 text-white mb-md-4">Olahan Roti Untuk Segala Acara</h1>
                        <a href="{{ url('package.php') }}" class="btn btn-primary py-md-3 px-md-5 mt-2">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100 img-fluid" src="{{ asset('user/img/carousel roti-2.jpg') }}" alt="Image" width="w-100">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h4 class="text-white text-uppercase mb-md-3">Yooks Bakery</h4>
                        <h1 class="display-3 text-white mb-md-4">Warnai Hidupmu Dengan Olahan Tepung</h1>
                        <a href="{{ url('package.php') }}" class="btn btn-primary py-md-3 px-md-5 mt-2">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
            <div class="btn btn-dark" style="width: 45px; height: 45px;">
                <span class="carousel-control-prev-icon mb-n2"></span>
            </div>
        </a>
        <a class="carousel-control-next" href="#header-carousel" data-slide="next">
            <div class="btn btn-dark" style="width: 45px; height: 45px;">
                <span class="carousel-control-next-icon mb-n2"></span>
            </div>
        </a>
    </div>
</div>
    <!-- Carousel End -->

    <!-- Booking Start -->
    <!-- <div class="container-fluid booking mt-5 pb-5">
        <div class="container pb-5">
            <div class="bg-light shadow" style="padding: 30px;">
                <div class="row align-items-center" style="min-height: 60px;">
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <select class="custom-select px-4" style="height: 47px;">
                                        <option selected>Destination</option>
                                        <option value="1">Destination 1</option>
                                        <option value="2">Destination 1</option>
                                        <option value="3">Destination 1</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <div class="date" id="date1" data-target-input="nearest">
                                        <input type="text" class="form-control p-4 datetimepicker-input" placeholder="Depart Date" data-target="#date1" data-toggle="datetimepicker"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <div class="date" id="date2" data-target-input="nearest">
                                        <input type="text" class="form-control p-4 datetimepicker-input" placeholder="Return Date" data-target="#date2" data-toggle="datetimepicker"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <select class="custom-select px-4" style="height: 47px;">
                                        <option selected>Duration</option>
                                        <option value="1">Duration 1</option>
                                        <option value="2">Duration 1</option>
                                        <option value="3">Duration 1</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-primary btn-block" type="submit" style="height: 47px; margin-top: -2px;">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Booking End -->


    <!-- About Start -->
    <div class="container-fluid py-5" id="about">
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="{{ asset('user/img/about roti.jpg') }}" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 pt-5 pb-lg-5">
                    <div class="about-text bg-white p-4 p-lg-5 my-lg-5">
                        <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Tentang Kami</h6>
                        <h1 class="mb-3">Tentang Yooks Bakery</h1>
                        <p>Berdiri sejak tahun 2017, berawal dari membuatkan istri usaha sampai akhirnya menjadi
                            lapangan kerja untuk tetangga sekitar. Kami menjual aneka Kue maupun jajanan tradisional, serta menerima layanan pesanan kue untuk acara.
                        </p>
                        <!-- <div class="row mb-4">
                            <div class="col-6">
                                <img class="img-fluid w-50" src="img/roti meses.jfif" alt="">
                            </div>
                            <div class="col-6">
                                <img class="img-fluid w-50" src="img/roti pizza.jpg" alt="">
                            </div>
                        </div>
                        <a href="" class="btn btn-primary mt-1">Pesan Sekarang</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Feature Start-->
    <!-- <div class="container-fluid pb-5">
        <div class="container pb-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-money-check-alt text-white"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="">Harga Terjangkau</h5>
                            <p class="m-0">Harga yang kami tawarkan adalah harga termurah di kota Jember</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-award text-white"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="">Tersertifikasi</h5>
                            <p class="m-0">Tentunya roti dari toko kami sudah tersertifikasi layak jual</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                            <i class="fas fa-2x fa-birthday-cake text-white"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="">Menerima Pesanan</h5>
                            <p class="m-0">Kami juga melayani pemesanan kue untuk segala acara</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!--Feature End -->

    <!-- ?0php
        //Mendapatkan ID Toko user yang login
        $id_toko = $_SESSION['User']['id_toko'];

        $kategori =array();
        $ambil = $koneksi ->query("SELECT * FROM kategori WHERE id_toko='$id_toko' ORDER BY id_kategori DESC LIMIT 6 ");
        while($tiap = $ambil -> fetch_assoc())
        {
            $kategori[] = $tiap;
        }

        // echo"<pre>";
        // print_r($kategori);
        // echo"</pre>";
    ? -->
    @php
    use App\Models\Kategori;
    $kategori = \App\Models\Kategori::where('id_toko', 1)
    ->orderBy('id_kategori', 'desc')
    ->limit(6)
    ->get();
    @endphp
    <!-- Destination Start -->
    <div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <div class="text-center mb-3 pb-3">
            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Produk</h6>
            <h1>Jenis Produk Kami</h1>
        </div>
        <div class="row">
            @foreach ($kategori as $key => $value)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="{{ asset('asset/image/image-admin/kategori/'.$value->foto_kategori) }}" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="">
                            <h5 class="text-white">{{ $value->nama_kategori }}</h5>
                            <span></span>
                        </a>
                    </div>
                </div>
            @endforeach    
        </div>
    </div>
</div>
    <!-- Destination Start -->


    <!-- Service Start -->
    <div class="container-fluid py-5" id="service">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Services</h6>
                <h1>Kenapa Harus Memilih Kami?</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="fa fa-2x fa-money-check-alt mx-auto mb-4"></i>
                        <h5 class="mb-2">Harga Terjangkau</h5>
                        <p class="m-0">Harga yang kami tawarkan adalah harga termurah di kota Jember</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="fa fa-2x fa-award mx-auto mb-4"></i>
                        <h5 class="mb-2">Tersertifikasi</h5>
                        <p class="m-0">Tentunya roti kami sudah tersertifikasi layak konsumsi</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="fas fa-2x fa-birthday-cake mx-auto mb-4"></i>
                        <h5 class="mb-2">Menerima Pesanan</h5>
                        <p class="m-0">Kami juga melayani pemesanan kue untuk segala acara</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Packages Start -->
    <div class="container-fluid py-5" id="menu">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">BAKERY</h6>
                <h1>Cari Roti Pilihanmu</h1>
            </div>
            <div class="card-body">
                <form method="post" class="mb-3">
                    <div class="input-group">
                        <input type="text" name="cari" class="form-control input-cari">
                        <button class="btn btn-primary btn-cari">Cari</button>
                    </div>
                </form>
            </div>
            <div class="letak-produk"></div>
        </div>
    </div>
    <!-- Packages End -->

    <!-- Cari Otomatis -->
    <script>
    $(document).ready(function() {
        $.ajax({
            url: '{{ route("tampilproduk") }}',
            success: function(hasil) {
                $(".letak-produk").html(hasil);
            }
        })
    });
 </script>
    <!-- <script>
        $(document).ready(function() {
            $.ajax({
                url: 'tampilproduk.php',
                success: function(hasil) {
                    $(".letak-produk").html(hasil);
                }
            })
        })
    </script> -->
    <!-- END Cari Otomatis -->
    <!-- 
    <script>
        $(document).ready(function(){
            $.ajax({
                url: 'tampilkeranjang.php',
                success:function(hasil){
                    $(".keranjang").html(hasil);
                }
            })
        }) 
    </script> -->


    <!-- <script>
        $(document).ready(function() {
            $(document).on("click", ".btn-cari", function(e) {
                e.preventDefault();
                var cari = $(".input-cari").val();
                $.ajax({
                    type: 'post',
                    url: 'cariproduk.php',
                    data: 'cari=' + cari,
                    success: function(hasil) {
                        $(".letak-produk").html(hasil);
                    }
                })
            })
        })
    </script> -->

    <!--     

    <script>
        $(document).ready(function(){
            $(document).on("click", ".tambahi", function(){
                var id_produk = $(this).attr("idnya");
                $.ajax({
                    type : 'post',
                    url : 'tambahkeranjang.php',
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
        })
    </script>

    <script>
        $(document).ready(function(){
            $(document).on("click", ".kurangi", function(){
                var id_produk = $(this).attr("idnya");
                $.ajax({
                    type : 'post',
                    url : 'kurangkeranjang.php',
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
        })
    </script>

    <script>
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
    </script> -->

    <!-- Registration Start -->
    <!--<div class="container-fluid bg-registration py-5" style="margin: 90px 0;">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-5 mb-lg-0">
                     <div class="mb-4">
                        <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Mega Offer</h6>
                        <h1 class="text-white"><span class="text-primary">30% OFFSET</span> For Honeymoon</h1>
                    </div>
                    <p class="text-white">Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos,
                        ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est
                        dolor</p>
                    <ul class="list-inline text-white m-0">
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Labore eos amet dolor amet diam</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Etsea et sit dolor amet ipsum</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Diam dolor diam elitripsum vero.</li>
                    </ul>
                </div>
                <div class="col-lg-5">
                    <div class="card border-0">
                        <div class="card-header bg-primary text-center p-4">
                            <h1 class="text-white m-0">Sign In Now</h1>
                        </div>
                        <div class="card-body rounded-bottom bg-white p-5">
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control p-4" placeholder="Your name" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control p-4" placeholder="Your email" required="required" />
                                </div>
                                <div class="form-group">
                                    <select class="custom-select px-4" style="height: 47px;">
                                        <option selected>Select a destination</option>
                                        <option value="1">destination 1</option>
                                        <option value="2">destination 1</option>
                                        <option value="3">destination 1</option>
                                    </select>
                                </div>
                                <div>
                                    <button class="btn btn-primary btn-block py-3" type="submit">Sign In Now</button>
                                </div>
                                <div class="text-center">
                                    <br>
                                    Belum punya akun? <a class="small" href="register.php">Daftar sekarang!</a>
                                </div>
                            </form>
                        </div>
                    </div> -->
    </div>
    </div>
    </div>
    </div>
    <!-- Registration End -->


    <!-- Team Start -->
    <!--?php
    //Mendapatkan ID Toko user yang login
    $id_toko = $_SESSION['User']['id_toko'];

    $user = array();
    $ambil = $koneksi->query("SELECT * FROM user WHERE id_toko='$id_toko' ORDER BY id_user DESC LIMIT 4 ");
    while ($tiap = $ambil->fetch_assoc()) {
        $user[] = $tiap;
    }

    // echo"<pre>";
    // print_r($kategori);
    // echo"</pre>";
    ?-->
    
<div class="container-fluid bg-registration py-5">
    <div class="container py-5">
        <div class="text-center mb-3 pb-3">
            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Testimonial</h6>
            <h1 class="text-light">Testimonial dari pelanggan kami</h1>
        </div>
        <div class="owl-carousel testimonial-carousel">
            <div class="text-center">
                <img class="img-fluid mx-auto" src="{{ asset('user/img/testimonial-2.jpg') }}" style="width: 100px; height: 100px;">
                <div class="testimonial-text bg-white p-4 mt-n5">
                    <p class="mt-5">Rotinya sesuai sama yang direquest, rekomended buat acara-acara penting @yooksbakery #yooksbakery
                    </p>
                    <h5 class="text-truncate">@chindycndy</h5>
                    <!-- <span>Profession</span> -->
                </div>
            </div>
            <div class="text-center">
                <img class="img-fluid mx-auto" src="{{ asset('user/img/testimonial-3.jpg') }}" style="width: 100px; height: 100px;">
                <div class="testimonial-text bg-white p-4 mt-n5">
                    <p class="mt-5">pelayanannya ramah bangett, pilihan rotinya juga banyak yang bikin ngiler... sukses terus @yooksbakery
                    </p>
                    <h5 class="text-truncate">@prssbudyy</h5>
                    <!-- <span>Profession</span> -->
                </div>
            </div>
            <div class="text-center">
                <img class="img-fluid mx-auto" src="{{ asset('user/img/testimonial-4.jpg') }}" style="width: 100px; height: 100px;">
                <div class="testimonial-text bg-white p-4 mt-n5">
                    <p class="mt-5">Harganya terjangkau, Rekomendasi dari aku sih Roti Bolunya.... empuk bangett @yooksbakery
                    </p>
                    <h5 class="text-truncate">@fernndodevyn</h5>
                    <!-- <span>Profession</span> -->
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Team End -->


    <!-- Testimonial Start 
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Testimonial</h6>
                <h1>Testimonial dari pelanggan kami</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="text-center pb-4">
                    <img class="img-fluid mx-auto" src="img/testimonial-1.jpg" style="width: 100px; height: 100px;" >
                    <div class="testimonial-text bg-white p-4 mt-n5">
                        <p class="mt-5">Pilihan Rotinya banyak, rasanya jangan ditanya lagi deh the best pokoknya @yooksbakery
                        </p>
                        <h5 class="text-truncate">@henrymaguire</h5>
                        <!-- <span>Profession</span> 
                    </div>
                </div>
                <div class="text-center">
                    <img class="img-fluid mx-auto" src="img/testimonial-2.jpg" style="width: 100px; height: 100px;" >
                    <div class="testimonial-text bg-white p-4 mt-n5">
                        <p class="mt-5">Rotinya sesuai sama yang direquest, rekomended buat acara-acara penting @yooksbakery #yooksbakery
                        </p>
                        <h5 class="text-truncate">@chindycndy</h5>
                        <!-- <span>Profession</span> 
                    </div>
                </div>
                <div class="text-center">
                    <img class="img-fluid mx-auto" src="img/testimonial-3.jpg" style="width: 100px; height: 100px;" >
                    <div class="testimonial-text bg-white p-4 mt-n5">
                        <p class="mt-5">pelayanannya ramah bangett, pilihan rotinya juga banyak yang bikin ngiler... sukses terus @yooksbakery
                        </p>
                        <h5 class="text-truncate">@prssbudyy</h5>
                        <!-- <span>Profession</span>
                    </div>
                </div>
                <div class="text-center">
                    <img class="img-fluid mx-auto" src="img/testimonial-4.jpg" style="width: 100px; height: 100px;" >
                    <div class="testimonial-text bg-white p-4 mt-n5">
                        <p class="mt-5">Harganya terjangkau, Rekomendasi dari aku sih Roti Bolunya.... empuk bangett @yooksbakery
                        </p>
                        <h5 class="text-truncate">@fernndodevyn</h5>
                        <!-- <span>Profession</span> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Blog Start-->
    <!-- <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Our Blog</h6>
                <h1>Latest From Our Blog</h1>
            </div>
            <div class="row pb-3">
                <div class="col-lg-4 col-md-6 mb-4 pb-2">
                    <div class="blog-item">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="img/blog-1.jpg" alt="">
                            <div class="blog-date">
                                <h6 class="font-weight-bold mb-n1">01</h6>
                                <small class="text-white text-uppercase">Jan</small>
                            </div>
                        </div>
                        <div class="bg-white p-4">
                            <div class="d-flex mb-2">
                                <a class="text-primary text-uppercase text-decoration-none" href="">Admin</a>
                                <span class="text-primary px-2">|</span>
                                <a class="text-primary text-uppercase text-decoration-none" href="">Tours & Travel</a>
                            </div>
                            <a class="h5 m-0 text-decoration-none" href="">Dolor justo sea kasd lorem clita justo diam amet</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 pb-2">
                    <div class="blog-item">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="img/blog-2.jpg" alt="">
                            <div class="blog-date">
                                <h6 class="font-weight-bold mb-n1">01</h6>
                                <small class="text-white text-uppercase">Jan</small>
                            </div>
                        </div>
                        <div class="bg-white p-4">
                            <div class="d-flex mb-2">
                                <a class="text-primary text-uppercase text-decoration-none" href="">Admin</a>
                                <span class="text-primary px-2">|</span>
                                <a class="text-primary text-uppercase text-decoration-none" href="">Tours & Travel</a>
                            </div>
                            <a class="h5 m-0 text-decoration-none" href="">Dolor justo sea kasd lorem clita justo diam amet</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 pb-2">
                    <div class="blog-item">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="img/blog-3.jpg" alt="">
                            <div class="blog-date">
                                <h6 class="font-weight-bold mb-n1">01</h6>
                                <small class="text-white text-uppercase">Jan</small>
                            </div>
                        </div>
                        <div class="bg-white p-4">
                            <div class="d-flex mb-2">
                                <a class="text-primary text-uppercase text-decoration-none" href="">Admin</a>
                                <span class="text-primary px-2">|</span>
                                <a class="text-primary text-uppercase text-decoration-none" href="">Tours & Travel</a>
                            </div>
                            <a class="h5 m-0 text-decoration-none" href="">Dolor justo sea kasd lorem clita justo diam amet</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Blog End -->

    <!-- Footer -->
    <!--?php include 'footer.php' ?-->
    <!-- Footer End -->
@include('user.footer')
</body>