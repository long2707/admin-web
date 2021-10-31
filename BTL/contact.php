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
                  <a href="works.php">Thư viện </a> 
                </li>
                <li>
                  <a  href="destination.php">Điểm đến </a>
                </li>
                <li>
                  <a  href="contact.php" class="actived">Liên hệ</a>
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
                Liên hệ với chúng tôi
              </h1>
              <p>Rất vui khi được phục vụ bạn</p>
            </div>
        </div>
       </div>
      </section>
      <!-- subheader end -->
      
              <!-- map -->
              <section aria-label="map" class="no-bottom">
               <div class="container-fluid m-5-hor">
                <div class="row">
                 <div class="onStep" data-animation="fadeIn" data-time="300" id="map-1"></div>
                </div>
               </div> 
              </section> 
              <!-- map end -->
      
      <!-- section contact -->
      <section aria-label="contact" class="whitepage">
        <div class="container-fluid m-5-hor">
          <div class="row">
          
            <div class="col-md-8" >
            <!-- id="form-contact1" -->
                <form  method="POST" action="send.php" enctype="multipart/form-data">
                            <div class="form-group user-name">
                                <input type="text" class="form-control" id="name-contact-1" name="name-contact-1"  placeholder="Họ và tên">
                            </div>

                            <div class="form-group user-email" >
                                <input type="email" class="form-control" id="email-contact" name="email-contact"  placeholder="Email của bạn">
                            </div>
                        
                            <div class="form-group user-message" >
                                <textarea class="form-control"  id="message-contact" name="message-contact" placeholder="Nội dung chia sẻ"></textarea>
                                <div class="success" id="mail_success">Cảm ơn, nội dung chia sẻ của bạn đã được gửi đi</div>
                                <div class="error" id="mail_failed">Lỗi, gửi đi không thành công</div>
                            </div>
                    <button type="submit"  class="btn-contact">Gửi</button>
                </form>
            </div>
            
            <!-- address -->
              <div class="col-md-3 col-md-offset-1">
                <h3 class="heading-cont">Thông tin liên hệ</h3>
                  <address class="cont-1">
                    <span>
                    12 Chùa Bộc, Đống Đa, Hà Nội</span> 
                    <span><strong>PHONE:</strong> 024.3852.6419</span> 
                    <span><strong>Email:</strong><a href="mailto:companyname@gmail.com"> khoahtttql@hvnh.edu.vn</a></span> 
                    <span><strong>WEB  :</strong><a href="#"> http://mis.hvnh.edu.vn/</a></span>
                  </address>
              </div>
              <!-- address end -->
            
            
          </div>
        </div>
      </section>
      <!-- section contact end -->

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
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script  src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <!--  map google  -->
    <script src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyCQ5KODzqooIP496GPLRaMAsZ4eN8Vro_U"></script> 
    <script src="js/map-1.js" type="text/javascript"></script>
    <!-- on3step JS -->
    <script src="js/on3step.js"></script>
    <script src="js/plugin-set.js"></script>
  </body>
</html>