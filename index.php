<!DOCTYPE html>
<html lang="en" ng-app>
<head>
	<title>YOUTUBE API TEST</title>
	<meta charset="utf-8"/>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular.min.js"></script>
</head>
<body>
	<header><h1>Just a Header!</h1></header>

	<section>
		<article>
			<input type ="text" ng-model="yourName" placeholder="Enter a name here">
			<hr>
			<h1>Hello {{yourName}}!</h1>
		</article>
	</section>
</body>
</html>
