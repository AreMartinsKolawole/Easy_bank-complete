<?php

 $con = mysqli_connect('localhost', 'root');

 mysqli_select_db($con, 'easybank_db');


 $emai = $_POST['email'];
 $psw = $_POST['psw'];
 $psw_repeat = $_POST['psw-repeat'];

 if ($psw !== $psw_repeat) {
     header("location: index2.php?error = pasword not matching!");
     exit();
 } else {
     $query = "INSERT INTO users (email, passwd) VALUES ('$emai', '$psw')";
     mysqli_query($con, $query);
     header("location: index.php");
 }







 ?>