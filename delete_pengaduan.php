<?php
require 'koneksi.php';
$id=$_GET['id_pengaduan'];

$sql=mysql_query("delete from pengaduan where id_pengaduan='$id'");

if ($sql)
{
    ?>
    <script type="text/javascript">
        alert ('Data Berhasil Dihapus');
        window.location='masyarakat.php?url=lihat_pengaduan';
    </script>
<?php
}
?>

