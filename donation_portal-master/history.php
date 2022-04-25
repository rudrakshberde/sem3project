<!--
Into this file, we create a layout for welcome page.
-->



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <!-- Bootstrap CSS
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"> -->

	<title>history</title>
	<style >
	button{
		background-color:green;

		border:none;
	}
p{
	color:white;

}
.log{
width:60px;
height:40px;
background-color:green;
border:none;
color:white;
}
button#complete:hover {
	background-color: #ffff;
	color:Black;
	border: 1px solid #111;
}
h1{
			text-decoration: underline;

			text-decoration-color:rgb(56, 189, 56);
		}

	</style>
</head>
<body>


<h1 style="margin:40px;">History</h1>

<div class="container my-4">
	<form enctype="multipart/form-data" method="post" action="">
	<table class="table" id="myTable">
		<thead>
			<tr>

				<th scope="col">Full Name</th>
				<th scope="col">Email</th>

			<th scope="col">contact no</th>
					<th scope="col">Address</th>
<th scope="col">Donation Type</th>
<th scope="col">Organisation</th>
<th scope="col">Image</th>
<th scope="col">Date&Time</th>

		</tr>
		<?php
		session_start();
		include_once('./link.php');
		include_once('./header1.php');

				error_reporting(E_ERROR | E_PARSE);



		$link = mysqli_connect("localhost", "root", "", "donations");

		// Check connection
		if($link === false){
		    die("ERROR: Could not connect. " . mysqli_connect_error());
		}



		$filter=$_SESSION['login'];
		if(!$filter){
			echo '<script>window.location.href="index.php"</script>';
		}



		// Attempt select query execution
		$sql = "SELECT * FROM donations WHERE organisation LIKE '%".$filter."%' AND status='completed'";
		if($result = mysqli_query($link, $sql)){
		    if(mysqli_num_rows($result) > 0){

		        while($row = mysqli_fetch_array($result)){
							?>
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




		            </tr>
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
		mysqli_close($link);
		?>

		<?php
	if (isset($_POST['complete'])){

			   header('location:delete.php');


	}	 ?>


</thead>

				</table>
</form>




    <tbody>
</body>
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
</html>
