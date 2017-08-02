<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="details about the compnay" />
	<meta name="keywords" content="custom business logo,custom logo design,etc" />
	<meta name="author" content="team aimviz">
	<meta name="robots" content="index, follow">
	<meta name="revisit-after" content="1 day">
	<link rel="icon" type="image/png" href="<?php echo base_url();?>assets/img/favicon.png">
    <title>admin</title>
    <link href="<?php echo base_url();?>assets/admin/css/bootstrap.min.css" rel="stylesheet">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
	<!-- 1. Add latest jQuery and fancyBox files -->	
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" /> 
    <link href="<?php echo base_url();?>assets/admin/css/style.css" rel="stylesheet">
    </head>
	<body>
		<!-- header -->
		<header class="admin-header blacked">
			<div class="container">
				<div class="col-sm-4 col-md-3 titled-top">
					<text>Sign In</text>
				</div>
				<div class="col-sm-5 col-md-4 user">
					<text><span>Welcome To Qatar Signin</span></text>					
				</div>
			</div>
		</header>	
		<!-- header-ended -->
		<section class="admin-content">
			<div class="container">
				<div class="col-sm-offset-3 col-sm-6  form signin">
						<h2 class="pink-md-heading">Enter details to login</h2>
						<?php echo form_open_multipart('login/login');?>
							<div class="form-group">
								<input type="email" class="form-control" name="username" id="username" placeholder="Name.." required>
							</div>
							<div class="form-group">
								<input type="password" class="form-control" name="password" id="password" placeholder="Password.." required>
							</div>
						<button type="submit" class="btn btn-primary" name="submit" onclick="validate()">Sign In</button>
						<?php echo form_close();?>
				</div>
			</div>
		</section>		
		<!-- header-ended -->

