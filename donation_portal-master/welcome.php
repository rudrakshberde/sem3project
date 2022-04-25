


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<title>Document</title>
	<style>
	.log{
	width:80px;
	height:40px;
	background-color:rgb(56, 189, 56);
	border:none;
	color:white;
	}
	button#discard:hover {
		background-color: #ffff;
		color:Black;
		border: 1px solid #111;
	}

			h1{
				text-decoration: underline;

				text-decoration-color:rgb(56, 189, 56);
			}
			textarea{
				height:100px;
				width:550px;

			}
	</style>


</head>
<body>






<h1 style="margin:40px;">Dashboard</h1>

<div class="container my-4">
	

	<table class="table" id="myTable">
		<thead>
			<tr>

				<th scope="col" >Full Name</th>
				<th scope="col"  >Email</th>

			<th scope="col"  >contact no</th>
					<th scope="col"   >Address</th>
<th scope="col"   >Donation Type</th>
<th scope="col"  > Organisation</th>
<th scope="col"   >Image</th>
<th scope="col"  >Date&Time</th>

		</tr>
		<?php
		session_start();
		include_once('./link.php');
		include_once('./header1.php');
		include('dbconnection.php');

				error_reporting(E_ERROR | E_PARSE);






		$filter=$_SESSION['login'];

if(!$filter){
	echo '<script>window.location.href="index.php"</script>';
}

		// Attempt select query execution
		$sql = "SELECT * FROM donations WHERE organisation ='$filter' AND status='pending' ORDER BY time desc";
		if($result = mysqli_query($con, $sql)){
		    if(mysqli_num_rows($result) > 0){

		        while($row = mysqli_fetch_array($result)){
							?>
							<form method="post">
		            <tr>
		                <th scope="col"><?php  echo $row['fullname'];  ?> </th>
		                <th scope="col"> <?php echo $row['email'];  ?></th>
		                <th scope="col"> <?php  echo $row['contactno']; ?></th>


		                  <th scope="col"><?php echo  $row['address'];  ?></th>
		                    <th scope="col"> <?php echo $row['donationtype']; ?></th>
		                      <th scope="col"><?php echo  $row['organisation'];?> </th>
													<?php $imageURL = 'image/'.$row['file_name']; ?>
													<th scope="col"><img src="<?php echo $imageURL; ?>" alt="n/a" height="200px" width="200px" /> </th>
                           <th scope="col"><?php echo  $row['time'];?> </th>
													 <input type="hidden" name="id" id="id" value="<?php echo$row['id'];?>"></input>
													   
														<th scope="col"> <button type="submit" class="btn btn-primary" style="background-color:green;"  formaction="reason.php" >Discard<br>/Decline</button>
															<th scope="col"> <button type="submit" class="btn btn-primary" id="completed"  name="complete"  formaction="confirm.php"   style="background-color:green;" >Mark <br> as  complete</button>
														</th>

													</tr>


													</form>









		       <?php   }

		        // Close result set
		        mysqli_free_result($result);
		    } else{
		        echo "No records matching your query were found.";
		    }
		} else{
		    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
		}

		// Close connection
			mysqli_close($con);

		?>







</thead>

				</table>

				











<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
  <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

</body>

</html>
