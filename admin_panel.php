<html>
<head>
<title>কল্পসাধন - admin</title>
<link rel="stylesheet" type="text/css" href="styles/style_admin.css">
</head>


<body>



<div id="header">
<center><img src="admin_icon.png">
<h3> Welcome to Admin Panel | কল্পসাধন </h3></center>
</div>

<div id="sidemenu">
 <ul>
    <li><a href="add.php" target="_blank"> Add Updates </a></li>
	<li><a href="delete.php" target="_blank"> Delete Update </a></li>
	<li><a href="update.php" target="_blank"> Update Post </a></li>
	<li><a href="nosgene.php" target="_blank"> Developer </a></li>
 </ul>	
</div>

<div id="data">
<br><br>

<center><h1>Data available</h1></center>
<?php
    include 'connection.php';

?>
</div>
</body>
</html>