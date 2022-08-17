<?php
// periksa apakah user sudah login, cek kehadiran session name 
// jika tidak ada, redirect ke index.php
session_start();
  if (isset($_SESSION["login"])) {
     header("Location: index.php");
     exit;
  }

// buat koneksi ke mysql dari file koneksi.php
require("../koneksi.php");


if(isset($_POST["register"])) {
    if(registrasi($_POST) > 0 ) {
        echo "<script>
            alert('User baru telah berhasil ditambahkan!');
        </script>";
    } else {
        echo mysqli_error($link);
    }
}

function registrasi($data) {
    global $link;
  
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($link, $data["password"]);
    $password2 = mysqli_real_escape_string($link, $data["password2"]);
  
    // cek username dobel
    $result = mysqli_query($link, "SELECT username FROM tb_admin WHERE username = '$username'");

    if(mysqli_fetch_assoc($result)) {
        echo "<script>
            alert('Username sudah terdaftar')
        </script>";

        return false;
    }

    
    // cek konfirmasi password
    if($password !== $password2) {
      echo "<script>
        alert('konfirmasi password tidak sesuai!');
      </script>";
      return false;
    }
  
    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);
    // var_dump($password); die;
  
    // menambahkan user baru ke database
    mysqli_query($link, "INSERT INTO tb_admin VALUES ('', '$username', '$password')");
  
    return mysqli_affected_rows($link);
  }

?>

<!DOCTYPE html>
<html lang="id">
  <head>
    <title>Registrasi | Admin</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/png" href="../img/logo-utama.png" />
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="../css/util.css" />
    <link rel="stylesheet" type="text/css" href="../css/login.css" />

  </head>
  <body>
    <div class="limiter">
      <div class="container-login100">
        <div class="wrap-login100">
          <div
            class="login100-form-title"
            style="background-image: url('../img/logo2.png')"
          >
          </div>

          <!-- form -->
          <form class="login100-form validate-form" method="POST" action="">
          <h2 class="login100-form-title-1"> Registrasi </h2>
            <!-- username -->
            <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
              <label for="username" class="label-input100">Username :</label>              
              <input
                class="input100"
                type="text"
                name="username"
                id="username"
                placeholder="Enter username"
              />
              <span class="focus-input100"></span>
            </div>
            <!-- password -->
            <div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
              <label for="password" class="label-input100">Password : </label>              
              <input
                class="input100"
                type="password"
                name="password"
                id="password"
                placeholder="Enter password"
              />
              <span class="focus-input100"></span>
              <div id="toggle" onclick="showHide();"></div>
            </div>
            <!-- konfirmasi password -->
            <div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
              <label for="password2" class="label-input100">Konfirmasi Password : </label>              
              <input
                class="input100"
                type="password"
                name="password2"
                id="password2"
                placeholder="Enter konfirmasi password"
              />
              <span class="focus-input100"></span>
              <div id="toggle2" onclick="showHide2();"></div>
            </div>
            <div class="flex-sb-m w-full p-b-30"></div>
            <div class="container-login100-form-btn">
            <input type="submit" name="register" class="login100-form-btn" value="Registrasi">
            <h4 class="txt1">Sudah punya akun?</h4><br>
            <a href="login.php" class="txtlogin">Login</a>
            </div>
          </form>
        </div>
      </div>
    </div>

    <script type="text/javascript">
      const password = document.getElementById("password");
      const toggle = document.getElementById("toggle");

      function showHide() {
        if (password.type === "password") {
          password.setAttribute("type", "text");
          toggle.classList.add("hide");
        } else {
          password.setAttribute("type", "password");
          toggle.classList.remove("hide");
        }
      }
    </script>
    <!-- password 2 -->
    <script type="text/javascript">
      const password2 = document.getElementById("password2");
      const toggle2 = document.getElementById("toggle2");

      function showHide2() {
        if (password2.type === "password2") {
          password2.setAttribute("type", "text");
          toggle2.classList.add("hide2");
        } else {
          password2.setAttribute("type", "password2");
          toggle2.classList.remove("hide2");
        }
      }
    </script>
  </body>
</html>
