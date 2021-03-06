<?php
    
    $page = 'tour';
    session_start();
    if (!$_SESSION["da_dang_nhap"]) {
         header("Location: login.php");
    }

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>MIS - BOOKING | THÊM MỚI TOUR</title>
        <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <link href="css/main.css" rel="stylesheet" />
        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <script>
          tinymce.init({
            selector: '#txtGioiThieu'
          });
        </script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark px-4" >
            
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 ">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 14px;">Xin chào, admin</a>
                    <ul class="dropdown-menu dropdown-menu-end drop-menu" aria-labelledby="navbarDropdown">
                        <li class="border-bt"><a class="dropdown-item" href="#!">
                            <i class='bx bxs-user' ></i>
                            Tài khoản</a></li>
                            <li><a class="dropdown-item" href="./logout.php">
                            <i class='bx bx-power-off icon-box'></i>
                            Thoát</a></li>
                       
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                    <ul class="nav">
                            <li class=" <?php if($page == 'home'){echo 'active';} ?>">
                               
                                <a class="" href="index.php"><i class='bx bxs-home-circle'></i>
                                    <b>Trang Chủ</b></a>
                            </li>
                            <li class="<?php if($page == 'tour'){echo 'active';} ?>">
                                <a class="" href="tour.php"><i class='bx bxs-landscape'></i>
                                    <b>Tour</b></a>
                            </li>
                            <li class="<?php if($page == 'booking'){echo 'active';}?>">
                                <a class="" href="booking.php"><i class='bx bx-calendar' ></i>
                                    <b>Booking</b></a>
                            </li>
                            <li class="<?php if($page == 'send'){echo 'active';}?>">
                                <a class="" href="./phan_hoi_kh.php"><i class='bx bx-mail-send'></i>
                                    <b>Phản hồi của KH</b></a>
                            </li>
                        
                            <li class="<?php if($page == 'setting'){echo 'active';}?>">
                                <a class="" href="./setting.php"><i class='bx bxs-brightness'></i>
                                    <b>Thiết Lập</b></a>
                            </li>
                        </ul>
                    </div>
                    
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div >
                      <div class="container-list">
                        <div class="display-flex">
                            <h2 class="container-heading">Cập nhật tour</h2>
                         
                        </div>
                      </div>
                        <div class="card mb-4 px-4">
                            <div class="card-body">
                            <?php
                                    include('./config.php');
                                    $id_tour = $_GET["id"];

                                    $sql = "
                                              SELECT * 
                                              FROM tbl_tour
                                              WHERE id_tour = ".$id_tour."
                                              ORDER BY id_tour DESC
                                    ";

                                    // 3. Thực thi câu lệnh truy vấn (mục đích trả về dữ liệu các bạn cần)
                                    $noi_dung = mysqli_query($ket_noi, $sql);

                                    // 4. Hiển thị ra dữ liệu mà các bạn vừa lấy được
                                    $row = mysqli_fetch_array($noi_dung);
                                ;?>
                                <form method="POST" action="edit-tour-action.php" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <div class="col-md-6 padd-left-0">
                                            <label for="txtTenTour">Tên tour</label>
                                            <input class="form-control" id="txtTenTour" name="txtTenTour" placeholder="Nhập tên tour" value="<?php echo $row['diem_den'];?>"/>
                                        </div>
                                        <div class="col-md-6 padd-right-0">
                                            <label for="txtLoaiHinh">Loại hình</label>
                                            <input class="form-control" id="txtLoaiHinh" name="txtLoaiHinh" placeholder="Nhập loại dịch vụ" value="<?php echo $row['loai_hinh'];?>"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-6 padd-left-0">
                                            <label for="txtThoiGian">Thời gian</label>
                                            <input class="form-control" id="txtThoiGian" name="txtThoiGian" placeholder="Nhập khoảng thời gian của tour" value="<?php echo $row['khoang_thoi_gian'];?>"/>
                                        </div>
                                        <div class="color-md-6 padd-right-0">
                                            <label for="txtGia">Giá tour</label>
                                            <input class="form-control" id="txtGia" name="txtGia" placeholder="Nhập giá tour" value="<?php echo $row['gia'];?>"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-6 padd-left-0">
                                            <label for="txtDV1">Dịch vụ 1</label>
                                            <input class="form-control" id="txtDV1" name="txtDV1" placeholder="Nhập Dịch vụ 1" value="<?php echo $row['dich_vu_1'];?>"/>
                                        </div>
                                        <div class="col-md-6 padd-right-0">
                                            <label for="txtDV2">Dịch vụ 2</label>
                                            <input class="form-control" id="txtDV2" name="txtDV2" placeholder="Nhập Dịch vụ 2" value="<?php echo $row['dich_vu_2'];?>"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-6 padd-left-0">
                                            <label for="txtDV3">Dịch vụ 3</label>
                                            <input class="form-control" id="txtDV3" name="txtDV3" placeholder="Nhập Dịch vụ3" value="<?php echo $row['dich_vu_3'];?>"/>
                                        </div>
                                        <div class="col-md-6 padd-right-0">
                                            <label for="txtDV4">Dịch vụ 4</label>
                                            <input class="form-control" id="txtDV4" name="txtDV4" placeholder="Nhập Dịch vụ 4" value="<?php echo $row['dich_vu_4'];?>"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-6 padd-left-0">
                                            <label for="txtDV5">Dịch vụ 5</label>
                                            <input class="form-control" id="txtDV5" name="txtDV5" placeholder="Nhập Dịch vụ 5" value="<?php echo $row['dich_vu_5'];?>"/>
                                        </div>
                                        <div class="col-md-6 padd-right-0">
                                            <label for="txtLink">Link</label>
                                            <input class="form-control" id="txtLink" name="txtLink" placeholder="Nhập Link" value="<?php echo $row['link'];?>"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <div class="color-md-6 padd-right-0">
                                            <label for="txtGioiThieu">Giới thiệu</label>
                                            <input class="form-control" id="txtGioiThieu" name="txtGioiThieu" placeholder="Nhập giới thiệu chung về tour" value="<?php echo $row['gioi_thieu_tour'];?>"/>
                                    </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-6 padd-left-0">
                                            <label for="txtAnhMinhHoa1">Ảnh minh họa 1</label>
                                            <input type="file" class="form-control  control-flie" id="txtAnhMinhHoa1" name="txtAnhMinhHoa1" placeholder="Ảnh minh họa 1" value="<?php echo $row['anh_1'];?>" />

                                        </div>
                                        <div class="col-md-6 padd-left-0">
                                            <label for="txtAnhMinhHoa2">Ảnh minh họa 2</label>
                                            <input type="file" class="form-control  control-flie" id="txtAnhMinhHoa2" name="txtAnhMinhHoa2" placeholder="Ảnh minh họa 2" value="<?php echo $row['anh_2'];?>" />

                                        </div>
                                    </div>
                                    <div class="mt-4 mb-0">
                                        <input type="hidden" name="txtIDTour" value="<?php echo $row['id_tour'];?>">
                                        <button type="submit" class="btn btn-primary"  style="color: #fff;">
                                                <i class='bx bxs-save'></i>Lưu
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; MIS BOOKING | 2021</div>
                            <div>
                                <a href="#  ">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
        <script src="https://unpkg.com/boxicons@2.0.9/dist/boxicons.js"></script>
    </body>
</html>
