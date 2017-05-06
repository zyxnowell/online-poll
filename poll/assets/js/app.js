var app = angular.module("pollApp", ['ngRoute', 'ngAnimate']);
app.config(function($routeProvider) {
    $routeProvider
    .when("/", {
        templateUrl : "partials/main.php"
    })
    .when("/create", {
        templateUrl : "partials/create.php",
        controller: 'createCtrl'
    })
});

app.controller('createCtrl', function($scope,$timeout, focus){
    $scope.items = [];
    //temporary storage of the items without the number sign 
    var storageArr = [];
    $scope.title = "Add an item to your poll";
    $scope.addItem = function() {
        var itemNum = $scope.items.length;
        var toBeAdded = $scope.pollItem;
        var errorAlert = angular.element(document.querySelector('#errorAlert')); 

        //return if the pollItem input is empty
        if (!$scope.pollItem) {
            errorAlert.addClass('alert-info');
            $scope.alertMessage = "Item cannot be null";
            $scope.itemExistsAlert = true;
            $timeout(function() {
                $scope.itemExistsAlert = false;
            }, 2000)
            return;
        }

        //check if an item is already at the items array
        var findItem = function (){
            if (storageArr.indexOf(toBeAdded) == (-1)) {
                return false
            }else{
                return true
            }
        }

        //if finditem returns false add the item to the poll
        if (!findItem()) {
            $scope.items.push((itemNum+1).toString() + ". " + toBeAdded);
            storageArr.push(toBeAdded);
            $scope.pollItem = "";
            focus('pollItem');
        }else{
            errorAlert.addClass('alert-warning');
            $scope.alertMessage = "Item is already in the poll";
            $scope.itemExistsAlert = true;
            $timeout(function() {
                $scope.itemExistsAlert = false;
                
            }, 2000)
        }
        
    };

    $scope.submitPoll = function (){
        
    }
});

app.animation('.fadeAlert',function(){
    return{
        enter: function(element,done){
          jQuery(element).hide().fadeIn(800, done);
        },
        leave: function(element,done){
          jQuery(element).fadeOut(800, done);
        }
    };
});

app.factory('focus', function($timeout, $window) {
    return function(id) {
        // timeout makes sure that it is invoked after any other event has been triggered.
        // e.g. click events that need to run before the focus or
        // inputs elements that are in a disabled state but are enabled when those events
        // are triggered.
        $timeout(function() {
            var element = $window.document.getElementById(id);
            if(element)
                element.focus();
        });
    };
});

app.config(['$locationProvider', function($locationProvider) {
  $locationProvider.hashPrefix('');
}]);
