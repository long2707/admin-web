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
  
  <?php 
            $ket_noi = mysqli_connect("localhost","root","","mis_booking");

            $ho_ten = $_POST["name-contact-1"];
            $email = $_POST["email-contact"];
            $phan_hoi = $_POST["message-contact"];
            
            $sql = "
                    INSERT INTO `tbl_phan_hoi` (`id_phan_hoi`, `ho_va_ten`, `email`, `noi_dung`) 
                    VALUES (NULL, '".$ho_ten."', '".$email."', '".$phan_hoi."');";
            

            $noi_dung_phan_hoi = mysqli_query($ket_noi, $sql);

            echo "
            	<script type='text/javascript'>
            		window.alert('Bạn đã thêm phản hòi thành công');
            	</script>
            ";

            echo "
            	<script type='text/javascript'>
            		window.location.href='contact.php';
            	</script>
            ";
	    ;?>
  </body>
</html>
