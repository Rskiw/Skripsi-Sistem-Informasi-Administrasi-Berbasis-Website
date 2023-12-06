<div class="vertical-menu">

    <div data-simplebar class="h-100">


        <div class="user-sidebar text-center">
            <div class="dropdown">
                <div class="user-img">
                    <img src="assets/user.png" alt="" class="rounded-circle">
                    <span class="avatar-online bg-success"></span>
                </div>
                <div class="user-info">
                    <h5 class="mt-3 font-size-16 text-white"><?php echo $admin['nama']; ?></h5>
                    <span class="font-size-13 text-white">Jabatan : <?php echo $admin['jabatan']; ?> <br> Hak Akses : <?php echo $admin['level']; ?></span> 
                </div>
            </div>
        </div>

        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="index.php" class=" waves-effect">
                        <i class="dripicons-home"></i>
                        <span>Beranda</span>
                    </a>
                </li>     

                <?php if ($_SESSION['Admin']) { ?>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="dripicons-archive"></i>
                        <span>Data Master</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="?page=jabatan">Jabatan
                        </a></li> 
                        <li><a href="?page=admin">Admin</a></li>   
                        <li><a href="?page=levels">Level Siswa</a></li>   
                        <li><a href="?page=kelas">Kelas Siswa</a></li>   
                        <li><a href="?page=pegawai">Guru</a></li> 
                    </ul>
                </li> 
                <?php } ?>

                <?php if ($_SESSION['Admin'] ) { ?> 
 
                <li>
                    <a href="?page=wali" class=" waves-effect">
                        <i class="dripicons-user"></i>
                        <span>Wali Siswa</span>
                    </a>
                </li>    
                
                <li>
                    <a href="?page=pendaftaran" class=" waves-effect">
                        <i class="dripicons-calendar"></i>
                        <span>Pendaftaran</span>
                    </a>
                </li>   

                <li>
                    <a href="?page=pendaftaran&aksi=bayar" class=" waves-effect">
                        <i class="dripicons-calendar"></i>
                        <span>Pembayaran</span>
                    </a>
                </li>  
                <?php } ?>

                <?php if ($_SESSION['Guru']) { ?>
                <li>
                    <a href="?page=jadwal" class=" waves-effect">
                        <i class="dripicons-calendar"></i>
                        <span>Jadwal Siswa</span>
                    </a>
                </li>   

                <li>
                    <a href="?page=siswa" class=" waves-effect">
                        <i class="dripicons-user"></i>
                        <span>Siswa</span>
                    </a>
                </li>
                
                <?php } ?>
          

                <?php if ($_SESSION['Admin'] || $_SESSION['Pimpinan']) { ?>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="dripicons-print"></i>
                        <span>Laporan</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">  
                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#pendaftaran">Pendafataran</a></li> 
                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#pembayaran">Pembayaran</a></li> 
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">Kelulusan</a>
                            <ul class="sub-menu mm-collapse" aria-expanded="false">
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#kelulusan">Periode</a></li>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#kelulusan_kelas">Kelas</a></li>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#kelulusan_level">Level</a></li>
                            </ul>
                        </li> 
                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#nilai_siswa">Penilisan Siswa</a></li> 
                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#absen_3bulan">Absensi 3 Bulan</a></li> 
                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#absen_6bulan">Absensi 6 Bulan</a></li> 
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">Penilaian Akhir</a>
                            <ul class="sub-menu mm-collapse" aria-expanded="false">
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#nilai_ganjil">Semester Ganjil</a></li>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#nilai_akhir">Semester Genap</a></li>
                            </ul>
                        </li>  
                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#grafik">Grafik Kelulusan</a></li> 
                    </ul>
                </li> 
                <?php } ?>

            </ul>
        </div>

    </div>
</div> 

