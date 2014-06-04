
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
			
				<!-- for each category ... -->
			<div class="row" style="background-color: white; margin-left:0px;margin-top:0px;margin-right:0px;">
					<div class="col-md-9 show-grid">
					<div ng-repeat="category in categories">					
						<div class="col-md-4 text-center img-thumbnail" ng-repeat="group in category.groups track by $index">
							<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
								<div class="flipper">
									<img src="<?php echo base_url(); ?>img/{{group.image_path}}{{group.image}}" class="front smothIn cursortype"  style="width:100%"/>
									<div class="back">
										<p>{{group.shortDesc}}</p>
									</div>
								</div>
							</div>
							<h2 style="font-size: 20px">{{group.displayName}}</h2>				
							<p style="padding-top:5px;"><a class="btn btn-default" href="<?php echo base_url(); ?>index.php/ProductCatDetailsController/index/{{group.id}}">View All {{group.displayName}}»</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<h4>Most viewed Products</h4>
					<div ng-repeat="category in categories">
						<div ng-repeat="group in category.groups track by $index">
							<div class="text-center img-thumbnail">
								<img ng-click="open();"  style="width:100%" ng-src="<?php echo base_url(); ?>img/{{group.image_path}}{{group.image}}" class="recent-item smothIn ani-delay1 animated cursortype"/>						
								<p>{{group.shortDesc}}</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- /container -->