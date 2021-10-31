<!DOCTYPE html>
<html lang="zxx">
  <head>
    <meta charset="utf-8">
    <title>Plesire | Interactive Travel Template</title>
    <meta content="" name="description">
    <meta content="" name="author">
    <meta content="" name="keywords">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <!-- favicon -->
    <link href="img/favicon.gif" rel="icon" sizes="32x32" type="image/png">
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
               
               <a >Nhập thông tin</a>
               <a class="active">Thanh toán</a>
               <a>Hóa đơn</a>
              </div>
            </div>
        </div>
       </div>
      </section>
      <!-- subheader end -->
      
      
      <?php 
            $ket_noi = mysqli_connect("localhost","root","","mis_booking");

            $ho_ten = $_POST["firstname"];
            $phone=$_POST["phone"];
            $dia_chi=$_POST["companyname"];
            $email = $_POST["email"];
            $so_can_cuoc = $_POST["zipcode"];
            $id_tour=$_GET["id_tour"];
            
	    ;?>
      <?php
        $sql = "
                SELECT `loai_hinh`  
                FROM `tbl_tour` 
                WHERE `id_tour` = '".$id_tour."';";
        $loai_hinh = mysqli_query($ket_noi, $sql);
        while ($row = mysqli_fetch_array($loai_hinh))
        {
          $loai_hinh_KH=$row["loai_hinh"];
        }

        $sql = "
                SELECT `gia`  
                FROM `tbl_tour` 
                WHERE `id_tour` = '".$id_tour."';";
        $gia = mysqli_query($ket_noi, $sql);
        while ($row = mysqli_fetch_array($gia))
        {
          $gia_KH=$row["gia"];
        }
      ;?>
      <section>
        <div class="container-fluid m-5-hor onStep" data-animation="fadeInUp" data-time="300">
          <div class="row">
            <form method="POST" action="ecommerce-checkout.php?id_tour=<?php echo $id_tour;?>&ho_ten_KH=<?php echo $ho_ten ;?>&so_dien_thoai_KH=<?php echo $phone;?>&email_KH=<?php echo $email;?>&so_can_cuoc_KH=<?php echo $so_can_cuoc;?>&dia_chi_KH=<?php echo $dia_chi;?>&loai_hinh_KH=<?php echo $loai_hinh_KH ;?>&gia=<?php echo $gia_KH ;?>" enctype="multipart/form-data">
            <div class="col-md-6">
              <h5 class="big-heading">Thông tin đặt tour</h5>
              <div class="headingform">Mã tour ID : <?php echo $id_tour ;?></div>
                <hr>
                <div class="row">
                 <div class="col-md-6">
                  <div class="headingbook">Họ và tên:</div>
                  <div ><?php echo $ho_ten ;?>	</div>
                 </div>
                 <div class="col-md-6">
                  <div class="headingbook">Số điện thoại:</div>
                  <div ><?php echo $phone;?>	</div>
                 </div>
                 <div class="col-md-6">
                  <div class="headingbook">Email:</div>
                  <div ><?php echo $email;?></div>
                 </div>
                 <div class="col-md-6">
                  <div class="headingbook">Số căn cước:</div>
                  <div ><?php echo $so_can_cuoc;?></div>
                 </div>
                 <div class="col-md-6">
                  <div class="headingbook">Địa chỉ:</div>
                  <div ><?php echo $dia_chi;?>	</div>
                 </div>
                 
                 <div class="col-md-6">
                  <div class="headingbook">Loại hình</div>
                  <div ><?php echo $loai_hinh_KH ;?></div>
                 </div>
                 <div class="col-md-6">
                  <div class="headingbook">Đã đồng ý với mọi điều khoản</div>
                  <div>Liên hệ : 024.3852.6419	</div>
                 </div>
                </div>  
                <div class="clearfix space-single"></div> 
            </div>

            <div class="col-md-6">
              <h5 class="big-heading">Hình thức thanh toán</h5>
              <div class="headingform">Xin mời chọn hình thức thanh toán</div>
                <hr>  
				<p>
					<input type="radio" id="payment1" name="radio-group" checked value="Credit Card">
					<label for="payment1" class="labelcard">Credit Card</label>
				</p>
				<p class="labeldetail">( Mastercard, Visa, American Express, Discover etc )</p>
				<p>
					<input type="radio" id="payment2" name="radio-group" value="PayPal">
					<label for="payment2" class="labelcard">PayPal</label>
				</p>
				<p class="labeldetail">Thanh toán mà không cần chia sẻ thông tin tài chính của bạn và hoàn tất giao dịch mua.</p>
				<p>
					<input type="radio" id="payment3" name="radio-group" value="Chuyển khoản ngân hàng">
					<label for="payment3" class="labelcard" >Chuyển khoản ngân hàng</label>
				</p>
				<p class="labeldetail">Thực hiện thanh toán của bạn trực tiếp vào tài khoản ngân hàng của chúng tôi và vui lòng sử dụng Id Đơn đặt hàng của bạn làm tham chiếu thanh toán.</p>
                <hr>
                <p>Thanh toán bằng tiền điện tử sẽ được tự động xác minh vào tài khoản của bạn. Sau khi thanh toán của bạn được xác nhận, bạn sẽ nhận được hóa đơn và in từ email hoặc tài khoản của mình.</p>
            </div>
            <div class="clearfix"></div>
            <div class="col-md-6">
              <a class="btn-ecom" href="ecommerce-form.php?id=<?php echo $id_tour;?>">Nhập lại thông tin</a>
            </div>
            <div class="col-md-6">
              <button type="submit" id="send-ecom" class="btn-ecom">Đi tới Hóa đơn</button>
              <!-- <a class="btn-ecom" href="ecommerce-checkout.html">Go to Checkout</a> -->
            </div>
            </form>
          </div>
        </div>    
      </section>

       
      <!-- footer -->
      <footer class="main text-center">
        <div class="container-fluid m-5-hor">
          <div class="row">
          
          <div class="onStep" data-animation="fadeInUp" data-time="300">
          <div class="col-md-4 text-left">
          <span><a href="#">Email: companyname@gmail.com</a></span>
          <span>Copyright - 2018 Plesire Travel All Right Reserved</span>
          </div>
          
          
            <div class="col-md-4 text-right">
              <span>129 Park street, New York City, NY 10903</span>
              <span>Phone: (+6221) 000 888 999</span>
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
    <script>
      function quay_lai_trang_truoc(){
          history.back();
      }
  </script>
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