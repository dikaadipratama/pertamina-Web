<?php
  session_start();
  // hapus session
  unset($_SESSION["login"]);

  // redirect ke halaman login.php
  header("Location: login.php");
?>