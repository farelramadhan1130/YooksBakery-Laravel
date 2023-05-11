<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <!-- Jquery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../favicon.ico" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('user/css/style.css') }}" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('user/lib/owlcarousel/assets/owl.carousel.min.css')" rel="stylesheet">
    <link href="{{ asset('user/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')" rel="stylesheet" />

    <!-- <link rel="icon" type="image/x-icon" href="ico/favicon.ico" /> -->

    <title>Yooks Bakery</title>

</head>

<!-- Topbar Start -->
<div class="container-fluid bg-light pt-3 d-none d-lg-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <p><i class="fa fa-envelope mr-2"></i>yooksbakery@gmail.com</p>
                    <p class="text-body px-3">|</p>
                    <p><i class="fa fa-phone-alt mr-2"></i>+62 838 5772 6588</p>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-primary px-3" href="https://www.facebook.com/groups/himanika.polije/?ref=share&mibextid=NSMWBT">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-primary px-3" href="https://twitter.com/PelajarPOLIJE?t=gg747-mo5XAiYIwmI5dEJw&s=09">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-primary px-3" href="https://www.linkedin.com/school/politeknik-negeri-jember/">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-primary px-3" href="https://instagram.com/mif21_polije?igshid=YmMyMTA2M2Y=">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-primary pl-3" href="https://youtube.com/@himanikapolije6995">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a class="text-primary pl-3" href="logout.php">Logout
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<div class="container-fluid position-relative nav-bar p-0">
    <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
        <nav class="navbar navbar-expand-lg bg-light navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5">
            <a href="" class="navbar-brand">
                <h1 class="m-0 text-primary"><span class="text-dark">YOOKS</span>BAKERY</h1>
            </a>
            <button type="button" class="navbar-toggler" datza-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                <div class="navbar-nav ml-auto py-0">
                    <a href="index.php" class="nav-item nav-link">Home</a>
                    <a href="index.php#about" class="nav-item nav-link">About</a>
                    <a href="index.php#service" class="nav-item nav-link">Services</a>
                    <a href="index.php#menu" class="nav-item nav-link">Menu</a>
                    <a href="formkeranjang.php" class="nav-item nav-link">Keranjang</a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->
