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


       $event=$_POST['event'];
		$filter=$_SESSION['login'];
		if(!$filter){
			echo '<script>window.location.href="index.php"</script>';
		}



		// Attempt select query execution
		$sql = "SELECT * FROM volunteer WHERE org='$filter' AND event='$event' ORDER BY ID desc" ;
		if($result = mysqli_query($link, $sql)){
		    if(mysqli_num_rows($result) > 0){

		$row = mysqli_fetch_array($result);
        echo json_encode($result);
							?>
		            
		       <?php  

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