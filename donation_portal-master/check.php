<?php
session_start();
include('dbconnection.php');
  if(isset($_POST['donate']))
  {
    $fullname=$_POST['fullname'];
    $email=$_POST['emailid'];
    $contactno=$_POST['contactno'];
    $address=$_POST['address'];
    $donationtype=$_POST['typeofdonation'];
    $organisation=$_POST['organisation'];

    $filename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
      $filesize = $_FILES["image"]["size"];
        $filerror = $_FILES["image"]["error"];
        $fileext= explode('.',$filename);
        $fileactualext=strtolower(end($fileext));
        $allowed = array('jpg','jpeg','png', );
        if (in_array($fileactualext,$allowed)) {
          if ($filerror===0) {
            if($filesize<=60000){
              $filenewname=uniqid('',true).".".$fileactualext;
              $filedestination='image/'.$filenewname;
               $_SESSION['name']=$_POST['fullname'];
              move_uploaded_file($tempname,$filedestination);
              $sql="INSERT INTO donations (fullname,email,contactno,address,donationtype,organisation,file_name)VALUES('$fullname','$email','$contactno','$address','$donationtype','$organisation','$filenewname')";
              if(mysqli_query($con,$sql)){

                header('location:thankyou.php');
                } else{

                  echo "<h1>oops!something went wrong,please try again</h1>";
              }


            }else{
              echo '<script>alert("Your file size  should not extend 50kb");
              window.location.href="donation form.php";</script>';
            }

          }else{
            echo '<script>alert("There was an error uploading your file");
            window.location.href="donation form.php";</script>';
          }

        }else{
          echo '<script>alert("invalid upload format(only jpeg,jpg,png files allowed)");
          window.location.href="donation form.php";</script>';


        }


}


?>
