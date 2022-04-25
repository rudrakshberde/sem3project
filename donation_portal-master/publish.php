<?php
session_start();

include('dbconnection.php');
  $organisation=$_SESSION['login'];
if(isset($_POST['publish'])){

    $advertisement=$_POST['request'];
    $deadline=date('y/m/d',strtotime($_POST['deadline']));;
    $eventdate=date('y/m/d',strtotime($_POST['eventdate']));
    $novol=$_POST['noofvol'];
    $eventtitle=$_POST['eventtitle'];
    $res=0;
    
    
    $q="SELECT COUNT(organisation) AS don_count  FROM volunteering_advertisement where organisation='$organisation';";
   
$check=mysqli_query($con,$q);
$row = mysqli_fetch_assoc($check);
$res=$row['don_count'];


if($res>=3){
  $query="DELETE from volunteering_advertisement where organisation='$organisation' LIMIT 1";
  
  
  if($del=mysqli_query($con,$query)){
    $que="INSERT into volunteering_advertisement(organisation,volunteering_add,deadline,no,eventdate,eventtitle) VALUES('$organisation','$advertisement','$deadline','$novol','$eventdate','$eventtitle')";
    if($exec=mysqli_query($con,$que)){
      
      
      echo '<script type="text/JavaScript">
           alert("Your request has been published successfully");
           window.location.href = "volunteering requests.php";
           </script>'  ;
  
  
  
    }
    else {
      echo"there was an errror";
    }
  }
}


  else{
    $que="INSERT into volunteering_advertisement(organisation,volunteering_add,deadline,no,eventdate,eventtitle) VALUES('$organisation','$advertisement','$deadline','$novol','$eventdate','$eventtitle')";
    if($exec=mysqli_query($con,$que)){
  
      echo '<script type="text/JavaScript">

           alert("Your request has been published successfully");
           window.location.href = "volunteering requests.php";
           
           </script>'  ;
  
  
  
    }
    else {
      echo"there was an errror";
    }

  }


  
}




?>
