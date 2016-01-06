(function() {
	'use strict';

	angular.module('app', ['irontec.simpleChat','firebase','angularMoment']);

	angular.module('app').controller('SampleCtrl', ["$scope","$firebaseObject","$firebaseArray","moment",function($scope,$firebaseObject,$firebaseArray,moment){
    var d = new Date();
    var year = d.getFullYear();
    var month = d.getMonth();
    var date = d.getDate();

    

    $scope.messages = [];
    console.log("before");
    console.log($scope.messages);
    $scope.username = 'Matt';
    $scope.active_session ="";
    $scope.message ="";

    $scope.checkIfEnterKeyWasPressed = function($event){
      var keyCode = $event.which || $event.keyCode;
      if (keyCode === 13) {
          ref.child($scope.active_session).push({
            username: "admin",
            content: $scope.message
          });
          // console.log("dipencet !");
          // console.log($scope.message);
          $scope.message="";
      }
    };


    var ref = new Firebase("https://android-chat-test.firebaseio.com/chat/");//+moment().format("YY/MM/DD"));
    //$scope.list_messages = $firebaseArray(ref);
    $scope.list_messages = $firebaseObject(ref);
    
		// download the data into a local object
		var syncObject = $firebaseObject(ref);
		// synchronize the object with a three-way data binding
		// click on `index.html` above to see it used in the DOM!
		syncObject.$bindTo($scope, "data");

    console.log("after");
    $scope.loadMessage = function(id){
      console.log("id : "+id);
      var ref2 = new Firebase("https://android-chat-test.firebaseio.com/chat/"+id);//+moment().format("YY/MM/DD")+"/"+id);
      $scope.active_session = id;
      // $scope.messages = $firebaseArray(ref2);
      //var messages = 
      $scope.messages = $firebaseArray(ref2);
      // console.log("Firebase array saat ini : ");
      // console.log($scope.messages);
      // var pesans = $firebaseArray(ref2);
      // var _message = [];
      // for (var i = 0; i < pesans.length; i++) {
      //   var pesan = pesans[i];
      //   var _temp_pesan;
      //   _temp_pesan.content = pesan.content;
      //   _temp_pesan.username = pesan.username;
      //   _message.push(_temp_pesan);
      // };
      // console.log(_message);
      // $scope.messages = _message;
    };

	}]);
})();
