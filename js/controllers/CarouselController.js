var cModule = angular.module('carouselModule', []);

cModule.controller('carouselController' function ($scope) {
  $scope.myInterval = 5000;  
  $scope.isVisible = false; 

  $scope.groups = [{"id":"101","displayName":"Color Coated Sheets","template_type":"product_detail_v1_t3","image_path":"","image":"","shortDesc":"","description":"","infoLink":"","products":[{"group_id":null,"product_id":"149","product_name":"Colour Coated Coils","prod_desc":"","img_name":"Galvanized-Steel-Coil-Pre-Painted-Ral-standard.jpg","img_path":"home_decor\/roofing\/color_coated\/products\/","prod_short_desc":"Color Coated Roofing Sheets are wel-known for its elegant designs, durability and cost-effectiveness. Thus, it finds application in varied industries. In addition to this, clients can avail these sheets in varied specifications on the basis of grades, colors and forms.","template_type":"product_detail_v1_t4"},{"group_id":null,"product_id":"115","product_name":"Colour Coated Sheet","prod_desc":"","img_name":"colour-coated-roofing-sheets-250x250.jpg","img_path":"home_decor\/roofing\/products\/","prod_short_desc":"Color Coated Roofing Sheets are wel-known for its elegant designs, durability and cost-effectiveness. Thus, it finds application in varied industries. In addition to this, clients can avail these sheets in varied specifications on the basis of grades, colors and forms.","template_type":"product_detail_v1_t4"},{"group_id":null,"product_id":"118","product_name":"Tiles Sheets Or Coula Sheet","prod_desc":"","img_name":"tiles-sheets-250x250.jpg","img_path":"home_decor\/roofing\/products\/","prod_short_desc":"These sheets are sturdy and have an extended service life. This sheets are design in compliance with customer specifications, using optimum quality raw material. Apart from enhancing the look structure, these tiles are aptly used for rainwater systems.","template_type":"product_detail_v1_t4"}]}];
  
  $scope.categories  = [{"id":"1","displayName":"Structural, Roofing & Building Materials","groups":[{"id":"101","displayName":"Color Coated Sheets","template_type":"product_detail_v1_t3","image_path":"home_decor\/roofing\/color_coated\/","image":"colour-coated-roofing-sheets-250x250.jpg","shortDesc":"Roll formed panelsCorrugated sheetsTrapezoidal profiles","description":"Color Coated Products","infoLink":"http:\/\/wikipedia.com","products":[]},{"id":"102","displayName":"Galvanized Products","template_type":"product_detail_v1_t3","image_path":"home_decor\/roofing\/galvanized\/","image":"galvanized-sheets-250x250.jpg","shortDesc":"Natural Wood ProductsMulti-color availabilityFor complete home interior","description":"Galvanized Products","infoLink":"http:\/\/wikipedia.com","products":[]},{"id":"103","displayName":"CRC Products","template_type":"product_detail_v1_t3","image_path":"home_decor\/roofing\/crc\/","image":"crc-sheets-250x250.jpg","shortDesc":"High strengthExcellent dent resistanceGood magnetic properties","description":"CRC Products","infoLink":"http:\/\/wikipedia.com","products":[]},{"id":"105","displayName":"HR Products","template_type":"product_detail_v1_t3","image_path":"home_decor\/roofing\/hr\/","image":"hr-sheets-250x250.jpg","shortDesc":"Natural Wood ProductsMulti-color availabilityFor complete home interior","description":"HR Products","infoLink":"http:\/\/wikipedia.com","products":[]},{"id":"106","displayName":"Steel Screw","template_type":"product_detail_v1_t3","image_path":"home_decor\/roofing\/screw\/","image":"tapping-screws-125x125.jpg","shortDesc":"Natural Wood ProductsMulti-color availabilityFor complete home interior","description":"Steel Screw","infoLink":"http:\/\/wikipedia.com","products":[]},{"id":"107","displayName":"Mild Steel Products","template_type":"product_detail_v1_t3","image_path":"home_decor\/roofing\/mild_steel\/","image":"ms-square-pipes-250x250.jpg","shortDesc":"Natural Wood ProductsMulti-color availabilityFor complete home interior","description":"Mild Steel Products","infoLink":"http:\/\/wikipedia.com","products":[]}]},{"id":"2","displayName":"Interior Decorative Products","groups":[{"id":"109","displayName":"Veneer","template_type":"product_detail_v1_t3","image_path":"home_decor\/laminates\/","image":"laminates.jpg","shortDesc":"Natural Wood ProductsMulti-color availabilityFor complete home interior","description":"Veneer","infoLink":"http:\/\/en.wikipedia.org\/wiki\/Wood_veneer","products":[]},{"id":"108","displayName":"Laminates","template_type":"product_detail_v1_t3","image_path":"home_decor\/laminates\/","image":"laminates.jpg","shortDesc":"Natural Wood ProductsMulti-color availabilityFor complete home interior","description":"Laminates","infoLink":"http:\/\/wikipedia.com","products":[]},{"id":"110","displayName":"Wood & Plywood","template_type":"product_detail_v1_t3","image_path":"home_decor\/plywood\/","image":"plywood.jpg","shortDesc":"Natural Wood ProductsMulti-color availabilityFor complete home interior","description":"Wood & Plywood","infoLink":"http:\/\/en.wikipedia.org\/wiki\/Plywood","products":[]},{"id":"111","displayName":"Hardware","template_type":"product_detail_v1_t3","image_path":"home_decor\/hardware\/","image":"hardware.jpg","shortDesc":"Natural Wood ProductsMulti-color availabilityFor complete home interior","description":"hardware","infoLink":"http:\/\/wikipedia.com","products":[]},{"id":"112","displayName":"Gems","template_type":"product_detail_v1_t3","image_path":"home_decor\/gems\/","image":"coreal_exotics.jpg","shortDesc":"Natural Wood ProductsMulti-color availabilityFor complete home interior","description":"Gems","infoLink":"http:\/\/wikipedia.com","products":[]}]}];
  $scope.currIndex = -1;  
  
  $scope.isOptionVisible = function(index) {
	if ($scope.currIndex == index) {
		return true;
	} else {
		return false;
	} 
  }
  
  $scope.slides = [
		{'image': 'http://roofingsolutions.co.in/images/home_decor/roofing/color_coated/colour-coated-roofing-sheets-250x250.jpg', 'text':'Content'},
		{'image': 'http://roofingsolutions.co.in/images/home_decor/roofing/color_coated/colour-coated-roofing-sheets-250x250.jpg', 'text':'Content'},
		{'image': 'http://roofingsolutions.co.in/images/home_decor/roofing/color_coated/colour-coated-roofing-sheets-250x250.jpg', 'text':'Content'}		
	];  
	$scope.oneAtATime = false;	
	
	$scope.onMouseOver = function(index) {
		//$scope.isVisible = true;
		$scope.currIndex = index;
	};
	
	$scope.onMouseOut = function () {    
		//$scope.isVisible = false;
		$scope.currIndex = -1;
    };
	
	$scope.tabs = [
	{ title:'Related Products', content:'Customers Who Viewed This Item Also Viewed' },
    { title:'Product Specification', content:'Product Specification' },
    { title:'Dealers / Traders', content:'Dealers / Traders', disabled: true }
  ];

  $scope.alertMe = function() {
    setTimeout(function() {
      alert('You\'ve selected the alert tab!');
    });
  };
	
	$scope.isCompareVisible = false;
	$scope.hideCompareItems = function() {
		$scope.isCompareVisible = false;
	};
	
	$scope.addToCompare = function() {
		//Adding compare to div 
		$scope.isCompareVisible = true;		
	}
});