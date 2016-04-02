 'use strict';
var app= angular.module('MovieRecommender',[])

.controller('main',['$scope',function($scope) {
	$scope.Title= "Home";
}])

.component('app',{
	templateUrl: './public/templates/nav.html',
	bindings:{

	}
});