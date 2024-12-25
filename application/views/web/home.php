<!DOCTYPE html>
<html lang="en">

<head>
  <!-- basic -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <!-- site metas -->
  <title>BENGKEL AREA UIN JAKARTA</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- fevicon -->
  <link rel="icon" href="<?=base_url()?>assets/web/images/fevicon.png" type="image/gif" />
  <!-- bootstrap css -->
  <link rel="stylesheet" href="<?=base_url()?>assets/web/css/bootstrap.min.css">
  <!-- style css -->
  <link rel="stylesheet" href="<?=base_url()?>assets/web/css/style.css">
  <!-- Responsive-->
  <link rel="stylesheet" href="<?=base_url()?>assets/web/css/responsive.css">  
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="<?=base_url()?>assets/web/css/jquery.mCustomScrollbar.min.css">
  <!-- Tweaks for older IEs-->
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/<?=base_url()?>assets/web/css/font-awesome.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
  <!-- loader  -->
  <div class="loader_bg">
    <div class="loader"><img src="<?=base_url()?>assets/web/images/loading.gif" alt="#" /></div>
  </div>
  <!-- end loader -->
  <!-- header -->
  <header>
    <!-- header inner -->
    <div class="header-top">
      <div class="header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-3 col logo_section">
              <div class="full">
                <div class="center-desk">
                  <div class="logo">
                    <a href="index.html"><img src="<?=base_url()?>assets/web/images/logobengkel-Photoroom.png" alt="Logo Bengkel" style="width: auto; height: auto;" /></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-10 col-lg-8 col-md-8 col-sm-9">
              <div class="header_information">
               <div class="menu-area">
                <div class="limit-box">
                  <nav class="main-menu ">
                    <ul class="menu-area-main">
                      <li class="active"> <a href="index.html">Beranda</a> </li>
                      <li> <a href="#about">Tentang</a> </li>
                      <li> <a href="#important">Peta</a> </li>
                     </ul>
                   </nav>
                 </div>
               </div> 
               <div class="mean-last">
                       <a href="#"><img src="<?=base_url()?>assets/web/images/search_icon.png" alt="#" /></a> <a href="#">cari layanan</a></div>              
             </div>
           </div>
         </div>
       </div>
     </div>
     <!-- end header inner -->

     <!-- end header -->
     <section class="slider_section">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">

            <div class="container-fluid padding_dd">
              <div class="carousel-caption">
                <div class="row">
                  <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                    <div class="text-bg">
                      <h1>Cari Bengkel Dompet Mahasiswa untuk Kendaraan Anda</h1>
                      <a href="#">baca lagi</a> <a href="#">pilih bengkel</a>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                    <div class="images_box">
                      <figure><img src="<?=base_url()?>assets/web/images/el-Photoroom.png" ></figure>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">

            <div class="container-fluid padding_dd">
              <div class="carousel-caption">

                <div class="row">
                  <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                    <div class="text-bg">
                      <h1>Ganti Oli Bukan Marketing! Jangan Kemakan Kata TIKTOK</h1>
                      <a href="#">baca lagi</a><a href="#">pilih bengkel</a>
                    </div>
                  </div>

                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                    <div class="images_box">
                      <figure><img src="<?=base_url()?>assets/web/images/about.jpg"></figure>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>


          <div class="carousel-item">

            <div class="container-fluid padding_dd">
              <div class="carousel-caption ">
                <div class="row">
                  <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                    <div class="text-bg">
                      <h1>Area Bengkel UIN Kampus 1 2 3, Legoso, Kampung Utan</h1>
                      <a href="#">baca lagi</a> <a href="#">pilih bengkel</a>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                    <div class="images_box">
                      <figure><img src="<?=base_url()?>assets/web/images/c3-Photoroom.png"></figure>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

</section>
</div>
</header>



<!-- about  -->
<div id="about" class="about">
  <div class="container">
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="about-box">
          <h2>Alasan <strong class="yellow">Pembuatan Web</strong></h2>
          <p> Website ini dibuat untuk memberikan solusi bagi pengguna kendaraan bermotor di area UIN Jakarta yang sering kesulitan menemukan bengkel terdekat dengan cepat dan mudah. Selama ini, informasi tentang bengkel masih tersebar dan sulit diakses, sehingga banyak orang harus mencari secara manual atau mengandalkan rekomendasi yang tidak selalu akurat. Sebagai kawasan dengan aktivitas yang padat, kebutuhan akan layanan perbaikan kendaraan di sekitar UIN Jakarta cukup tinggi. Website ini dirancang untuk memudahkan pengguna dalam menemukan bengkel yang sesuai, lengkap dengan informasi seperti lokasi, layanan yang ditawarkan, jam operasional, hingga ulasan pelanggan. Dengan ini, kami berharap dapat meningkatkan efisiensi waktu, kepercayaan terhadap layanan bengkel, dan mendukung bengkel lokal agar lebih dikenal masyarakat. Selain memberikan kemudahan bagi pengguna kendaraan, website ini juga bertujuan untuk mendukung transformasi digital di sektor layanan jasa, khususnya di sekitar UIN Jakarta. Kami berharap platform ini dapat menjadi solusi yang membantu dan bermanfaat bagi masyarakat luas.  </p>
          <a href="Javascript:void(0)">baca lagi</a>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="about-box">
          <figure><img src="<?=base_url()?>assets/web/images/about.jpg" alt="#" /></figure>
        </div>
      </div>
    </div>

  </div>
