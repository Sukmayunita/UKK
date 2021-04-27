<?php
require '../koneksi.php';
$nama=$_POST['nama_petugas'];
$user=$_POST['user_name'];
$pass=$_POST['password'];
$telp=$_POST['telp'];
$level=$_POST['level'];

$sql=mysql_query("insert into petugas(nama_petugas,user_name,password,telp,level) values('$nama','$user','$pass','$telp','$level')");
 
if ($sql)
{
    ?>
    <script type="text/javascript">
    alert ('Data Berasil Disimpan');
    window.location="admin.php?url=lihat_petugas";
    </script>
    <?php
} 
?>