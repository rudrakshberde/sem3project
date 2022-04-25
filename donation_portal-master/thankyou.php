<!DOCTYPE html>
<html>
<head>
	<title>thank you </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	<?php
  session_start();
	$dname=$_SESSION['name']; ?>
	<style media="screen">
	.log{
	width:300px;
	height:50px;
	background-color:green;
	border:none;
	color:white;
	}
	button#thankyou:hover {
		background-color: #ffff;
		color:Black;
		border: 1px solid #111;
	}
	</style>
</head>
<body>
	<div style="text-align: center;user-select: auto;">
		<img src="tick2.png" alt="tick mark green" width="200px" height="200px">
		<h1 style="text-align: center;user-select: auto;">Thank you <?php echo $dname; ?>!</h1>
		<h3 style="text-align: center;user-select: auto;">Your Donation has been received</h3>
		<center>
	<button id="thankyou" class="log" onclick="goBack() ">Go back to home page</button>
	</center>
	</div>


	<script>
        function goBack() {
            window.history.back();
            window.location.replace('index.php');
        }
</script>


</body>
</html>