<body>


    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel roti-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Yooks Bakery</h4>
                            <h1 class="display-3 text-white mb-md-4">Olahan Roti Untuk Segala Acara</h1>
                            <a href="package.php" class="btn btn-primary py-md-3 px-md-5 mt-2">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100 img-fluid" src="img/carousel roti-2.jpg" alt="Image" width="w-100">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Yooks Bakery</h4>
                            <h1 class="display-3 text-white mb-md-4">Warnai Hidupmu Dengan Olahan Tepung</h1>
                            <a href="package.php" class="btn btn-primary py-md-3 px-md-5 mt-2">Selengkapnya</a>
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
                        <img class="position-absolute w-100 h-100" src="img/about roti.jpg" style="object-fit: cover;">
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

    <!-- Destination Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Produk</h6>
                <h1>Jenis Produk Kami</h1>
            </div>
            <div class="row">
                <!-- ?php foreach ($kategori as $key => $value) : ? -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="../asset/image/image-admin/kategori/" alt=""> <!--?php echo $value["foto_kategori"] ?-->
                        <a class="destination-overlay text-white text-decoration-none" href="">
                            <h5 class="text-white"><!--?php echo $value["nama_kategori"]? --></h5>
                            <span></span>
                        </a>
                    </div>
                </div>
                <!-- ?php endforeach ? -->
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
                    <img class="img-fluid mx-auto" src="img/testimonial-2.jpg" style="width: 100px; height: 100px;">
                    <div class="testimonial-text bg-white p-4 mt-n5">
                        <p class="mt-5">Rotinya sesuai sama yang direquest, rekomended buat acara-acara penting @yooksbakery #yooksbakery
                        </p>
                        <h5 class="text-truncate">@chindycndy</h5>
                        <!-- <span>Profession</span> -->
                    </div>
                </div>
                <div class="text-center">
                    <img class="img-fluid mx-auto" src="img/testimonial-3.jpg" style="width: 100px; height: 100px;">
                    <div class="testimonial-text bg-white p-4 mt-n5">
                        <p class="mt-5">pelayanannya ramah bangett, pilihan rotinya juga banyak yang bikin ngiler... sukses terus @yooksbakery
                        </p>
                        <h5 class="text-truncate">@prssbudyy</h5>
                        <!-- <span>Profession</span> -->
                    </div>
                </div>
                <div class="text-center">
                    <img class="img-fluid mx-auto" src="img/testimonial-4.jpg" style="width: 100px; height: 100px;">
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
        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 py-5 px-sm-3 px-lg-5" style="margin-top: 90px;">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="" class="navbar-brand">
                    <h1 class="text-primary"><span class="text-white">YOOKS</span>BAKERY</h1>
                </a>
                <p>Berdiri sejak tahun 2017, berawal dari membuatkan istri usaha sampai akhirnya menjadi
                    lapangan kerja untuk tetangga sekitar. Kami menjual aneka Kue maupun jajanan tradisional, serta menerima layanan pesanan kue untuk acara.</p>
                <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Follow Us</h6>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Our Services</h5>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white-50 mb-2" href="index.php"><i class="fa fa-angle-right mr-2"></i>Home</a>
                    <a class="text-white-50 mb-2" href="index.php#about"><i class="fa fa-angle-right mr-2"></i>About</a>
                    <a class="text-white-50 mb-2" href="index.php#service"><i class="fa fa-angle-right mr-2"></i>Services</a>
                    <a class="text-white-50 mb-2" href="package.php"><i class="fa fa-angle-right mr-2"></i>Menu</a>
                </div>
            </div>
            <!-- <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Usefull Links</h5>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Destination</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Services</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Packages</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Guides</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Testimonial</a>
                    <a class="text-white-50" href="#"><i class="fa fa-angle-right mr-2"></i>Blog</a>
                </div>
            </div> -->
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Contact Us</h5>
                <p><i class="fa fa-map-marker-alt mr-2"></i>Jl. Melon 3 no. 5B, Krajan, Patrang, Kec. Patrang, Kabupaten Jember, Jawa Timur 68111</p>
                <p><i class="fa fa-phone-alt mr-2"></i>+62 838 5772 6588</p>
                <p><i class="fa fa-envelope mr-2"></i>yooksbakery@gmail.com</p>
                <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Newsletter</h6>
                <div class="w-100">
                    <div class="input-group">
                        <input type="text" class="form-control border-light" style="padding: 25px;" placeholder="Your Email">
                        <div class="input-group-append">
                            <button class="btn btn-primary px-3">Sign Up</button>
                        </div>
                    </div>
                </div>
            </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2532.7674293174155!2d113.72551110191155!3d-8.147651396325841!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd695d0beb86da3%3A0xc2976f4f477e5f36!2sICHA%20TAILOR!5e0!3m2!1sid!2sid!4v1671073270383!5m2!1sid!2sid" width="100%" height="50%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
    </div>
    <div class="container-fluid bg-dark text-white border-top py-2 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white-50">Copyright &copy; <a href="#">Yooks Bakery</a>. All Rights Reserved.</a>
                </p>
            </div>
            <div class="col-lg-6 text-center text-md-right">
                <p class="m-0 text-white-50">Designed by <a href="https://htmlcodex.com">Yooks Bakery</a>
                </p>
            </div>
        </div>
    </div>
    <!-- Footer End -->
    
    <!-- Back to Top -->
    <a href="formkeranjang.php" class="btn btn-lg btn-primary btn-keranjang back-to-top"><i class="fa fa-shopping-cart"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>