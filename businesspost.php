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
    <h3><span id="roundborder"> ব্যবসা পরিকল্পনা পোস্ট করুন</span></h3>
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
	    <h3>বিস্তারিত তথ্য দিন</h3>
		<h4><span class="error" style="color: red">*প্রয়োজনীয় ক্ষেত্র</span></h4>
	    <form action="bpost.php" method="post">
		  <div class="form-group form-group-md">
		    <label for="category">শ্রেনি নির্বাচন করুন<span class="error" style="color:red; font-size: 20px;">*</span>:</label>
            <select class="form-control" name="category" id="category">
			  <option><li>কৃষি</li></option>
			  <option><li>খামার</li></option>
              <option><li>দোকান</li></option>
              <option><li>নার্সারি</li></option>
              <option><li>রিকশা</li></option>
              <option><li>বিদেশ গমন</li></option>
            </select>
          </div>
          <div class="form-group">
            <label for="business_title">ব্যবসা শিরোনাম<span class="error" style="color:red; font-size: 20px;">*</span> :</label>
            <input type="text" class="form-control" placeholder="শিরোনাম লিখুন..." name="business_title" id="business_title">
          </div>
		  <div class="form-group">
            <label for="fund_amount">সর্বমোট অর্থ প্রয়োজন (৳)<span class="error" style="color:red; font-size: 20px;">*</span>:</label>
            <input type="text" class="form-control" placeholder="টাকার পরিমাণ (৳)?" name="fund_amount" id="fund_amount">
          </div>
          <div class="form-group">
            <label for="duration"> ব্যবসার ব্যাপ্তিকাল<span class="error" style="color:red; font-size: 20px;">*</span>:</label>
            <input type="number" class="form-control" placeholder="মাস?" name="duration" id="duration">
          </div>
		  <div class="form-group">
            <label for="rate">শতকরা হার (%)<span class="error" style="color:red; font-size: 20px;">*</span>:</label>
            <input type="text" class="form-control" placeholder="শতকরা হার লিখুন" name="rate" id="rate">
          </div>
		  <div class="form-group">
            <label for="description">বিবরণ :</label>
            <textarea class="form-control" rows="5" placeholder="বিস্তারিত বিবরণ দিন" name="description" id="description"></textarea>
          </div>
		  <div class="form-inline">
		    <div class="form-group" style="float: right">
		      <h4>অনুগ্রহ করে বিজ্ঞাপন পোস্ট করার পূর্বে আপনার সকল তথ্য পুনরায় যাচাই করুন। </h4>
		      <button type="submit" class="btn btn-invst btn-lg">ব্যবসা পোস্ট করুন</button>
		    </div>
		  </div>
		</form>
		
        
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