<!DOCTYPE html>
<html lang="en" ng-app="app">
<head>
  <meta charset="UTF-8">
  <title>
    AngularJS+Bootstrap Simple Chat Directive Sample
  </title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link
    rel="stylesheet"
    href="<?=$asset_path?>/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link
    rel="stylesheet"
    href="<?=$asset_path?>/src/css/style.css">

    <link
    rel="stylesheet"
    href="<?=$asset_path?>/src/css/themes.css">

  <link
    rel="stylesheet"
    href="<?=$asset_path?>/sample/style.css">
</head>
<body ng-controller="SampleCtrl">
	<!-- Fixed navbar -->
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Univeristy War Dashboard</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li><a href="<?=Flight::get('my_base_url')?>/email_list">Email Campaign</a></li>
					<li class="active"><a href="<?=Flight::get('my_base_url')?>/chat">Chat</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li>
						<p class="navbar-btn">
							<a href="<?=Flight::get('my_base_url')?>/the_logout" class="btn btn-default btn-danger"><b>Logout</b><span class="sr-only">(current)</span></a>
						</p>
					</li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</nav>
	

	<div class="container">
		  <div class="row">
		    <div class="col-md-4">

		      <div class="panel panel-default">
		        <div class="panel-heading">
		          <h4>Active Session:</h4>
		        </div>
		        <div class="panel-body">
		          <div class="list-group">
		            <a href="#" class="list-group-item" ng-repeat="(key,value) in list_messages" ng-click="loadMessage(key)">{{key}}<span class="glyphicon glyphicon-remove"></span></a>
		            <p ng-show="!list_messages.length">Tidak terdapat active session pada saat ini..</p>
		            <!-- <a href="#" class="list-group-item active">Cras justo odio</a>
		            <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
		            <a href="#" class="list-group-item">Morbi leo risus</a>
		            <a href="#" class="list-group-item">Porta ac consectetur ac</a>
		            <a href="#" class="list-group-item">Vestibulum at eros</a> -->
		          </div>
		        </div>
		      </div>

	
		      <pre>{{list_messages}}</pre>
		      message :
		      <pre>{{message}}</pre>
		      messages
		      <pre>{{messages}}</pre>
		    </div>

		    <div class="col-md-8">
		    	<!-- START CHAT -->
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3>Talking to session : {{active_session}}</h3>
						</div>
						<div class="panel-body">
							<ul>
								<li ng-repeat="message in messages"><b>{{message.username}}</b> : {{message.content}}</li>
								<li ng-show="!messages.length">Klik salah satu link di sebelah untuk memilih kepada siapa kamu ingin berbicara. Tekan Enter untuk mengirim pesan</li>
							</ul>
						</div>
						<div class="panel-footer">
							<div class="input-group">
							    <input id="messageInput" type="text" ng-model="message" class="form-control input-sm chat_input"  ng-keypress="checkIfEnterKeyWasPressed($event)" placeholder="Write your message here..." />
							    <span class="input-group-btn">
							    <button class="btn btn-primary btn-sm" id="btn-chat">Send</button>
							    </span>
							</div>
						</div>
					</div>
		    	
		    	<!-- END OF FAWWAZ CHAT -->
		      <!-- <div class="chat-container">
		        <irontec-simple-chat
		            messages="messages"
		            username="username"
		            input-placeholder-text="You can write here"
		            submit-button-text="Send your message"
		            title="Super Awesome Chat"
		            theme="irontec"
		            submit-function="sendMessage"
		            visible="true">
		        </irontec-simple-chat>
		      </div> -->
		    </div>
		  </div>
	</div>
  <script src="<?=$asset_path?>/bower_components/lodash/dist/lodash.js"></script>
  <script src="<?=$asset_path?>/bower_components/jquery/dist/jquery.js"></script>
  <script src="<?=$asset_path?>/bower_components/angular/angular.js"></script>
  <script src="<?=$asset_path?>/bower_components/moment/min/moment.min.js"></script>
  <script src="<?=$asset_path?>/bower_components/angular-moment/angular-moment.min.js"></script>
  <!-- Firebase -->
  <script src="https://cdn.firebase.com/js/client/2.2.4/firebase.js"></script>
  <!-- AngularFire -->
  <script src="https://cdn.firebase.com/libs/angularfire/1.1.3/angularfire.min.js"></script>
  <script src="<?=$asset_path?>/src/scripts/index.js"></script>

  <script src="<?=$asset_path?>/sample/app.js"></script>
  <script>
  $(".chat-container").height($(window).height());
  </script>
</body>
</html>
