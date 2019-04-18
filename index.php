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
            <li><a href="#12">কিভাবে কাজ করে জানুন!</a></li>
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
	<div>
	  <a href="investpost.php" class="btn btn-invst btn-lg" role="button">বিনিয়োগ করুন</a>
	  <a href="businesspost.php" class="btn btn-apply btn-lg" role="button">ব্যবসা পরিকল্পনা পোস্ট করুন</a>
	</div>
  </div>
</div>


<div class="slideshow">
  <div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
	    <li data-target="#myCarousel" data-slide-to="3"></li>
	    <li data-target="#myCarousel" data-slide-to="4"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="farmer.png" alt="noboborsho" style="width:100%;">
        </div>

        <div class="item">
          <img src="cov.png" alt="Chicago" style="width:100%;">
        </div>
    
        <div class="item">
          <img src="fish_farm.jpg" alt="New york" style="width:100%;">
        </div>
	  
	    <div class="item">
          <img src="chicken_farm.png" alt="New york" style="width:100%;">
        </div>
	  
	    <div class="item">
          <img src="cow.jpg" alt="New york" style="width:100%;">
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</div>

<div class="primay-menu">
  <nav class="navbar header jumbotron navbar-inverse">
    <div class="container">
      <ul class="nav navbar-nav navbar-right">
        <li><a style="padding: 5px; margin: 6px 8px 2px 8px;" href="investors.php">বিনিয়োগকারী তালিকা</a></li>
        <li><a style="padding: 5px; margin: 6px 8px 2px 8px;" href="businesspage.php">ব্যবসা পরিকল্পনা তালিকা</a></li>
        <li><a style="padding: 5px; margin: 6px 8px 2px 8px;" href="activebusiness.php">কার্যরত ব্যবসা সমূহ </a></li>
        <li><a style="padding: 5px; margin: 6px 8px 2px 8px;" href="completebusiness.php">সম্পন্ন ব্যবসা সমূহ </a></li>
      </ul>
    </div>
  </nav>
</div>

<div class="container">
  <form class="navbar-form navbar-right" action="/action_page.php">
    <div class="input-group">
    <input type="text" class="form-control" placeholder="খুজুন......" name="search">
      <div class="input-group-btn">
        <button class="btn btn-default" type="submit">
          <i class="glyphicon glyphicon-search"></i>
        </button>
      </div>
    </div>
  </form>
</div>



<div class="body jumbotron">
  <div class="container">
    <div class="row">
	  <div class="col-sm-1">
	  </div>
	  <div class="col-sm-6">
	    <div style="padding-bottom: 20px;">
		  <h2>কল্পসাধন-এ আপনাকে স্বাগতম!<h2>
        <p class="lead">
                     অল্প পুঁজিতে বিনিয়োগ করতে পারছেন না?  
                     অথবা পুঁজির অভাবে আপনার ব্যবসা পরিকল্পনাকে কাজে লাগাতে পারছেন না?

                     বাংলাদেশে এই প্রথম আমরাই নিয়ে এসেছি এই দুই সমস্যার সমাধান একই প্লাটফর্মে।
                    যেখানে আপনাদের ক্ষুদ্র ক্ষুদ্র বিনিয়োগের সমন্বয়ে পরিচালিত হবে   ক্ষুদ্র ক্ষুদ্র ব্যবসা 
                   এবং সেগুলো পর্যবেক্ষণ করতে পারবেন পৃথিবীর যেকোনো প্রান্ত থেকে। স্বাবলম্বী হবে 
                   দেশের মানুষ, উন্নত হবে বাংলাদেশ।
       </p>
		</div>
		
		<div style="padding-bottom: 20px;">
		  <h2 id="12">কল্পসাধন কিভাবে কাজ করে??? <h2>
        <p class="lead">
		কল্পসাধন দুইটি শ্রেনিতে বিভক্ত। প্রথমত, বিনিয়োগকারীরা তাদের অর্থ নিয়ে নিশ্চিত থাকতে পারেন কারন আপনার বিনিয়োগকৃত অর্থ ফেরত পাবার নিশ্চয়তা দিচ্ছে কল্পসাধন।
        আপনি চাইলে আপনার পছন্দমত ব্যবসা পরিকল্পনা খুঁজে সরাসরি বিনিয়োগ করতে পারেন অথবা আপনি আপনার বিনিয়োগের পরিমাণ এবং সময় জানিয়ে দিতে পারেন। কল্পসাধন 
        আপনার জন্য ব্যবসা পরিকল্পনা খুঁজে আপনাকে জানিয়ে দিবে। কোন ব্যবসা পরিকল্পনাকে আপনি একাই অথবা মিলিতভাবে বিনিয়োগ করতে পারেন।   		
   <br>
   দ্বিতীয়ত, ক্ষুদ্র ব্যবসাীরা শুধুমাত্র সাইন আপ করেই আপনার ব্যবসা পরিকল্পনা পোস্ট করতে পারেন। শুধু তাই ই নয়, আপনি কল্পসাধনের সকল বিনিয়োগকারীকে সরাসরি আবেদন করতে 
 পারেন আপনার ব্যবসায় বিনিয়োগ করার জন্য। 
       </p>
		</div>
		
	  </div>
	  <div class="col-sm-5">
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