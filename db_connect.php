<?php
$conn = mysqli_connect('localhost','shaun','test1234','ninja pizza');

if(!$conn){
  echo 'Connection error:' . mysqli_connect_error();
}
 ?>
