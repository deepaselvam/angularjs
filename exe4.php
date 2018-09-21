<!DOCTYPE html>
<html>
<head>
	<title></title>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>
<body>
<div ng-app="myapp" ng-controller="myctrl">
	Fname:<input type="text" ng-model="fname"><br>
    Lname:<input type="text" ng-model="lname">
  <br>  Fullname:{{fname+ " " +lname}}
</div>

<script>
var app = angular.module('myapp', []);
app.controller('myctrl', function($scope) {
    $scope.firstName= "";
    $scope.lastName= "";
});
</script>
</body>
</html>