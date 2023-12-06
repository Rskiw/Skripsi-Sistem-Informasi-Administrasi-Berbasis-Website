<?php
$id_admin = $_GET['id_admin'];

    include "inc/koneksi.php";
    if(isset($_GET['id_admin'])){

    $sql_ubah = "UPDATE naik_pangkat SET status_np='Selesai' WHERE id_admin='".$_GET['id_admin']."'";
    $query_ubah = mysqli_query($con, $sql_ubah);
    mysqli_close($con);

    if ($query_ubah) {
    
    ?>

    <script type="text/javascript">
        alert("Pelanggan Terverifikasi");
        window.location.href="index.php";
    </script>

<?php } } ?> 


<?php 
                        if (isset($_POST['ubah']))
                        {
                            $jenis   = $_POST['jenis']; 
                            {
                                $con->query("UPDATE jenis SET jenis='$jenis' WHERE id_jenis='$_GET[id_jenis]'"); 
                            } 
                            echo "<script>alert('Data berhasil diubah');</script>";
                            echo "<script>location='?page=jenis';</script>";
                        }
                        ?>  