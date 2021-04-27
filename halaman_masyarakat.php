<?php
if (isset($_GET['url']))
{
    $url=$_GET['url'];

    switch($url)
    {
        case 'tulis_pengaduan';
        include 'tulis_pengaduan.php';
        break;

        case 'lihat_pengaduan';
        include 'lihat_pengaduan.php';
        break;

        case 'detail_pengaduan';
        include 'detail_pengaduan.php';
        break;

        case 'lihat_tanggapan';
        include 'lihat_tanggapan.php';
        break;

        case 'edit_masyarakat';
        include 'edit_masyarakat.php';
        break;

        case 'update_masyarakat';
        include 'update_masyarakat.php';
        break;

        case 'delete_pengaduan';
        include 'delete_pengaduan.php';
        break;



    }
}
else
{
    ?>
    Selamat Datang di Aplikasi Pelaporan Pengaduan Masyarakat (APPEM) yang dibuat untuk melaporkan pelanggaaran atau
    penyimpangan kejadian -kejadian yang ada pada masyarakat <br><br>
    Anda login Sebagai : <h2><b> <?php echo $_SESSION['nama'];
 }
 ?>
