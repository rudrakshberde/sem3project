<?php
session_start();


		include('dbconnection.php');
    

$reason=$_POST['reason'];
$task=$_POST['id'];

$sql = "SELECT * FROM donations WHERE  id='$task'";
if($result = mysqli_query($con, $sql)){
    if(mysqli_num_rows($result) > 0){

    while   ( $row = mysqli_fetch_array($result)){
      $compfullname=  $row['fullname'];
      $compemail=  $row['email'];
			$compcontactno=$row['contactno'];
         $compaddress=$row['address'];
        $compdonationtype= $row['donationtype'];

                $comporganisation=$row['organisation'];
                     $compimageURL = $row['file_name'];

                        $comptime= $row['time'];
												mysqli_query($con,"INSERT INTO discarded (fullname,email,contactno,address,donationtype,organisation,file_name,time,reason)VALUES('  $compfullname','$compemail','	$compcontactno','$compaddress','$compdonationtype','  $comporganisation','$compimageURL','$comptime','$reason')");
                      }
                    }
									}
                    $sql_1="DELETE FROM donations WHERE id= '$task'";


                    if (  $delete=mysqli_query($con,$sql_1)) {
											echo' <script type="text/javascript"> alert("item successfully discarded");
											window.location.href="welcome.php";</script>';





                    }



 ?>
