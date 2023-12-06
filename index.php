<?php  
    error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
    session_start();
    include ("inc/koneksi.php");
    include ("inc/tanggal.php");   
    if ($_SESSION['Admin'] || $_SESSION['Pimpinan'] || $_SESSION['Guru']) {     
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

    <!-- plugin css -->
    <link href="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="assets/libs/spectrum-colorpicker2/spectrum.min.css" rel="stylesheet" type="text/css">
    <link href="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />

    <!-- DataTables -->
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />  
    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    

</head>


<body>

    <?php
    if ($_SESSION['Admin']) { $user = $_SESSION['Admin']; }
    elseif ($_SESSION['Pimpinan']) { $user = $_SESSION['Pimpinan']; } 
    elseif ($_SESSION['Guru']) { $user = $_SESSION['Guru']; } 
    $sql = mysqli_query($con, "SELECT * FROM pegawai NATURAL JOIN jabatan NATURAL JOIN admin WHERE id_admin='$user'");
    $admin = mysqli_fetch_assoc($sql);
    ?>

    <div id="layout-wrapper">

        <?php include "modal1.php"; ?>
        <?php include "header.php"; ?>

        <?php include "menu.php"; ?>

        <div class="main-content">

            <div class="page-content">

                <div class="page-title-box">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-sm-6">
                                <div class="page-title">
                                    <h4><?php echo $meta['judul_meta'] ?></h4>
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item active"><?php echo $meta['alamat_meta'] ?></li>
                                    </ol>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="float-end d-none d-sm-block">
                                    <a href="#" class="btn btn-success">
                                        <strong>
                                            <script type='text/javascript'>
                                                <!--
                                                    var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
                                                    var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
                                                    var date = new Date();
                                                    var day = date.getDate();
                                                    var month = date.getMonth();
                                                    var thisDay = date.getDay(),
                                                        thisDay = myDays[thisDay];
                                                    var yy = date.getYear();
                                                    var year = (yy < 1000) ? yy + 1900 : yy;
                                                    document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
                                                //-->
                                            </script>
                                        </strong>
                                    </a>
                                    <a href="#" class="btn btn-success">
                                        <strong>
                                            <span id="clock1"></span>
                                            <script type="text/javascript"> 
                                                function showTime() {
                                                   var a_p = "";
                                                    var today = new Date();
                                                    var curr_hour = today.getHours();
                                                    var curr_minute = today.getMinutes();
                                                    var curr_second = today.getSeconds();
                                                    if (curr_hour < 12) {
                                                        a_p = "AM";
                                                    } else {
                                                        a_p = "PM";
                                                    }
                                                    if (curr_hour == 0) {
                                                        curr_hour = 12;
                                                    }
                                                    if (curr_hour > 12) {
                                                        curr_hour = curr_hour - 12;
                                                    }
                                                    curr_hour = checkTime(curr_hour);
                                                    curr_minute = checkTime(curr_minute);
                                                    curr_second = checkTime(curr_second);
                                                   document.getElementById('clock1').innerHTML=curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
                                                }
                                        
                                                function checkTime(i) {
                                                    if (i < 10) {
                                                        i = "0" + i;
                                                    }
                                                    return i;
                                                }
                                                setInterval(showTime, 500); 
                                            </script>
                                        </strong>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end page title -->    


                <div class="container-fluid">
                    <div class="page-content-wrapper">
                        <?php 
                            $page = $_GET['page'];
                            $aksi = $_GET['aksi']; 

                            if ($page == "jabatan") 
                            {
                                if ($aksi == "") { include "page/jabatan/jabatan.php"; }
                                if ($aksi == "tambah") { include "page/jabatan/tambah.php"; }
                                if ($aksi == "ubah") { include "page/jabatan/ubah.php"; }
                                if ($aksi == "hapus") { include "page/jabatan/hapus.php"; }
                            } 

                            if ($page == "pegawai") 
                            {
                                if ($aksi == "") { include "page/pegawai/pegawai.php"; }
                                if ($aksi == "tambah") { include "page/pegawai/tambah.php"; }
                                if ($aksi == "ubah") { include "page/pegawai/ubah.php"; }
                                if ($aksi == "hapus") { include "page/pegawai/hapus.php"; }
                            }

                            if ($page == "admin") 
                            {
                                if ($aksi == "") { include "page/admin/admin.php"; }
                                if ($aksi == "tambah") { include "page/admin/tambah.php"; }
                                if ($aksi == "ubah") { include "page/admin/ubah.php"; }
                                if ($aksi == "hapus") { include "page/admin/hapus.php"; }
                            } 

                            if ($page == "kelas") 
                            {
                                if ($aksi == "") { include "page/kelas/kelas.php"; }
                                if ($aksi == "tambah") { include "page/kelas/tambah.php"; }
                                if ($aksi == "ubah") { include "page/kelas/ubah.php"; }
                                if ($aksi == "hapus") { include "page/kelas/hapus.php"; }
                            } 

                            if ($page == "levels") 
                            {
                                if ($aksi == "") { include "page/levels/levels.php"; }
                                if ($aksi == "tambah") { include "page/levels/tambah.php"; }
                                if ($aksi == "ubah") { include "page/levels/ubah.php"; }
                                if ($aksi == "hapus") { include "page/levels/hapus.php"; }
                            } 

                            if ($page == "pendaftaran") 
                            {
                                if ($aksi == "") { include "page/pendaftaran/pendaftaran.php"; }
                                if ($aksi == "tambah") { include "page/pendaftaran/tambah.php"; }
                                if ($aksi == "pembayaran") { include "page/pendaftaran/pembayaran.php"; }
                                if ($aksi == "hapus") { include "page/pendaftaran/hapus.php"; }
                                if ($aksi == "bayar") { include "page/pendaftaran/bayar.php"; }
                            } 

                            if ($page == "wali") 
                            {
                                if ($aksi == "") { include "page/wali/wali.php"; }
                                if ($aksi == "tambah") { include "page/wali/tambah.php"; }
                                if ($aksi == "ubah") { include "page/wali/ubah.php"; }
                                if ($aksi == "hapus") { include "page/wali/hapus.php"; }
                                if ($aksi == "anak") { include "page/wali/anak.php"; }
                                if ($aksi == "anak_tambah") { include "page/wali/anak_tambah.php"; }
                                if ($aksi == "anak_ubah") { include "page/wali/anak_ubah.php"; }
                                if ($aksi == "anak_hapus") { include "page/wali/anak_hapus.php"; }
                            } 

                            if ($page == "jadwal") 
                            {
                                if ($aksi == "") { include "page/jadwal/jadwal.php"; }
                                if ($aksi == "tambah") { include "page/jadwal/tambah.php"; } 
                            }

                            if ($page == "siswa") 
                            {
                                if ($aksi == "") { include "page/siswa/siswa.php"; }
                                if ($aksi == "pertemuan1") { include "page/siswa/pertemuan1.php"; } 
                                if ($aksi == "pertemuan2") { include "page/siswa/pertemuan2.php"; } 
                                if ($aksi == "pertemuan3") { include "page/siswa/pertemuan3.php"; } 
                                if ($aksi == "pertemuan4") { include "page/siswa/pertemuan4.php"; }  
                            }
                            
                            if ($page == "guru") 
                            {
                                if ($aksi == "") { include "page/guru/guru.php"; }
                                if ($aksi == "tambah") { include "page/guru/tambah.php"; }
                                if ($aksi == "ubah") { include "page/guru/ubah.php"; }
                                if ($aksi == "hapus") { include "page/guru/hapus.php"; }
                            }

                            if ($page == "") {
                                include "home.php";
                            }
                        ?>
                    </div>
                </div>

            </div>
            <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © <?php echo $meta['judul_meta'] ?>.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Crafted with Riski Nurliana
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>

    <!-- Required datatable js -->
    <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>

    <!-- Buttons examples -->
    <script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="assets/libs/jszip/jszip.min.js"></script>
    <script src="assets/libs/pdfmake/build/pdfmake.min.js"></script>
    <script src="assets/libs/pdfmake/build/vfs_fonts.js"></script>
    <script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="assets/libs/select2/js/select2.min.js"></script>
    <script src="assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/libs/spectrum-colorpicker2/spectrum.min.js"></script>
    <script src="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
    <script src="assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>

    <!-- Responsive examples -->
    <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

    <!-- Datatable init js -->
    <script src="assets/js/pages/datatables.init.js"></script> 

    <!-- apexcharts -->
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- Plugins js-->
    <script src="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/libs/parsleyjs/parsley.min.js"></script>
    <script src="assets/js/pages/form-validation.init.js"></script>

    <script src="assets/js/pages/dashboard.init.js"></script>

    <script src="assets/js/app.js"></script>
    <script src="assets/js/pages/form-advanced.init.js"></script>

    <script type="text/javascript" src="Chart.js"></script>

    <script>
        var ctx = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["Lulus", "Tidak Lulus"],
                datasets: [{
                    label: '',
                    data: [
                    <?php 
                    $jumlah_teknik = mysqli_query($con,"SELECT * FROM pendaftaran NATURAL JOIN wali NATURAL JOIN siswa NATURAL JOIN kelas NATURAL JOIN levels WHERE status_pendaftaran='Lunas'");
                    echo mysqli_num_rows($jumlah_teknik);
                    ?>, 
                    <?php 
                    $jumlah_pertanian = mysqli_query($con,"SELECT * FROM pendaftaran NATURAL JOIN wali NATURAL JOIN siswa NATURAL JOIN kelas NATURAL JOIN levels WHERE status_pendaftaran='Pending'");
                    echo mysqli_num_rows($jumlah_pertanian);
                    ?> 
                    ],
                    backgroundColor: [
                    '#55ed9f',
                    '#fa5c62',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)'
                    ],
                    borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });
    </script>

</body>

</html>
<?php    
  }else{
    echo '<script language="javascript">alert("Anda belum login, Klik OK untuk Login"); document.location="login.php";</script>';
    }
?>