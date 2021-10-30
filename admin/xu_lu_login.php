<?php 
    // 1. Load file cấu hình để kết nối đến máy chủ CSDL, CSDL
    require_once('./connect/dbhelper.php');

    // 2. Viết câu lệnh truy vấn để kiểm tra xem NGƯỜI DÙNG có tồn tại trong BẢNG NGƯỜI DÙNG?
    $email = $_POST["inputEmail"];
    $mat_khau = $_POST["inputPassword"];

    $sql = "
              SELECT * 
              FROM tbl_admin
              WHERE email = '".$email."' AND password = '".$mat_khau."'
           ";

           	
       $number = excuteLogin($sql);
    # TH1: Nếu số lượng bản ghi = 0 --> email, password không chính xác --> đẩu người dùng về trang đăng nhập
    # TH2: Nếu số lượng bản ghi = 1 --> email, password chính xác --> đẩu người dùng về trang quản trị hệ thống

    if( $number==0) {
		echo "
        	<script type='text/javascript'>
        		window.alert('Bạn không có quyền truy cập');
        	</script>
        ";

        echo "
        	<script type='text/javascript'>
        		window.location.href='login.php';
        	</script>
        ";
    } else {
    	// Khởi tạo phiên làm việc cho người đăng nhập thành công
    	session_start();
    	$_SESSION["da_dang_nhap"] = 1;

        echo "
        <script type='text/javascript'>
            window.alert('Bạn đã đăng nhập thành công');
        </script>
    ";

    echo "
        <script type='text/javascript'>
            window.location.href='index.php';
        </script>
    ";
    }
;?>