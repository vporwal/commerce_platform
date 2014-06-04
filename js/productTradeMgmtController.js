var pModule = angular.module('ProductTradeMgmtModule', []);

pModule.config(['$routeProvider',
  function($routeProvider) {
    $routeProvider.
      when('/productList', {
        templateUrl: 'pages/test.php',
    }).
      when('/productDetails', {
        templateUrl: 'pages/test.html',
      })
}]);

pModule.controller('ProductTradeMgmtController', function ($scope, $http) {
	
	//doing the routing based on information available in request....
	
});