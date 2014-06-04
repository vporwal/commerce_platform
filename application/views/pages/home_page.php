
		<div class="container theme-showcase" ng-controller="CarouselDemoCtrl" style="background-color:white">			
			<div>
				<div style="margin-top: 58px;"></div>
				<div>
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
			
			<div class="row">
			<div class="col-md-9">	
				<h3>Introduction</h3>
				<p>test contents..</p>
			</div>
			<div class="col-md-3">	
				Quick Links 
				<ul>
				  <li class=""><a href="#">More Info</li>
				  <li class=""><a href="#">Products</li>
				  <li class=""><a href="#">Design</li>
				  <li class=""><a href="#">Design</li>
				  <li class=""><a href="#">Design</li>
				</ul>
			</div>
			</div>
			
			<!-- showing different views as per requested page.. -->
				
			
	</div> <!-- /container -->
