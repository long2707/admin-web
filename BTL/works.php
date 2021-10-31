<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="utf-8">
    <title>MIS Booking | 12 Chùa Bộc</title>
    <meta content="" name="description">
    <meta content="" name="author">
    <meta content="" name="keywords">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <!-- favicon -->
    <link href="img/favicon1.png" rel="icon" sizes="32x32" type="image/png">
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- font themify CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- font awesome CSS -->
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <!-- date picker CSS -->
    <link href="css/datepicker.min.css" rel="stylesheet">
    <!-- revolution slider css -->
    <link rel="stylesheet" type="text/css" href="css/fullwidth.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />
    <link rel="stylesheet" href="css/rev-settings.css" type="text/css">
    <!-- on3step CSS -->
    <link href="css/animated-on3step.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    <link href="css/on3step-style.css" rel="stylesheet">
    <link href="css/queries-on3step.css" media="all" rel="stylesheet">
  </head>
  
  <body>
  
    <!-- preloader -->
    <div class="bg-preloader-white"></div>
    <div class="preloader-white">
      <div class="mainpreloader">
        <span></span>
      </div>
    </div>
    <!-- preloader end -->
    
    <!-- content wraper -->
   <div class="content-wrapper">
    
   <header class="init">
    
    <!-- subnav -->
    <div class="container-fluid m-5-hor">
      <div class="row">
          <div class="subnav">
  
           <div class="col-md-6">
            <div class="left">
              <div class="social-icons-subnav hidden-sm hidden-xs">
                  <div>Liên hệ : 024.3852.6419</div>
              </div>
            </div>
           </div>
           
           <div class="col-md-6">
            <div class="right">
              <div id="sub-icon" class="social-icons-subnav">
                  <a href="#"><span class="ti-facebook"></span></a>
                  <a href="#"><span class="ti-dribbble"></span></a>
                  <a href="#"><span class="ti-twitter"></span></a>
                  <a href="#"><span class="ti-instagram"></span></a>
                  <a href="#"><span class="ti-linkedin"></span></a>
              </div>
              
            </div>
           </div>
          
          </div>
      </div>
    </div>
    <!-- subnav end -->
    
      <!-- nav -->
      <div class="navbar-default-white navbar-fixed-top">
        <div class="container-fluid m-5-hor">
        <div class="row">
        
           <!-- menu mobile display -->
           <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse">
           <span class="icon icon-bar"></span> 
           <span class="icon icon-bar"></span> 
           <span class="icon icon-bar"></span></button> 
          
          <!-- logo --> 
          <a class="navbar-brand white" href="index.php">
          <img class="white" alt="logo" src="img/logo.png" >
          <img class="black" alt="logo" src="img/logo-white.png">
          </a> 
          <!-- logo end -->
          
          <!-- mainmenu start -->
          <div class="white menu-init" id="main-menu">
            <nav id="menu-center">
              <ul>
                
                <li>
                 <a href="index.php">Trang chủ </a>
                </li>

                <li>
                  <a href="about.php">Giới thiệu</a> 
                </li>

                <li>
                  <a href="works.php" class="actived">Thư viện </a> 
                </li>
                <li>
                  <a  href="destination.php">Điểm đến </a>
                </li>
                <li>
                  <a  href="contact.php" >Liên hệ</a>
                </li>
              </ul>
            </nav>
          </div>
          <!-- mainmenu end -->
          
        </div>
        </div>
        <!-- container -->
      </div>
      <!-- nav end -->
      </header>
      
      <!-- subheader -->
      <section id="subheader">
        <div class="container-fluid m-5-hor">
          <div class="row">
            <div class="col-md-12">
              <h1 class="big-heading">
                Thư viện
              </h1>
              <p>Những hình ảnh chân thực nhất</p>
            </div>
        </div>
       </div>
      </section>
      <!-- subheader end -->
      
      <!-- section projects -->
      <section aria-label="works" id="projects">
            <div class="container-fluid">
             <div class="row">
          
          <!-- project -->
          <div class="v-align">
          <div class="col-md-11 col-xs-12">
            <!-- filter project -->
                <ul id="filter-hide" class="init">
                  <li class="filtter-icon"><i class="ti-layout-grid3-alt"></i>
                  </li>
                </ul>
                
                <ul id="filter-porto">
                  <li class="filt-projects-w selected" data-project="*">All Tour
                  </li>
                  
                  <li class="filt-projects-w" data-project=".Du.lịch.tham.quan" > Tham Quan
                  </li>

                  <li class="filt-projects-w" data-project=".Du.lịch.sang.trọng"> Sang Trọng
                  </li>

                  <li class="filt-projects-w" data-project=".Du.lịch.nước.ngoài"> Nước Ngoài
                  </li>

                </ul>
                
            <!-- filter project end -->


       
            
                <div id="w-gallery-container" class="w-gallery-container">

                    <?php
                      //include('config.php');
                      $ket_noi = mysqli_connect("localhost","root","","mis_booking");
                 
                      $sql = "
                        SELECT * 
                        FROM tbl_tour 
                        ORDER BY id_tour ASC";

                      $noi_dung = mysqli_query($ket_noi, $sql);
  
                      while ($row = mysqli_fetch_array($noi_dung)) 
                      {
                        ;?>


                        <div class="w-gallery <?php echo $row['loai_hinh'];?> ">
                          <div class="projects-grid onStep" data-animation="fadeInUp" data-time="0">
                            <div class="hovereffect-color">
                              <img src="img/tour/<?php echo $row['anh_1'] ;?>" alt="ảnh" class="w-gallery-image"> 
                              <div class="overlay">
                                <div class="v-align wrap">
                                  <span class="icon">
                            
                                    <a class="big-youtube" href="<?php echo $row['link'];?>">
                                      <i class="fa fa-search"></i>
                                    </a> 
                                    <a  href="projects-detail.php?id=<?php echo $row['id_tour'];?>">
                                      <i class="fa fa-link"></i>
                                    </a>
                                  </span>
                                </div>
                              </div>
                            </div>
                            <div class="hovereffect-color">
                              <img src="img/tour/<?php echo $row['anh_2'] ;?>" alt="ảnh" class="w-gallery-image"> 
                              <div class="overlay">
                                <div class="v-align wrap">
                                  <span class="icon">
                            
                                    <a class="big-youtube" href="<?php echo $row['link'];?>">
                                      <i class="fa fa-search"></i>
                                    </a> 
                                    <a  href="projects-detail.php?id=<?php echo $row['id_tour'];?>">
                                      <i class="fa fa-link"></i>
                                    </a>
                                  </span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                         
  
                        <?php 
                      }
                      mysqli_close($ket_noi);

                      ;?>
 

                </div>
                <!-- Lấy ảnh -->
                    
                    

                <!-- -->

                </div>
                </div>
                <!-- project end -->
                
                </div>
            </div>
        </section>
      <!-- section projects end -->
      
      
      <section class="no-top">
        <div class="container-fluid m-5-hor">
          <div class="row goldpage">
          
             <div class="col-lg-9 col-md-12 text-center">
                  <h3>Bạn đang tìm một Điểm đến Du lịch chất lượng và khó quên cho kỳ nghỉ tiếp theo của mình?</h3>
              </div>

              <div class="col-lg-2 col-md-12">
                <div class="btn-content" >
                    <a href="destination.php">Tìm kiếm</a>
                </div>
              </div>

          </div>
         </div>
      </section>

       
      <!-- footer -->
      <footer class="main text-center">
        <div class="container-fluid m-5-hor">
          <div class="row">
          
          <div class="onStep" data-animation="fadeInUp" data-time="300">
          <div class="col-md-4 text-left">
          <span><a href="#">Email: htttql@gmail.com</a></span>
          <span>Copyright - 2021 Khoa hệ thống thông tin quản lí - BAV</span>
          </div>
          
          <div class="col-md-4">
                
            </div>
            
            <div class="col-md-4 text-right">
              <span>12 Chùa Bộc, Đống Đa, Hà Nội</span>
              <span>Phone: 024.3852.6419</span>
            </div>
            </div>

            
          </div>
        </div>
      </footer>
      <!-- footer end -->
      
      
      <!-- ScrolltoTop -->
      <div id="totop" class="init">
        <span class="ti-angle-up"></span>
      </div>  

    </div>
    <!-- content wraper end --> 
    
    <!-- plugin JS -->
    <script src="plugin/pluginson3step.js"></script> 
    <script src="plugin/bootstrap.min.js"></script>
    <script src='plugin/bootstrap-datepicker.min.js'></script>
    <script src="plugin/sticky.js"></script> 
    <!-- slider revolution  -->
    <script src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <!-- on3step JS -->
    <script src="js/on3step.js"></script>
    <script src="js/plugin-set.js"></script>
  </body>
</html>