<?php
// mengaktifkan session php
session_start();

//menghubungkan dengan koneksi
include 'config.php';

//menangkap data yang dikirim dari from
$username = $_POST['username'];
$password = $_POST['password'];

//menyeleksi data admindengan usurname dan password yang sesui 
$data = mysqli_query($db,"select * from admin where username= '$username' and password= '$password'");

//menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0){
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:home.php");
}else{
    header("location:index.php?pesan=gagal");
}
?>