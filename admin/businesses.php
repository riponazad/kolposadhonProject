<?php
session_start();
if(!isset($_SESSION["lastName"])){
	header("Location: index.php");
	exit;
}
include 'connection.php';


if (isset($_GET['businessDelete'])) {
    	$id = $_GET['businessDelete'];
		$sql = "DELETE FROM businesses WHERE business_id='$id'";
        $result = $conn->query($sql);
}
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="shortcut icon" type="image/png" href="../favicon/admin favicon.png"/>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel | Dashboard</title>
    <link rel="shortcut icon" type="image/png" href="../favicon/favicon.png"/>
        <!-- BEGIN: load jquery -->
    <script src="js/jquery-1.6.4.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery-ui/jquery.ui.core.min.js"></script>
    <script src="js/jquery-ui/jquery.ui.widget.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.accordion.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.effects.core.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.effects.slide.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.mouse.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.sortable.min.js" type="text/javascript"></script>
    <script src="js/table/jquery.dataTables.min.js" type="text/javascript"></script>
    <!-- END: load jquery -->
    <script src="js/ckeditor.js" type="text/javascript"></script>
    <script src="js/table/table.js" type="text/javascript"></script>
    <script src="js/setup.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            setupLeftMenu();
        setSidebarHeight();
        });
    </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap-3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="bootstrap/js/dropdown.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" type="text/javascript"></script>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap-3.3.7/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    

  </head>
  <body>

    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://localhost/kolposadhonProject/index.php">কল্পসাধন</a>
        </div>
        <?php 
	        if (isset($_GET['action']) && $_GET['action'] == "logout") {
	            session_destroy();
				header("Location: index.php");
	        }
	     ?>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="dashboard.php">Dashboard</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Welcome, <?php echo $_SESSION['lastName']?></a></li>
            <li><a href="?action=logout">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard <small> | Administrator</small></h1>
      </div>
    </header>
    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="dashboard.php" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
              </a>
              <a href="investors.php" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Investors <span class="badge"></span></a>
			  <a href="businesses.php" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Business Models <span class="badge"></span></a>
			  <a href="active-businesses.php" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Active Business <span class="badge"></span></a>
			  <a href="complete-business.php" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Complete Business <span class="badge"></span></a>
              <a href="adminadd.php?msg" class="list-group-item"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add Admin <span class="badge"></span></a>
            </div>

            <div class="well">
              <h4>Disk Space Used</h4>
              <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 89%;">
              </div>
            </div>
            <h4>Bandwidth Used </h4>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 11%;">
            </div>
          </div>
            </div>
          </div>
		  
		  <div class="col-md-9">
		  
		    <!-- Product List -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Business List</h3>
				<div class = "navbar-right">
			    <a href="addbusiness.php?msg" class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add <span class="badge"></span></a>
			  </div>
              </div>
			  
          
              <div class="panel-body">
                <table class="table table-striped table-hover" id="tablelist">
                      <thead>
                      <tr class="active">
					    <th style="text-align: center;">Title</th>
                        <th style="text-align: center;">Amount (BDT)</th>
                        <th style="text-align: center;">Duration (Month)</th>
						<th style="text-align: center;">Interest (%)</th>
                        <th style="text-align: center;">Location</th>
						<th style="text-align: center;">Action</th>
                      </tr>
                      </thead>
                      <tfoot>

                      </tfoot>
                      <tbody>
                      <?php  

$sql = "SELECT business_id, name, email, address, title, fund_amount, description, duration, rate, gender FROM users NATURAL JOIN borrowers NATURAL JOIN businesses";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
	while($row = $result->fetch_assoc())
		{
                       ?> 
                      <tr style="text-align: center;">
					    <td><?php echo $row['title']; ?></td>
                        <td><?php echo $row['fund_amount']; ?></td>
                        
                        <td><?php echo $row['duration']; ?></td>
                        <td ><?php echo $row['rate']; ?></td>
                        <td><?php echo $row['address']; ?></td>
                        <td><a class="btn btn-default" href="businessedit.php?business_id=<?php echo $row['business_id']?>" >Edit</a> <a class="btn btn-danger" href="?businessDelete=<?php echo $row['business_id']?>" onclick="return confirm('Are you sure to delete the data!')">Delete</a></td>
                      </tr>
                      <?php
                          }
                        }
                      ?>
                      </tbody>
                    </table>
              </div>
              </div>
			  
			  
<script src="../js/imp/jquery-1.12.4.js"></script>
<script src="../js/imp/jquery.dataTables.min.js"></script>
<script src="../js/imp/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
    $('#tablelist').DataTable();
    } );
</script>
              
          </div>
          </div>
        </div>
      </div>
    </section>
    <footer id="footer" style="width: 100%; left: 0; bottom: 0; position: fixed;">
	<div class="container">
      <a href="../index.php" target="_blank">কল্পসাধন ©  All Rights Reserved  |  Developed by কল্পসাধন </a>
	</div>
    </footer>

	
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
    <script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>