
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

$stmt = $conn->prepare("INSERT INTO borrowers(user_id, loan_amount) VALUES(?,?)");
$stmt->bind_param("id",$uid, $la);

$uid=$_POST["description"];
$la=$_POST["fund_amount"];

$stmt->execute();

$sql = "SELECT borrower_id FROM borrowers WHERE user_id=$uid";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$uid= $row["borrower_id"];

$stmt = $conn->prepare("INSERT INTO businesses(title,borrower_id, catagory,fund_amount,	description, duration, rate) VALUES(?,?,?,?,?,?,?)");
$stmt->bind_param("sisdsid",$t, $uid, $c, $fa, $d,$du,$r);

$t=$_POST["business_title"];
$c=$_POST["category"];
$fa=$_POST["fund_amount"];
$d=$_POST["description"];
$du=$_POST["duration"];
$r=$_POST["rate"];

$stmt->execute();

    echo "New record created successfully";

$conn->close();
header("Location: http://localhost/kolposadhonProject/businesspage.php");
exit;
?>