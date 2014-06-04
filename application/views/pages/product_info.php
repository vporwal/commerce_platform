      <div class="page-header">
        <h1>Product Information</h1>
      </div>
	  
	<div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Add / Update Products</h3>
      </div>
      <div class="panel-body">  
		<form class="form-horizontal" role="form">
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Product Desc:</label>
			<div class="col-sm-4">
			  <!--<select name="mProductCode" id="mProductCode" class="form-control">
					<option value=""></option>
				</select>
                -->
                <div ng-controller="ChallenMgmtController">  
                  <autocomplete ng-model="yourchoice" data="movies" click-activation="true"></autocomplete>
                </div>
                
			</div>
              <label for="inputPassword3" class="col-sm-2 control-label">Item</label>
			<div class="col-sm-4">
			  <select name="mProductType" id="mProductType" class="form-control">
				<option value=""></option>
			</select>
			</div>
		  </div>
		  <div class="form-group">
			
              <label for="inputPassword3" class="col-sm-2 control-label">Size</label>
			<div class="col-sm-4">
			  <select name="mProductSizes" id="mProductSizes" class="form-control">
							<option value="">Select Size</option>
						</select>
			</div>
              <label for="inputPassword3" class="col-sm-2 control-label">Brand</label>
			<div class="col-sm-4">
			  <select name="mBrand" id="mBrand" class="form-control">
							<option value="">Select Option................</option>
							<option value="u1">Uttam Galva</option>
							<option value="j1">Jindal Steel</option>
							<option value="t1">Tata Steel</option>
							<option value="O1">Others</option>
						</select>
			</div>
		  </div>
		  
		
		  <div class="form-group">
			
              <label for="inputPassword3" class="col-sm-2 control-label">Thickness</label>
			<div class="col-sm-4">
			  <select name="mThickness" id="mThickness" class="form-control">
						</select>
			</div>
               <label for="inputPassword3" class="col-sm-2 control-label">Measurement Type:</label>
			<div class="col-sm-4">
			  <select name="mQtyRep" id="mQtyRep" class="form-control">
							<option value=""></option>
						</select>
			</div>
		  </div>
		
		  
		
		  <div class="form-group">
			
            <label for="inputPassword3" class="col-sm-2 control-label">Wt. / Sheet:</label>
			<div class="col-sm-4">
			 <input type="text" name="mWtPerSheet" id="mWtPerSheet" class="form-control" size="20" />
			</div>
		  </div>
		  
		
		  <div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				  <button id="mSaveProductDetails" type="button" class="btn btn-lg btn-primary">Cancel</button>
			<button id="deleteBtn" type="button" class="btn btn-lg btn-primary">Delete Product</button>
			<button type="button" class="btn btn-lg btn-primary">Save Product</button>
			</div>
		  </div>
		</form>
	  
      </div>
	</div>
	  
	<div class="panel panel-primary">
      <!-- Default panel contents -->
      <div class="panel-heading">
        <h3 class="panel-title">List of Available Products</h3>
      </div>
		<div class="gridStyle" ng-grid="gridOptions" ng-controller="ChallenMgmtController"> 
        </div>
    </div>
