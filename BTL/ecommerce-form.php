<!DOCTYPE html>
<html lang="zxx">
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
          <img class="white" alt="logo" src="img/logo.png">
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
                  <a  href="destination.php" class="actived">Điểm đến </a>
                </li>
                <li>
                  <a  href="contact.php">Liên hệ</a>
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
      <section id="subheader-commerce">
        <div class="container-fluid m-5-hor">
          <div class="row">
            <div class="col-md-12">
              <h1>
                Đặt tour
              </h1>
              <div class="commerce-step">
               
               <a class="active">Nhập thông tin</a>
               <a>Thanh toán</a>
               <a>Hóa đơn</a>
              </div>
            </div>
        </div>
       </div>
      </section>
      <!-- subheader end -->
      
      <section id="tab-commerce" class="no-bottom">
      <div class="container-fluid m-5-hor">
        <div class="row">
        </div>
      </div>
      </section>
      
      <section id="content-commerce">
      <div class="container-fluid m-5-hor onStep" data-animation="fadeInUp" data-time="300">
        <div class="row">
        
      <div class="table-responsive">          
        <table class="table">
        <thead>
        <tr>
        <th><h2 class="big-heading">Thông tin tour</h2></th>
        <th></th>
        <th>Thời gian</th>
        <th>Giá</th>
        </tr>
        </thead>
        <tbody>
        <tr>
        
        <?php
          $ket_noi = mysqli_connect("localhost","root","","mis_booking");
          $id=$_GET["id"];
          $sql = "SELECT * FROM `tbl_tour` WHERE `id_tour` = '".$id."' " ;

          $noi_dung_tour = mysqli_query($ket_noi,$sql);
          while ($row = mysqli_fetch_array($noi_dung_tour))
          {    
        ;?>
        <td><img alt="commerce" src="img/tour/<?php echo $row["anh_1"];?>"></td>
              <td>
              <div class="flexCont">
               <h3 class="type big-heading"><?php echo $row["diem_den"];?></h3>
               <div class="subtype"><?php echo $row["loai_hinh"];?></div>
               
              </div>
              </td>
              <td>
              <select>
              
              <option value="" selected><?php echo $row["khoang_thoi_gian"];?></option>
              </select>
              </td>
              <td>
              <div class="price big-heading">$ <?php echo $row["gia"];?></div>
              <div class="disc">$ <?php echo $row["gia"]*1.25;?></div>
              </td>
            </tr>
            <tr>
        </tbody>
        </table>
      </div>
        
        </div>
      </div>
      </section>
      
      <section>
        <div class="container-fluid m-5-hor onStep" data-animation="fadeInUp" data-time="300">
          <div class="row">
            <form  method="POST" action="ecommerce-payment.php?id_tour=<?php echo $id ;?>" enctype="multipart/form-data">
            <div class="col-md-6">
              <h5 class="big-heading">ĐĂNG KÍ NGAY BÂY GIỜ</h5>
                <hr>
                <div class="form-group row">
                  <div class="form-group">
                    <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Họ và tên*">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Số điện thoại*">
                  </div>
                  
                <div class="form-group">
                  <input type="text" class="form-control" name="companyname" id="companyname" placeholder="Địa chỉ*">
                </div>

                <div class="form-group">
                  <input type="text" class="form-control" name="zipcode" id="zipcode" placeholder="Số căn cước*">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="email" id="email" placeholder="Email*">
                </div>
                
                <div class="checkbox">
                  <label><input type="checkbox"> Tôi đã đọc và đồng ý với các điều khoản</label>
                </div>
                <div class="checkbox">
                  <label><input type="checkbox"> Đăng kí nhận tin tức mới nhất</label> 
                </div>                       
            </div>
            
            <div class="clearfix"></div>
            <div class="col-md-6">
              <a class="btn-ecom" href="destination.php">Trở lại danh sách tour</a>
            </div>
            <div class="col-md-6">
              <button type="submit" id="send-ecom" class="btn-ecom">Chuyển tới thanh toán</button>
              <!-- <a class="btn-ecom"  >Chuyển tới thanh toán</a> -->
            </div>
            </form>
          </div>
        </div>    
      </section>

      <?php
          }
          mysqli_close($ket_noi);
      ;?> 
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