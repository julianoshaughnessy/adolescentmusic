var app = angular.module('main', ['ngRoute']);

app.config(function($routeProvider) {
	$routeProvider
		.when('/', {
			templateUrl : 'pages/home.html',
			controller  : 'HomeController'
		})
		.when('/music', {
			templateUrl : 'pages/music.html',
			controller  : 'MusicController'
		})
		.when('/shop', {
			templateUrl : 'pages/shop.html',
			controller  : 'ShopController'
		})
		.otherwise({redirectTo: '/'});
});

app.controller('HomeController', function($scope) {

});

app.controller('MusicController', function($scope) {

});

app.controller('ShopController', function($scope) {

});

$(document).ready(function () {
	$('#sidebarCollapse').on('click', function () {
		$('#sidebar').toggleClass('active');
		$(this).toggleClass('active');
	});
	$('#sidebar a').on('click', function () {
		$('#sidebar').toggleClass('active');
		$('#sidebarCollapse').toggleClass('active');
	});
});
