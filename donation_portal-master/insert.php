<?php
session_start();
if (isset($_POST['submit'])){
    $_SESSION['name']=$name=$_POST['organization'];
  $email=$_POST['email'];
  $password=md5($_POST['password']);
  $_SESSION['username']=$username=strtolower($name.".".rand(0,9999));
  include('dbconnection.php');
  $query="INSERT INTO admin(name,username,email,password) VALUES('$name','$username','$email','$password')";
  $q="SELECT email FROM admin where email='$email'";
  $exe=mysqli_query($con,$q);
  if(mysqli_num_rows($exe)==0){
  if($res=mysqli_query($con,$query)){

    echo'<script> window.location.href="thanyousignup.php";</script>';
      }
  else{

  }

}
else{
      echo'<script>alert("the email is already registered");</script>';
      echo'<script> window.location.href="signup.html";</script>';
}
}

 ?>
