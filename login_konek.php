<?php 

include 'koneksi.php';
session_start();

$nama = $_POST['nama'];
$password = $_POST['password'];

$login    = mysqli_query($koneksi,"SELECT * FROM akunn WHERE nama = '$nama' AND password = '$password'");
$data     = mysqli_fetch_array($login);

if (!empty($data)) {
    $_SESSION['nama'] = $data['nama'];
    $_SESSION['password'] = $data['password'];
    $_SESSION['alamat'] = $data['alamat'];
    $_SESSION['no_hp'] = $data['no_hp'];
    $_SESSION['id_akun'] = $data['id_user'];

    echo "<script>alert('Akun anda terdaftar');</script>";
    echo "<script>window.location ='index.php';</script>";
}else {
    echo "<script>alert('Akun anda tidak terdaftar');</script>";
    echo "<script>window.location ='login.php';</script>";
}

?>