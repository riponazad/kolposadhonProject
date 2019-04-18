<?php
session_start();



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kolposadhon_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$email=$_POST["admin_email"];
$pass=$_POST["admin_password"];

$sql = "SELECT email, password, lastName FROM admin WHERE email = '$email' and password = '$pass'";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
	$row = $result->fetch_assoc();
	$_SESSION["lastName"] = $row['lastName'];
	$conn->close();
	header("Location: dashboard.php");
	exit;
}
$conn->close();
header("Location: index.php");
exit;		
?>