<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title><?php echo SITE_NAME .": ". ucfirst($this->uri->segment(1)) ." - ". ucfirst($this->uri->segment(2)) ?></title>

    <!-- Favicon -->
    <!-- <link rel="icon" href="./img/core-img/favicon.png"> -->
    <link href="<?php echo base_url('core-img/favicon.png') ?>" rel="icon">
    

    <!-- Stylesheet -->
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link href="<?php echo base_url('style.css') ?>" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css') ?>" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <!-- Preloader -->
    <!-- <div id="preloader">
        <div class="loader"></div>
    </div> -->
    <!-- /Preloader -->

    <!-- Top Search Form Area -->
    <div class="top-search-area">
        <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <!-- Close -->
                        <button type="button" class="btn close-btn" data-dismiss="modal"><i class="ti-close"></i></button>
                        <!-- Form -->
                        <form action="index.html" method="post">
                            <input type="search" name="top-search-bar" class="form-control" placeholder="Search and hit enter...">
                            <button type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Area Start -->
    <header class="header-area">
        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between" id="alimeNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="./index.html"><img src="<?php echo base_url('img/core-img/logo.png') ?>" alt="Our"></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Menu Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul id="nav">
                                    <li><a href="./index.html">Home</a></li>
                                    <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="./index.html">- Home</a></li>
                                            <li><a href="./about.html">- Biodata</a></li>
                                            <li><a href="./gallery.html">- Gallery</a></li>
                                            <li><a href="./blog.html">- Blog</a></li>
                                            <li><a href="./single-blog.html">- Blog Details</a></li>
                                            <li><a href="./contact.html">- Contact</a></li>
                                            <li><a href="#">- Dropdown</a>
                                                <ul class="dropdown">
                                                    <li><a href="#">- Dropdown Item</a></li>
                                                    <li><a href="#">- Dropdown Item</a></li>
                                                    <li><a href="#">- Dropdown Item</a></li>
                                                    <li><a href="#">- Dropdown Item</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="active"><a href="./about.html">Biodata</a></li>
                                    <li><a href="./gallery.html">Gallery</a></li>
                                    <li><a href="./blog.html">Blog</a></li>
                                    <li><a href="./contact.html">Contact</a></li>
                                </ul>

                                <!-- Search Icon -->
                                <div class="search-icon" data-toggle="modal" data-target="#searchModal"><i class="ti-search"></i></div>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Breadcrumb Area Start -->
    <section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url('38.jpg')>
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title">Our Biodata</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index.html"><i class="icon_house_alt"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Biodata</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->

    <br />
    <table class="table table-bordered">
      <tr>
        <th>NISN</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Telephone</th>
        <th>Address</th>
        <th colspan="2">Action</th>
      </tr>
      <?php
      if( ! empty($siswa)){ // Jika data siswa tidak sama dengan kosong, artinya jika data siswa ada
        foreach($siswa as $data){
          echo "<tr>
          <td>".$data->nisn."</td>
          <td>".$data->nama."</td>
          <td>".$data->jenis_kelamin."</td>
          <td>".$data->telp."</td>
          <td>".$data->alamat."</td>
          <td><a href='".base_url("siswa/ubah/".$data->nisn)."'>Ubah</a></td>
          <td><a href='".base_url("siswa/hapus/".$data->nisn)."'>Hapus</a></td>
          </tr>";
        }
      }else{ // Jika data siswa kosong
        echo "<tr><td align='center' colspan='7'>Data Tidak Ada</td></tr>";
      }
      ?>
    </table>

    <div class="text-center">
    <a href='<?php echo base_url("siswa/tambah"); ?>' class="btn btn-success" role="button">Tambah Data Siswa</a><br><br>
      </div>

    <!-- Why Choose Us Area Start -->
    <!-- <section class="why-choose-us-area bg-gray section-padding-80-0 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                        <h2>Why Choose Us</h2>
                    </div>
                </div>
            </div>

            <div class="row"> -->
                <!-- Single Why Choose Area -->
                <!-- <div class="col-md-6 col-lg-4">
                    <div class="why-choose-us-content text-center mb-80 wow fadeInUp" data-wow-delay="100ms">
                        <div class="chosse-us-icon">
                            <i class="fa fa-film" aria-hidden="true"></i>
                        </div>
                        <h4>High Quality Images</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur isicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut elit, sed do eiusmod te</p>
                    </div>
                </div> -->

                <!-- Single Why Choose Area -->
                <!-- <div class="col-md-6 col-lg-4">
                    <div class="why-choose-us-content text-center mb-80 wow fadeInUp" data-wow-delay="300ms">
                        <div class="chosse-us-icon">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                        </div>
                        <h4>Abundant Experience</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur isicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut elit, sed do eiusmod te</p>
                    </div>
                </div> -->

                <!-- Single Why Choose Area -->
                <!-- <div class="col-md-6 col-lg-4">
                    <div class="why-choose-us-content text-center mb-80 wow fadeInUp" data-wow-delay="500ms">
                        <div class="chosse-us-icon">
                            <i class="fa fa-camera" aria-hidden="true"></i>
                        </div>
                        <h4>Modern Equipments</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur isicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut elit, sed do eiusmod te</p>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Why Choose  us Area End -->

    <!-- Our Team Area Start -->
    <section class="our-team-area section-padding-80-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                        <h2>Our Team</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Team Member Area -->
                <div class="col-md-6 col-xl-3">
                    <div class="team-content-area text-center mb-30 wow fadeInUp" data-wow-delay="100ms">
                        <div class="member-thumb">
                            <img src="<?php echo base_url('img/bg-img/jae.jpg') ?>" alt="">
                        </div>
                        <h5>Na Jaemin</h5>
                        <span>Dancer</span>
                        <div class="member-social-info">
                            <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter-alt"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="ti-pinterest"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Team Member Area -->
                <div class="col-md-6 col-xl-3">
                    <div class="team-content-area text-center mb-30 wow fadeInUp" data-wow-delay="300ms">
                        <div class="member-thumb">
                            <img src="<?php echo base_url('img/bg-img/kay.jpg') ?>" width alt="">
                        </div>
                        <h5></h5>
                        <span>Programmer</span>
                        <div class="member-social-info">
                            <a href="https://www.facebook.com/kaylasaskia.amarangganafarid"><i class="ti-facebook"></i></a>
                            <a href="https://twitter.com/kaylasaskia2"><i class="ti-twitter-alt"></i></a>
                            <a href="https://www.instagram.com/kaylasaf/"><i class="fa fa-instagram"></i></a>
                            <a href="https://id.pinterest.com/kaylasaf/"><i class="ti-pinterest"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Team Member Area -->
                <div class="col-md-6 col-xl-3">
                    <div class="team-content-area text-center mb-30 wow fadeInUp" data-wow-delay="500ms">
                        <div class="member-thumb">
                            <img src="<?php echo base_url('img/bg-img/hyu.jpg') ?>" alt="">
                        </div>
                        <h5>Hwang Hyunjin</h5>
                        <span>Singer</span>
                        <div class="member-social-info">
                            <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter-alt"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="ti-pinterest"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Team Member Area -->
                <div class="col-md-6 col-xl-3">
                    <div class="team-content-area text-center mb-30 wow fadeInUp" data-wow-delay="700ms">
                        <div class="member-thumb">
                            <img src="<?php echo base_url('img/bg-img/im.jpg') ?>" alt="">
                        </div>
                        <h5>Im Changkyun</h5>
                        <span>Rapper</span>
                        <div class="member-social-info">
                            <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter-alt"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="ti-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Team Area End -->

    <!-- Follow Area Start -->
    <div class="follow-area clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Follow Instagram</h2>
                        <p>@Alime_photographer</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Instagram Feed Area -->
        <div class="instragram-feed-area owl-carousel">
            <!-- Single Instagram Item -->
            <div class="single-instagram-item">
                <img src="img/bg-img/11.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                    <a href="#">
                        <i class="ti-instagram" aria-hidden="true"></i>
                        <span>Alime_photographer</span>
                    </a>
                </div>
            </div>
            <!-- Single Instagram Item -->
            <div class="single-instagram-item">
                <img src="img/bg-img/12.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                    <a href="#">
                        <i class="ti-instagram" aria-hidden="true"></i>
                        <span>Alime_photographer</span>
                    </a>
                </div>
            </div>
            <!-- Single Instagram Item -->
            <div class="single-instagram-item">
                <img src="img/bg-img/13.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                    <a href="#">
                        <i class="ti-instagram" aria-hidden="true"></i>
                        <span>Alime_photographer</span>
                    </a>
                </div>
            </div>
            <!-- Single Instagram Item -->
            <div class="single-instagram-item">
                <img src="img/bg-img/14.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                    <a href="#">
                        <i class="ti-instagram" aria-hidden="true"></i>
                        <span>Alime_photographer</span>
                    </a>
                </div>
            </div>
            <!-- Single Instagram Item -->
            <div class="single-instagram-item">
                <img src="img/bg-img/15.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                    <a href="#">
                        <i class="ti-instagram" aria-hidden="true"></i>
                        <span>Alime_photographer</span>
                    </a>
                </div>
            </div>
            <!-- Single Instagram Item -->
            <div class="single-instagram-item">
                <img src="img/bg-img/16.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                    <a href="#">
                        <i class="ti-instagram" aria-hidden="true"></i>
                        <span>Alime_photographer</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Follow Area End -->

    <!-- Footer Area Start -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-content d-flex align-items-center justify-content-between">
                        <!-- Copywrite Text -->
                        <div class="copywrite-text">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                        <!-- Footer Logo -->
                        <div class="footer-logo">
                            <a href="#"><img src="img/core-img/logo2.png" alt=""></a>
                        </div>
                        <!-- Social Info -->
                        <div class="social-info">
                            <a href="#"><i class="ti-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="ti-twitter-alt" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="#"><i class="ti-pinterest" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->

    <!-- **** All JS Files ***** -->
    <!-- jQuery 2.2.4 -->
    <!-- <script src="js/jquery.min.js"></script> -->
    <script src="<?php echo base_url('js/jquery.min.js') ?>"></script>
    
    <!-- Popper -->
    <!-- <script src="js/popper.min.js"></script> -->
    <script src="<?php echo base_url('js/popper.min.js') ?>"></script>
    <!-- Bootstrap -->
    <!-- <script src="js/bootstrap.min.js"></script> -->
    <script src="<?php echo base_url('js/bootstrap.min.js') ?>"></script>
    <!-- All Plugins -->
    <!-- <script src="js/alime.bundle.js"></script> -->
    <script src="<?php echo base_url('js/alime.bundle.js') ?>"></script>
    <!-- Active -->
    <!-- <script src="js/default-assets/active.js"></script> -->
    <script src="<?php echo base_url('js/default-assets/active.js') ?>"></script>

</body>

</html>