<!DOCTYPE html>
<html lang="en" ng-app="myInvoiceApp">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="shortcut icon" href="<?php echo base_url(); ?>img/tiles.jpeg">

		<title> Complete Home Solutions - <?php echo $pageTitle ?> </title>
	
		<!-- Bootstrap core CSS -->
		<link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>css/bootstrap-theme.min.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>css/bootstrap-responsive.min.css" rel="stylesheet">

		<link href="<?php echo base_url(); ?>css/jquery.bxslider.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>css/autocomplete.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>css/custom.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet">
		
		<script src="<?php echo base_url(); ?>js/jQuery_fwk/jquery-1.10.2.min.js"></script>
		<script src="<?php echo base_url(); ?>js/angular_fwk/angular.min.js"></script>
		<script src="<?php echo base_url(); ?>js/angular_fwk/http.js"></script>
		<script src="<?php echo base_url(); ?>js/bootstrap_fwk/bootstrap.min.js"></script>
		<script src="<?php echo base_url(); ?>js/bootstrap_fwk/ui-bootstrap-tpls-0.10.0.min.js"></script>
		<script src="<?php echo base_url(); ?>js/plug_ins/jQuery/jquery.bxslider.js"></script>	
		<script src="<?php echo base_url(); ?>js/plug_ins/angular/datepicker.js"></script><!-- require for bootstrap js included. -->
		<script src="<?php echo base_url(); ?>js/customController.js"></script>

	</head>

	<body role="document" style="background-image:url(<?php echo base_url(); ?>img/tiles.jpeg);">
	
	<!-- Fixed navbar -->
		<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">			
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>						
					</button>
					<!-- show logo -->
					<img ng-src="<?php echo base_url(); ?>img/Logo.png" />
				</div>
				<form class="navbar-form navbar-left" role="search">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search Products">
					</div>
					<button type="submit" class="btn btn-default" style="margin-top:5px">Submit</button>
				</form>
				<div class="navbar-collapse collapse navbar-left" style="clear: float">
					<ul class="nav menu nav navbar-nav">
						<li><a href="<?php echo base_url(); ?>index.php/HomeController/index">Home</a></li>
						<li><a href="<?php echo base_url(); ?>index.php/Assembler/index">Products Design</a></li>
						<li><a href="<?php echo base_url(); ?>index.php/stockMgmtController/view">Workshop</a></li>            
						<li><a href="<?php echo base_url(); ?>index.php/stockMgmtController/view">Services</a></li>
						<li style="background-color: #c24546">
							<a href="<?php echo base_url(); ?>index.php/EnquiryCartController/index"><img src="<?php echo base_url(); ?>img/cart.png"/></a></li>           
					</ul>
				</div><!--/.nav-collapse -->
				
			</div>
		</div>
