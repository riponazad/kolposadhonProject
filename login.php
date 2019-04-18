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
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> লগ ইন</a></li>
			<button class="btn navbar-btn">English</button>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</div>

<div class="pageheader jumbotron">
  <div class="container">
    <h3><span id="roundborder"> লগইন করুন</span></h3>
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
	    <form action="logincheck.php" method="post">
		  <div class="form-group">
            <label for="mail">ইমেইল:</label>
            <input type="text" class="form-control" placeholder="ইমেইল লিখুন..." name="email" id="mail">
          </div>
		  <div class="form-group">
            <label for="psw">পাসওয়ার্ড:</label>
            <input type="password" class="form-control" placeholder="পাসওয়ার্ড লিখুন..." name="pass" id="psw">
          </div>
		  <div class="form-group" style="float: right; width: 100%">
		  <button type="submit" class="btn btn-invst btn-lg">লগইন করুন</button>
		</div>
        </form>
		<div class="form-group" style="width: 100%">
		  <a href="#" style="text-align: right"><h4>পাসওয়ার্ড ভুলে গেছেন?</h4></a>
		</div>
		<div class="form-group" style="float: right">
		  <h4>এখনো কোনো অ্যাকাউন্ট নেই আপনার?</h4>
		  <a href="signup.php" class="btn btn-invst btn-lg" role="button">সাইন আপ করুন</a>
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