</div>
<!-- end abouts -->



<!-- our -->
<div id="important" class="important">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="titlepage">
          <h2> Sedetik <strong class="yellow">Fakta Penting</strong></h2>
          <span>Tidak Semua Bengkel Melayani Dengan Jujur</span>
        </div>
      </div>
    </div>
  </div>
  <div class="important_bg">

  <iframe src="<?=base_url()?>/home" width="1880" height="650"></iframe>

    <div class="container">
      <div class="row">

        <div class="col col-xs-12">
          <div class="important_box">
            <h3>Melayani</h3>
            <span>Ganti Oli</span>
          </div>
        </div>
        <div class="col col-xs-12">
          <div class="important_box">
            <h3>Melayani</h3>
            <span>Full Service</span>
          </div>
        </div>
        <div class="col col-xs-12">
          <div class="important_box">
            <h3>Melayani</h3>
            <span>Jual Beli Alat</span>
          </div>
        </div>
        <div class="col col-xs-12">
          <div class="important_box">
            <h3>Melayani</h3>
            <span>Pelanggan</span>
          </div>
        </div>
        <div class="col col-xs-12">
          <div class="important_box">
            <h3> Dijamin </h3>
            <span>garansi</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<!-- end our -->


    <!--  footer -->
    <footr>
      <div class="footer ">
        <div class="container">
          <div class="row">

            <div class="col-md-12">
              <form class="news">
                <input class="newslatter" placeholder="Email" type="text" name=" Email">
                <button class="submit">Subscribe</button>
              </form>
            </div>
            <div class="col-md-12">
              <h2>Pesan Dari Saya</h2>
              <span>Rawat lah kendaraan anda meskipun masih nyicil  </span>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
              <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 ">
                  <div class="address">
                    <h3>Contact me </h3>
                    <ul class="loca">
                      <li>
                        <a href="#"><img src="<?=base_url()?>assets/web/icon/loc.png" alt="#" /></a>Ciputat Timur
                        <br>Ciputat Timur, Tangerang Selatan </li>
                        <li>
                          <a href="#"><img src="<?=base_url()?>assets/web/icon/email.png" alt="#" /></a>savethatshutt@gmail.com </li>
                          <li>
                            <a href="#"><img src="<?=base_url()?>assets/web/icon/call.png" alt="#" /></a>+621917343798 </li>
                          </ul>
                          <ul class="social_link">
                            <li><a href="#"><img src="<?=base_url()?>assets/web/icon/fb.png"></a></li>
                            <li><a href="#"><img src="<?=base_url()?>assets/web/icon/tw.png"></a></li>
                            <li><a href="#"><img src="<?=base_url()?>assets/web/icon/lin(2).png"></a></li>
                            <li><a href="#"><img src="<?=base_url()?>assets/web/icon/instagram.png"></a></li>
                          </ul>
                    </div>
                  </div>

                </div>

              </div>
              <div class="copyright">
                <div class="container">
                  <p>Copyright © 2019 Design by Wiwin Desti Handayani</p>
                </div>
              </div>
            </div>
          </footr>
          <!-- end footer -->
          <!-- Javascript files-->
          <script src="<?=base_url()?>assets/web/js/jquery.min.js"></script>
          <script src="<?=base_url()?>assets/web/js/popper.min.js"></script>
          <script src="<?=base_url()?>assets/web/js/bootstrap.bundle.min.js"></script>
          <script src="<?=base_url()?>assets/web/js/jquery-3.0.0.min.js"></script>
          <script src="<?=base_url()?>assets/web/js/plugin.js"></script>
          <!-- sidebar -->
          <script src="<?=base_url()?>assets/web/js/jquery.mCustomScrollbar.concat.min.js"></script>
          <script src="<?=base_url()?>assets/web/js/custom.js"></script>
          <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>


          <script>
// This example adds a marker to indicate the position of Bondi Beach in Sydney,
// Australia.
function initMap() {
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 11,
    center: {
      lat: 40.645037,
      lng: -73.880224
    },
  });

  var image = '<?=base_url()?>assets/web/images/maps-and-flags.png';
  var beachMarker = new google.maps.Marker({
    position: {
      lat: 40.645037,
      lng: -73.880224
    },
    map: map,
    icon: image
  });
}
</script>
<!-- google map js -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
<!-- end google map js -->



</body>

</html>