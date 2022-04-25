<!--
Into this file, we write a code for logout.
-->
<?php
session_start();
session_destroy();
unset($_SESSION['login']);

echo '<script>window.location.href="login R.php"</script>';
?>
