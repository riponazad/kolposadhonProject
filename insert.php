
<?php
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



$stmt = $conn->prepare("INSERT INTO users(name,email,address,password,birth_date,phone_number) VALUES(?,?,?,?,?,?)");
$stmt->bind_param("ssssss", $name, $email, $adrs,$pass,$dob,$phn);

$name=$_POST["user_name"];
$email=$_POST["email"];
$adrs=$_POST["address"];
$pass=$_POST["password"];
$dob=$_POST["DOB"];
$phn=$_POST["phn_num"];

$stmt->execute();

    echo "New record created successfully";

$conn->close();
header("Location: http://localhost/kolposadhonProject/signup.php");
exit;
?>