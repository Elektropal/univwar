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
					<li><a href="<?=Flight::get('my_base_url')?>/chat">Chat</a></li>
					<li class="active"><a href="<?=Flight::get('my_base_url')?>/university_list">Manage University</a></li>
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
						<h5>Enrolled Universities</h5>
					</div>


					Please don't change the <b> Email identifier </b> because it related to regular expression. Make sure you know what you are changging.
					<br>
					<h3>Periode Aktif Saat ini : <b><?="sesuatu"?></b></h3>
					<form action="<?=Flight::get('my_base_url')?>/change_period">
						<select>
						    <option value="0">0. Net Yet Started</a></li>
						    <option value="1">1. UI, UNDIP, UGM</a></li>
						    <option value="2">2. ITB, ITS, PENS</a></li>
						    <option value="3">3. Gundar, Brawijaya, Tarumanegara</a></li>
						    <option value="4">4. PNS (Poltek Semarang), Polban, PNJ (Poltek Jakarta)</a></li>
						    <option value="5">5. Hasanudin, Pakuan Bogor, UPI</a></li>
						    <option value="6">6. Poltek Jember, Poltek Malang, Telkom Univ</a></li>
						    <option value="7">7. Unsoed, Univ Surabyaa, Univ teknologi Yogya</a></li>
						    <option value="8">8. Atmajaya, Presiden Univ, Trisakti</a></li>
						    <option value="9">9. Unikom, ST-PLN Jakarta, Udayana</a></li>
						    <option value="10">10. Maranatha, Pancasila, Dian Nuswantoro</a></li>
						    <option value="11">11. Itenas, Untirta, Medan</a></li>
						    <option value="12">12. UMuhamadiyah Malang, Poltek Batam, IT Padang</a></li>
						    <option value="13">13. Petra, Mercubuana, Al Azhar</a></li>
						    <option value="14">14. ST Adisucipto, Andalas, UPH</a></li>
						    <option value="15">15. Budi luhu, UNS (univ negri semarang), Sriwijaya</a></li>
						    <option value="16">16. Sam ratulangi, syiah kuala, tanjung pura</a></li>
						    <option value="17">17. ST Surabaya, Univ Sumatera utara, Itera ?</a></li>
						  </select>
						  <input type="submit" value ="ganti periode !"></input>
					</form>
			
					<div class="panel-body">
					</div>
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>#</th>
								<th>Universitas</th>
								<th>Shortname (Email Identifier)</th>
								<th>Periode</th>
							</tr>
						</thead>
						<tbody>
							<?php $i=0;?>
							<?php foreach ($datas as $data): ?>
							<tr class="stripped">
								<td><?=$i?></td>
								<td><?=$data['nama_univ']?></td>
								<td><?=$data['shortname']?></td>
								<td><?=$data['periode']?></td>
								<?php $i++;?>
							</tr>
							<?php endforeach ?>
						</tbody>
					</table>

				</div>


				<pre>{{list_messages}}</pre>
				message :
				<pre>
					<?=var_dump($datas)?>
				</pre>
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
