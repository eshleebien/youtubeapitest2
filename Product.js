function ProductCtrl($scope)
{
	$scope.productList = [
		{id:'1',name:'Cake',price:'90.00'},
		{id:'2',name:'Coke',price:'90.00'},
		{id:'3',name:'Milkshake',price:'80.00'}];
	
	$scope.addNew = function()
	{
		$scope.productList.push({name:$scope.prodName, price:$scope.prodPrice});
		$scope.prodName = '';
		$scope.prodPrice = '';
	};
	$scope.productCount = function()
	{
		var count=0;
		angular.forEach($scope.productList, function(product){
			count++;
		});
		
		return count;
	};
	
	$scope.prodDelete=function()
	{
		alert();
	};
}