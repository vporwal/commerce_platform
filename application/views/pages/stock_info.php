      <div class="page-header">
        <h1>Product Stock Management</h1>
      </div>
	  
	<div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Add / Update Stock Entry</h3>
      </div>
      <div class="panel-body">  
		<form class="form-horizontal" role="form">
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Product Desc:</label>
			<div class="col-sm-4">
			  <select name="mProductCode" id="mProductCode" class="form-control">
					<option value=""></option>
				</select>
			</div>
              <label for="inputPassword3" class="col-sm-2 control-label">Type:</label>
			<div class="col-sm-4">
			  <select name="mPurchaseType" id="mPurchaseType" class="form-control">
                    <option></option>
                    <option value="buy">Buy</option>
                    <option value="sell">Sell</option>
                </select>
			</div>
		  </div>
		  <div class="form-group">
			
              <label for="inputPassword3" class="col-sm-2 control-label">Warehouse: </label>
			<div class="col-sm-4">
			  <select name="mShopLocation" id="mShopLocation" class="form-control">
						<option value=""></option>
						<option value="Mangalam Steel Centre">Mangalam Steel Centre</option>
						<option value="Mangalam Enterprises">Mangalam Enterprises</option>
						<option value="Mangalam Doors">Mangalam Doors</option>
						<option value="Mangalam Patra Depot">Mangalam Patra Depot</option>
					</select> (for future implementation...)
			</div>
              
		  </div>
		  
		
		  <div class="form-group">			
              <label for="inputPassword3" class="col-sm-2 control-label">Quantity In Stock:</label>
                <div class="col-sm-4">
                     <label for="inputPassword3" class="col-sm-2 control-label">####</label>
                </div>               
		  </div>
		
		  
		
		  <div class="form-group">
			
            <label for="inputPassword3" class="col-sm-2 control-label">Quantity:</label>
			<div class="col-sm-4">
			 <input type="text" name="mWtPerSheet" id="mWtPerSheet" class="form-control" size="20" />
			</div>
		  </div>
		  
		
		  <div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				  <button id="mSaveProductDetails" type="button" class="btn btn-lg btn-primary">Cancel</button>
			<button id="deleteBtn" type="button" class="btn btn-lg btn-primary">Save</button>
			</div>
		  </div>
		</form>
	  
      </div>
	</div>
	  
	<div class="panel panel-primary">
      <!-- Default panel contents -->
      <div class="panel-heading">
        <h3 class="panel-title">Stock Information</h3>
      </div>
    
      <!-- Table -->
      <table class="table">
        <thead>
          <tr>
            <th>Sr. No.</th>
            <th>Prod Code</th>
            <th>Ware-house</th>
            <th>Available Qty</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>1</td>
            <td>Mark</td>
            <td>Otto</td>
          </tr>
          
        </tbody>
      </table>
    </div>
