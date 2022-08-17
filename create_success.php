<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pendaftaran Karyawan Baru Pertamina</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/styles.css">
    <script src="jquery/jquery-3.4.1.js"></script>
</head>
<body>
  <div class="container-login100">
    <div class="wrap-login100">
      <div class="login100-form-title"></div>
      <h5 class="login100-form-title-1">Form Pendaftaran Karyawan Baru Pertamina</h5>
        <div class="container p-3 my-3">
        <?php
        //Include file koneksi, untuk koneksikan ke database
        include "koneksi.php";
      
        //Fungsi untuk mencegah inputan karakter yang tidak sesuai
        function input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }

        //Cek apakah ada kiriman form dari method post
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $nama            =input($_POST["nama"]);
          $nik             =input($_POST["nik"]);
          $tempat_lahir    =input($_POST["tempat_lahir"]);
          $tgl_lahir       =input($_POST["tgl_lahir"]);
          $jk              =input($_POST["jk"]);
          $kewarganegaraan =input($_POST["kewarganegaraan"]);
          $agama           =input($_POST["agama"]);
          $nama_ibu        =input($_POST["nama_ibu"]);
          $no_telp_ortu    =input($_POST["no_telp_ortu"]);
          $no_rek          =input($_POST["no_rek"]);
          $nb              =input($_POST["nb"]);
          $email           =input($_POST["email"]);
          $no_telp         =input($_POST["no_telp"]);
          $npwp            =input($_POST["npwp"]);
          $sp              =input($_POST["sp"]);
          $alamat          =input($_POST["alamat"]);
          $kode_pos        =input($_POST["kode_pos"]);
          $provinsi        =input($_POST["provinsi"]);
          $kabupaten       =input($_POST["kabupaten"]);
          $kecamatan       =input($_POST["kecamatan"]);
          $sd              =input($_POST["sd"]);
          $nilai_sd        =input($_POST["nilai_sd"]);
          $smp             =input($_POST["smp"]);
          $nilai_smp       =input($_POST["nilai_smp"]);
          $sma             =input($_POST["sma"]);
          $nilai_sma       =input($_POST["nilai_sma"]);
          $posisi1         =input($_POST["posisi1"]);
          $posisi2         =input($_POST["posisi2"]);

          //Query input menginput data kedalam tabel data karyawan baru
          $sql="INSERT INTO data_karyawan_baru(nama,nik,tempat_lahir,tgl_lahir,jk,kewarganegaraan,agama,nama_ibu,no_telp_ortu,no_rek,nb,email,no_telp,npwp,sp,alamat,kode_pos,provinsi,kabupaten,kecamatan,sd,nilai_sd,smp,nilai_smp,sma,nilai_sma,posisi1,posisi2) VALUES
          ('$nama','$nik','$tempat_lahir','$tgl_lahir','$jk','$kewarganegaraan','$agama','$nama_ibu','$no_telp_ortu','$no_rek','$nb','$email','$no_telp','$npwp','$sp','$alamat','$kode_pos','$provinsi','$kabupaten','$kecamatan','$sd','$nilai_sd','$smp','$nilai_smp','$sma','$nilai_sma','$posisi1','$posisi2')";

          //Mengeksekusi/menjalankan query diatas
          $hasil=mysqli_query($link,$sql);

          //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
          if ($hasil) { 
              echo "<div class='alert alert-success'> Formulir telah dikirimkan! Selamat <b> $nama! </b>, Anda telah berhasil mendaftar. Pengecekan membutuhkan waktu 3-7 hari, mohon menunggu balasan email dari kami. Terima kasih. </div>";
          }
          else {
              echo "<div class='alert alert-danger'> Pendaftaraan Gagal, pastikan semua data telah terisi dengan benar.</div>";
          }
        }
        ?>
        <a href="index.php" class="btn btn-back pull-right">Kembali ke Halaman Utama</a>
      </div>
    </div>
  </div>
</body>
</html>
