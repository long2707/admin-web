<?php
    
   
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
        <title>XÓA THÔNG TIN BOOKING</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <?php 
            // 1. Load file cấu hình để kết nối đến máy chủ CSDL, CSDL
            include('config.php');


            // 2. Lấy ra ID tin tức mà các bạn muốn XÓA
            $id_use = $_GET['id'];

            // 3. Viết câu lệnh truy vấn để XÓA TIN TỨC trong trong CSDL)
            $sql = "
                      DELETE 
                      FROM `tbl_admin` 
                      WHERE `tbl_admin`.`admin_id` = '".$id_use."'
            ";

            // 4. Thực thi câu lệnh truy vấn (mục đích trả về dữ liệu các bạn cần)
            $noi_dung_album = mysqli_query($ket_noi, $sql);

            // 5. Hiển thị ra thông báo các bạn đã thêm mới tin tức thành công và đẩy các bạn về trang quản trị tin tức
            echo "
                <script type='text/javascript'>
                    window.alert('Bạn đã xóa use này thành công');
                </script>
            ";

            echo "
                <script type='text/javascript'>
                    window.location.href='setting.php';
                </script>
            ";
        ;?>
    </body>
</html>
