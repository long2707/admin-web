<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Sửa tin tức</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
	    <?php         
            // 1. 
            include('../config.php');


            // 2. 
            $id_tour = $_POST["txtIDTour"];
            $ten_tour = $_POST["txtTenTour"];
            $loai_hinh = $_POST["txtLoaiHinh"];
            $thoi_gian = $_POST["txtThoiGian"];
            $DV1 = $_POST["txtDV1"];
            $DV2 = $_POST["txtDV2"];
            $DV3 = $_POST["txtDV3"];
            $DV4 = $_POST["txtDV4"];
            $DV5 = $_POST["txtDV5"];
            $gia = $_POST["txtGia"];
            $link = $_POST["txtLink"];
            $gioi_thieu = $_POST["txtGioiThieu"];


            $noi_dat_file_anh_minh_hoa_1 = "../img/tour/".basename($_FILES["txtAnhMinhHoa1"]["name"]);
            $file_anh_tam_1 = $_FILES["txtAnhMinhHoa1"]["tmp_name"];
            $ket_qua_up_anh_1 = move_uploaded_file($file_anh_tam_1, $noi_dat_file_anh_minh_hoa_1);
            if(!$ket_qua_up_anh_1) {
                $anh_minh_hoa_1 = NULL;
            } else {
                $anh_minh_hoa_1 = basename($_FILES["txtAnhMinhHoa1"]["name"]);
            }
            

            $noi_dat_file_anh_minh_hoa_2 = "../img/tour/".basename($_FILES["txtAnhMinhHoa2"]["name"]);
            $file_anh_tam_2 = $_FILES["txtAnhMinhHoa2"]["tmp_name"];
            $ket_qua_up_anh_2 = move_uploaded_file($file_anh_tam_2, $noi_dat_file_anh_minh_hoa_2);
            if(!$ket_qua_up_anh_2) {
                $anh_minh_hoa_2 = NULL;
            } else {
                $anh_minh_hoa_2 = basename($_FILES["txtAnhMinhHoa2"]["name"]);
            }


            // 3. Viết câu lệnh truy vấn để sửa dữ liệu vào bảng TIN TỨC trong CSDL)
            $sql= "
                    UPDATE `tbl_tour` 
                    SET `loai_hinh` = '".$loai_hinh."', `diem_den` = '".$ten_tour."', `khoang_thoi_gian` = '".$thoi_gian."', `anh_1` = '".$anh_minh_hoa_1."', `anh_2` = '".$anh_minh_hoa_2."', `gioi_thieu_tour` = '".$gioi_thieu."', `dich_vu_1` = '".$DV1."', `dich_vu_2` = '".$DV2."', `dich_vu_3` = '".$DV3."', `dich_vu_4` = '".$DV4."', `dich_vu_5` = '".$DV5."', `gia` = '".$gia."', `link` = '".$link."' 
                    WHERE `tbl_tour`.`id_tour` = '".$id_tour."'
                  ";

            // 4. 
            $noi_dung = mysqli_query($ket_noi, $sql);

            // 5. 
            echo "
            	<script type='text/javascript'>
            		window.alert('Bạn đã sửa thành công');
            	</script>
            ";

            echo "
            	<script type='text/javascript'>
            		window.location.href='tour.php';
            	</script>
            ";
	    ;?>
    </body>
</html>
