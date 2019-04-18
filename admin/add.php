<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="shortcut icon" type="image/png" href="../favicon/admin favicon.png"/>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel | Account Login</title>
    <!-- Bootstrap core CSS -->
    <link href="bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
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
          <a class="navbar-brand" href="http://localhost/kolposadhonProject/index.php" target="_blank">কল্পসাধন</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">

        </div><!--/.nav-collapse -->
      </div>
    </nav>
	<header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center"> Admin Panel <small>Add Items</small></h1>
          </div>
        </div>
      </div>
    </header>
  
  
  
  
    <div class="col-md-9">
    <!-- Website Overview -->
    <div class="panel panel-default">
      <div class="panel-heading main-color-bg">
        <h3 class="panel-title">Add New Product</h3>
      </div>
      <div class="panel-body">
        <form action="add.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label>Name</label>
            <input type="text" name="product_name" class="form-control" placeholder="Enter Product Name..." value="">
          </div>
          <div class="form-group">
            <label>Category</label>
            <select id="select" name="cat_id" class="form-control">
                
            </select>
          </div>
          <div class="form-group">
            <label>Brand</label>
            <select id="select" name="brand_id" class="form-control">
                
            </select>
          </div>
          <div class="form-group">
            <label>Description</label>
           <textarea name="body" class="form-control tinymce" placeholder="Add Product Description Here..."></textarea>
          </div>
          <div class="form-group">
            <label>Price</label>
            <input type="number" name="price" class="form-control" placeholder="Enter Price...">
          </div>
          <div class="form-group">
            <label>Upload Image</label>
            <input type="file" name="image" class="form-control" />
          </div>
          <div class="form-group">
            <label>Product Type</label>
            <select id="select" name="type" class="form-control">
                <option>Select Type</option>
                <option value="0">Featured</option>
                <option value="1">None</option>
            </select>
          </div>
          <input type="submit" class="btn btn-default" value="Save">
        </form>
      </div>
      </div>
  </div>

  </body>