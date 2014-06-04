<?php 
	//get the incoming parameters...
	if (isset($_POST["isSubmitted"]) && $_POST["isSubmitted"] == 'true') {
		$errormessage = "";	
		//validating the input data... 
		/** Validating Recaptcha.*/
		$privatekey = "6LcCXegSAAAAAN1PZSHJgvgXvt_yWxqj4uIjDeI0";
	  	$resp = recaptcha_check_answer ($privatekey, $_SERVER["REMOTE_ADDR"], 
	  		$_POST["recaptcha_challenge_field"], $_POST["recaptcha_response_field"]);
	    $isValid = true;
	  	if (!$resp->is_valid) {
	    	// What happens when the CAPTCHA was entered incorrectly
	    	$errormessage = "The reCAPTCHA wasn't entered correctly. Go back and try it again." . "(reCAPTCHA said: " .$resp->error;
	    	$isValid = false;
			//die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." . "(reCAPTCHA said: " . $resp->error . ")");
	  	} else {
	    	// Your code here to handle a successful verification
	  	}
		/***/
		if ($isValid == true) {
			//Code to read the email template, replace the placeholder with actual values.
			$templateTokens = array("##salutation##", "##display_name##", "##customer_name##", "##org_name##", "##cust_cell##", "##cust_landline##", "##customer_mail##", "##customer_addr##","##customer_desc##" );
			$mailValues = array($_POST["salutation"], ucfirst(strtolower($_POST["firstName"])), ucfirst(strtolower($_POST["firstName"]))." ".ucfirst(strtolower($_POST["lastName"])), ucwords(strtolower($_POST["orgName"])), $_POST["mobileNo"], $_POST["landline"], $_POST["emailAddr"], $_POST["address"], $_POST["desc"]);
			$inputfile = file_get_contents("../data/email_contactus.html");
			$message = str_replace($templateTokens, $mailValues, $inputfile);
			
			//Send Mail using mail() function
			$to = "mangalamsteel@roofingsolutions.co.in";
			//$cc = $_POST["emailAddr"]; 
			$subject = "Business Enquiry by Customer";
			$headers = "From: " . "vinod.porwal@roofingsolutions.co.in" . "\r\n";
			$headers .= "Reply-To: ". "vinod.porwal@roofingsolutions.co.in" . "\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			$headers .= "Cc: ".$_POST["emailAddr"]."\r\n";
			ini_set("SMTP","mail.roofingsolutions.co.in" ); 
			ini_set('sendmail_from', 'vinod.porwal@roofingsolutions.co.in'); 
		
			mail($to, $subject, $message, $headers);
			$successmessage = "Email Sent successfully.";	
		}
			
	} else {
		//echo 'not submitted';
	}
?>
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
	<div class="row" style="background-color: white; margin-left:0px;margin-top:0px;margin-right:0px;">
		<div class="col-md-9">	
			<div class="col-md-12">
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-3 control-label">Company Name</label>
					<div class="col-sm-8" >
						<input type="text" class="form-control">
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-3 control-label">Customer Address</label>
					<div class="col-sm-8" >
						<textarea class="form-control" row="1"></textarea>
					</div>						
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-3 control-label">Customer Name</label>
					<div class="col-sm-8">						
						<div class="col-sm-2" style="padding:0px;"  class="form-control-ext">
							<select id="salutation" name="salutation">
							<option value="">Mr.</option>
							<option value="">Mrs.</option>
							<option value="">Dear</option>
							</select>
						</div>	
						<div class="col-sm-4"  style="padding:0px;">
							<input type="text" name="firstName" id="firstName" size="15"  class="form-control-ext"/> 
						</div>
						<div class="col-sm-4"  style="padding:0px;">
							<input type="text" name="lastName" id="lastName" size="15"  class="form-control-ext"/>
						</div>
					</div>						
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-3 control-label">Contact No. (LL)</label>
					<div class="col-sm-8" >
						<input type="text" name="lastName" id="lastName" size="15" class="form-control-ext"/>
					</div>						
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-3 control-label">Contact No. (M)</label>
					<div class="col-sm-8" >
						<input type="text" name="lastName" id="lastName" size="15" class="form-control-ext"/>
					</div>						
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-3 control-label">Additional Information</label>
					<div class="col-sm-8" >
						<textarea class="form-control" row="1"></textarea>
					</div>						
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-3 control-label"></label>
					<div class="col-sm-8" >
						<?php
						  $publickey = "6LcCXegSAAAAABuWFFHt7ikE-PTWRGxvrWgOaN-6"; // you got this from the signup page
						  echo recaptcha_get_html($publickey);
						?>

					</div>						
				</div>
			</div>
			<div class="col-md-11">
				<div class="form-group" style="float:right">
					<input id="contactDealer" type="button" class="bt-add-com btn btn-primary" value="Post Enquiry"/>						
				</div>
			</div>			
		</div>
	</div>
</div> <!-- /container -->

<script>
	var RecaptchaOptions = {
		theme : 'clean'
	};
	$(function() {
		$("#contactDealer").on('click', function() {
			if (document.getElementById("isSubmitted").value == 'false') {
				document.getElementById("isSubmitted").value = 'true';
			} else {
				document.getElementById("isSubmitted").value = 'false';
			}
			document.contactusemailform.submit();
		});
	});
</script>