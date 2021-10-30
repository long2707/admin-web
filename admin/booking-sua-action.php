
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Sửa Thông Tin BOOKING </title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
	    <?php         
            // 1. Load file cấu hình để kết nối đến máy chủ CSDL, CSDL
            include('config.php');


            // 2. Lấy ra được các dữ liệu mà trang TIN TỨC THÊM MỚI chuyển sang
            $booking_id = $_POST["txtID"];
            $hoten = $_POST["txtHoTen"];
            $Sodt = $_POST["txtSDT"];
            $Socc = $_POST["txtSCC"];
            $Loaihinh = $_POST["txtLoaiHinh"];
            $hinhthuc = $_POST["txthinhthuc"];
            $Gia = $_POST["txtGia"];

            

            // 3. Viết câu lệnh truy vấn để sửa dữ liệu vào bảng TIN TỨC trong CSDL)
                      
                $sql = "
                    UPDATE `tbl_booking` 
                    SET  `ho_va_ten` = '".$hoten."',`so_dien_thoai` = '".$Sodt."', `so_can_cuoc` = '".$Socc."',`loai_hinh_DL` = '".$Loaihinh."',`hinh_thuc_thanh_toan` = '".$hinhthuc."',`gia` = '".$Gia."'
                    WHERE `id_booking` = '".$booking_id."'
                    ";                
            // echo $sql; exit();

            // 4. Thực thi câu lệnh truy vấn (mục đích trả về dữ liệu các bạn cần)
            $noi_dung_album = mysqli_query($ket_noi, $sql);

            // 5. Hiển thị ra thông báo các bạn đã sửa tin tức thành công và đẩy các bạn về trang quản trị tin tức
            echo "
            	<script type='text/javascript'>
            		window.alert('Bạn đã sửa bài viết thành công');
            	</script>
            ";

            echo "
            	<script type='text/javascript'>
            		window.location.href='booking.php';
            	</script>
            ";
	    ;?>
    </body>
</html>
