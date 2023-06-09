<!--?php
include '../koneksi.php';
// Jika belum login, jika tidak ada session user, maka larikan ke halaman login
if (!isset($_SESSION['User'])) {
  echo "<script>Alert('Anda Harus Login!')</script>";
  echo "<script>location='./farel-project/index.php'</script>";
  exit();
}
?-->

@php
session()->start();
@endphp
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
    <link href="{{ asset('user/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('user/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

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
                    <a class="text-primary pl-3" href="{{ route('logout') }}">Logout
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
                    <a href="{{ url('/home') }}" class="nav-item nav-link">Home</a>
                    <a href="{{ url('/home#about') }}" class="nav-item nav-link">About</a>
                    <a href="{{ url('/home#service') }}" class="nav-item nav-link">Services</a>
                    <a href="{{ url('/home#menu') }}" class="nav-item nav-link">Menu</a>
                    <a href="{{ url('formkeranjang') }}" class="nav-item nav-link">Keranjang</a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->