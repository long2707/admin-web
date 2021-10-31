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
   <?php 
            $ket_noi = mysqli_connect("localhost","root","","mis_booking");

            $ho_ten = $_GET["ho_ten_KH"];
            $phone=$_GET["so_dien_thoai_KH"];
            $dia_chi=$_GET["dia_chi_KH"];
            $email = $_GET["email_KH"];
            $so_can_cuoc = $_GET["so_can_cuoc_KH"];
            $id_tour=$_GET["id_tour"];
            $hinh_thuc_thanh_toan=$_POST["radio-group"];
            $loai_hinh=$_GET["loai_hinh_KH"];
            $gia=$_GET["gia"];
            
            $sql="INSERT INTO `tbl_booking` (`id_booking`, `id_tour`, `ho_va_ten`, `dia_chi`, `so_dien_thoai`, `so_can_cuoc`, `loai_hinh_DL`, `hinh_thuc_thanh_toan`,`gia`) 
                  VALUES (NULL, '".$id_tour."', '".$ho_ten."', '".$dia_chi."', '".$phone."', '".$so_can_cuoc."', '".$loai_hinh."', '".$hinh_thuc_thanh_toan."', '".$gia."');";
            $thuchien=mysqli_query($ket_noi,$sql);
	    ;?>
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
                Kiểm tra
              </h1>
              <div class="commerce-step">
               
               <a>Chọn tour</a>
               <a>Thanh toán</a>
               <a class="active">Hóa đơn</a>
              </div>
            </div>
        </div>
       </div>
      </section>
      <!-- subheader end -->
      <section>
        <div class="container-fluid m-5-hor">
          <div class="row">
           <div id="printreceipt">
            <div class="col-md-6">
              <h5 class="big-heading">ĐƠN ĐẶT HÀNG CỦA BẠN ĐÃ HOÀN TẤT!</h5>
              <div class="headingform">Tour ID : <?php echo $id_tour ;?></div>
                <hr>
                <div class="row">
                 <div class="col-md-6">
                  <div class="headingbook">Họ và tên:</div>
                  <div><?php echo $ho_ten ;?>	</div>
                 </div>
                 <div class="col-md-6">
                  <div class="headingbook">Số điện thoại:</div>
                  <div><?php echo $phone ;?></div>
                 </div>
                 <div class="col-md-6">
                  <div class="headingbook">Email:</div>
                  <div><?php echo $email ;?></div>
                 </div>
                 <div class="col-md-6">
                  <div class="headingbook">Số căn cước:</div>
                  <div><?php echo $so_can_cuoc ;?></div>
                 </div>
                 <div class="col-md-6">
                  <div class="headingbook">Địa chỉ:</div>
                  <div><?php echo $dia_chi ;?>	</div>
                 </div>           
                 <div class="col-md-6">
                  <div class="headingbook">Loại hình du lịch:</div>
                  <div><?php echo $loai_hinh ;?></div>
                 </div>
                </div>  
                <div class="clearfix space-single"></div> 
            </div>

            <div class="col-md-6">
              <h5 class="big-heading">CHI TIẾT THANH TOÁN</h5>
              <div class="headingform">THÔNG TIN THANH TOÁN</div>
                <hr>
                <div class="row">
                   <div class="col-md-6">
                    <div class="headingbook">Hình thức thanh toán:</div>
                    <div><?php echo $hinh_thuc_thanh_toan ;?></div>
                   </div>
                   <div class="col-md-6">
                    <div class="headingbook">Số tiền:</div>
                    <div>$<?php echo $gia ;?></div>
                   </div>
                   <div class="col-md-6">
                    <div class="headingbook">Trạng thái:</div>
                    <div>Completed </div>
                   </div>
                   <div class="col-md-6">
                    <div class="headingbook">Ngày thanh toán:</div>
                    <div><?php $today = date("d/m/Y"); echo $today;?> </div>
                   </div>
                   
                 </div>  
                <hr>
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
    <script type="text/javascript">
        function PrintDiv() {
            var contents = document.getElementById("printreceipt").innerHTML;
            var frame1 = document.createElement('iframe');
            frame1.name = "frame1";
            frame1.style.position = "absolute";
            frame1.style.top = "-1000000px";
            document.body.appendChild(frame1);
            var frameDoc = frame1.contentWindow ? frame1.contentWindow : frame1.contentDocument.document ? frame1.contentDocument.document : frame1.contentDocument;
            frameDoc.document.write(contents);
            frameDoc.document.close();
            setTimeout(function () {
                window.frames["frame1"].focus();
                window.frames["frame1"].print();
                document.body.removeChild(frame1);
            }, 500);
            return false;
        }
    </script>
  </body>
</html>