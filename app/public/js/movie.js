angular.module('movie',[])
	.service('movieService', MovieService)

	.component('movie',{
		templateUrl: './public/templates/Movies/template.html',
		$routeConfig: [
			{path:"/", name:'MovieList', component:'movieList', useAsDefault: true},
			{path: '/:id', name:'MovieDetail', component:'movieDetail'}
		]
	})

	.component('movieList',{
		templateUrl: './public/templates/Movies/movies.html',
		controller: MovieListController
	})

	.component('movieDetail',{
		templateUrl: '.public/templates/Movies/movieDetail.html',
		controller: MovieDetailController,
		bindings: { $router: '<' }
	});

function MovieService(){

};

function MovieListController(){

};

function MovieDetailController () {
	 // body...  
}