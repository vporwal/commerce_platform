<div class="container theme-showcase" ng-controller="CarouselDemoCtrl" style="background-color:white">			
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
	<div class="col-md-9" style="padding-top: 15px;padding-left:0px;">	
		<div class="col-md-4" style="padding-left:0px">
			<img class="" ng-src="<?php echo base_url(); ?>img/home_decor/gems/coreal_exotics.jpg" style="width:100%">
		</div>
		<div class="col-md-8" style="padding: 0px;">
			<h2 style="margin-top:0px" class="featurette-heading">Smaller Footprint. <span class="text-muted">Lightweight.</span></h2>
			<p class="lead">The new Bootstrap 3 promises to be a smaller build. The separate Bootstrap base and responsive.css files have now been merged into one. There is no more fixed grid, only fluid.
			</p>
			<div class="col-lg-6" style="padding:0px">
				<label><span class="text-muted">Highlights</span></label>	
				<ul style="-webkit-padding-start: 25px;">
					<li>
					Good Quality, High Quality Product
					</li>
					<li>
					durable
					</li>
					<li>
					test cotnent
					</li>
				</ul>
			</div>
			<div class="col-lg-6" style="border-left: 1px dotted">
				<label><span class="text-muted">Brand</span></label>
				<p>Availabel in size: xxxxxxxxx</p>
				<p>Availabel in size: xxxxxxxxx</p>
				<p>Availabel in size: xxxxxxxxx</p>
			</div>
		</div>	
		<div style="clear:left;padding-top:20px">
			<p class="textheading">PRODUCT SUMMARY OF PRODUCT NAME PRODUCT BRAND</p>	  
		</div>
		<div style="clear:left;padding-top:20px">
			<p class="textheading">People WHO VIEWED THIS ITEM ALSO VIEWED</p>	  
			<div class="slider1">
				<div class="slide"><img src="http://roofingsolutions.co.in/images/home_decor/gems/products/jasper_glorious.jpg"></div>
				<div class="slide"><img src="http://roofingsolutions.co.in/images/home_decor/gems/products/jasper_splendid.jpg"></div>
				<div class="slide"><img src="http://roofingsolutions.co.in/images/home_decor/gems/products/sapphire_glorious.jpg"></div>
				<div class="slide"><img src="http://roofingsolutions.co.in/images/home_decor/gems/products/coreal.jpg"></div>
				<div class="slide"><img src="http://roofingsolutions.co.in/images/home_decor/gems/coreal_exotics.jpg"></div>
			</div>
		</div>
		<div style="clear:left;padding-top:20px">
			<div class="col-md-6" style="padding-left: 0px;">
				<p class="textheading">People rating </p>	
				<div class="tuto-cnt">
					<hr style="margin-top:5px;margin-bottom:5px">
					<div class="rate-ex2-cnt">
						<div id="1" class="rate-btn-1 rate-btn rate-btn-hover"></div>
						<div id="2" class="rate-btn-2 rate-btn rate-btn-hover"></div>
						<div id="3" class="rate-btn-3 rate-btn rate-btn-hover"></div>
						<div id="4" class="rate-btn-4 rate-btn"></div>
						<div id="5" class="rate-btn-5 rate-btn"></div>
					</div>
					<hr style="margin-top:5px;margin-bottom:5px">
					<div class="box-result-cnt">
						<p>The content was rated <strong>1637</strong> times.</p>
						<hr style="margin-top:5px;margin-bottom:5px">
						<p>The rating is at <strong>3.6059865607819</strong> .</p>
						<hr style="margin-top:5px;margin-bottom:5px">
						<div class="rate-result-cnt">
							<div class="rate-bg" style="width:72.119731215638%"></div>
							<div class="rate-stars"></div>
						</div>
					</div><!-- /rate-result-cnt -->
				</div>
			</div>
			<div class="col-md-6" style="padding:0px">
				<p class="textheading">Share With People </p>
				<div class="tab-tr" id="t1">
					<div class="like-btn like-h">Like</div>
					<div class="dislike-btn"></div>

					<div class="share-btn">Share</div>

					<div class="stat-cnt">
						<div class="rate-count">1960</div>
						<div class="stat-bar">
							<div class="bg-green" style="width:63%;"></div>
							<div class="bg-red" style="width:37%"></div>
						</div><!-- stat-bar -->
						<div class="dislike-count">718</div>
						<div class="like-count">1242</div>
					</div><!-- /stat-cnt -->
				</div>
				<div class="share-cnt" style="display: block;">		
					<div class="addthis_toolbox addthis_default_style ">
					<a class="addthis_button_linkedin_counter at300b"><iframe src="//ct1.addthis.com/static/r07/linkedin023.html#href=http%3A%2F%2Fdemo.webcodo.net%2Flike-dislike-stat-jquery-ajax-php%2F&amp;dr=http%3A%2F%2Fwww.webcodo.net%2F&amp;conf=product%3Dtbx-300%26username%3Dra-5174d2b853d85895%26pubid%3Dra-5174d2b853d85895&amp;share=imp_url%3D1%26url%3Dhttp%253A%252F%252Fdemo.webcodo.net%252Flike-dislike-stat-jquery-ajax-php%252F%26title%3DWebCodo%2520%253A%253A%2520Like%2520%2526%2520Dislike%2520System%2520With%2520jQuery%2520Ajax%2520and%2520PHP%26smd%3Drsi%253D%2526rxi%253Dundefined%2526gen%253D0%2526rsc%253D%2526dr%253Dhttp%25253A%25252F%25252Fwww.webcodo.net%25252F%2526sta%253DAT-ra-5174d2b853d85895%25252F-%25252F-%25252F53896da106ea1e12%25252F1%26passthrough%3Dlinkedin%253Dcounter%25253Dhorizontal&amp;li=counter%3Dhorizontal" role="presentation" scrolling="no" allowtransparency="true" scrollbars="no" style="width:100px; height:18px;" frameborder="0"></iframe></a>
				   <div class="atclear"></div></div>
				</div>
				<br/>
				<div class="horizontal-cnt">
					<div class="soc-cnt">
						<div class="soc-img facebook-icon"></div>
						<div class="soc-count wcd_facebook"></div>
						<div class="soc-lab">Fans</div>
					</div><!-- facebook container -->
					<div class="soc-cnt">
						<div class="soc-img  youtube-icon"></div>
						<div class="soc-count wcd_youtube">1,914,902</div>
						<div class="soc-lab">Subscribers</div>
					</div><!-- youtube container -->
					<div class="soc-cnt">
						<div class="soc-img  twitter-icon"></div>
						<div class="soc-count wcd_twitter">114</div>
						<div class="soc-lab">Followers</div>
					</div><!-- twitter container -->
					<div class="soc-cnt">
						<div class="soc-img  dribbble-icon"></div>
						<div class="soc-count wcd_dribbble">5,164</div>
						<div class="soc-lab">Followers</div>
					</div><!-- dribbble container -->
					<div class="soc-cnt">
						<div class="soc-img  vimeo-icon"></div>
						<div class="soc-count wcd_vimeo">30</div>
						<div class="soc-lab">Followers</div>
					</div><!-- instagram container -->
					<div class="soc-cnt">
						<div class="soc-img  instagram-icon"></div>
						<div class="soc-count wcd_instagram">1,037</div>
						<div class="soc-lab">Followers</div>
					</div><!-- instagram container -->
					<div class="soc-cnt">
						<div class="soc-img  soundcloud-icon"></div>
						<div class="soc-count wcd_soundcloud">476</div>
						<div class="soc-lab">Followers</div>
					</div><!-- soundcloud container -->
					<div class="soc-cnt">
						<div class="soc-img  gplus-icon"></div>
						<div class="soc-count wcd_gplus">98,290</div>
						<div class="soc-lab">Followers</div>
					</div><!-- gplus container -->
				</div>
			</div>
		</div>
		<div style="clear:left;padding-top:20px">
			<p class="textheading">People Reviews and feedback </p>	
			<div class="col-md-12" style="padding-left:0px">	
				<div class="col-md-1" style="padding-left:0px">
					<img src="http://www.gravatar.com/avatar/b3174acbc37a2800804440bc0196b040?d=mm&amp;s=35" alt="">	
				</div>
				<div class="col-md-11" style="padding: 0px;font-size:14px">
					<span style="padding-right:30px;">Vinod</span><span>30-05-2014 11:09</span><br/>
				</div>	
				<div class="col-md-12" style="padding-left:0px">
					<p style="padding:5px">test</p>
					<div class="new-com-bt" style="display: block;">
						<span>Write a comment ...</span>
					</div>
					<div class="new-com-cnt" style="display: none;">
						<input type="text" id="name-com" name="name-com" value="" placeholder="Your name" class="form-control-ext">
						<input type="email" id="mail-com" name="mail-com" value="" placeholder="Your e-mail adress" class="form-control-ext">
						<textarea class="the-new-com form-control-ext"></textarea>        
						<button type="button" class="bt-add-com btn btn-primary">Post Comments  
						</button>
						<button type="button" class="bt-cancel-com btn btn-default btn-lg">  Cancel
						</button>
					</div>
					<div class="clear"></div>
				</div>	
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<img class="" ng-src="<?php echo base_url(); ?>img/home_decor/gems/coreal_exotics.jpg" style="width:100%">
		<img class="" ng-src="<?php echo base_url(); ?>img/home_decor/gems/coreal_exotics.jpg" style="width:100%">
		<img class="" ng-src="<?php echo base_url(); ?>img/home_decor/gems/coreal_exotics.jpg" style="width:100%">
	</div>	
	<div style="clear:left">
		<label>
	</div>
