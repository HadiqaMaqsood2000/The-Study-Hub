<?php

$USER = $_POST['username'];
$PASS = $_POST['password'];

$con = mysqli_connect('localhost', 'root', '', 'TSH_DB');

if(isset($_POST['submit'])){

$QUERY = "INSERT INTO logintable(`Userrname`, `Password`) VALUES ('$USER','$PASS')";
$run=mysqli_query($con,$QUERY); 

?>

