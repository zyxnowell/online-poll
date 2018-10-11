<div class="container" ng-app="myShoppingList" ng-controller="createCtrl">
	<h1 class="text-center">{{title}}</h1>

	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h4 class="text-info" ng-repeat="x in items track by $index">{{x}} <span class="label label-default pull-right">x</span></h4>
		</div>
	</div>

    <div class="form-group text-center">
	  	<div class="input-group col-md-6 col-md-offset-3">
		    <input ng-model="pollItem" id="pollItem" type="text" class="form-control" placeholder="Add item.." maxlength="57">
		    <span class="input-group-btn">
		      	<button ng-click="addItem()" class="btn btn-success" type="button">Add</button>
		    </span>
	  	</div>
	</div>

	<div class="form-group text-center">
	  	<button ng-click="" class="btn btn-info" type="button">Submit Poll</button>
	</div>

	<div id="errorAlert" class="alert col-md-6 col-md-offset-3 fadeAlert" ng-if="itemExistsAlert">
	  	<button type="button" class="close" data-dismiss="alert">&times;</button>
	 	<p>{{alertMessage}}</p>
	</div>
</div>