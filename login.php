<?php 
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
session_start();
include 'inc/koneksi.php';
?>

<!doctype html>
<html lang="en">

<head>
    
    <meta charset="utf-8" />
    <title><?php echo $meta['judul_meta'] ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/<?php echo $meta['logo_meta'] ?>">

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>


<body class="authentication-bg bg-primary">
    <div class="home-center">
        <div class="home-desc-center">

            <div class="container"> 

                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="px-2 py-3">


                                    <div class="text-center">
                                        <a href="#">
                                            <img src="assets/<?php echo $meta['logo_meta'] ?>" height="70" alt="logo"> <br><br>
                                            <strong style="text-transform: uppercase;">
                                                <?php echo $meta['judul_meta'] ?> <br> 
                                                <small><?php echo $meta['alamat_meta'] ?></small>
                                            </strong> 
                                            <hr>
                                        </a>
                                        <h5 class="text-primary mb-2 mt-4">Selamat Datang</h5>
                                        <p class="text-muted">Silahkan Login Untuk Mengakses Sistem.</p>
                                    </div>


                                    <form class="form-horizontal mt-4 pt-2" action="#" method="POST">

                                        <?php
                                        $username    = $_POST['username'];
                                        $password    = $_POST['password'];
                                        $login       = $_POST['login'];
                                            if ($login) 
                                            {
                                                $sql = mysqli_query($con, "SELECT * FROM pegawai NATURAL JOIN admin WHERE username='$username' AND password='$password' AND status='Aktif'");
                                                $ketemu = mysqli_num_rows($sql);
                                                $data = mysqli_fetch_array($sql);
                                                if ($ketemu >=1) 
                                                {
                                                    session_start();
                                                    if ($data['level'] == "Admin") 
                                                    {
                                                        $_SESSION['Admin'] = $data['id_admin'];
                                                        echo "<div class='alert alert-success'><b>Login Sukses</b></div>";
                                                        echo "<meta http-equiv='refresh' content='1;url=index.php'>"; 
                                                    }
                                                    else if ($data['level'] == "Pimpinan") 
                                                    {
                                                        $_SESSION['Pimpinan'] = $data['id_admin'];
                                                        echo "<div class='alert alert-success'><b>Login Sukses</b></div>";
                                                        echo "<meta http-equiv='refresh' content='1;url=index.php'>"; 
                                                    }  
                                                    else if ($data['level'] == "Guru") 
                                                    {
                                                        $_SESSION['Guru'] = $data['id_admin'];
                                                        echo "<div class='alert alert-success'><b>Login Sukses</b></div>";
                                                        echo "<meta http-equiv='refresh' content='1;url=index.php'>"; 
                                                    }  
                                                }else
                                            {
                                        ?>
                                        <script type="text/javascript">
                                              alert("Error Username / Password Salah !");
                                        </script>
                                        <?php 
                                            } 
                                        } 
                                        ?>     

                                        <div class="mb-2">
                                            <label>USERNAME</label>
                                            <input type="text" class="form-control" name="username" required autofocus>
                                        </div>

                                        <div class="mb-2">
                                            <label>PASSWORD</label>
                                            <input type="password" class="form-control" name="password" id="password" required>
                                        </div>

                                        <div class="mb-2">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customControlInline" onclick="change()">
                                                <label>Lihat Password</label>
                                            </div>
                                        </div>

                                        <div>
                                            <input type="submit" name="login" value="L O G I N" class="btn btn-primary w-100 waves-effect waves-light">
                                        </div> 

                                    </form> 
                                  
                                </div>
                            </div>
                        </div> 

                    </div>
                </div>

            </div>


        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>

    <script src="assets/js/app.js"></script>

    <script type="text/javascript">
        function change()
        {
            var x = document.getElementById('password').type;
            if (x == 'password')
            {
                document.getElementById('password').type = 'text';
                document.getElementById('customControlInline').innerHTML;
            }
            else
            {
                document.getElementById('password').type = 'password';
                document.getElementById('customControlInline').innerHTML;
            }
        }
    </script>

</body>

</html> 