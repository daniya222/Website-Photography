<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Order</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html" >Pixelooks</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                    <li>
                        <a href="photo.html">Photo</a>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown" data-toggle="dropdown" href="#">Product<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                        	<li><a href="camera.html">Camera</a></li>
                        	<li><a href="lens.html">Lens</a></li>
                        	<li><a href="servicefull.html">Service</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="articlehome.html">Article</a>
                    </li>
                 </ul>
                  
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Order
                    <small>Pixelooks</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">Order</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <hr>
        <!-- E N D CIRCLE -->
        <h2 class="text-center">Order Product<small> Pixelooks</small></h2>
        <hr>
        <br>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-4">
            	<div class="control-group form-group">
                   <div class="controls">
                      <label>Full Name</label>
                      <input type="text" class="form-control" placeholder="Enter your full name">
                      <p class="help-block"></p>
                   </div>
                </div>
            </div>
            <div class="col-md-4">
            	<div class="control-group form-group">
                   <div class="controls">
                      <label>Phone Number</label>
                      <input type="tel" class="form-control" placeholder="Enter your phone number">
                      <p class="help-block"></p>
                   </div>
                </div>
            </div>
        </div>
        <div class="row">
        	<div class="col-md-2"></div>
        	<div class="col-md-8">
        		<div class="control-group form-group">
        			<div class="controls">
        				<label>Email Address</label>
        				<input type="text" class="form-control" placeholder="Enter your email address">
        			</div>
        		</div>
        	</div>
        </div>
        <div class="row">
        	<div class="col-md-2"></div>
        	<div class="col-md-8">
        		<div class="control-group form-group">
        			<div class="controls">
        				<label>Address</label>
        				<input type="text" class="form-control" placeholder="Enter your address">
        			</div>
        		</div>
        	</div>
        </div>
		 <div class="row">
        	<div class="col-md-2"></div>
        	<div class="col-md-8">
        		<div class="control-group form-group">
        			<div class="controls">
        				<label>Postal Code</label>
        				<input type="text" class="form-control" placeholder="Enter your postal code">
        			</div>
        		</div>
        	</div>
        </div>
		<div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-4">
            	<div class="control-group form-group">
                   <div class="controls">
                      <label>Province</label>
                      <input type="text" class="form-control" placeholder="">
                      <p class="help-block"></p>
                   </div>
                </div>
            </div>
            <div class="col-md-4">
            	<div class="control-group form-group">
                   <div class="controls">
                      <label>City</label>
                      <input type="tel" class="form-control" placeholder="">
                      <p class="help-block"></p>
                   </div>
                </div>
            </div>
        </div>
		 <div class="row">
        	<div class="col-md-2"></div>
        	<div class="col-md-8">
        		<div class="control-group form-group">
        			<div class="controls">
        				<label>Postal Code</label>
        				<input type="text" class="form-control" placeholder="Enter your postal code">
        			</div>
        		</div>
        	</div>
        </div>
        <div class="row">
        	<div class="col-md-2"></div>
        	<div class="col-md-5">
        		<div class="control-group form-group">
        			<div class="controls">
        				<label>Product</label>
        				<select class="form-control" id="sell">
        					<option>Photo</option>
        					<option>Camera</option>
        					<option>Lens</option>
        					<option>Service</option>
        				</select>
        			</div>
        		</div>
        	</div>
        	<div class="col-md-3">
        		<div class="control-group form-group">
        			<div class="controls">
        				<label>Quantity</label>
        				<form action="#">
        				<input class="form-control" type="number" name="quantity" min="1" max="5">
        					<!--<input class="form-control" type="number" id="myNumber">
        					<script>
							function myFunction() {
								document.getElementById("myNumber").stepUp(5);
							}
							</script> -->
        				</form>
        			</div>
        		</div>
        	</div>
        	<div class="col-md-2"></div>
        	<div class="col-md-5"></div>
        	<div class="col-md-2">
        		<p><a href="confirmationorder.html" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Order Now!</a> </p>
        	</div>
        </div>
        <!-- /.row -->

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
       
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p align="center">Copyright &copy; Pixelooks</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>



</body>

</html>