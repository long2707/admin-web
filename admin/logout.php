<?php
session_start();
   if(isset($_SESSION["da_dang_nhap"]) && $_SESSION["da_dang_nhap"]!=null){
       unset($_SESSION["da_dang_nhap"]);
       header("Location: login.php");
       
   }

?>