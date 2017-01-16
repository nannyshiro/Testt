angular.module('HomeApp', [])
  .controller('testCtrl', ['$scope', function($scope) {
    $scope.name = '';
   
    $scope.myFunc = function(name,lastname,address) {
      $scope.name = name;
      $scope.lastname = lastname;
      $scope.address = address;
    };
  }]);