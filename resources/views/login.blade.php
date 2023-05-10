<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <title>Login</title>
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/style123.css">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4 offset-md-4 mt-5 shadow p-5 rounded">
                <div class="text-center">
                    <img src="asset/image/image-admin/Logo.png" width="150">
                </div>
                <form method="POST">
                    <div class="mb-3">
                        <label >Email</label>
                        <input type="email" name="email" class="form-control" placeholder="example@gmail.com">
                    </div>
                    <div class="mb-3">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="************ ">
                    </div>
                    <button class="btn btn-outline mb-1" name="login">Login</button>
                    <div>
                    <p>Belum Punya akun? <a href="register.php">Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="asset/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="../farel-project/asset/plugins/sweetalert/sweetalert2.all.min.js"></script>

    <?php
        if (isset($_POST['login'])) {
            $email = $_POST['email'];
            $password = sha1($_POST['password']);

            //cek akun ke tabel admin
            $ambil = $koneksi->query("SELECT * FROM user WHERE email_user='$email' AND password_user='$password' ");
            $cekuser = $ambil->fetch_assoc();

            if (empty($cekuser)) {
                echo "<script>
                        Swal.fire({
                            icon: 'error',
                            title: 'SOMETHING WENT WRONG :(',
                            text: 'Email Atau Password Salah !!!'
                        }).then((result) => {
                            window.location.href = 'index.php'
                        })
                    </script>";
            }
            else {
                //menyimpan data plogin dalam session agar sistem tau siapa yang pakai dia
                $_SESSION['User'] = $cekuser;
                $_SESSION['Admin'] = $cekuser;

                if ($cekuser['level_user']=="Admin"){
                    // echo "<script>location='index.php?level=admin&success=true'</script>";
                    echo "<script>
                            Swal.fire({
                                icon: 'success',
                                title: 'ANDA BERHASIL LOGIN',
                                text: 'Semoga Harinya Menyenangkan ❤️'
                            }).then((result) => {
                                window.location.href = 'admin/html/index.php'
                            })
                    </script>";
                }
                else if ($cekuser['level_user']=="User") {
                    echo "<script>
                            Swal.fire({
                                icon: 'success',
                                title: 'ANDA BERHASIL LOGIN',
                                text: 'Semoga Harinya Menyenangkan ❤️'
                            }).then((result) => {
                                window.location.href = 'user/index.php'
                            })
                    </script>";
                }
            }
        }
        
    ?>

</body>
</html>