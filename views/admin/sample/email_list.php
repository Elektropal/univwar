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
					<li class="active"><a href="<?=Flight::get('my_base_url')?>/email_list">Email Campaign</a></li>
					<li><a href="<?=Flight::get('my_base_url')?>/chat">Chat</a></li>
					<li><a href="<?=Flight::get('my_base_url')?>/university_list">Manage University</a></li>
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
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						Incoming Email Subscriber:
					</div>


					<div class="panel-body">
					</div>
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>#</th>
								<th>Universitas</th>
								<th>Email Pribadi</th>
								<th>Email Universitas</th>
								<th>isVerified Pribadi</th>
								<th>isVerified Univ</th>
								<th>Delete</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								$i = 0;
								foreach($datas as $data){
									$matches   = array();
									preg_match('/[A-z0-9]+(?=[\.][a][c][\.][i][d])/', $data['email_univ'],$matches);
									if(count($matches)>0){
										$shortname = $matches[0];
									}else{
										$shortname = "";
									}
									$total = $data['isverified_pribadi'] + $data['isverified_univ'];
									if($total==2){
										$status = "success";
									}else if($total==1){
										$status = "warning";
									}else if($total==0){
										$status = "";
									}
							?>
							<tr class="<?=$status?>">
								<td><?=$i?></td>
								<td><?=$shortname?></td>
								<td><?=$data['email_pribadi']?></td>
								<td><?=$data['email_univ']?></td>
								<td>
									<?php
										if($data['isverified_pribadi']){
									?>
										<a href="#" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-ok"></span></a>
									<?php
										}else{
									?>
										<a href="#" class="btn btn-sm btn-warning"><span class="glyphicon glyphicon-minus"></span></a>
									<?php 		
										}
									?>
								</td>
								<td>
									<?php
										if($data['isverified_univ']){
									?>
										<a href="#" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-ok"></span></a>
									<?php
										}else{
									?>
										<a href="#" class="btn btn-sm btn-warning"><span class="glyphicon glyphicon-minus"></span></a>
									<?php 		
										}
									?>
								</td>
								<td>
									<?php 
										if($status=="success"){

										}else{
									?>
										<a href="<?=Flight::get('my_base_url').'/delete/'.$data['email_pribadi'].'/'.$data['email_univ']?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')"><span class="glyphicon glyphicon-remove"></span></a>
									<?php 
										}
									?>
								</td>
							</tr>
							<?php 
									$i++;
								}
							?>
						</tbody>
					</table>

				</div>


				<pre>{{list_messages}}</pre>
				message :
				<pre>{{message}}</pre>
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
