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
            <li><a href="http://localhost/kolposadhonProject/index.php#12"">কিভাবে কাজ করে জানুন!</a></li>
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
    <h3><span id="roundborder"> সাইন আপ করুন</span></h3>
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
	    <h4><span class="error" style="color: red">*প্রয়োজনীয় ক্ষেত্র</span></h4>
	    <form action="insert.php" method="post">
          <div class="form-group">
            <label for="usr_name">সম্পূর্ণ নাম <span class="error" style="color:red; font-size: 20px;">*</span>:</label>
            <input type="text" class="form-control" placeholder="নাম লিখুন..." name="user_name" id="usr_name">
          </div>
		  <div class="form-group">
            <label for="dob">জন্ম তারিখ:</label>
            <input type="text" class="form-control" placeholder="দিন/মাস/বছর" name="DOB" id="dob">
          </div>
          <div class="form-group">
            <label for="addrs">ঠিকানা:</label>
            <input type="text" class="form-control" placeholder="ঠিকানা(জেলা) লিখুন..." name="address" id="addrs">
          </div>
		  <div class="form-group">
            <label for="phn_num">মোবাইল নাম্বার:</label>
            <input type="text" class="form-control" placeholder="নাম্বার লিখুন..." name="phn_num" id="phn_num">
          </div>
		  <div class="form-group">
            <label for="mail">ইমেইল<span class="error" style="color:red; font-size: 20px;">*</span>:</label>
            <input type="text" class="form-control" placeholder="ইমেইল লিখুন..." name="email" id="mail">
          </div>
		  <div class="form-group">
            <label for="psw">পাসওয়ার্ড<span class="error" style="color:red; font-size: 20px;">*</span>:</label>
            <input type="text" class="form-control" placeholder="পাসওয়ার্ড লিখুন..." name="password" id="psw">
          </div>
		  <div class="form-group">
            <label for="psw2">পাসওয়ার্ড নিশ্চিত করুন<span class="error" style="color:red; font-size: 20px;">*</span>:</label>
            <input type="text" class="form-control" placeholder="পুনরায় পাসওয়ার্ড লিখুন..." name="rpassword" id="psw2">
          </div>
		
		<div class="form-inline">
		  <div class="form-group" style="float: right">
		    <h4>অনুগ্রহ করে সাইন আপ করার পূর্বে আপনার সকল তথ্য পুনরায় যাচাই করুন। </h4>
		    <button type="submit" class="btn btn-invst btn-lg">সাইন আপ করুন</button>
		  </div>
		</div>
		<div class="form-inline">
		  <div class="form-group" style="float: right">
		    <h4>আপনার কি একটি অ্যাকাউন্ট আছে?</h4>
			<a href="login.php" class="btn btn-invst btn-lg" role="button">লগইন করুন</a>
	      </div>
		</div>
        </form>
	  </div>
	  <div class="col-sm-2">
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