<!--
this is second header file which is visible after login.
-->

<?php
error_reporting(0);
include_once('./link.php');

$email = $_SESSION['login'];
?>

		</div>
		<div class="dropdown navbar-right" id="right">
  <button class="btn btn-primary dropdown-toggle" style="height: 5vh; margin-right:100px; width: 200px;background-color:green;" type="button" data-toggle="dropdown"><?php echo $email;?>
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
		<li><a href="./welcome.php">Dashboard</a></li>
  	<li><a href="./volunteering dashboard.php">volunteering requests</a></li>
  <li><a href="discarded.php">Discarded/Declined items</a></li>
	<li><a href="history.php">Donation History</a></li>
			<li><a href="./frequent donors.php">Frequent Donors</a></li>
			<li><a href="./volunteering requests.php">Publish volunteering<br> request</a></li>
			<li><a href="./publishevent.php">Publish upcoming activities</a></li>
			<li><a href="./logout.php">Logout</a></li>

  </ul>
</div>
	</div>
</nav>
