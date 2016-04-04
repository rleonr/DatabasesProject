var app= angular.module('MovieRecommender',['ngComponentRouter','movie'])

.config(function($locationProvider) {
  $locationProvider.html5Mode(true);
})
.value('$routerRootComponent', 'app') // configure routed app component
.component('app',{
	templateUrl: './public/templates/nav.html',
	$routeConfig: [
		{path:"/", name:'Home', component:'home'},
		{path:"/movie/..." , name:'Movie', component:'movie' }
	],
	controller: MainController
})
.component('home',{
	templateUrl: './public/templates/home.html'
});

function MainController () {
	 var $ctrl=this;
	 $ctrl.title='Home';
	 this.advancedSearch= function () {
	 	 alert("Search!");
	 }
}