
<div class="page-header">
	<h1>Challen Information</h1>
</div>
	  
<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">Challen</h3>
  	</div>
	<div class="panel-body">  
		<form class="form-horizontal" role="form">
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Customer Name:</label>
				<div class="col-sm-5" >
	            	<div>  
	                	<autocomplete ng-model="customer_model" data="customers" 
	                		click-activation="true" on-type="getCustomers" ></autocomplete>
	                </div>
				</div>
				<label for="inputPassword3" class="col-sm-2 control-label">Date:</label>
				<div class="col-sm-2" ng-controller="DatepickerDemoCtrl" 
					ng-scope="datepicker" style="width:16.666666666666664%">
			  		<p class="input-group">
              			<input type="text" class="form-control" datepicker-popup="{{format}}" 
              				ng-model="dt" is-open="opened" min="minDate" max="'2015-06-22'" 
              				datepicker-options="dateOptions" date-disabled="disabled(date, mode)" 
              				ng-required="true" close-text="Close" />
              			<span class="input-group-btn">
	                		<button class="btn btn-default" ng-click="open($event)">
	                			<i class="glyphicon glyphicon-calendar"></i>
	                		</button>
              			</span>
            		</p>
				</div>
		  	</div>
		  	<div class="form-group">			
            	<label for="inputPassword3" class="col-sm-2 control-label">Address: </label>
				<div class="col-sm-5">
					<textarea style="width:100%"></textarea>
				</div>
			</div>
			<div  ng-controller="ChallenMgmtController">
				<h3 class="panel-title">
					Order Information - Order Item{{plural(products)}} in Challan: {{products.length}} </h3><br />
      			<table  class="table table-striped">
					<tr>
						<td>Sr. No.</td>
						<td>Particulars</td>
						<td>Qty</td>
						<td>UOM(Unit of Measurement)</td>
						<td>Rate</td>
						<td>Item Total</td>
						<td>
							<button class="btn btn-danger btn-mini" ng-click="addTemp()">
								<i class="icon-add icon-white">Add</i>
							</button>
		  				</td>
					</tr>
    				<tr ng-repeat="productItem in products track by $index | filter : search"  ng-class="{'muted':isTemp($index)}">
      					<td>{{$index+1}}</td>      
      					<td><autocomplete ng-model="productItem.particulars"
      						data="prodDescs" click-activation="true" on-type="getProducts" ></autocomplete>
      					</td>
      					<td>
      						<input type="text" name="qty" value="{{productItem.qty | currency }}" class="form-control ng-valid ng-dirty" 
      							size="5" ng-model="productItem.qty" ng-change="calItemTotal(productItem)" ng-required="required" ng-maxlength="5" ng-minlength="1">
      					</td>
						<td>
	      					<select name="uom" ng-model="productItem.uom">
	      						<option value="SHEET">SHEET(s)</option>
					      		<option value="KG">KG</option>
					      		<option value="TON">TON</option>
					      		<option value="MTR">MTR</option>
					      		<option value="SQ. MTR">SQ. MTR</option>
					      	</select>
      					</td>
						<td>
							<input type="text" name="" value="" class="form-control ng-valid ng-dirty" 
								size="5" ng-change="calItemTotal(productItem)"  ng-model="productItem.rate" ng-change="calItemTotal(productItem)">
						</td>
						<td>
							<input type="text" name="" value="" ng-disabled="true" ng-model="productItem.itemTotal"  size="7" 
								class="form-control ng-valid ng-dirty"">
						</td>
						<td>
							<button class="btn btn-danger btn-mini" ng-click="deleteProduct(productItem)" 
								ng-disabled="isOne()"><i class="icon-trash icon-white">Delete</i></button>
						</td>
					</tr>
				</table>
			</div>
		</form>
	</div>
</div>