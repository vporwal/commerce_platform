<!DOCTYPE html>
<!-- Ref Links - http://www.bootply.com/render/62603 -->
<!-- http://code.tutsplus.com/tutorials/working-with-restful-services-in-codeigniter--net-8814 -->
<!-- 
	Slider directive http://www.sitepoint.com/creating-slide-show-plugin-angularjs/
	http://cleanliness.joostrap.com/ for reference joomala + bootstrap 
	http://angular-ui.github.io/bootstrap/ - angular + bootstrap CSS
	
	
	Angular JS form - http://www.sitepoint.com/html-forms-angularjs/
	http://scotch.io/tutorials/javascript/angularjs-form-validation	
-->
<html lang="en" ng-app="myInvoiceApp">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="shortcut icon" href="../../assets/ico/favicon.ico">

		<title> Complete Home Decor Solutions - <?php echo $pageTitle ?> </title>
	
		<!-- Bootstrap core CSS -->
		<link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>css/bootstrap-responsive.min.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>css/bootstrap-theme.css" rel="stylesheet">
	
		<!-- Bootstrap theme -->
		<link href="<?php echo base_url(); ?>css/bootstrap-theme.min.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>css/autocomplete.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>css/ng-grid.min.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>css/custom.css" rel="stylesheet">
	</head>

	<body role="document">
	
	<!-- Fixed navbar -->
		<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container">
			<div class="navbar-header">
			
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>				
			 </button>
			  <!-- show logo -->
			  <img ng-src="<?php echo base_url(); ?>img/Logo.png" />
			</div>
			<div class="navbar-collapse collapse navbar-left">
			  <ul class="nav menu nav navbar-nav">
				<li><a href="<?php echo base_url(); ?>index.php/productInfoController/view">Home</a></li>
				<li><a href="<?php echo base_url(); ?>index.php/stockMgmtController/view">Products Design</a></li>
				<li><a href="<?php echo base_url(); ?>index.php/stockMgmtController/view">Makers</a></li>
				<li><a href="<?php echo base_url(); ?>index.php/stockMgmtController/view">Workshop</a></li>            
				<li><a href="<?php echo base_url(); ?>index.php/stockMgmtController/view">Services</a></li>            
			  </ul>
			</div><!--/.nav-collapse -->
				<form class="navbar-form navbar-left" role="search">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search Products">
					</div>
					<button type="submit" class="btn btn-default" style="margin-top:5px">Submit</button>
				</form>
			</div>
		</div>

		<div class="container theme-showcase" ng-controller="CarouselDemoCtrl">			
			<div>
				<div style="margin-top: 58px">
					<carousel interval="myInterval">
					  <slide ng-repeat="slide in slides" active="slide.active">
						<img ng-src="{{slide.image}}" style="margin:auto;">
						<div class="carousel-caption">          
						  <p>{{slide.text}}</p>
						</div>
					  </slide>
					</carousel>
				</div>  
			</div>
			<div 
				style="background-image: linear-gradient(to right,rgba(0,0,0,.1) 0,rgba(0,0,0,.1) 100%);margin:10px" 
				ng-show="isCompareVisible">
					<div class="compare-items floatItem">						
						<div class="compare-item ">
							<div class="thumb_holder">								
							</div>							
							<span class="delete" title="Remove"></span>
						</div>						
					</div>
					<div class="compare-items floatItem">						
						<div class="compare-item">
							<div class="thumb_holder">								
							</div>							
							<span class="delete" title="Remove"></span>
						</div>						
						
					</div>
					<div class="compare-items floatItem">						
						<div class="compare-item">
							<div class="thumb_holder">								
							</div>							
							<span class="delete" title="Remove"></span>
						</div>						
						
					</div>
					<div class="compare-items floatItem">						
						<div class="compare-item">
							<div class="thumb_holder">								
							</div>							
							<span class="delete" title="Remove"></span>
						</div>						
						
					</div>					
					 <span class="close1" ng-click="hideCompareItems()"></span>
					<div class="clearfloat"></div>
					
			</div>
			<accordion close-others="oneAtATime">		
				<!-- using ngrepeat to show all categories available... -->
				
				<!-- for each category ... -->
				
				<accordion-group is-open="!status.open" ng-repeat="category in categories">
					
					<accordion-heading>
						{{category.displayName}}<i class="pull-right glyphicon" ng-class="{'glyphicon-chevron-down': status.open, 'glyphicon-chevron-right': !status.open}"></i>
					</accordion-heading>
					
					
					<div class="col-md-3 text-center img-thumbnail" ng-controller="ModalDemoCtrl" ng-mouseout="onMouseOut()" ng-mouseover="onMouseOver($index);" ng-repeat="group in category.groups track by $index">
						
							<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
								<div class="flipper">
									<div class="front smothIn cursortype" style="background: url(<?php echo base_url(); ?>img/{{group.image_path}}{{group.image}}) 0 0 no-repeat;">										
									</div>
									<div class="back" style="background:#f8f8f8;">
										<p>{{group.shortDesc}}</p>
									</div>
								</div>
							</div>
						<div class="overlay_left overlay_text" ng-show="isOptionVisible($index)"><a href="#" style="color:#fff" ng-click="open();">Quick View</a></div>						
						<div class="overlay_right overlay_text" ng-show="isOptionVisible($index)"><a href="#" style="color:#fff">Add to WishList</a></div>
						<h2 style="font-size: 20px">{{group.displayName}}</h2>						
						<!-- <p style="border-top:1px solid #c9c9c9;padding-top:5px;">{{group.shortDesc}}</p> -->
						<p style="border-top:1px solid #c9c9c9;padding-top:5px;"><a class="btn btn-default" href="#">View All {{group.displayName}}Â»</a></p>
						<p style="border-top:1px solid #c9c9c9;padding-top:5px;"><input type="checkbox" ng-click="addToCompare()"></input><span class="compareAdd">Add to compare</span></p>
					</div>
					
					<!--<div class="col-md-4 text-center img-thumbnail" ng-controller="ModalDemoCtrl" ng-mouseout="onMouseOut()" ng-mouseover="onMouseOver($index);"
					ng-repeat="group in category.groups track by $index">
						<img ng-click="open();" ng-src="<?php echo base_url(); ?>img/{{group.image_path}}{{group.image}}" class="recent-item smothIn ani-delay1 animated cursortype" />												
						<div class="overlay_left overlay_text" ng-show="isOptionVisible($index)"><a href="#" style="color:#fff">Quick View</a></div>						
						<div class="overlay_right overlay_text" ng-show="isOptionVisible($index)"><a href="#" style="color:#fff">Add to WishList</a></div>
						<h2>{{group.displayName}}</h2>						
						<p class="productDesc">{{group.shortDesc}}</p>
						<p class="productDesc"><a class="btn btn-default" href="#">View All {{group.displayName}}»</a></p>
						<p class="productDesc"><input type="checkbox" ng-click="addToCompare()"></input><span class="compareAdd">Add to Compare</span></p>
					</div>-->
				</accordion-group>
				
			</accordion>
			
	</div> <!-- /container -->
	<div id="footer">
      <div class="container">
        <p style="padding-top: 10px;color: white"><a href="#" style="color: #fff">About US</a> | <a href="#about" style="color: #fff">Who We Are (Our Team)</a> | <a href="#about" style="color: #fff">Contact Us</a></p>
        <p class="text-muted">@2013-2014 Copyright - Tech Solutions.</p>
      </div>

    </div>

	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!--<script src="../js/bootstrap.min.js"></script>-->
    <script src="<?php echo base_url(); ?>js/jquery-1.10.2.min.js"></script>
    <script src="<?php echo base_url(); ?>js/angular_fwk/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>js/angular_fwk/angular.min.js"></script>
    <script src="<?php echo base_url(); ?>js/angular_fwk/ui-bootstrap-tpls-0.10.0.min.js"></script>
    <script src="<?php echo base_url(); ?>js/angular_fwk/DatepickerDemoCtrl.js"></script>
    <script src="<?php echo base_url(); ?>js/angular_fwk/autocomplete.js"></script>
    <script src="<?php echo base_url(); ?>js/angular_fwk/http.js"></script>
    <script src="<?php echo base_url(); ?>js/angular_fwk/ngRoute/route.js"></script>
    <script src="<?php echo base_url(); ?>js/angular_fwk/ng-grid-2.0.7.min.js"></script>
    <script src="<?php echo base_url(); ?>js/customController.js"></script>
    
    <script>
        angular.module('myInvoiceApp', ['ChallenMgmtModule', 'datePicker', 'autocomplete','ngGrid', "ngRoute"]);
    </script>  
		
	<script type="text/ng-template" id="sliderTemplate.html">        
		<div>
			<div class="featurette">
				<div class="slider">
					<div class="slide" ng-repeat="image in images" ng-show="image.visible">
						<img ng-src="{{image.src}}" />						
						<h3 style="margin:5px;>{{image.title}}</h3>
						<p class="lead">{{image.title}}</p>
						<p class="lead">{{image.description}}</p>						
					</div>
				</div>
			</div>
			<div>
				<a href="#" ng-click="prev()" class="leftArrow"><img src="<?php echo base_url(); ?>img/left-arrow.png" /></a>
				<a href="#" ng-click="next()" class="rightArrow"><img src="<?php echo base_url(); ?>img/right-arrow.png" /></a>
			</div>
		</div>
	</script>
  </body>
</html>

<div ng-controller="ModalDemoCtrl">
    <script type="text/ng-template" id="myModalContent.html">        
		<slider images="images" ng-controller="SliderController" />	        
    </script>
</div>

<script>
	var ModalDemoCtrl = function ($scope, $modal, $log) {
	$scope.open = function (size) {
    var modalInstance = $modal.open({
      templateUrl: 'myModalContent.html'
    });
	};
	$scope.currIndex = 1;
	$scope.isClearFloat = function() {
			if ($scope.currIndex % 3 == 0) {
				$scope.currIndex++;
				return '{clear: left;}';
			} else {
				$scope.currIndex++;
				return '';
			}
	};
	
};

</script>
