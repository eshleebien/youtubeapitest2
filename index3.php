<!doctype html>
<html ng-app>
	<head>
		<title>Products</title>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular.min.js"></script>
		<script src="Product.js"></script>
	</head>
<body>
	<header><h2>Products</h2></header>
	<section id="content" class="body">
		<article ng-controller="ProductCtrl">
			<header>Here's your product!</header>
			<aside>
				Filter: <input type="text" ng-model='prodFilter' placeholder ='Filter'/>
			</aside>
			<hr/>
			<div id="post-list">
				<span>Number of products: <b>{{productCount()}}</b></span>
					<div id="post-detail">
						<table ng-repeat ="detail in productList | filter:prodFilter" border="0">
							<tr>
								<td><input type="checkbox"/></td>
								<td><span>{{detail.name}}</span></td><td><span>{{detail.price}}</span></td>
								<td> <a href = "" ng-click="prodDelete({{detail.id}})"></a></td>
							</tr>
						</table>
					</div>
			</div>
		<hr/>
			<form ng-submit="addNew()">
				<table border='0'>
					<tr>
						<td>Name: </td><td><input type="text" ng-model = "prodName" placeholder = "Product Name" /></td>
					</tr>
					<tr>
						<td>Price: </td><td><input type="text" ng-model = "prodPrice" placeholder = "Product Price" /></td>
					</tr>
					<tr>
						<td><input type="submit" value="Submit" /></td>
					</tr>
				</table>
			</form>
		</article>
	</section>
</body>
</html>