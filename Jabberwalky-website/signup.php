<?php
$servername = "localhost";
$username = "test";
$password = "";
$dbi = "jw_original";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbi);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else
    echo "successful connection";
$uid = 0;
$pas = 0;
$cnf_pas = 0;
$email = 0;
$gender = 0;
$dob = 0;
$cnic =0;
$join_month = 0;
$cell = 0;
$addr = 0;
$coun = 0;
$city  =0;
$hear = 0;
$fname = 0;
$lname=0;
$interest = 0;

$uid = isset($_POST['field1']) ? $_POST['field1'] : 0;
$fname = isset($_POST['field2']) ? $_POST['field2'] : 0;
$lname= isset($_POST['field3']) ? $_POST['field3'] : 0;
$pas =  isset($_POST['field5']) ? $_POST['field5'] : 0;
$cnf_pas =  isset($_POST['field6']) ? $_POST['field6'] : 0;
$email =  isset($_POST['field4']) ? $_POST['field4'] : 0;
if (isset($gender) && $gender=="1")
  {$gender = 1;}
else if (isset($gender) && $gender=="2")
  {$gender = 2;}
else $gender = 0;
$dob =  isset($_POST['field8']) ? $_POST['field8'] : 0;
$cnic = isset($_POST['field9']) ? $_POST['field9'] : 0;
$join_month =  isset($_GET['join_month']) ? $_GET['join_month'] : 0;
$cell =  isset($_POST['field10']) ? $_POST['field10'] : 0;
$addr =  isset($_POST['field12']) ? $_POST['field12'] : 0;
$coun =  isset($_GET['country']) ? $_GET['country'] : 0;
$city =  isset($_GET['city']) ? $_GET['city'] : 0;
$hear =  isset($_POST['field15']) ? $_POST['field15'] : 0;
$interest =  isset($_GET['interest']) ? $_GET['interest'] : 0;

$sql = "INSERT INTO userdb (uid,fname,lname, email, pass, cnf_pass, gender, dob, cnic, join_month, cell, address, country,city, hear, interest)
VALUES ('$uid', '$fname','$lname', '$pas', '$cnf_pas', '$email', $gender, '$dob', $cnic, '$join_month',$cell, '$addr', '$coun', '$city', '$hear','$interest')";

if (mysqli_query($conn, $sql)) {
    echo "Data inserted successufully successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


?>