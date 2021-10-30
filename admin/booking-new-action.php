
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>THÊM THÔNG TIN BOOKING </title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
	    <?php         
            include('config.php');

            $hoten = $_POST["txtHoTen"];
            $diachi = $_POST["txtDiaChi"];
            $Sodt = $_POST["txtSDT"];
            $Socc = $_POST["txtSCC"];
            $idtour = $_POST["txtIDTour"];
            $Loaihinh = $_POST["txtLoaiHinh"];
            $HinhThuc = $_POST["txthinhthuc"];
            $Gia = $_POST["txtGia"];

                                  
                $sql = "
                INSERT INTO `tbl_booking` (`id_booking`, `id_tour`, `ho_va_ten`, `dia_chi`, `so_dien_thoai`, `so_can_cuoc`, `loai_hinh_DL`,`hinh_thuc_thanh_toan`, `gia`) 
                VALUES (NULL, '".$idtour."', '".$hoten."', '".$diachi."', '".$Sodt."', '".$Socc."', '".$Loaihinh."','".$HinhThuc."', '".$Gia."');
                    ";
                   
            // echo $sql; exit();
            $noi_dung = mysqli_query($ket_noi, $sql);

            echo "
            	<script type='text/javascript'>
            		window.alert('Bạn đã Thêm bài viết thành công');
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
