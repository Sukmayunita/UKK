<?php
require 'koneksi.php';
$user=$_POST['user_name'];
$pass=$_POST['password'];
$sql=mysql_query("select * from masyarakat where user_name='$user' and password='$pass' ");
$sql1=mysql_query("select * from petugas where user_name='$user' and password='$pass' ");
$cek=mysql_num_rows($sql);
$cek1=mysql_num_rows($sql1);

        if ($cek>0)
        {
            $data=mysql_fetch_array($sql);
            session_start();
            $_SESSION['nama']=$user;
            $_SESSION['user_name']=$data['nama'];
            $_SESSION['nik']=$data['nik'];
            $_SESSION['password']=$data['password'];
            $_SESSION['telp']=$data['telp'];

            header('location:masyarakat.php');
        } 
        else if ($cek1>0)
        {
            $data=mysql_fetch_array($sql1);
            if ($data['level']=="admin")
            {
            session_start();
            $_SESSION['id_petugas']=$data['id_petugas'];
            $_SESSION['user']=$user;
            $_SESSION['nama']=$data['nama_petugas'];
            $_SESSION['level']=$data['level'];

            header('location:admin/admin.php');
            } 
            if ($data['level']=="petugas")
            {
            session_start();
            $_SESSION['id_petugas']=$data['id_petugas'];
            $_SESSION['user']=$user;
            $_SESSION['nama']=$data['nama_petugas'];
            $_SESSION['level']=$data['level'];

            header('location:petugas/petugas.php');
            } 
        }

        else if($cek1>0)
        {
            $data=mysql_fetch_array($sql1);
            if ($data['level']=="petugas")
            {
            session_start();
            $_SESSION['id_petugas']=$data['id_petugas'];
            $_SESSION['user']=$user;
            $_SESSION['nama']=$data['nama_petugas'];
            $_SESSION['level']=$data['level'];

            header('location:petugas/petugas.php');
            } 
        }    else{
            ?>
                <script type="text/javascript">
                alert('Username atau Password Tidak Ditemukan');
                window.location="index.php";
                </script>
            <?php
        }
        ?>