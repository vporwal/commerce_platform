
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
	