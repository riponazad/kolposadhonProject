
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



$stmt = $conn->prepare("INSERT INTO investors(user_id, amount, duration) VALUES(?,?,?)");
$stmt->bind_param("idi", $uid, $amount, $du);

$uid=$_POST["id"];
$amount=$_POST["invest_amount"];
$du=$_POST["invest_duration"];


$stmt->execute();

    echo "New record created successfully";

$conn->close();
header("Location: http://localhost/kolposadhonProject/investpost.php");
exit;
?>