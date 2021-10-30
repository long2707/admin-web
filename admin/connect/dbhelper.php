<?php
   
   require_once('config.php');
// insert, update, delete

function excute($sql){
    $con  = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
    mysqli_get_charset($con);

     mysqli_query($con, $sql);

     mysqli_close($con);


}
  //select
function excuteResult($sql){

    
    $conn  = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
    mysqli_get_charset($conn);

     $result =  mysqli_query($conn, $sql);
     $list = [];
     while($row = mysqli_fetch_array($result)){
         $list[] = $row; 
     }

     mysqli_close($conn);
      
     return $list;
}
//check login
function excuteLogin($sql){
    $conn  = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
    mysqli_get_charset($conn);

     $result =  mysqli_query($conn, $sql);
     $row = mysqli_num_rows($result);
     mysqli_close($conn);
     return $row;
}
// sum

function excuteSum($sql){
    $conn  = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
    mysqli_get_charset($conn);

     $result =  mysqli_query($conn, $sql);
     $row = mysqli_fetch_assoc($result); 
     return $row;
}



?>