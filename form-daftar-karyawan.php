<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Pendaftaran Karyawan Baru PT Pertamina</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- CSS -->
    <link rel="stylesheet" href="css/styles.css" />
    <script src="js/jquery-3.4.1.js"></script>
  </head>
  <body>
    <div class="container-login100">
      <div class="wrap-login100">
        <div class="login100-form-title"></div>
        <h5 class="login100-form-title-1">
          Form Pendaftaran Karyawan Baru PT. Pertamina
        </h5>
        <div class="container p-3 my-3">
          <form id="form" method="POST" action="create_success.php">
            <div class="alert alert-primary">
              <h6 class="text-center bold">Data Diri</h6>
            </div>
            <div class="row">
              <!-- nama lengkap -->
              <div class="col-sm-7">
                <div class="form-group wrap-input100 m-b-26">
                  <label>Nama Lengkap Sesuai di KTP :</label>
                  <input
                    type="text"
                    name="nama"
                    class="input100"
                    placeholder="Masukan Nama Lengkap"
                    required
                  />
                  <span class="focus-input100"></span>
                </div>
              </div>
              <!-- nik -->
              <div class="col-sm-5">
                <div class="form-group wrap-input100 m-b-26">
                  <label>Nomor Identitas (NIK) :</label>
                  <input
                    type="text"
                    name="nik"
                    class="input100"
                    placeholder="Masukan Nomor NIK"
                    required
                  />
                  <span class="focus-input100"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <!-- tempat lahir -->
              <div class="col-sm-4">
                <div class="form-group wrap-input100 m-b-26">
                  <label>Tempat Lahir :</label>
                  <input
                    type="text"
                    name="tempat_lahir"
                    class="input100"
                    placeholder="Masukan Tempat Lahir"
                    required
                  />
                  <span class="focus-input100"></span>
                </div>
              </div>
              <!-- tgl lahir -->
              <div class="col-sm-3">
                <div class="form-group wrap-input100 m-b-26">
                  <label>Tanggal Lahir :</label>
                  <input
                    type="date"
                    name="tgl_lahir"
                    class="input100"
                    required
                  />
                </div>
              </div>
              <!-- jenis kelamin -->
              <div class="col-sm-5">
                <div class="form-group m-b-26">
                  <label>Jenis Kelamin :</label>
                  <select class="form-control" name="jk" id="jk" required>
                    <option>Pilih</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <!-- kewarganegaraan -->
              <div class="col-sm-4">
                <div class="form-group m-b-26">
                  <label>Kewarganegaraan :</label>
                  <select class="form-control" name="kewarganegaraan" required>
                    <option>Pilih</option>
                    <option value="WNI">Warga Negara Indonesia</option>
                    <option value="WNA">Warga Negara Asing</option>
                  </select>
                </div>
              </div>
              <!-- agama -->
              <div class="col-sm-3">
                <div class="form-group m-b-26">
                  <label>Agama :</label>
                  <select class="form-control" name="agama" required>
                    <option>Pilih</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Lainnya">Lainnya</option>
                  </select>
                </div>
              </div>
              <!-- nama ibu kandung -->
              <div class="col-sm-5">
                <div class="form-group wrap-input100 m-b-26">
                  <label>Nama Ibu Kandung :</label>
                  <input
                    type="text"
                    name="nama_ibu"
                    class="input100"
                    placeholder="Masukan Nama Ibu Kandung"
                    required
                  />
                  <span class="focus-input100"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <!-- no telp ortu  -->
              <div class="col-sm-4">
                <div class="form-group wrap-input100 m-b-26">
                  <label>No Telepon Orang Tua :</label>
                  <input
                    type="text"
                    name="no_telp_ortu"
                    class="input100"
                    placeholder="Masukan No Telepon Orang Tua"
                    required
                  />
                  <span class="focus-input100"></span>
                </div>
              </div>
              <!--nomor rekening -->
              <div class="col-sm-3">
                <div class="form-group wrap-input100 m-b-26">
                  <label>Nomor Rekening Bank :</label>
                  <input
                    type="text"
                    name="no_rek"
                    class="input100"
                    placeholder="Masukan Nomor Rekening Bank"
                    required
                  />
                  <span class="focus-input100"></span>
                </div>
              </div>
              <!-- nama Bank -->
              <div class="col-sm-5">
                <div class="form-group m-b-26">
                  <label>Nama Bank :</label>
                  <select class="form-control" name="nb" id="nb" required>
                    <option>Pilih</option>
                    <option value="BCA">BCA</option>
                    <option value="Mandiri">Mandiri</option>
                    <option value="BNI">BNI</option>
                    <option value="BSI">BSI</option>
                    <option value="BRI">BRI</option>
                    <option value="CIMB Niaga">CIMB Niaga</option>
                    <option value="CIMB Niaga Syariah">CIMB Niaga Syariah</option>
                    <option value="BTN">BTN</option>
                    <option value="BTN Syariah">BTN Syariah</option>
                    <option value="Permata Bank">Permata Bank</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <!-- email -->
              <div class="col-sm-4">
                <div class="form-group wrap-input100 m-b-26">
                  <label>Email Pribadi :</label>
                  <input
                    type="email"
                    name="email"
                    class="input100"
                    placeholder="Masukan Email"
                    required
                  />
                  <span class="focus-input100"></span>
                </div>
              </div>
              <!-- no telp -->
              <div class="col-sm-3">
                <div class="form-group wrap-input100 m-b-26">
                  <label>No Telp :</label>
                  <input
                    type="text"
                    name="no_telp"
                    class="input100"
                    placeholder="Masukan No Telp"
                    required
                  />
                  <span class="focus-input100"></span>
                </div>
              </div>
              <!-- npwp -->
              <div class="col-sm-5">
                <div class="form-group wrap-input100 m-b-26">
                  <label>NPWP :</label>
                  <input
                    type="text"
                    name="npwp"
                    class="input100"
                    placeholder="Masukan NPWP"
                    required
                  />
                  <span class="focus-input100"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <!-- Status Pernikahan -->
              <div class="col-sm-4">
                <div class="form-group m-b-26">
                  <label>Status Pernikahan :</label>
                  <select class="form-control" name="sp" id="sp" required>
                  <option>Pilih</option>
                    <option value="Sudah Kawin">Sudah Kawin</option>
                    <option value="Belum Kawin">Belum Kawin</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="alert alert-primary space">
              <h6 class="text-center bold">Data Alamat Asal</h6>
            </div>
            <div class="row">
              <!-- alamat -->
              <div class="col-sm-7">
                <div class="form-group wrap-input100 m-b-26">
                  <label>Alamat Rumah Saat Ini :</label>
                  <textarea
                    class="input100 space-text-area"
                    name="alamat"
                    rows="2"
                    id="alamat"
                    required
                  ></textarea>
                  <span class="focus-input100"></span>
                </div>
              </div>
              <!-- kode pos -->
              <div class="col-sm-3">
                <div class="form-group wrap-input100 m-b-26">
                  <label>Kode Pos :</label>
                  <input
                    type="text"
                    name="kode_pos"
                    class="input100"
                    placeholder="Kode Pos"
                    required
                  />
                  <span class="focus-input100"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <!-- provinsi -->
              <div class="col-sm-4">
                <div class="form-group m-b-26">
                  <label>Provinsi :</label>
                  <select
                    class="form-control"
                    name="provinsi"
                    id="provinsi"
                    required
                  >
                    <?php
                        include "koneksi.php";
                        //Perintah sql untuk menampilkan semua data pada tabel provinsi
                        $sql="select * from provinsi";
                        $hasil=mysqli_query($link,$sql);
                        while ($data = mysqli_fetch_array($hasil)) {
                      ?>
                    <option value="<?php echo $data['id_prov'];?>">
                      <?php echo $data['nama'];?>
                    </option>
                    <?php
                        }
                      ?>
                  </select>
                </div>
              </div>
              <!-- kabupaten -->
              <div class="col-sm-4">
                <div class="form-group m-b-26">
                  <label>Kabupaten :</label>
                  <select
                    class="form-control"
                    name="kabupaten"
                    id="kabupaten"
                    required
                  >
                    <!-- Kabupaten akan diload menggunakan ajax, dan ditampilkan disini -->
                  </select>
                </div>
              </div>
              <!-- kecamatan -->
              <div class="col-sm-4">
                <div class="form-group m-b-26">
                  <label>Kecamatan :</label>
                  <select
                    class="form-control"
                    name="kecamatan"
                    id="kecamatan"
                    required
                  >
                    <!-- Kecamatan akan diload menggunakan ajax, dan ditampilkan disini -->
                  </select>
                </div>
              </div>
            </div>
            <script>
              $("#provinsi").change(function () {
                // variabel dari nilai combo provinsi
                var id_provinsi = $("#provinsi").val();

                // Menggunakan ajax untuk mengirim dan dan menerima data dari server
                $.ajax({
                  type: "POST",
                  dataType: "html",
                  url: "ambil-data.php",
                  data: "provinsi=" + id_provinsi,
                  success: function (data) {
                    $("#kabupaten").html(data);
                  },
                });
              });

              $("#kabupaten").change(function () {
                // variabel dari nilai combo box kabupaten
                var id_kabupaten = $("#kabupaten").val();

                // Menggunakan ajax untuk mengirim dan menerima data dari server
                $.ajax({
                  type: "POST",
                  dataType: "html",
                  url: "ambil-data.php",
                  data: "kabupaten=" + id_kabupaten,
                  success: function (data) {
                    $("#kecamatan").html(data);
                  },
                });
              });
            </script>
            <div class="alert alert-primary space">
              <h6 class="text-center bold">Data Pendidikan</h6>
            </div>

            <!-- row 1 -->
            <div class="row">
              <!-- nama sekolah -->
              <div class="col-sm-6">
                <div class="form-group wrap-input100 m-b-26">
                  <label>Nama Sekolah SD :</label>
                  <input
                    type="text"
                    name="sd"
                    class="input100"
                    placeholder="Masukan Nama Sekolah"
                    required
                  />
                  <span class="focus-input100"></span>
                </div>
              </div>
              <!-- nilai rapot -->
              <div class="col-sm-6">
                <div class="form-group wrap-input100 m-b-26">
                  <label>Rata-rata Nilai Rapot SD :</label>
                  <input
                    type="text"
                    name="nilai_sd"
                    class="input100"
                    placeholder="Masukan Rata-rata Nilai Rapot"
                    required
                  />
                  <span class="focus-input100"></span>
                </div>
              </div>
            </div>
            <!-- row 2 -->
            <div class="row">
              <!-- nama sekolah -->
              <div class="col-sm-6">
                <div class="form-group wrap-input100 m-b-26">
                  <label>Nama Sekolah SMP :</label>
                  <input
                    type="text"
                    name="smp"
                    class="input100"
                    placeholder="Masukan Nama Sekolah"
                    required
                  />
                  <span class="focus-input100"></span>
                </div>
              </div>
              <!-- nilai rapot -->
              <div class="col-sm-6">
                <div class="form-group wrap-input100 m-b-26">
                  <label>Rata-rata Nilai Rapot SMP :</label>
                  <input
                    type="text"
                    name="nilai_smp"
                    class="input100"
                    placeholder="Masukan Rata-rata Nilai Rapot"
                    required
                  />
                  <span class="focus-input100"></span>
                </div>
              </div>
            </div>

            <!-- row 3 -->
            <div class="row">
              <!-- nama sekolah -->
              <div class="col-sm-6">
                <div class="form-group wrap-input100 m-b-26">
                  <label>Nama Sekolah SMK/SMA/MA :</label>
                  <input
                    type="text"
                    name="sma"
                    class="input100"
                    placeholder="Masukan Nama Sekolah"
                    required
                  />
                  <span class="focus-input100"></span>
                </div>
              </div>
              <!-- nilai rapot -->
              <div class="col-sm-6">
                <div class="form-group wrap-input100 m-b-26">
                  <label>Rata-rata Nilai Rapot SMK/SMA/MA :</label>
                  <input
                    type="text"
                    name="nilai_sma"
                    class="input100"
                    placeholder="Masukan Rata-rata Nilai Rapot"
                    required
                  />
                  <span class="focus-input100"></span>
                </div>
              </div>
            </div>

            <div class="alert alert-primary space">
              <h6 class="text-center bold">Pilihan Posisi Pekerjaan</h6>
            </div>
            <div class="row">
              <!-- posisi 1 -->
              <div class="col-sm-6">
                <div class="form-group m-b-26">
                  <label>Pilih Posisi 1 :</label>
                  <select class="form-control" name="posisi1" required>
                    <option value="Engineer Stationary">
                      Engineer Stationary
                    </option>
                    <option value="Jr Engineer Process">
                    Jr Engineer Process
                    </option>
                    <option value="Sr Officer HSSE">
                     Sr Officer HSSE 
                    </option>
                    <option value="Engineer Civil">
                     Engineer Civil 
                    </option>
                    <option value="Engineer Rotating">
                     Engineer Rotating 
                    </option>
                  </select>
                </div>
              </div>
              <!-- posisi 2 -->
              <div class="col-sm-6">
                <div class="form-group m-b-26">
                  <label>Pilih Posisi 2 :</label>
                  <select class="form-control" name="posisi2" required>
                    <option value="Engineer Stationary">
                      Engineer Stationary
                    </option>
                    <option value="Jr Engineer Process">
                    Jr Engineer Process
                    </option>
                    <option value="Sr Officer HSSE">
                     Sr Officer HSSE 
                    </option>
                    <option value="Engineer Civil">
                     Engineer Civil 
                    </option>
                    <option value="Engineer Rotating">
                     Engineer Rotating 
                    </option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <!-- daftar -->
              <div class="col-sm-4">
                <button
                  type="submit"
                  name="Submit"
                  id="Submit"
                  class="btn btn-success"
                >
                  Daftar
                </button>
                <button type="reset" class="btn btn-secondary">Reset</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
