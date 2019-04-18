<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>কল্পসাধন</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="mystyle.css">

</head>

<body>
<div class="header jumbotron">
  <div class="container">
    <nav class="navbar navbar-inverse">
	  <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <h1 ><a style="color:#ffffff;" href="index.php">কল্পসাধন</a></h1>
		  <h3 style="color:#ffecd7; margin:0;">স্বাবলম্বী হবে আমার দেশ!</h3>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="http://localhost/kolposadhonProject/homepage.php#12"">কিভাবে কাজ করে জানুন!</a></li>
            <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> সাইন আপ</a></li>
            <?php
			if(isset($_SESSION["email"]))
			{
				$str = " লগ আউট";
				$ref = "logout.php";
				$cls = "glyphicon glyphicon-log-out";
			}
			else
			{
				$str = " লগ ইন";
				$ref = "login.php";
				$cls = "glyphicon glyphicon-log-in";
			}
			?>
		    <li><a href= <?php echo $ref?> ><span class=<?php echo $cls?>></span><?= $str?></a></li>
			<button class="btn navbar-btn">English</button>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</div>

<div class="pageheader jumbotron">
  <div class="container">
    <h3><span id="roundborder"> ব্যবসা পরিকল্পনা তালিকা</span></h3>
  </div>	
</div>

<div class="primay-menu">
  <nav class="navbar header jumbotron navbar-inverse">
    <div class="container">
	<div class="row">
	<div class="col-sm-8">
      <ul class="nav navbar-nav navbar-right">
        <li><h4><span class="glyphicon glyphicon-map-marker"></span>  অবস্থান নির্ণয় করুন</h4></li>
		<li>
          <div class="form-group form-group-md">
            <select class="form-control" name="location" id="location">
			  <option><li>সকল</li></option>
			  <option><li>ঢাকা</li></option>
              <option><li>বরিশাল</li></option>
              <option><li>চট্টগ্রাম</li></option>
              <option><li>খুলনা</li></option>
              <option><li>ময়মনসিংহ</li></option>
              <option><li>রাজশাহী</li></option>
              <option><li>রংপুর</li></option>
              <option><li>সিলেট</li></option>
            </select>
          </div>
	    </li>
		<li><button type="button" class="btn btn-invst btn-md" style="border-radius: 20px; margin: 5px 2px 2px 2px;"><span class="glyphicon glyphicon-search"></span> অনুসন্ধান</button></li>
      </ul>
	  </div>
	  </div>
    </div>
  </div>
</div>



<div class="body jumbotron">
  <div class="container">
    <div class="row">
	  <div class="col-sm-2">
	    <div class="section-header">
		  <h4>শ্রেনি নির্বাচন</h4>
		</div>
		<div class="section-body">
          <h4><input type="checkbox" value=""checked> কৃষি</h4>
		  <h4><input type="checkbox" value=""checked> খামার</h4>
		  <h4><input type="checkbox" value=""checked> দোকান</h4>
		  <h4><input type="checkbox" value=""checked> নার্সারি</h4>
		  <h4><input type="checkbox" value=""checked> রিকশা</h4>
		  <h4><input type="checkbox" value=""checked> বিদেশ গমন</h4>
        </div>
	  </div>
	  <div class="col-sm-8">
	    
		
<?php
include 'connection.php'; 

$sql = "SELECT name, email, address, title, fund_amount, description, duration, rate, gender FROM users NATURAL JOIN borrowers NATURAL JOIN businesses";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
	while($row = $result->fetch_assoc())
		{?>
			<div class="card" data-toggle="collapse" data-parent="#accordion" href="#demo">
			  <div class="row">
			    <div class="col-sm-3">
			      <div>
			        <?php if($row["gender"]=="male")
					      $str = "user-male-icon.png";
                        else
                          $str = "user-female-icon.png";							
				  ?>
			        <img src= <?php echo $str?> alt="profile image" class="img-fluid" width="100%">
			      </div>
			      <div>
			        <h4><?=$row["name"]?></h4>
			        <h4><?=$row["email"]?></h4>
			      </div>
			    </div>
			    <div class="col-sm-9">
			      <h3><?=$row["title"]?></h3>
			      <h3>অর্থের প্রয়োজনঃ <?=$row["fund_amount"]?> টাকা।</h3>
			      <h4>সর্বোচ্চ সময়ঃ  <?=$row["duration"]?> মাস।</h4>
			      <h4>শতকরা হারঃ  <?=$row["rate"]?>%</h4>
			      <h4><?=$row["address"]?></h4>
			      <button type="button" class="btn btn-invst btn-lg">বিনিয়োগ করুন</button>
			    </div>
			    <div class="col-sm-8">
			    </div>
			  </div>
			</div>
<?php   }
		$conn->close();
}

?>
		
		
		
		<div>
          <ul class="pager">
            <li class="previous"><a href="#"><span class="glyphicon glyphicon glyphicon-chevron-left"></span>পূর্ববর্তী পৃষ্ঠা</a></li>
            <li class="next"><a href="#">পরবর্তী পৃষ্ঠা<span class="glyphicon glyphicon glyphicon-chevron-right"></span></a></li>
          </ul>
        </div>
		
	  </div>
		
	  </div>
	  <div class="col-sm-2" style="background-color:yellow;">
	  </div>
	</div>
  </div>
</div>


<footer>
  <div class="footer">
    <div class="container">
      <a>কল্পসাধন ©  All Rights Reserved  |  Developed by কল্পসাধন </a>
	</div>
  </div>
</footer>
</body>
</html>