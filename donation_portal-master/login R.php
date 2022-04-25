<!--
Into this file, we create a layout for login page.
-->

<?php

include_once('./link.php');
  session_start();
	error_reporting(0);
	include("dbconnection.php");
	if(isset($_POST['login']))
	{
		$adminusername=$_POST['username'];
		$pass=md5($_POST['password']);
	$ret=mysqli_query($con,"SELECT * FROM admin WHERE username='$adminusername' and password='$pass'");
	$num=mysqli_fetch_array($ret);
	if($num>0)
	{
	$extra="welcome.php";
	$_SESSION['login']=$_POST['username'];
	$_SESSION['id']=$num['id'];
	echo "<script>window.location.href='".$extra."'</script>";
	exit();
	}
	else
	{
		$_SESSION['action1']="*Invalid username or password";

		$extra="login R.php";
	echo "<script>window.location.href='".$extra."'</script>";
	exit();
	}
	}
	?>


<div id="frmRegistration" >
<form class="form-horizontal" method="POST" action=" ">
	<h1>Admin login</h1>

  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Username:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="username" id="username" placeholder="Enter username">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="Password">Password:</label>
    <div class="col-sm-6">
      <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
		<button  type="submit" name="login" class="btn btn-primary" style="background-color:green;" >Login</button>
	</div>
	<div align="center">
		<p>not a registered organisation? <a href="signup.html">Register organisation</a></p>
	</div>
  </div>
</form>
</div>
