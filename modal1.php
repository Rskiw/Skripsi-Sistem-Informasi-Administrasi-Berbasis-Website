 

<div id="pendaftaran" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="page/laporan/pendaftaran.php?nama=<?php echo $admin['nama'] ?>" target="_blank" method="post" enctype="multipart/form-r">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel">Laporan Pendaftaran</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <select name="bulan" class="form-control" required> 
                            <option>Pilih Bulan</option> 
                            <option value='01'>Januari</option>
                            <option value='02'>Februari</option>
                            <option value='03'>Maret</option>
                            <option value='04'>April</option>
                            <option value='05'>Mei</option>
                            <option value='06'>Juni</option>
                            <option value='07'>Juli</option>
                            <option value='08'>Agustus</option>
                            <option value='09'>September</option>
                            <option value='10'>Oktober</option>
                            <option value='11'>November</option>
                            <option value='12'>Desember</option>
                        </select>  
                    </div> <br>
                    <div class="form-group">
                        <select name="tahun" class="form-control" required> 
                            <option>Pilih Tahun</option> 
                            <?php
                            $mulai = date('Y') - 6;
                            for ($i= $mulai;$i<$mulai + 100;$i++){
                                $sel = $i == date('Y') ? ' selected = "selected"' : '';
                                 echo '<option value="'.$i.'"'.$sel.'>'.$i.'</option>';
                            }
                            ?>
                        </select>  
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger waves-effect" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Cetak Laporan</button> 
                </div>
            </div><!-- /.modal-content -->
        </form>
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="pembayaran" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="page/laporan/pembayaran.php?nama=<?php echo $admin['nama'] ?>" target="_blank" method="post" enctype="multipart/form-r">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel">Laporan Pembayaran</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <select name="bulan" class="form-control" required> 
                            <option>Pilih Bulan</option> 
                            <option value='01'>Januari</option>
                            <option value='02'>Februari</option>
                            <option value='03'>Maret</option>
                            <option value='04'>April</option>
                            <option value='05'>Mei</option>
                            <option value='06'>Juni</option>
                            <option value='07'>Juli</option>
                            <option value='08'>Agustus</option>
                            <option value='09'>September</option>
                            <option value='10'>Oktober</option>
                            <option value='11'>November</option>
                            <option value='12'>Desember</option>
                        </select>  
                    </div> <br>
                    <div class="form-group">
                        <select name="tahun" class="form-control" required> 
                            <option>Pilih Tahun</option> 
                            <?php
                            $mulai = date('Y') - 6;
                            for ($i= $mulai;$i<$mulai + 100;$i++){
                                $sel = $i == date('Y') ? ' selected = "selected"' : '';
                                 echo '<option value="'.$i.'"'.$sel.'>'.$i.'</option>';
                            }
                            ?>
                        </select>  
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger waves-effect" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Cetak Laporan</button> 
                </div>
            </div><!-- /.modal-content -->
        </form>
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="kelulusan" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="page/laporan/kelulusan.php?nama=<?php echo $admin['nama'] ?>" target="_blank" method="post" enctype="multipart/form-r">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel">Laporan Kelulusan Pendaftaran</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <select name="bulan" class="form-control" required> 
                            <option>Pilih Bulan</option> 
                            <option value='01'>Januari</option>
                            <option value='02'>Februari</option>
                            <option value='03'>Maret</option>
                            <option value='04'>April</option>
                            <option value='05'>Mei</option>
                            <option value='06'>Juni</option>
                            <option value='07'>Juli</option>
                            <option value='08'>Agustus</option>
                            <option value='09'>September</option>
                            <option value='10'>Oktober</option>
                            <option value='11'>November</option>
                            <option value='12'>Desember</option>
                        </select>  
                    </div> <br>
                    <div class="form-group">
                        <select name="tahun" class="form-control" required> 
                            <option>Pilih Tahun</option> 
                            <?php
                            $mulai = date('Y') - 6;
                            for ($i= $mulai;$i<$mulai + 100;$i++){
                                $sel = $i == date('Y') ? ' selected = "selected"' : '';
                                 echo '<option value="'.$i.'"'.$sel.'>'.$i.'</option>';
                            }
                            ?>
                        </select>  
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger waves-effect" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Cetak Laporan</button> 
                </div>
            </div><!-- /.modal-content -->
        </form>
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="kelulusan_kelas" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="page/laporan/kelulusan_kelas.php?nama=<?php echo $admin['nama'] ?>" target="_blank" method="post" enctype="multipart/form-r">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel">Laporan Kelulusan Pendaftaran <br><small>Berdasarkan Kelas</small></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <select name="kelas" class="form-control" required> 
                            <option>Pilih Kelas</option> 
                            <?php 
                            $sql=mysqli_query($con, "SELECT * FROM kelas ");
                            while ($pang=mysqli_fetch_array($sql))
                            {
                                echo "<option value='$pang[kelas]'>$pang[kelas]</option>";
                            }
                            ?>
                        </select>  
                    </div> 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger waves-effect" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Cetak Laporan</button> 
                </div>
            </div><!-- /.modal-content -->
        </form>
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="kelulusan_level" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="page/laporan/kelulusan_level.php?nama=<?php echo $admin['nama'] ?>" target="_blank" method="post" enctype="multipart/form-r">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel">Laporan Kelulusan Pendaftaran <br><small>Berdasarkan Level</small></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <select name="levels" class="form-control" required> 
                            <option>Pilih Level</option> 
                            <?php 
                            $sql=mysqli_query($con, "SELECT * FROM levels ");
                            while ($pang=mysqli_fetch_array($sql))
                            {
                                echo "<option value='$pang[levels]'>$pang[levels]</option>";
                            }
                            ?>
                        </select>  
                    </div> 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger waves-effect" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Cetak Laporan</button> 
                </div>
            </div><!-- /.modal-content -->
        </form>
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div id="nilai_siswa" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="page/laporan/nilai_siswa.php?nama=<?php echo $admin['nama'] ?>" target="_blank" method="post" enctype="multipart/form-r">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel">Laporan Penilaian Siswa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <select name="nama_siswa" class="form-control" required> 
                            <option>Pilih Siswa</option> 
                            <?php 
                            $sql=mysqli_query($con, "SELECT * FROM pendaftaran NATURAL JOIN pembayaran NATURAL JOIN wali NATURAL JOIN siswa NATURAL JOIN kelas NATURAL JOIN levels WHERE status_pendaftaran='Lunas' ");
                            while ($pang=mysqli_fetch_array($sql))
                            {
                                echo "<option value='$pang[nama_siswa]'>$pang[nama_siswa]</option>";
                            }
                            ?>
                        </select>  
                    </div> <br>
                    <div class="form-group">
                        <select name="bulan" class="form-control" required> 
                            <option>Pilih Bulan</option> 
                            <option value='01'>Januari</option>
                            <option value='02'>Februari</option>
                            <option value='03'>Maret</option>
                            <option value='04'>April</option>
                            <option value='05'>Mei</option>
                            <option value='06'>Juni</option>
                            <option value='07'>Juli</option>
                            <option value='08'>Agustus</option>
                            <option value='09'>September</option>
                            <option value='10'>Oktober</option>
                            <option value='11'>November</option>
                            <option value='12'>Desember</option>
                        </select>  
                    </div> <br>
                    <div class="form-group">
                        <select name="tahun" class="form-control" required> 
                            <option>Pilih Tahun</option> 
                            <?php
                            $mulai = date('Y') - 6;
                            for ($i= $mulai;$i<$mulai + 100;$i++){
                                $sel = $i == date('Y') ? ' selected = "selected"' : '';
                                 echo '<option value="'.$i.'"'.$sel.'>'.$i.'</option>';
                            }
                            ?>
                        </select>  
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger waves-effect" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Cetak Laporan</button> 
                </div>
            </div><!-- /.modal-content -->
        </form>
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="absen_3bulan" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="page/laporan/absen_3bulan.php?nama=<?php echo $admin['nama'] ?>" target="_blank" method="post" enctype="multipart/form-r">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel">Laporan Absensi 3 Bulan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row mb-2"> 
                        <div class="col-sm-12">
                            <input type="date" class="form-control" name="tgl_awal" required> 
                        </div>
                    </div>  
                    <div class="row mb-2"> 
                        <div class="col-sm-12">
                            <input type="date" class="form-control" name="tgl_akhir" required> 
                        </div>
                    </div>   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger waves-effect" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Cetak Laporan</button> 
                </div>
            </div><!-- /.modal-content -->
        </form>
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="absen_6bulan" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="page/laporan/absen_6bulan.php?nama=<?php echo $admin['nama'] ?>" target="_blank" method="post" enctype="multipart/form-r">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel">Laporan Absensi 6 Bulan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row mb-2"> 
                        <div class="col-sm-12">
                            <input type="date" class="form-control" name="tgl_awal" required> 
                        </div>
                    </div>  
                    <div class="row mb-2"> 
                        <div class="col-sm-12">
                            <input type="date" class="form-control" name="tgl_akhir" required> 
                        </div>
                    </div>   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger waves-effect" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Cetak Laporan</button> 
                </div>
            </div><!-- /.modal-content -->
        </form>
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="nilai_akhir" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="page/laporan/nilai_akhir.php?nama=<?php echo $admin['nama'] ?>" target="_blank" method="post" enctype="multipart/form-r">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel">Laporan Penilaian Akhir Siswa <br> <small>Semester Genap</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <select name="tahun" class="form-control" required> 
                            <option>Pilih Tahun</option> 
                            <?php
                            $mulai = date('Y') - 6;
                            for ($i= $mulai;$i<$mulai + 100;$i++){
                                $sel = $i == date('Y') ? ' selected = "selected"' : '';
                                 echo '<option value="'.$i.'"'.$sel.'>'.$i.'</option>';
                            }
                            ?>
                        </select>  
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger waves-effect" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Cetak Laporan</button> 
                </div>
            </div><!-- /.modal-content -->
        </form>
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="nilai_ganjil" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="page/laporan/nilai_ganjil.php?nama=<?php echo $admin['nama'] ?>" target="_blank" method="post" enctype="multipart/form-r">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel">Laporan Penilaian Akhir Siswa <br> <small>Semester Ganjil</small></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <select name="tahun" class="form-control" required> 
                            <option>Pilih Tahun</option> 
                            <?php
                            $mulai = date('Y') - 6;
                            for ($i= $mulai;$i<$mulai + 100;$i++){
                                $sel = $i == date('Y') ? ' selected = "selected"' : '';
                                 echo '<option value="'.$i.'"'.$sel.'>'.$i.'</option>';
                            }
                            ?>
                        </select>  
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger waves-effect" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Cetak Laporan</button> 
                </div>
            </div><!-- /.modal-content -->
        </form>
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="grafik" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="page/laporan/grafik.php?nama=<?php echo $admin['nama'] ?>" target="_blank" method="post" enctype="multipart/form-r">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel">Laporan Kelulusan Pendafatran</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        
                    </button>
                </div>
                <div class="modal-body"> 
                    <div class="form-group">
                        <select name="tahun" class="form-control" required> 
                            <option>Pilih Tahun</option> 
                            <?php
                            $mulai = date('Y') - 6;
                            for ($i= $mulai;$i<$mulai + 100;$i++){
                                $sel = $i == date('Y') ? ' selected = "selected"' : '';
                                 echo '<option value="'.$i.'"'.$sel.'>'.$i.'</option>';
                            }
                            ?>
                        </select>  
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger waves-effect" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Cetak Laporan</button> 
                </div>
            </div><!-- /.modal-content -->
        </form>
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->