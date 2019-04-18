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
		    <li><a href= <?php echo $ref?> ><span class= <?php echo $cls?> ></span><?= $str?></a></li>
			<button class="btn navbar-btn">English</button>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</div>

<div class="pageheader jumbotron">
  <div class="container">
    <h3><span id="roundborder"> বিনিয়োগ করুন</span></h3>
  </div>	
</div>

<div class="primay-menu">
  <nav class="navbar header jumbotron navbar-inverse">
    <div class="container">
	
    </div>
  </nav>	
</div>



<div class="body jumbotron">
  <div class="container">
    <div class="row">
	  <div class="col-sm-2">
		
	  </div>
	  <div class="col-sm-8">
	    <h3>কল্পসাধন-এ বিনিয়োগে আগ্রহ প্রকাশ করায় আপনাকে স্বাগতম।</h3>
	    <form action="investpostaction.php" method="post">
		  <div class="form-group">
            <label for="invest_amount">বিনিয়োগ অর্থ(৳):</label>
            <input type="number_format" class="form-control" placeholder="টাকার পরিমাণ?" name="invest_amount" id="invest_amount">
          </div>
		  <div class="form-group">
            <label for="invest_duration">সর্বোচ্চ সময়ঃ</label>
            <input type="number" class="form-control" placeholder="কত মাসের জন্য?" name="invest_duration" id="invest_duration">
          </div>
		  <div class="form-group">
            <label for="id">ইউজার আইডি নাম্বারঃ</label>
            <input type="number" class="form-control" placeholder="আইডি নাম্বার" name="id" id="id">
          </div>
		  <div class="form-group" style="float: right; width: 100%">
		    <button type="submit" class="btn btn-invst btn-lg">বিনিয়োগ করুন</button>
		  </div>
        </form>
		<div class="form-group" style="width: 100%">
		  <h4 style="text-align: right">প্রিয় বিনিয়োগদাতা, আপনার জন্য সঠিক  ব্যবসা পরিকল্পনা খুজে আপনাকে জানানো হবে।</h4>
		</div>
		<div class="form-group">
		  <h4>অথবা আপনি কি সরাসরি কোন ব্যবসা পরিকল্পনায় বিনিয়োগ করতে চান? তাহলে নিচের বাঁটনে ক্লিক করে আমাদের সকল ব্যবসা পরিকল্পনা দেখুন এবং পছন্দমত বিনিয়োগ করুন।</h4>
		  <a href="businesspage.php" class="btn btn-invst btn-lg" role="button">ব্যবসা পরিকল্পনা দেখুন</a>
	    </div>
		
	  </div>
	  <div class="col-sm-2">
	  </div>
	</div>
  </div>
</div>


<footer>
  <div class="footer" style="width: 100%; left: 0; bottom: 0; position: fixed;">
    <div class="container">
      <a>কল্পসাধন ©  All Rights Reserved  |  Developed by কল্পসাধন </a>
	</div>
  </div>
</footer>
</body>
</html>