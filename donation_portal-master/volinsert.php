<?php
session_start();
include('dbconnection.php');


if(isset($_POST['submit'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $exp = $_POST['expert'];
    $org = $_POST['org'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $event = $_POST['event'];
  $nss = $_POST['nss'];


  $insertquery=" INSERT INTO volunteer( firstname, lastname,experience,org,email,number,address,nss,event) VALUES ('$firstname','$lastname','$exp','$org','$email','$phone','$address','$nss','$event') ";
  $_SESSION['nam']=$_POST['firstname'];

   if ($result=mysqli_query($con,$insertquery)){
     echo'<script>window.location.href="volthankyou.php";</script>';



     }
     else{
       echo"failure";
     }
   }

      ?>