<?php 
    session_start();
    include 'koneksi.php';
 
    // menangkap data yang dikirim dari form login
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = md5($_POST['password']);
 
    // menyeleksi data pada tabel admin dengan username dan password yang sesuai
    $query ="SELECT*FROM user WHERE id='$_GET[id]";
    $data = mysqli_query($conn, "SELECT * FROM user WHERE username='$username' and password='$password'");

    // menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($data);
 
    if($cek > 0){
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        header("location:dasboard.php");
    }else{
        header("location:index.php?pesan=gagal");
    }
?>