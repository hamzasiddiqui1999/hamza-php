<?php 
 $con = mysqli_connect('localhost','root');

if($con){
    echo "Connection Successful";
}
   else{
       echo "No Connection";
   }

   mysqli_select_db ($con,'developerdata');

  
   $email = $_POST['email'];
   $psw = $_POST['psw'];
  

   $query = " insert into login (email, psw) values ('$email','$psw')";
  
   echo "$query";
   mysqli_query($con,$query);
  header('location:index.php');
 ?>
 