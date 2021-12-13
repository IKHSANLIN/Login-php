
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Belajar Membuat Login dan register</title>
  </head>
  <body>
  <?php 
        if(isset($_GET['pesan'])){
            if($_GET['pesan'] == "gagal"){
                echo "Login gagal! username dan password salah!";
            }
            else if($_GET['pesan'] == "logout"){
                echo "Anda telah berhasil logout";
            }
            else if($_GET['pesan'] == "belum_login"){
                echo "Anda harus login untuk mengakses halaman admin";
            }
        }
    ?>
    <center>
      <h1>Mari Belajar Membuat WEBSITE</h1>
    </center>
<table>
<center>
      <form action="login.php" method="post">
      <tr>
      <td><input type="text" name="username" placeholder="username"></td>
      </tr>
      <tr>
      <td><input type="password" name="password" placeholder="password"></td>
      </tr>
      <tr>
        <td><input type="submit" name="login" value="Login">
        <input type="reset" name="batal" value="Batal"></td>
      </tr>
      <tr>
      <td><hr/>Anda belum mempunyai akun ?? daftar <a href="register.php">Disini..!</a></td>
      </tr>

      </form>
</center>
  </table>
  </body>
</html>