<?php

session_start();
$con = mysqli_connect('localhost', 'root', '', 'TSH_DB');

if (isset($_POST['submit'])) {

	$USER = $_POST['username'];
  	$PASS = $_POST['password'];
	
	$query = "select * from logintable where Userrname = ' ". ." '  AND Password = '". . "' ";
	$result = mysqli_query($con, $query);

	while ($res = mysqli_fetch_assoc($result)) {
		if ($res['email'] == $email && $res['password'] == $pass) {
				$_SESSION['user_id'] = $res['id'];
				$_SESSION['user'] = $res['email'];

				header('location.WebsitePage2.php');
		}
	}

	if (mysqli_num_rows($result)==0) {
		header('location.website.php')
	}

}