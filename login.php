<?php

// Database connection
$host = "localhost";
$user = "root";
$password = "";
$dbname = "login";
$con = mysqli_connect($host, $user, $password, $dbname);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
// Login script
if (isset($_POST['submit'])) {
	$username = trim($_POST['username']);
	$password = trim($_POST['password']);

	$sql = mysqli_query($con, "SELECT * FROM stu_login WHERE username='$username' AND password='$password'");

	if (mysqli_num_rows($sql) == 1) {
		$row = mysqli_fetch_array($sql);
		$_SESSION['username'] = $row['username'];
		$_SESSION['password'] = $row['password'];
		header('Location: Welcome.php');
	} else {
		header('Location: Logout.php');
	}
}
// Logout script
if (isset($_GET['logout'])) {
	session_destroy();
	header('Location: login.php');
}

?>
