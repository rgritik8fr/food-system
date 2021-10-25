<?php
$con=mysqli_connect('localhost','root','','foodcom');
// if($con){
//     echo "connect";
// }

session_start();

function check($str){
global $str;
    echo "<pre>";
       print_r($str);
       echo '<pre>';
  
}
?>