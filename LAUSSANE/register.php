<?php 
 $con = mysqli_connect('localhost','root');

if($con){
    echo "Connection Successful";
}
   else{
       echo "No Connection";
   }

   mysqli_select_db ($con,'developerdata');

   $usrnm = $_POST['usrnm'];
   $email = $_POST['email'];
   $psw = $_POST['psw'];
  

   $query = " insert into registerdata (usrnm, email, psw) values ('$usrnm','$email','$psw')";
  
   echo "$query";
   mysqli_query($con,$query);
  header('location:about.php');
 ?>
 