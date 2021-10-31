<!DOCTYPE html>
<html lang="zxx">
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
      <section id="subheader">
        <div class="container-fluid m-5-hor">
          <div class="row">
            <div class="col-md-12">
              <h1 class="big-heading">
                Điểm đến 
              </h1>
              
            </div>
        </div>
       </div>
      </section>
      <!-- subheader end -->
      
      <!-- section -->
      <section aria-label="section-blog" id="content">
        <div class="container-fluid m-5-hor">
          <div class="row">
          
            <!-- left content -->
            <div class="col-md-3">
                <div class="frm-search" style="background: url(img/bg-search-ver.jpg);">
                <div class="container-fluid m-5-hor m-5-hor-dev">
                  <div class="row">

                    <form class="form-inline" method="GET" action="destination_search.php" id="sform">
                      <div class="form-group">
                        <h3 class="big-heading">Tìm kiếm</h3>
                      </div>
                      <div class="form-group search-icn">
                        <label for="tu_khoa">Từ khóa</label>
                        <input type="text" class="form-control" required id="tu_khoa " name="tu_khoa">
                      </div>
                      <div class="form-group">
                        <label for="the_loai">Chọn Thể loại </label>
                        <select name="select-trip" id="the_loai" >
                          <option value="99">- All -</option>
                          <option value="Du lịch tham quan">Du lịch tham quan</option>
                          <option value="Du lịch sang trọng">Du lịch sang trọng</option>
                          <option value="Du lịch nước ngoài">Du lịch nước ngoài</option>
                          <option value="Du lịch mạo hiểm">Du lịch mạo hiểm</option>
                          <option value="Du lịch tâm linh">Du lịch tâm linh</option>
                        </select>
                      </div>
                    
                      <div class="form-group search-icn">
                        <label for="dia_diem">Địa điểm</label>
                        <input type="text" class="form-control" required id="dia_diem" name="dia_diem">
                      </div>
                      <div class="form-group">
                        <label for="thoi_gian">Thời Gian</label>
                        <select name="duraion" required id="thoi_gian" name="thoi_gian">
                          <option value="">- All -</option>
                          <option value="1 ngày">1 Ngày</option>
                          <option value="2 ngày 1 đêm">2 ngày 1 đêm</option>
                          <option value="3 ngày 2 đêm">3 ngày 2 đêm</option>
                          <option value="4 ngày 3 đêm">4 ngày 3 đêm</option>
                          <option value="5 ngày 4 đêm">5 ngày 4 đêm</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Ngày</label>
                        <div id="filterDate2">
                        <!-- Datepicker as text field -->         
                        <div class="input-group date" data-date-format="dd/mm/yyyy">
                          <input type="text" class="form-control" placeholder="dd/mm/yyyy" required>
                          <div class="input-group-addon" >
                            <span class="fa fa-calendar"></span>
                          </div>
                        </div>
                      </div>  
                      </div>
                      <input class="btn-frm-search" value="Tìm kiếm" type="submit">
                    </form> 
                  
                  </div>
                </div>
                </div>
                <!-- section search end -->
            </div>
            <!-- left content end -->

            <!-- right content -->
            <div class="col-md-9"> 
              <div class="row">
                <?php
                  $ket_noi = mysqli_connect("localhost","root","","mis_booking");

                  $sql=" SELECT * FROM `tbl_tour` ";

                  $noi_dung_tour = mysqli_query($ket_noi,$sql);

                  $i=0;
                  while ($row = mysqli_fetch_array($noi_dung_tour))
                  {    
                    $i++;
                ;?>  
                
                <div class="col-md-6 col-lg-4">
                <div class="gal-home">
                  <a href="projects-detail.php?id=<?php echo $row['id_tour'];?>" >
                    <div class="hovereffect">
                      <img alt="imageportofolio" class="img-responsive" src="./img/tour/<?php echo $row["anh_1"] ;?>">
                      
                    </div>
                    
                    <div class="gal-home-content">
                      <div class="row">
                        <div class="col-md-8">
                          <h4 class="autoheight"> <?php echo $row["diem_den"] ;?> </h4>
                          <p><?php echo $row["khoang_thoi_gian"] ;?></p>
                          <div class="star-content">
                            <i class="fa fa-star" aria-hidden="true"></i> 
                            <i class="fa fa-star" aria-hidden="true"></i> 
                            <i class="fa fa-star" aria-hidden="true"></i> 
                            <i class="fa fa-star" aria-hidden="true"></i> 
                            <i class="fa fa-star" aria-hidden="true"></i> 
                           </div>
                           <div class="review-cont big-heading"><?php echo $row["loai_hinh"] ;?></div>
                         </div>
                         <div class="col-md-4"> 
                            <div class="heading-price">Giá từ</div>
                            <div class="price big-heading"><?php echo $row["gia"] ;?>$</div>
                          </div>
                      </div>
                    </div>
                    
                  </a>
                </div>
                </div>
                <?php
                    }
                  ;?>
             </div>
            </div>
            <!-- right content end -->
               
          </div>
        </div>
      </section>
      <!-- section end -->
      
       
      <!--  subfooter --> 
      <section aria-label="subfooter" class="subfooter no-bottom">
        <div class="container-fluid m-5-hor">
          <div class="row">
           <div class="col-md-4">
            <div class="wrap-subfooter">
             <h4>Nhiệm vụ</h4>
             <div class="subfooter-content-left"><i>Mang lại dịch vụ hoàn hảo đến với khách hàng.</i> <br> <i>Không ngừng vươn lên. </i> <br> <i>Tất cả vì sự hài lòng của khách hàng.</i> </div>
            </div>
           </div>
           
           <div class="col-md-3 col-md-offset-1" >
            <div class="wrap-subfooter">
             <h4>Điểm đến mới nhất</h4>
              <div class="tag-country" >
                <a href="destination_new.php?id=tham_quan" class="list-country"  >
                  <?php 
                    $sql=" SELECT * FROM `tbl_tour` WHERE `loai_hinh` LIKE 'Du lịch tham quan' ";
                    $sl= mysqli_query($ket_noi,$sql);
                  ;?>
                  Du lịch tham quan <sup>(<?php echo mysqli_num_rows($sl); ;?>)tours</sup>
                </a>
                <a href="destination_new.php?id=sang_trong" class="list-country" >
                  <?php 
                    $sql=" SELECT * FROM `tbl_tour` WHERE `loai_hinh` LIKE 'Du lịch sang trọng' ";
                    $sl= mysqli_query($ket_noi,$sql);
                  ;?>
                  Du lịch sang trọng <sup>(<?php echo mysqli_num_rows($sl); ;?>)tours</sup>
                </a>
                <a href="destination_new.php?id=nuoc_ngoai" class="list-country" >
                  <?php 
                    $sql=" SELECT * FROM `tbl_tour` WHERE `loai_hinh` LIKE 'Du lịch nước ngoài' ";
                    $sl= mysqli_query($ket_noi,$sql);
                  ;?>
                  Du lịch nước ngoài <sup>(<?php echo mysqli_num_rows($sl); ;?>)tours</sup>
                </a>
                <a href="destination_new.php?id=mao_hiem" class="list-country" >
                  <?php 
                    $sql=" SELECT * FROM `tbl_tour` WHERE `loai_hinh` LIKE 'Du lịch mạo hiểm' ";
                    $sl= mysqli_query($ket_noi,$sql);
                  ;?>
                  Du lịch mạo hiểm <sup>(<?php echo mysqli_num_rows($sl); ;?>)tours</sup>
                </a>
                <a href="destination_new.php?id=tam_linh" class="list-country" >
                  <?php 
                    $sql=" SELECT * FROM `tbl_tour` WHERE `loai_hinh` LIKE 'Du lịch tâm linh' ";
                    $sl= mysqli_query($ket_noi,$sql);
                  ;?>
                  Du lịch tâm linh <sup>(<?php echo mysqli_num_rows($sl); ;?>)tours</sup>
                </a>
                <?php
                    mysqli_close($ket_noi);
                ;?>
              </div>
            </div>  
           </div>
           <div class="col-md-3 col-md-offset-1">
            <div class="wrap-subfooter">
             
            </div>
           </div>
          </div>
        </div>
      </section>  
      <!--  subfooter end -->     

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
    
    <!-- CHỌN GIÁ TRỊ -->
    <script>
      function getSelectValue()
      {
        var selectedValue = document.getElementById("the_loai").value;
        console.log(selectedValue);
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