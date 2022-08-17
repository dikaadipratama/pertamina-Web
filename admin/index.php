<?php
  // periksa apakah user sudah login, cek kehadiran session name 
  // jika tidak ada, redirect ke login.php
  session_start();
  if (!isset($_SESSION["login"])) {
     header("Location: login.php");
     exit;
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Admin | Pertamina</title>

    <!-- Favicon icon -->
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="../img/logo-utama.png"
    />
    <link href="css/style.min.css" rel="stylesheet" />
  </head>
  <body>

    <!-- main wrapper -->
    <div
      id="main-wrapper"
      data-layout="vertical"
      data-navbarbg="skin5"
      data-sidebartype="full"
      data-sidebar-position="absolute"
      data-header-position="absolute"
      data-boxed-layout="full"
    >
      <!-- topbar header -->
      <header class="topbar" data-navbarbg="skin5">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
          <div class="navbar-header" data-logobg="skin5">

            <!-- logo navbar -->
            <a class="navbar-brand" href="index.php">
              <img
                src="../img/logo-utama.png"
                alt="homepage"
                class="light-logo"
                style="width: 30px; height: 23px"
              />

              <!-- Logo text -->
              <span class="logo-text">
                <p style="margin-bottom: 2px; margin-left: 7px;font-size:16px">
                  Admin | Pertamina
                </p>
              </span>
            </a>
          </div>

          <div
            class="navbar-collapse collapse"
            id="navbarSupportedContent"
            data-navbarbg="skin5"
          >
            <!-- navbar nav -->
            <ul class="navbar-nav float-start me-auto"></ul>
            <!-- navbar nav -->
            <ul class="navbar-nav float-end">
              <li class="nav-item dropdown">
                <a href="logout.php" class="dropdown-item">
                  <i class="me-1 ms-1"></i> Logout
                </a>
              </li>
            </ul>
          </div>
        </nav>
      </header>

      <!-- left sidebar -->
      <aside class="left-sidebar" data-sidebarbg="skin5">
        <div class="scroll-sidebar">
          <nav class="sidebar-nav">
            <ul id="sidebarnav" class="pt-4">
              <li class="sidebar-item">
                <a href="index.php" class="sidebar-link"
                  ><i class="mdi mdi-view-dashboard"></i
                  ><span class="hide-menu">Dashboard</span></a
                >
              </li>
              <li class="sidebar-item">
                <a href="form-wizard.php" class="sidebar-link"
                  ><i class="mdi mdi-note-plus"></i
                  ><span class="hide-menu">Form Penambahan Konten</span></a
                >
              </li>
            </ul>
          </nav>
        </div>
      </aside>

      <!-- page wrapper -->
      <div class="page-wrapper">
        <div class="page-breadcrumb">
          <div class="row">
            <div class="d-flex align-items-center">
              <h4 class="page-title">Dashboard</h4>
            </div>
          </div>
        </div>

        <!-- container fluid -->
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title mb-0">Konten Terbaru</h4>
                </div>
                <div class="comment-widgets scrollable">
                  <?php
                  // Include config file
                  require_once "config.php";

                  // Attempt select query execution
                  $sql = "SELECT * FROM tb_konten";
                  if($result = mysqli_query($link, $sql)){
                      if(mysqli_num_rows($result) > 0){
                          echo "<table class='table table-bordered table-striped'>";
                              echo "<thead>";
                                  echo "<tr>";
                                      echo "<th style='width: 5%'>ID</th>";
                                      echo "<th>JUDUL KONTEN</th>";
                                      echo "<th>WAKTU UPLOAD</th>";
                                      echo "<th>GAMBAR</th>";
                                      echo "<th>AKSI</th>";
                                  echo "</tr>";
                              echo "</thead>";
                              echo "<tbody>";
                              while($row = mysqli_fetch_array($result)){
                                  echo "<tr>";
                                      echo "<td>" . $row['id'] . "</td>";
                                      echo "<td>" . $row['judul_konten'] . "</td>";
                                      echo "<td>" . $row['waktu_upload'] . "</td>";
                                      echo "<td>" . $row['gambar'] . "</td>";
                                      echo "<td>";
                                          echo "<a class='btn btn-danger' href='../delete.php?id=". $row['id'] ."' title='Delete Record' data-toggle='tooltip'>Hapus</a>";
                                      echo "</td>";
                                  echo "</tr>";
                              }
                              echo "</tbody>";
                          echo "</table>";
                          // Free result set
                          mysqli_free_result($result);
                      } else{
                          echo "<p class='lead'><em>No records were found.</em></p>";
                      }
                  } else{
                      echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                  }

                  // Close connection
                  mysqli_close($link);
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- footer -->
        <footer class="footer text-center">
          All Rights Reserved. Designed and Developed by
          <a href="#">Dika Adi Pratama & Puput Dwi Mandiri</a>.
        </footer>
      </div>
    </div>
    
    <!-- JS -->
    <script src="jquery/jquery.min.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
  </body>
</html>
