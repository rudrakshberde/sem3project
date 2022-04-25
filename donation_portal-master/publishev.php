<?php
session_start();

include('dbconnection.php');
  $organisation=$_SESSION['login'];
if(isset($_POST['publish'])){

    $headline=$_POST['headline'];
    $description=$_POST['description'];
    $eventdate=date('y/m/d',strtotime($_POST['dateofevent']));
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
              $filedestination='actposter/'.$filenewname;
         move_uploaded_file($tempname,$filedestination);
         $res=0;
    
    
    $q="SELECT COUNT(organisation) AS don_count  FROM activities where organisation='$organisation';";
   
$check=mysqli_query($con,$q);
$row = mysqli_fetch_assoc($check);
$res=$row['don_count'];


if($res>=3){
  $query="DELETE from activities where organisation='$organisation' LIMIT 1";
  
  
  if($del=mysqli_query($con,$query)){
              $sql="INSERT INTO activities (eventtitle,organisation,eventdesc,date,image)VALUES('$headline','$organisation','$description','$eventdate','$filenewname')";
              if(mysqli_query($con,$sql)){
                echo '<script type="text/JavaScript">
                alert("Your request has been published successfully");
                window.location.href = "publishevent.php";
                
                </script>'  ;

                
                } 
            }
          }
          else{
            $sql="INSERT INTO activities (eventtitle,organisation,eventdesc,date,image)VALUES('$headline','$organisation','$description','$eventdate','$filenewname')";
            if(mysqli_query($con,$sql)){
              echo '<script type="text/JavaScript">
              alert("Your request has been published successfully");
              window.location.href = "publishevent.php";
              
              </script>'  ;

              
              } else{

                echo "<h1>oops!something went wrong,please try again</h1>";
            }




          }

            }else{
              echo '<script>alert("Your file size  should not extend 50kb");
              window.location.href="publishevent.php";</script>';
            }

          }else{
            echo '<script>alert("There was an error uploading your file");
            window.location.href="publishevent.php";</script>';
          }

        }else{
          echo '<script>alert("invalid upload format(only jpeg,jpg,png files allowed)");
          window.location.href="publishevent.php";</script>';


        }
    
}




?>
