<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset ('asset/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('asset/css/style123.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <!-- Sweet Alert 2 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset ('asset/plugins/sweetalert/sweetalert2.all.min.js') }}"></script>
    <!-- Sweet Alert 2 END -->
</head>
<body class="bg">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4 offset-md-4 mt-5 shadow p-5 rounded">
                <div class="text-center">
                    <img src="{{ asset ('asset/image/image-admin/Logo.png') }}" width="150">
                </div>
                <h1>REGISTRASI</h1>
                <p>Jelajahi toko kami sepuas anda!</p>
                <form action="{{ route ('user.register') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label >Nama</label>
                        <input type="text" name="name" class="form-control" placeholder="Username">
                    </div>
                    <div class="mb-3">
                        <label >Alamat</label>
                        <input type="text" name="address" class="form-control" placeholder="Address">
                    </div>
                    <div class="mb-3">
                        <label >No. Telp</label>
                        <input type="text" name="telp" class="form-control" placeholder="0823xxxxxxx">
                    </div>
                    <div class="mb-3">
                        <label >Email</label>
                        <input type="email" name="email" class="form-control" placeholder="example@gmail.com">
                    </div>
                    <div class="mb-3">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="******">
                            <span class="eye">
                                <i class="fa fa-eye"></i>
                        </span>
                    </div>
                    <button class="btn btn-outline" name="register">Register</button>
                </form>
                <p>Sudah punya akun? <a href="{{ route ('login')}}">Log in</a></p>
            </div>
        </div>
    </div>
    