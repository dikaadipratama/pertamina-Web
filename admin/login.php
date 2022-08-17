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

if(isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($link, "SELECT * FROM tb_admin WHERE username = '$username'");

    // cek username
    if(mysqli_num_rows($result) === 1 ) {
      
      // cek password
      $row = mysqli_fetch_assoc($result);
      if(password_verify($password, $row["password"])) {

        // buat session
        $_SESSION["login"] = true;

        header("Location: index.php");
        exit;
      }
    }

    $pesan_error = true;
    
}
?>

<!DOCTYPE html>
<html lang="id">
  <head>
    <title>Login</title>
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
            style="background-image: url('../img/logo2.png');"
          >
          </div>

          <!-- tampilkan error jika ada -->
          <?php if (isset($pesan_error)) : ?>
            <p class="error">Username dan/atau Password tidak sesuai</p>
          <?php endif; ?>

          <!-- form -->
          <form class="login100-form validate-form" method="POST" action="">
          <h2 class="login100-form-title-1"> LOGIN ADMIN </h2>
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
            <div class="flex-sb-m w-full p-b-30"></div>
            <div class="container-login100-form-btn">
            <input type="submit" name="login" class="login100-form-btn" value="Login">  
            </div>
            <h4 class="txt1">Belum punya akun?</h4><br>
            <a href="register.php" class="txt2">Registrasi</a>
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
  </body>
</html>
