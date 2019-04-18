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
    <h3><span id="roundborder"> কার্যরত ব্যবসা তালিকা</span></h3>
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
            <select class="form-control" id="location">
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
	  <div id="accordion">
	    <div class="card" data-toggle="collapse" data-parent="#accordion" href="#demo">
		  <div class="row">
		    <div class="col-sm-3">
		      <div>
		        <img src="user-male-icon.png" alt="profile image" class="img-fluid" width="100%">
			  </div>
              <div>
			    <h4>মোঃ কামরুল ইসলাম</h4>
			    <h4>বয়সঃ ২৪ বছর</h4>
              </div>			
		    </div>
		    <div class="col-sm-9">
		      <h3>কাচা বাজারের দোকান!</h3>
			  <h3>১০,০০০ টাকা।</h3>
			  <button type="button" class="btn btn-investor btn-lg"><a href="#" style="color: white">বিনিয়োগকারী দেখুন</a></button>
	        </div>
		    <div class="col-sm-8">
		    </div>
		  </div>
		</div>
		
		
		<div class="card" data-toggle="collapse" data-parent="#accordion" data-target="#demo1">
		  <div class="row">
		    <div class="col-sm-3">
		      <div>
		        <img src="user-male-icon.png" alt="profile image" class="img-fluid" width="100%">
			  </div>
              <div>
			    <h4>মোঃ রশিদ মোল্লা</h4>
			    <h4>বয়সঃ ২২ বছর</h4>
              </div>			
		    </div>
		    <div class="col-sm-9">
		      <h3>কোরবানির গরু পালন!</h3>
			  <h3>১৮,০০০ টাকা।</h3>
			    <div id="demo1" class="collapse">
				  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                     sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
	                 Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                     sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
	              </p>
				</div>
			  <button type="button" class="btn btn-investor btn-lg"><a href="#" style="color: white">বিনিয়োগকারী দেখুন</a></button>
	        </div>
		    <div class="col-sm-8">
		    </div>
		  </div>
		</div>
		
		
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