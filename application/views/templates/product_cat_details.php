
<div class="container theme-showcase" ng-controller="CarouselDemoCtrl">			
	<div>
		<div style="margin-top: 58px;"></div>
		<div style="background-color:white">
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
	<!-- showing different views as per requested page.. -->
	<div style="background-image: linear-gradient(to right,rgba(0,0,0,.1) 0,rgba(0,0,0,.1) 100%);margin:10px" ng-show="isCompareVisible">
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
	
	<div class="row" style="background-color: white; margin-left:0px;margin-top:0px;margin-right:0px;">
		<div class="col-md-9 show-grid">
			<div class="sort">
				<span>SORT BY: 
				</span>
				<span class="sort-value-selected">POPULARITY
				</span>
				<span class="sort-value">PRICE
				</span>
				<span class="sort-value">NEW ARRIVALS
				</span>
				<span class="sort-value">CUSTOMER RATING
				</span>
				<div style="float:right" id="list" >
					<span class="list"></span>
					<span style="font-size:11px;padding-left:2px;cursor:pointer">List</span>
				</div>
				<div style="float:right" id="grid" >
					<span class="grid grid-active"></span>
					<span style="font-size:11px;padding-left:2px;cursor:pointer">Grid</span>
				</div>	
			</div>	
			<div ng-repeat="group in groups">
				<div>
					{{group.displayName}}
				</div>

				<div class="col-md-6 text-center img-thumbnail" ng-mouseout="onMouseOut()" ng-mouseover="onMouseOver($index);" ng-repeat="product in group.products track by $index">
					<!-- show this for List view -->
					<div class="list_style" style="display:none">
						<div>
							<img src="http://roofingsolutions.co.in/images/{{product.img_path}}{{product.img_name}}">
							<!-- <div class="buy-ico"></div> -->
							<h3>
								{{product.product_name}}
							</h3>							
							<p>
								{{product.prod_short_desc}}
							</p>
							<p>Avg. Price (%)</p>							
							<p style="padding-top:5px;"><a href="<?php echo base_url(); ?>index.php/ProductProdDetailsController/index">View Details»</a></p>
						</div>
					</div>
					<div class="grid_style" style="display:block" ng-controller="ModalDemoCtrl" >
						<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
							<div class="flipper">
								<div class="front smothIn cursortype" style="background: url(http://roofingsolutions.co.in/images/{{product.img_path}}{{product.img_name}}) 0 0 no-repeat;">										
								</div>
								<div class="back" style="background:#f8f8f8;">
									<p>{{product.prod_short_desc}}</p>
								</div>
							</div>
						</div>
						<div class="overlay_left overlay_text" ng-show="isOptionVisible($index)"><a href="#" style="color:#fff" ng-click="open();">Quick View</a></div>
						<div class="overlay_right overlay_text" ng-show="isOptionVisible($index)"><a href="#" style="color:#fff">Add to WishList</a></div> 
						<h2 style="font-size: 20px">{{product.product_name}}</h2>						
						<p style="padding-top:5px;"><a href="<?php echo base_url(); ?>index.php/ProductProdDetailsController/index">View Details»</a></p>
						<p style="padding-top:5px;"><input type="checkbox" ng-click="addToCompare()"></input><span class="compareAdd">Add to compare</span></p>

					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3 show-grid">
			<div>
				<span>Search Products By:</span>
				<h5>By Room Type</h5>
				<div>
					<span style="padding:5px"><input type="checkbox" style="padding:5px"/> Master Bedroom</span><br/>
					<span style="padding:5px"><input type="checkbox"/> Child Bedroom</span><br/>
					<span style="padding:5px"><input type="checkbox"/> Living Room</span><br/>
					<span style="padding:5px"><input type="checkbox"/> Kitchen</span><br/>
				</div>
				<br/>
				<div>
					<h5>By Room Type</h5>
				</div>
				<div>
					<span style="padding:5px"><input type="checkbox"/> Natural</span><br/>
					<span style="padding:5px"><input type="checkbox"/> Blossom</span><br/>
					<span style="padding:5px"><input type="checkbox"/> Sunmica</span><br/>
				</div>
				<br/>
				<div>
					<h5>By Size</h5>
				</div>
				<div>
					<span style="padding:5px"><input type="checkbox"/> 8x4</span><br/>
					<span style="padding:5px"><input type="checkbox"/> 10x4</span><br/>
					<span style="padding:5px"><input type="checkbox"/> 18x4</span><br/>
				</div>
			</div>
		</div>
	</div>
</div><!-- /container -->
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
		};
	};
	
	$(function(){ 
		$('#list').click(function(){    
			$('.list_style').css('display','block');
			$('.grid_style').css('display','none');
			$('.grid').removeClass('grid-active');			
			$('.list').addClass('list-active');			
			$('.img-thumbnail').removeClass('col-md-6');
			$('.img-thumbnail').addClass('col-md-12');
		});

		$('#grid').click(function(){  
			$('.grid_style').css('display','block');
			$('.list_style').css('display','none');
			$('.list').removeClass('list-active');
			$('.grid').addClass('grid-active');		
			$('.img-thumbnail').removeClass('col-md-12');
			$('.img-thumbnail').addClass('col-md-6');
		});
	});
</script>
<script type="text/ng-template" id="sliderTemplate.html">        
	<div>
		<div class="featurette">
			<div class="slider">
				<div class="slide" ng-repeat="image in images" ng-show="image.visible">
					<img ng-src="{{image.src}}" />						
					<h3 style="margin:5px;">{{image.title}}</h3>
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