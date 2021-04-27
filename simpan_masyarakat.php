<?php
require 'koneksi.php';
$nik=$_POST['nik'];
$nama=$_POST['nama'];
$user=$_POST['user_name'];
$pass=$_POST['password'];
$telp=$_POST['telp'];

$sql=mysql_query("insert into masyarakat values('$nik','$nama','$user','$pass','$telp')");
if ($sql)
{
    ?>
    <script type="text/javascript">
     alert('Data Berhasil Disimpan, Silahkan Gunakan Untuk Login');
     window.location="index.php";
    </script>
<?php
}else{
?>
    <script type="text/javascript">
     alert('Nik Sudah Terdaftar');
     window.location="index.php";
    </script>
<?php
}
?>