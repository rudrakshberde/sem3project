<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="volunt.css">
    <title>Volunteer form</title>
</head>
<body style="background-color:#61ED1C;">
<form action=" " method="POST">

<div class="wrapper">
    <div class="title">
      Volunteer Form
    </div>
    <div class="form">
       <div class="inputfield " >
          <label>First Name</label>
          <input  name="firstname" type="text" class="input" required>
       </div>
        <div class="inputfield">
          <label>Last Name</label>
          <input  name="lastname"type="text" class="input" required>
       </div>

       <div class="inputfield">
        <label>Previous Volunteer Experience</label>
        <div class="custom_select">
          <select name="expert">
            <option value="" >Select</option>
            <option value="yes">Yes</option>
            <option value="no">No</option>
          </select>
        </div>
</div>
       <div class="inputfield">
        <label>Organisation</label>
        <div class="custom_select">
          <select class="" name="org">
<option value="">Select</option>

          <?php
    session_start();
          error_reporting(0);
          include('dbconnection.php');
          $query="SELECT * from admin";
          if($result = mysqli_query($con, $query)){


            while($row = mysqli_fetch_array($result)){
            ?>





        <option value="<?php echo $row['username'] ?>"> <?php echo $row['name'] ?></option>';


      <?php

      }
      ?>
      </select>
      <?php
mysqli_free_result($result);
      }
      mysqli_close($con);
      ?>
        </div>
     </div>
        <div class="inputfield">
          <label>Email Address</label>
          <input name="email" type="text" class="input" required>
       </div>
      <div class="inputfield">
          <label>Phone Number</label>
          <input name="phone" type="text" class="input" required>
       </div>
      <div class="inputfield">
          <label>Address</label>
          <textarea name="address" class="textarea"></textarea>
       </div>
       <div class="inputfield">
          <label>Are u a NSS member?</label>
          <div class="custom_select">
            <select name="nss">
              <option  value="">Select</option>
              <option value="yes">Yes </option>
              <option value="no">No</option>
            </select>
          </div>
    </div>
    <div class="inputfield">
        <input type="submit" name="submit" class="btn">
        </div>
</div>

</form>
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
  $nss = $_POST['nss'];


  $insertquery=" INSERT INTO volunteer( firstname, lastname,experience,org,email,number,address,nss) VALUES ('$firstname','$lastname','$exp','$org','$email','$phone','$address','$nss') ";
  $_SESSION['name']=$_POST['firstname'];

   if ($result=mysqli_query($con,$insertquery)){
     echo'<script>window.location.href="volthankyou.php";</script>';



     }
     else{
       echo"failure";
     }
   }

      ?>


</body>
</html>
