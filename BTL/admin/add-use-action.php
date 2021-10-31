<?php
  
   
  
      require_once("./connect/dbhelper.php");
      
       $use = $_POST['txtTenUse'];
       $email = $_POST['txtEmail'];
       $password = $_POST['txtPassword'];

        $sql = "INSERT INTO tbl_admin( email, ten, password) VALUES ( '$email', '$use', '$password' )";
      //   echo $sql;
      //   die();
        excute($sql);
        echo "
        <script type='text/javascript'>
           window.alert('Bạn đã thêm user  mới thành công');
           window.location.href='setting.php';
           </script>
     ";
    


    

?>
