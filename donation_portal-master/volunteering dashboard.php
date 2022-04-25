<?php
session_start();
include_once('./link.php');
include_once('./header1.php');
include('dbconnection.php');
include('DBController.php');
$db_handle = new DBController();
error_reporting(E_ERROR | E_PARSE);


		$filter=$_SESSION['login'];
		if(!$filter){
			echo '<script>window.location.href="index.php"</script>';
		}
?>


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

	<title>Volunteering requests</title>
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


<h1 style="margin:40px;">Volunteering requests</h1>
<form method="POST" name="search" action="volunteering dashboard.php" style="margin-left:70px;">
<label>CHOOSE EVENT</label>

          <select class="" name="country[]">
<option value="">select</option>

<?php $que="SELECT * from volunteering_advertisement WHERE organisation='$filter'";
          if($res= mysqli_query($con, $que)){


            while($row = mysqli_fetch_array($res)){
            ?>





        <option value="<?php echo $row['eventtitle'] ?>"> <?php echo $row['eventtitle'] ?></option>';


      <?php

      }
      ?>
      </select>
      <?php
mysqli_free_result($res);
      }

      ?>
	  <button id="Filter"  class="btn btn-primary " style="background-color:green;">Search</button>
</form>

<div class="container my-4">

	<table class="table" id="myTable">
		<thead>
			<tr>

				<th scope="col">firstname</th>
				<th scope="col">lastname</th>

			<th scope="col">experience</th>
					<th scope="col">Address</th>
<th scope="col">email</th>
<th scope="col">contactno</th>
<th scope="col">NSS member</th>
<th scope="col">Event</th>
<th scope="col">Date&Time</th>

		</tr>
		<?php

		if (! empty($_POST['country'])) {



                    $query = "SELECT * from volunteer";
                    $i = 0;
                    $selectedOptionCount = count($_POST['country']);
                    $selectedOption = "";
                    while ($i < $selectedOptionCount) {
                        $selectedOption = $selectedOption . "'" . $_POST['country'][$i] . "'";
                        if ($i < $selectedOptionCount - 1) {
                            $selectedOption = $selectedOption . ", ";
                        }

                        $i ++;
                    }
                    $query = $query . " WHERE event in (" . $selectedOption . ") AND org='$filter'ORDER BY ID DESC";

                    $result = $db_handle->runQuery($query);

                if (! empty($result)) {
                    foreach ($result as $key => $value) {
                        ?>
		            <tr>
		                <th scope="col"><?php echo $result[$key]['firstname']; ?> </th>
		                <th scope="col"> <?php echo $result[$key]['lastname']; ?></th>
		                <th scope="col"> <?php echo $result[$key]['experience']; ?></th>
		                    <th scope="col"> <?php echo $result[$key]['address']; ?></th>
												<th scope="col"> <?php echo $result[$key]['email']; ?></th>
												<th scope="col"> <?php echo $result[$key]['number']; ?></th>
		                      <th scope="col"><?php echo $result[$key]['nss']; ?> </th>
							  <th scope="col"><?php echo $result[$key]['event']; ?> </th>

                           <th scope="col"><?php echo $result[$key]['dt']; ?> </th>





		            </tr>
					<?php
                    }
				}
                    ?>



<?php
                }

				else{
					$sql = "SELECT * FROM volunteer WHERE org='$filter' ORDER BY ID desc" ;
		if($r = mysqli_query($con, $sql)){
		    if(mysqli_num_rows($r) > 0){

		        while($row = mysqli_fetch_array($r)){
							?>
		            <tr>
		                <th scope="col"><?php  echo $row['firstname'];  ?> </th>
		                <th scope="col"> <?php echo $row['lastname'];  ?></th>
		                <th scope="col"> <?php  echo $row['experience']; ?></th>
		                    <th scope="col"> <?php echo $row['address']; ?></th>
												<th scope="col"> <?php echo $row['email']; ?></th>
												<th scope="col"> <?php echo $row['number']; ?></th>
		                      <th scope="col"><?php echo  $row['nss'];?> </th>
							  <th scope="col"><?php echo  $row['event'];?> </th>
                           <th scope="col"><?php echo  $row['dt'];?> </th>




		            </tr>
		       <?php   }

		        // Close result set
		        mysqli_free_result($r);
		    } else{
		        echo "No records matching your query were found.";
		    }
		} else{
		    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
		}


		?>
			<?php
				}
?>

</thead>

				</table>





			</tbody>
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
