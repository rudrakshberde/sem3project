<?php
session_start();
include('dbconnection.php');
$id=$_SESSION['even'];
$co=count($id);
for($i=0;$i<1;$i+=1 ){
    echo $id[$i];
}

mysqli_close($con);
?>