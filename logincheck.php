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


$email=$_POST["email"];
$pass=$_POST["pass"];

$sql = "SELECT email, password FROM users WHERE email = '$email' and password = '$pass'";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
	$row = $result->fetch_assoc();
	$_SESSION["email"] = $row['email'];
	$conn->close();
	header("Location: http://localhost/kolposadhonProject/index.php");
	exit;
}
$conn->close();
header("Location: http://localhost/kolposadhonProject/login.php");
exit;		
?>