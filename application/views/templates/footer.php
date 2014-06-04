		<div id="footer">
			<div class="container">
				<p style="padding-top: 10px;color: white"><a href="#" style="color: #fff">About US</a> | <a href="#about" style="color: #fff">Who We Are (Our Team)</a> | <a href="<?php echo base_url(); ?>index.php/ContactUsController/index" style="color: #fff">Contact Us</a></p>
				<p class="text-muted">@2013-2014 Copyright - Tech Solutions.</p>
			</div>
		</div>

		<script>
			angular.module('myInvoiceApp', ['ChallenMgmtModule', 'datePicker']);
			//angular.module('myInvoiceApp', ['ChallenMgmtModule']);
		</script>  
		
		<!--<script type="text/ng-template" id="sliderTemplate.html">        
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
		</script>-->
	</body>
</html>
<script id="_webengage_script_tag" type="text/javascript">
  var _weq = _weq || {};
  _weq['webengage.licenseCode'] = '~716808b7';
  _weq['webengage.widgetVersion'] = "4.0";
  
  (function(d){
    var _we = d.createElement('script');
    _we.type = 'text/javascript';
    _we.async = true;
    _we.src = (d.location.protocol == 'https:' ? "https://ssl.widgets.webengage.com" : "http://cdn.widgets.webengage.com") + "/js/widget/webengage-min-v-4.0.js";
    var _sNode = d.getElementById('_webengage_script_tag');
    _sNode.parentNode.insertBefore(_we, _sNode);
  })(document);
</script>