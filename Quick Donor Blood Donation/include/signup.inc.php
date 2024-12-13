<?php

$servername = "localhost";
$dbusername = "root"
$dbpassword = "";
$dbname = "quickdonor_db";

$conn = mysqli_connect($servername,$dbusername,$dbpassword,$dbname);

if (!$conn) {
	die("Connection Failed". mysqli_connect_error());
}

date_default_timezone_set('Asia/Colombo');

if (isset($_POST['submit'])) {
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$gender = $_POST['gender'];
	$dob = $_POST['dob'];
	$weight = $_POST['weight'];
	$blood_grp = $_POST['bloodgrp'];
	$pnum = $_POST['phonenumber'];
	$email = $_POST['email'];
	$address = 
}


?>