<?php 
	//get the incoming parameters...
	
	
	if (isset($_POST["isMailRequest"]) && $_POST["isMailRequest"] == 'sendMail') {
		//Code to read the email template, replace the placeholder with actual values.
		$templateTokens = array("##salutation##", "##display_name##", "##customer_name##", "##org_name##", "##cust_cell##", "##cust_landline##", "##customer_mail##", "##customer_loc##" );
		$mailValues = array($_POST["salutation"], ucfirst(strtolower($_POST["firstName"])), ucfirst(strtolower($_POST["firstName"]))." ".ucfirst(strtolower($_POST["lastName"])), ucwords(strtolower($_POST["orgName"])), $_POST["mobileNo"], $_POST["landline"], $_POST["emailAddr"], $_POST["address"], $_POST["desc"]);
		$inputfile = file_get_contents("../data/email_enquiry.html");
		$message = str_replace($templateTokens, $mailValues, $inputfile);
		
		//Send Mail using mail() function
		$to = "vinod.porwal@gmail.com;";
		$cc = $_POST["emailAddr"]; 
		$subject = "Business Enquiry by Customer";
		
		$headers = "From: " . "vinod.porwal@gmail.com" . "\r\n";
		$headers .= "Reply-To: ". "vinod.porwal@hotmail.com" . "\r\n";
		//$headers .= "CC: susan@example.com\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		
		mail($to, $subject, $message, $headers);
	}
	
?>
		
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
	<div class="row" style="background-color: white; margin-left:0px;margin-top:0px;margin-right:0px;">
		<div class="col-md-9">	
			<h3>My WishList Information</h3><br/>
			<div class="line"></div>
			<p class="mandatorynote">* = Fields are required.</p>
			<div id="errormessage" style="padding:10px 0 5px 0">
				<?php
					if (isset($successmessage)) {
						echo '<font weight="bold">'.$successmessage.'</font>';
						unset ($successmessage);
					} else if (isset($errormessage)) {
						echo '<font color="red">'.$errormessage.'</font>';
						unset ($errormessage);
					}
				?>
			</div>
			<form name="contactusemailform" action="../html/contactus.php" method="post" ng-controller="EnquiryController">
				<input type="hidden" name="isMailRequest" id="isMailRequest" value="" />
				<div class="col-md-12"  style="padding:0px;font-weight:bold;padding-bottom:5px;">
					<div class="col-md-5" style="padding-left:0px">	
						Product(s) Added for Enquiry
					</div>
					<div class="col-md-2">	
						Qty
					</div>
					<div class="col-md-5">	
						Comments
					</div>
				</div>
				<div class="col-md-12" ng-repeat="product in productList" style="padding-left:0px">
					<div class="col-md-5"  style="padding-left:0px">	
						{{product.prodName}}
					</div>
					<div class="col-xs-2">										
						<select id="prodQty" name="prodQty" class="form-control" style="min-width:58%;width:auto">
							<option value="1" selected>1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
						</select>
					</div>
					<div class="col-sm-4">	
						<textarea name="comment" rows="1" cols="50" wrap="on" class="form-control"></textarea>
					</div>
					<div class="col-sm-1">
						<a class="removeItem" prodId='<?php echo $x?>' href="#"><img src="<?php echo base_url(); ?>img/iconDelete.gif" title="" alt=""></img></a>
					</div>
				</div>
			</form>
			<div id="map-canvas">
			</div>
		</div>
	</div>
			
	<hr/>
	<div class="row">
		<div class="col-md-9" style="padding-left:0px">	
			<div class="col-md-12" style="padding-left:0px">
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-3 control-label">Company Name</label>
					<div class="col-sm-8" >
						<input type="text" class="form-control">
					</div>
				</div>
			</div>
			<div class="col-md-12" style="padding-left:0px">
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-3 control-label">Customer Address</label>
					<div class="col-sm-8" >
						<textarea class="form-control" row="1"></textarea>
					</div>						
				</div>
			</div>
			<div class="col-md-12" style="padding-left:0px">
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
			
			<div class="col-md-12" style="padding-left:0px">
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-3 control-label">Contact No. (LL)</label>
					<div class="col-sm-8" >
						<input type="text" name="lastName" id="lastName" size="15" class="form-control-ext"/>
					</div>						
				</div>
			</div>
			<div class="col-md-12" style="padding-left:0px">
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-3 control-label">Contact No. (M)</label>
					<div class="col-sm-8" >
						<input type="text" name="lastName" id="lastName" size="15" class="form-control-ext"/>
					</div>						
				</div>
			</div>
			<div class="col-md-12" style="padding-left:0px">
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-3 control-label">Additional Information</label>
					<div class="col-sm-8" >
						<textarea class="form-control" row="1"></textarea>
					</div>						
				</div>
			</div>
			
			<div class="col-md-12" style="padding-left:0px">
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
</div>

<script>
	
		$("td.cellunderline").delegate('a.removeItem','click', function(event) {
			var productCode = $(this).attr("prodId")
			var tr = $(this).closest('tr');
					eval(tr).remove();
			$.ajax({
				type: 'GET',
				url: "../html/store_session.php?productId="+productCode +"&action=remove",
				dataType: 'json',
				success: function(data){
					
					
				},
				failure: function() {
					
				}
			});
		});

		$(function() {
			$("#mailOrderRequest").on('click', function() {
				document.getElementById("isMailRequest").value = "sendMail";
				document.forms.mailEnquiry.submit();
			});
		});
</script>		

