<!--==========================
BERITA
============================-->
<section id="portfolio" class="section-bg">
  <div class="container">
    <header class="section-header" style="padding-bottom: 30px">
      <h3 class="section-title">Berita</h3>
    </header>

    <div class="row portfolio-container">
    
    <!-- berita baru -->
    <?php
    // Include config file
    require_once "admin/config.php";
    
    // Attempt select query execution
    $sql = "SELECT * FROM tb_konten";
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
            echo "<div class='col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp'>
                  <div class='portfolio-wrap'>
                    <figure>
                      <div class='post-category'>
                        <a href='#'>New</a>
                      </div>
                      <img src='img/berita/9.jpg' class='img-fluid' alt='' />
                      <a
                        href='img/berita/1.jpeg'
                        data-lightbox='portfolio'
                        data-title='App 1'
                        class='link-preview'
                        title='Preview'
                        ><i class='ion ion-eye'></i
                      ></a>
                      <a href='berita1.php' class='link-details' title='More Details'
                        ><i class='ion ion-android-open'></i
                      ></a>
                    </figure>
          
                    <div class='portfolio-info'>
                      <h4>";
                        while($row = mysqli_fetch_array($result)){
                        echo"<a href='#'>" . $row['judul_konten'] . "</a>";
                        echo"
                        </h4>
                        <div class='site-info' style='margin-top: 67px'>
                          <div class='avatar mr-2'>
                            <div class='avatar-img'>
                              <img src='img/logo-utama.png' alt='' />
                            </div>
                            <span>Pertamina</span>
                          </div>";
                        echo"<span class='mai-time'></span>" . $row['waktu_upload'] . "
                        </div>
                      <p>App</p>
                    </div>
                  </div>
                </div>";
              }
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
      

      <!-- berita 1 -->
      <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
        <div class="portfolio-wrap">
          <figure>
            <div class="post-category">
              <a href="#">New</a>
            </div>
            <img src="img/berita/1.jpeg" class="img-fluid" alt="" />
            <a
              href="img/berita/1.jpeg"
              data-lightbox="portfolio"
              data-title="App 1"
              class="link-preview"
              title="Preview"
              ><i class="ion ion-eye"></i
            ></a>
            <a href="berita1.php" class="link-details" title="More Details"
              ><i class="ion ion-android-open"></i
            ></a>
          </figure>

          <div class="portfolio-info">
            <h4>
              <a href="#">PHR Awali Tahun 2022 dengan Tajak Tiga Sumur</a>
            </h4>
            <div class="site-info" style="margin-top: 67px">
              <div class="avatar mr-2">
                <div class="avatar-img">
                  <img src="img/logo-utama.png" alt="" />
                </div>
                <span>Pertamina</span>
              </div>
              <span class="mai-time"></span> 1 days ago
            </div>
            <p>App</p>
          </div>
        </div>
      </div>

      <!-- berita 2 -->
      <div
        class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp"
        data-wow-delay="0.1s"
        style="top: 40px;"
      >
        <div class="portfolio-wrap">
          <figure>
            <div class="post-category">
              <a href="#">New</a>
            </div>
            <img src="img/berita/2.jpeg" class="img-fluid" alt="" />
            <a
              href="img/berita/2.jpeg"
              class="link-preview"
              data-lightbox="portfolio"
              data-title="Web 3"
              title="Preview"
              ><i class="ion ion-eye"></i
            ></a>
            <a href="berita2.php" class="link-details" title="More Details"
              ><i class="ion ion-android-open"></i
            ></a>
          </figure>

          <div class="portfolio-info">
            <h4>
              <a href="#"
                >Regional Kalimantan Subholding Upstream Pertamina Borong Lima
                Penghargaan PROPER Emas 2021</a
              >
            </h4>
            <div class="site-info">
              <div class="avatar mr-2">
                <div class="avatar-img">
                  <img src="img/logo-utama.png" alt="" />
                </div>
                <span>Pertamina</span>
              </div>
              <span class="mai-time"></span> 2 days ago
            </div>
            <p>Web</p>
          </div>
        </div>
      </div>

      <!-- berita 3 -->
      <div
        class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp"
        data-wow-delay="0.2s"
      >
        <div class="portfolio-wrap">
          <figure>
            <div class="post-category">
              <a href="#">New</a>
            </div>
            <img src="img/berita/3.jpg" class="img-fluid" alt="" />
            <a
              href="img/berita/3.jpg"
              class="link-preview"
              data-lightbox="portfolio"
              data-title="App 2"
              title="Preview"
              ><i class="ion ion-eye"></i
            ></a>
            <a href="berita3.php" class="link-details" title="More Details"
              ><i class="ion ion-android-open"></i
            ></a>
          </figure>

          <div class="portfolio-info">
            <h4>
              <a href="#"
                >Berhasil Tingkatkan Kualifikasi TKDN, Perwira Subholding
                Upstream Pertamina Diapresiasi SKK Migas</a
              >
            </h4>
            <div class="site-info">
              <div class="avatar mr-2">
                <div class="avatar-img">
                  <img src="img/logo-utama.png" alt="" />
                </div>
                <span>Pertamina</span>
              </div>
              <span class="mai-time"></span> 4 days ago
            </div>
            <p>App</p>
          </div>
        </div>
      </div>

      <!-- berita 4 -->
      <div
        class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp"
        style="margin-top: 40px"
      >
        <div class="portfolio-wrap">
          <figure>
            <div class="post-category">
              <a href="#">New</a>
            </div>
            <img src="img/berita/4.jpg" class="img-fluid" alt="" />
            <a
              href="img/berita/4.jpg"
              class="link-preview"
              data-lightbox="portfolio"
              data-title="Card 2"
              title="Preview"
              ><i class="ion ion-eye"></i
            ></a>
            <a href="berita4.php" class="link-details" title="More Details"
              ><i class="ion ion-android-open"></i
            ></a>
          </figure>

          <div class="portfolio-info">
            <h4>
              <a href="#"
                >Pertagas Dukung Program Kemandirian Pangan di Dumai</a
              >
            </h4>
            <div class="site-info" style="margin-top: 46px">
              <div class="avatar mr-2">
                <div class="avatar-img">
                  <img src="img/logo-utama.png" alt="" />
                </div>
                <span>Pertamina</span>
              </div>
              <span class="mai-time"></span> 5 days ago
            </div>
            <p>Card</p>
          </div>
        </div>
      </div>

      <!-- berita 5 -->
      <div
        class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp"
        data-wow-delay="0.1s"
        style="margin-top: 40px"
      >
        <div class="portfolio-wrap">
          <figure>
            <img src="img/berita/5.jpeg" class="img-fluid" alt="" />
            <a
              href="img/berita/5.jpeg"
              class="link-preview"
              data-lightbox="portfolio"
              data-title="Web 2"
              title="Preview"
              ><i class="ion ion-eye"></i
            ></a>
            <a href="berita5.php" class="link-details" title="More Details"
              ><i class="ion ion-android-open"></i
            ></a>
          </figure>

          <div class="portfolio-info">
            <h4>
              <a href="#"
                >Relawan PDC Beri Trauma Healing Pengungsi Erupsi Semeru</a
              >
            </h4>
            <div class="site-info">
              <div class="avatar mr-2">
                <div class="avatar-img">
                  <img src="img/logo-utama.png" alt="" />
                </div>
                <span>Pertamina</span>
              </div>
              <span class="mai-time"></span> 1 week ago
            </div>
            <p>Web</p>
          </div>
        </div>
      </div>

      <!-- berita 6 -->
      <div
        class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp"
        data-wow-delay="0.2s"
        style="margin-top: 40px"
      >
        <div class="portfolio-wrap">
          <figure>
            <img src="img/berita/6.jpg" class="img-fluid" alt="" />
            <a
              href="img/berita/6.jpg"
              class="link-preview"
              data-lightbox="portfolio"
              data-title="App 3"
              title="Preview"
              ><i class="ion ion-eye"></i
            ></a>
            <a href="berita6.php" class="link-details" title="More Details"
              ><i class="ion ion-android-open"></i
            ></a>
          </figure>

          <div class="portfolio-info">
            <h4>
              <a href="#">Pertamina Gratiskan Antigen di SPBU, Ini Syaratnya</a>
            </h4>
            <div class="site-info" style="margin-top: 46px">
              <div class="avatar mr-2">
                <div class="avatar-img">
                  <img src="img/logo-utama.png" alt="" />
                </div>
                <span>Pertamina</span>
              </div>
              <span class="mai-time"></span> 1 week ago
            </div>
            <p>App</p>
          </div>
        </div>
      </div>

      <!-- berita 7 -->
      <div
        class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp"
        style="margin-top: 40px"
      >
        <div class="portfolio-wrap">
          <figure>
            <img src="img/berita/7.jpg" class="img-fluid" alt="" />
            <a
              href="img/berita/7.jpg"
              class="link-preview"
              data-lightbox="portfolio"
              data-title="Card 1"
              title="Preview"
              ><i class="ion ion-eye"></i
            ></a>
            <a href="berita7.php" class="link-details" title="More Details"
              ><i class="ion ion-android-open"></i
            ></a>
          </figure>

          <div class="portfolio-info">
            <h4>
              <a href="#"
                >Pertiwi Berbagi Kebahagiaan di Panti Sosial Tresna Werdha Budi
                Mulia 1</a
              >
            </h4>
            <div class="site-info">
              <div class="avatar mr-2">
                <div class="avatar-img">
                  <img src="img/logo-utama.png" alt="" />
                </div>
                <span>Pertamina</span>
              </div>
              <span class="mai-time"></span> 1 week ago
            </div>
            <p>Card</p>
          </div>
        </div>
      </div>

      <!-- berita 8 -->
      <div
        class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp"
        data-wow-delay="0.1s"
        style="margin-top: 40px"
      >
        <div class="portfolio-wrap">
          <figure>
            <img src="img/berita/8.jpg" class="img-fluid" alt="" />
            <a
              href="img/berita/8.jpg"
              class="link-preview"
              data-lightbox="portfolio"
              data-title="Card 3"
              title="Preview"
              ><i class="ion ion-eye"></i
            ></a>
            <a href="berita8.php" class="link-details" title="More Details"
              ><i class="ion ion-android-open"></i
            ></a>
          </figure>

          <div class="portfolio-info">
            <h4>
              <a href="#"
                >Dukung Pertanian Berkelanjutan, PEPC JTB Serahkan Fasilitas
                Irigasi
              </a>
            </h4>
            <div class="site-info">
              <div class="avatar mr-2">
                <div class="avatar-img">
                  <img src="img/logo-utama.png" alt="" />
                </div>
                <span>Pertamina</span>
              </div>
              <span class="mai-time"></span> 1 week ago
            </div>
            <p>Card</p>
          </div>
        </div>
      </div>

      <!-- berita 9 -->
      <div
        class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp"
        data-wow-delay="0.2s"
        style="margin-top: 40px"
      >
        <div class="portfolio-wrap">
          <figure>
            <img src="img/berita/9.jpg" class="img-fluid" alt="" />
            <a
              href="img/berita/9.jpg"
              class="link-preview"
              data-lightbox="portfolio"
              data-title="Web 1"
              title="Preview"
              ><i class="ion ion-eye"></i
            ></a>
            <a href="berita9.php" class="link-details" title="More Details"
              ><i class="ion ion-android-open"></i
            ></a>
          </figure>

          <div class="portfolio-info">
            <h4>
              <a href="#"
                >Bazma Kilang Balikpapan Salurkan Bantuan untuk Korban
                Kebakaran</a
              >
            </h4>
            <div class="site-info">
              <div class="avatar mr-2">
                <div class="avatar-img">
                  <img src="img/logo-utama.png" alt="" />
                </div>
                <span>Pertamina</span>
              </div>
              <span class="mai-time"></span> 1 week ago
            </div>
            <p>Web</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- BERITA END -->