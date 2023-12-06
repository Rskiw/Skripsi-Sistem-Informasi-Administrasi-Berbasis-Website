<div class="modal fade bs-example-modal-xl<?php echo $data['nik']?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myLargeModalLabel">Detail Data Karyawan <?php echo $data['nik']; ?> - <?php echo $data['nama']; ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-striped table-bordered table-middle">
                    <tr>
                        <td align="left"><b>NIK</td>
                        <td align="left"> <?php echo $data['nik']; ?></td>  
                        <td rowspan="7" style="vertical-align: middle;">
                            <div class="text-center welcome-user-thumb"> 
                                <img src="assets/gambar/karyawan/<?php echo $data['foto'] ?>" class="rounded-circle avatar-xl" width="180px" height="200px" data-holder-rendered="true">
                            </div>
                        </td>                                  
                    </tr>  
                    <tr>
                        <td width="250" align="left"><b>Nama</td>
                        <td align="left"> <?php echo $data['nama']; ?></td>
                    </tr>
                    <tr>
                        <td width="250" align="left"><b>Jenis Kelamin</td>
                        <td align="left"> <?php echo $data['jk']; ?></td>
                    </tr>
                    <tr>
                        <td width="250" align="left"><b>Tempat, Tanggal Lahir</td>
                        <td align="left"> <?php echo $data['tmp_lahir']; ?>, <?php echo $tgl1; ?></td>
                    </tr>
                    <tr>
                        <td width="250" align="left"><b>Nomor HP</td>
                        <td align="left"> <?php echo $data['nohp']; ?></td>
                    </tr>
                    <tr>
                        <td width="250" align="left"><b>Email</td>
                        <td align="left"> <?php echo $data['email']; ?></td>
                    </tr>
                    <tr>
                        <td width="250" align="left"><b>Alamat</td>
                        <td align="left"> <?php echo $data['alamat']; ?></td>
                    </tr>
                </table> 
            </div>
        </div>
    </div>
</div>

