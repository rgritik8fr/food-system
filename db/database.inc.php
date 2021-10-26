<?php
$con=mysqli_connect('localhost','root','','foodcom');
// if($con){
//     echo "<script>alert('helo')</script>";
// }

session_start();

function check($str){
global $str;
    echo "<pre>";
       print_r($str);
       echo '<pre>';
  
}
?>