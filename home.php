<div class="row">
    <div class="col-xl-4 col-md-6">
        <div class="card mini-stats"> 
            <br>
            <div class="mx-3">
                <div class="card mb-0 border p-3 mini-stats-desc">
                    <div class="d-flex">
                        <?php  
                        $sql = mysqli_query($con,"SELECT * FROM kelas"); 
                        $jum = mysqli_num_rows($sql);
                        ?> 
                        <h6 class="mt-0 mb-3">Jumlah Kelas</h6>
                        <h5 class="ms-auto mt-0"><?php echo $jum ?></h5>
                    </div> 
                </div>
            </div>
            <br>
        </div>
    </div>
    <div class="col-xl-4 col-md-6">
        <div class="card mini-stats"> 
            <br>
            <div class="mx-3">
                <div class="card mb-0 border p-3 mini-stats-desc">
                    <div class="d-flex">
                        <?php  
                        $sql = mysqli_query($con,"SELECT * FROM pegawai NATURAL JOIN jabatan WHERE jabatan='guru'"); 
                        $jum = mysqli_num_rows($sql);
                        ?> 
                        <h6 class="mt-0 mb-3">Jumlah Guru</h6>
                        <h5 class="ms-auto mt-0"><?php echo $jum ?></h5>
                    </div>
                </div>
            </div>
            <br>
        </div>
    </div>
    <div class="col-xl-4 col-md-6">
        <div class="card mini-stats"> 
            <br>
            <div class="mx-3">
                <div class="card mb-0 border p-3 mini-stats-desc">
                    <div class="d-flex">
                        <?php  
                        $sql = mysqli_query($con,"SELECT * FROM pendaftaran NATURAL JOIN wali NATURAL JOIN siswa NATURAL JOIN kelas NATURAL JOIN levels WHERE status_pendaftaran='Pending'"); 
                        $jum = mysqli_num_rows($sql);
                        ?> 
                        <h6 class="mt-0 mb-3">Belum Pelunasan</h6>
                        <h5 class="ms-auto mt-0"><?php echo $jum ?></h5>
                    </div>
                </div>
            </div>
            <br>
        </div>
    </div> 
</div>


<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Codero Banjarmasin</h4>
                <p class="card-title-desc">Jl. Kebun Bunga, Kec. Banjarmasin Timur, Kota Banjarmasin</p>

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block">Home</span>    
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                            <span class="d-none d-sm-block">Lokasi</span>    
                        </a>
                    </li> 
                </ul>

                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="home" role="tabpanel">
                        <p class="mb-0">
                            <img src="assets/dero.jpg" width="100%" alt="">
                        </p>
                    </div>
                    <div class="tab-pane" id="profile" role="tabpanel">
                        <p class="mb-0">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.08695744144!2d114.60749627497192!3d-3.3286922966460977!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de42362e131f1cf%3A0xd4d31079ddb76492!2sCODERO%20BANJARMASIN!5e0!3m2!1sid!2sid!4v1691907078092!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </p>
                    </div> 
                </div>

            </div>
        </div>
    </div>

    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Garafik Kelulusan Pendaftaran</h4>

                <br>

                 <canvas id="myChart"></canvas>

            </div>
        </div>
    </div>
</div>