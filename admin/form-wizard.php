<?php
// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$judul_konten = $waktu_upload = $gambar = "";
$judul_konten_err = $waktu_upload_err = $gambar_err = "";
// $pesan_error = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validasi judul konten
    $input_judul_konten = trim($_POST["judul_konten"]);
    if(empty($input_judul_konten)){
        $judul_konten_err = "Tolong masukan Judul Konten.";
    } else{
        $judul_konten = $input_judul_konten;
    }

    // Validasi waktu upload
    $input_waktu_upload = trim($_POST["waktu_upload"]);
    if(empty($input_waktu_upload)){
        $waktu_upload_err = "Tolong masukan waktu upload.";
    }
    else{
        $waktu_upload = $input_waktu_upload;
    }

    // Validasi gambar
    $input_gambar = trim($_POST["gambar"]);
    if(empty($input_gambar)){
        $gambar_err = "Tolong masukan gambar.";
    }
    else{
        $gambar = $input_gambar;
    }

    // Check input errors before inserting in database
    if(empty($judul_konten_err) && empty($waktu_upload_err) && empty($gambar_err)){
        // Prepare an insert statement
        $query = "INSERT INTO tb_konten(judul_konten,waktu_upload,gambar) VALUES ('{$judul_konten}', '{$waktu_upload}', '{$gambar}' )";

        // Eksekusi untuk menjalankan query ke database
        if ($link->query($query) === TRUE) {
          // Records created successfully. Redirect to landing page
          header("location: index.php");
          exit();
        } else {
          echo "Error: " . $query . "<br>" . $link->error;
        }

        // Close connection
        $link->close();

    }
    else{

    }

    // Close connection
    mysqli_close($link);
}
 

  // Check If form submitted, insert form data into users table.
  if(isset($_POST['Submit'])) {
    $judul_konten = $_POST['judul_konten'];
    $waktu_upload = $_POST['waktu_upload'];
    $gambar = $_POST['gambar'];
    
  // include database connection file
  include_once("config.php");
          
  // Insert user data into table
  $result = mysqli_query($mysqli, "INSERT INTO tb_konten(judul_konten,waktu_upload,gambar) VALUES('$judul_konten','$waktu_upload','$gambar')");
  
  // Show message when user added
  echo "User added successfully. <a href='index.php'>View Users</a>";
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
    <!-- CSS -->
    <link href="css/style.min.css" rel="stylesheet" />
    <link href="css/login.css" rel="stylesheet" />
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
                <a href="logout.php" class="dropdown-item">Logout</a>
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
            <div class="col-12 d-flex no-block align-items-center">
              <h4 class="page-title">Form Penambahan Konten</h4>
            </div>
          </div>
        </div>

        <!-- container -->
        <div class="limiter">
          <div
            class="container-login100"
            style="
              background-image: url('../img/logo-utama.png');
            "
          >
            <div class="wrap-login102 prlb-55">
              <form
                class="validate-form"
                action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
                method="POST"
              >
                <img
                  src="../img/logo2.png"
                  class="img-pt"
                />

                <!-- judul konten -->
                <div
                  class="wrap-input100 validate-input m-b-23"
                  data-validate="Username is required"
                >
                  <span class="label-input100">Judul Konten</span>
                  <input
                    class="input100"
                    type="text"
                    name="judul_konten"
                    id="judul_konten"
                    placeholder="Masukan judul konten"
                  />
                  <span class="focus-input100"></span>
                </div>

                <!-- waktu upload -->
                <div
                  class="wrap-input100 validate-input m-b-23"
                  data-validate="Password is required"
                >
                  <span class="label-input100">Waktu Upload</span>
                  <input
                    class="input100"
                    type="text"
                    name="waktu_upload"
                    id="waktu_upload"
                    placeholder="Masukan waktu upload"
                  />
                </div>

                <!-- gambar -->
                <div
                  class="wrap-input100 validate-input m-b-23"
                  data-validate="Image is required"
                >
                  <span class="label-input100">Upload Gambar</span>
                  <input
                    class="input100"
                    type="file"
                    name="gambar"
                    id="gambar"
                  />
                </div>
                <div class="text-right p-t-8 p-b-31"></div>
                <div class="container-login100-form-btn">
                  <div class="wrap-login100-form-btn">
                    <div class="login100-form-bgbtn"></div>
                    <input
                      class="login100-form-btn input-submit"
                      type="submit"
                      name="Submit"
                      value="Buat Konten"
                    />
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- end container -->

        <!-- footer -->
        <footer class="footer text-center">
          All Rights Reserved. Designed and Developed by
          <a href="https://instagram.com/dhikhapratamaa/">Dika Adi Pratama </a> <a href="https://instagram.com/puputdwim/"> & Puput Dwi Mandiri.</a>
        </footer>
      </div>
    </div>

    <!-- JS -->
    <script src="jquery/jquery.min.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
  </body>
</html>