</div>

<script>
	$('.slider1').bxSlider({
		mode: 'horizontal',
		height: "auto",
		slideWidth: "auto",
		minSlides: 2,
		maxSlides: 3,
		slideMargin: 10,
		speed: 1500,
		pager: false,
		easing: 'swing',
	});
	
	
	$(function(){ 
		$('.new-com-bt').click(function(event){    
			$(this).hide();
			$('.new-com-cnt').show();
			$('#name-com').focus();
		});
		/* when start writing the comment activate the "add" button */
		$('.the-new-com').bind('input propertychange', function() {
			$(".bt-add-com").css({opacity:0.6});
			var checklength = $(this).val().length;
			if(checklength){ 
				$(".bt-add-com").css({opacity:1}); 
			}
		});
		/* on clic  on the cancel button */
		$('.bt-cancel-com').click(function(){
			$('.the-new-com').val('');
			$('.new-com-cnt').fadeOut('fast', function(){
				$('.new-com-bt').fadeIn('fast');
			});
		});
		// on post comment click 
		$('.bt-add-com').click(function(){
			var theCom = $('.the-new-com');
			var theName = $('#name-com');
			var theMail = $('#mail-com');

			if( !theCom.val()){ 
				alert('You need to write a comment!'); 
			}else{ 
				/* $.ajax({
				   type: "POST",
				   url: "ajax/add-comment.php",
				   data: 'act=add-com&id_post='+<?php echo $id_post; ?>+'&name='+theName.val()+'&email='+theMail.val()+'&comment='+theCom.val(),
				   success: function(html){
					   theCom.val('');
					   theMail.val('');
					   theName.val('');
					   $('.new-com-cnt').hide('fast', function(){
						   $('.new-com-bt').show('fast');
						   $('.new-com-bt').before(html);  
					   })
				   }  
				});*/
			}
		});
	});
</script>