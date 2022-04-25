<?php
session_start();
include('dbconnection.php');

$id=$_POST['id'] ;

$q="UPDATE donations SET status='completed' where id='$id'";
if($out=mysqli_query($con,$q)){
    echo'<script type="text/javascript"> alert("successfully marked as complete");
    window.location.href="welcome.php"</script>';
}



else{
    echo "failed";
}

mysqli_close($con);
?>
