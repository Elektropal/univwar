<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?=$view_path?>assets/ico/favicon.png">

    <title>University War</title>

    <!-- Bootstrap core CSS -->
    <link href="<?=$view_path?>assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?=$view_path?>assets/css/main.css" rel="stylesheet">

    <script src="<?=$view_path?>assets/js/jquery.min.js"></script>
	<script src="<?=$view_path?>assets/js/Chart.js"></script>
	<!-- <script src="<?=$view_path?>assets/js/modernizr.custom.js"></script> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
	<script type="text/javascript" src="https://www.google.com/recaptcha/api.js?hl=<?php echo $recaptcha_lang; ?>"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
	
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script src="https://code.highcharts.com/highcharts.js"></script>
	<script src="https://code.highcharts.com/modules/exporting.js"></script>
	<script src="https://cdn.firebase.com/js/client/2.3.2/firebase.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="<?=$view_path?>assets/js/html5shiv.js"></script>
      <script src="<?=$view_path?>assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body data-spy="scroll" data-offset="0" data-target="#theMenu">
		
	<!-- Menu -->
	<!--
	<nav class="menu" id="theMenu">
		<div class="menu-wrap">
			<h1 class="logo"><a href="index.html#home">Onassis</a></h1>
			<i class="icon-remove menu-close"></i>
			<a href="#home" class="smoothScroll">Home</a>
			<a href="#services" class="smoothScroll">Services</a>
			<a href="#portfolio" class="smoothScroll">Portfolio</a>
			<a href="#about" class="smoothScroll">About</a>
			<a href="#contact" class="smoothScroll">Contact</a>
			<a href="#"><i class="icon-facebook"></i></a>
			<a href="#"><i class="icon-twitter"></i></a>
			<a href="#"><i class="icon-dribbble"></i></a>
			<a href="#"><i class="icon-envelope"></i></a>
		</div>
		
		
		<div id="menuToggle"><i class="icon-reorder"></i></div>
	</nav>
	-->

	
	
	<!-- ========== HEADER SECTION ========== -->
	<section id="home" name="home"></section>
	<div id="headerwrap">
		<div class="container">
			<br>
			<h1>#UniversityWar</h1>
			<h2><b>Dapatkan arduino gratis selama 1 tahun!</b></h2>
			<div class="row">
				<br>
				<br>
				<br>
				<div class="col-lg-6 col-lg-offset-3">
				</div>
			</div>
		</div><!-- /container -->
	</div><!-- /headerwrap -->
	
	
	<!-- ========== WHITE SECTION ========== -->
	<div id="w">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
				<h3><bold class="elektropal"><a href="http://Elektropal.com">Elektropal.com</a></bold> adalah supplier komponen elektronika dengan misi untuk menjadi <bold>sahabat</bold> para electronic geeks. Saat ini elektropal menyelenggarakan kompetisi #UniversityWar
				</h3>
				</div>
			</div>
		</div><!-- /container -->
	</div><!-- /w -->
	
	<!-- ========== SERVICES - GREY SECTION ========== -->
	<section id="services" name="services"></section>
	<div id="g">
		<div class="container">
			<div class="row">
                <div class="col-sm-6">
                	<div class="row"> 
                    <div class="col-sm-8 col-sm-offset-4" style="text-align: left;">
                        <h3>Cara ikutan :</h3>
                    </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4">
                            <img src="<?=$view_path?>assets/img/mail.png">
                        </div>
                        <div class="col-sm-8" style="text-align: left;">
                           <h4>Daftarkan Email kamu,</h4>
					       <p>Daftarkan email pribadi dan email kampus kamu untuk ikut #UniversityWar. Email digunakan untuk menghitung banyak peserta, pengumuman pemenang dan langganan promo elektropal lainnya. </p>
                        </div>
                    </div>
                    <div class="row">	
                        <div class="col-sm-4">
                            <img src="<?=$view_path?>assets/img/inbox.png">
                        </div>
                        <div class="col-sm-8" style="text-align: left;">
                           <h4>Lakukan verifikasi Email</h4>
					       <p>Kami akan mengirimkan email verifikasi untuk memastikan bahwa kamu telah bergabung dalam #UniveristyWar, jangan lupa untuk mengklik link verifikasi di email kamu.</p>
                        </div>
                    </div>
                    <div class="row">    
                        <div class="col-sm-4">
                            <img src="<?=$view_path?>assets/img/graphic.png">
                        </div>
                        <div class="col-sm-8" style="text-align: left;">
                           <h4>Sebarkan!</h4>
							<p>Perhitungan point universitas berdasarkan jumlah email terverifikasi yang masuk. Semakin banyak teman-temanmu yang ikut berpartisipasi dalam #UniversityWar, semakin besar kesempatan universitasmu terpilih. Jadi jangan lupa share ke akun sosial kamu!</p>
                        </div>
                    </div>

                </div>
                
                <div class="col-sm-6">
                    <div class="col-md-12" style="text-align: left;">
                        <h3>1. Isi Email :</h3>
                        <p>Masukkan email pribadi dan email kampus kamu dibawah ini.</p>
                    </div>
                    <form id="loginForm" method="POST" action="<?=Flight::get('my_base_url')?>/submit" novalidate="novalidate">
	  					<div class="form-group col-md-12" style="text-align: left;">
	  						<label for="email_pribadi" class="control-label">Email Personal</label>
	  						<input type="text" class="form-control" id="email_pribadi" name="email_pribadi" value="" required="" title="Please enter you Full name" placeholder="example@gmail.com">
	  						<span class="help-block"></span>
	  					</div>
	  					<div class="form-group col-md-12" style="text-align: left;">
	  						<label for="email_pribadi" class="control-label">Email Universitas</label>
	  						<input type="text" class="form-control" id="email_univ" name="email_univ" value="" required="" title="Please enter you College name" placeholder="example@gmail.com">
	  						<span class="help-block"></span>
	  					</div>
	  					<div class="col-md-12 captcha" style="text-align: left;">
	  						<label for="email_pribadi" class="control-label">Kode captcha</label>
	  						<div class="centered g-recaptcha" data-sitekey="<?php echo $recaptcha_key; ?>"></div>
	  					</div>
                        <div class="form-group col-md-12" style="text-align: left;">
                            <button type="submit" class="btn btn-lg btn-success"> Saya ikut #UniversityWar!</button>
                            <br/>
	  					    <a href="/forgot/">Salah ketik memasukan email ? Klik disini !</a>
                        </div>
	  				</form>
                    <hr>
                    <div class="col-md-12" style="text-align: left;">
                        <h3>2. Share ke Teman :</h3>
                        <p>Share ke teman melalui akun sosial favoritmu.</p>
                    </div>
                    <div class="col-md-5">
                    	
                		<a class="btn btn-block btn-social btn-twitter">
                            <span class="fa fa-twitter"></span> Share melalui Twitter
                        </a>
                		<br>
                        
                    	<a class="btn btn-block btn-social btn-facebook col-md-6">
                            <span class="fa fa-facebook"></span> Share melalui Facebook
                        </a>
                    	
                    </div>
                    <div class="col-md-5">
                    	
                		<a class="btn btn-block btn-social btn-google">
                            <span class="fa fa-google"></span> Share melalui Google
                        </a>
                		<br>
                        
                    	<a class="btn btn-block btn-social btn-reddit col-md-6">
                            <span class="fa fa-envelope"></span> Share melalui Email
                        </a>
                    	
                    </div>
                    
                    
                      
                </div>
			</div>
		</div><!-- /container -->
	</div><!-- /g -->
	
	<!-- ========== CHARTS - DARK GREY SECTION ========== -->
	<div id="dg">
		<div class="container">
			<div class="row">
				<h3>Ganti dengan grafik</h3>
				<div id="container_highcharts"></div> <!-- style="min-width: 310px; max-width: 800px; height: 400px; margin: 0 auto"></div> -->
				<!--
				<br>
				<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
					Ikut #UniversityWar Sekarang Juga !
				</button>
				<h3>...Atau...</h3>
				<button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#myModal">
					Lihat Urutan Universitas Saat Ini
				</button>
				
				<div class="col-md-12">
					<div class="input-group col-md-3">
						<input class="form-control input-lg" title="Don't worry. We hate spam, and will not share your email with anyone." placeholder="Masukan Email Pribadi kamu" type="text">
					</div>
					<div class="input-group col-md-3">
						<input class="form-control input-lg" title="Don't worry. We hate spam, and will not share your email with anyone." placeholder="Masukan Email Universitasmu(*.ac.id)" type="text">
					</div>
					<div class="input-group col-md-3">
						<span class="input-group-btn"><button class="btn btn-lg btn-primary" type="button">OK</button></span>
					</div>
				</div>
				-->
			</div>	
			<!--
			disini ada form tiga buah jangan lupa captcha

			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<div class="g-recaptcha" data-sitekey="<?php echo $recaptcha_key; ?>"></div>
				</div>
			</div>
			-->
		</div><!-- /container -->
	</div><!-- /dg -->
	
	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
	    	<!--
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
	      </div>
	  -->
	  <div class="modal-body">
	  	<div class="row">
	  		<div class="col-lg-12">
	  			<div class="well">
	  				<form id="loginForm" method="POST" action="<?=Flight::get('my_base_url')?>/submit" novalidate="novalidate">
	  					<div class="form-group col-md-6">
	  						<label for="email_pribadi" class="control-label">Email Personal</label>
	  						<input type="text" class="form-control" id="email_pribadi" name="email_pribadi" value="" required="" title="Please enter you Full name" placeholder="example@gmail.com">
	  						<span class="help-block"></span>
	  					</div>
	  					<div class="form-group col-md-6">
	  						<label for="email_pribadi" class="control-label">Email Universitas</label>
	  						<input type="text" class="form-control" id="email_univ" name="email_univ" value="" required="" title="Please enter you College name" placeholder="example@gmail.com">
	  						<span class="help-block"></span>
	  					</div>
	  					<div class="col-md-4 col-md-offset-2 captcha">
	  						<label for="email_pribadi" class="control-label">Kode captcha</label>
	  						<div class="centered g-recaptcha" data-sitekey="<?php echo $recaptcha_key; ?>"></div>
	  					</div>
	  					<button type="submit" class="btn btn-success btn-block">Ya, saya mau arduino gratis !</button>
	  					<a href="/forgot/" class="right">Salah ketik memasukan email ? Klik disini !</a>
	  				</form>
	  			</div>
	  		</div>
	  	</div>
	  </div>
	      <!--
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary">Save changes</button>
	      </div>
	  -->
	</div>
</div>
</div>
	<div id="ddg">
		<div class="container">
			<div class="row">
				<h3>Aturan Main</h3>
				<div class="col-md-6">
					Bacaturan main
				</div>
				<div class="col-md-6">
					
				</div>
			</div>
		</div><!-- /container -->
	</div><!-- /w -->


	<!-- ========== WHITE SECTION ========== -->
	<div id="w">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
				<h3>WE WORK HARD TO DELIVER A <bold>HIGH QUALITY SERVICE</bold>. OUR AIM IS YOUR COMPLETE <bold>SATISFACTION</bold>.
				</h3>
				</div>
			</div>
		</div><!-- /container -->
	</div><!-- /w -->
	
	
	<!-- ========== FOOTER SECTION ========== -->
	<section id="contact" name="contact"></section>
	<div id="f">
		<div class="container">
			<div class="row">
					<h3><b>CONTACT US</b></h3>
					<br>
					<div class="col-lg-4">
						<h3><b>Send Us A Message:</b></h3>
						<h3>onassis@blacktie.co</h3>
						<br>
					</div>
					
					<div class="col-lg-4">	
						<h3><b>Call Us:</b></h3>
						<h3>+55 3984-4389</h3>
						<br>
					</div>
					
					<div class="col-lg-4">
						<h3><b>We Are Social</b></h3>
						<p>
							<a href="index.html#"><i class="icon-facebook"></i></a>
							<a href="index.html#"><i class="icon-twitter"></i></a>
							<a href="index.html#"><i class="icon-envelope"></i></a>
						</p>
						<br>
					</div>
				</div>
			</div>
		</div><!-- /container -->
	</div><!-- /f -->
	
	<div id="c">
		<div class="container">
			<p>Created by <a href="http://www.blacktie.co">BLACKTIE.CO</a></p>
		
		</div>
	</div>
	
	

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="<?=$view_path?>assets/js/classie.js"></script>
    <script src="<?=$view_path?>assets/js/bootstrap.min.js"></script>
    <script src="<?=$view_path?>assets/js/smoothscroll.js"></script>
	<script src="<?=$view_path?>assets/js/main.js"></script>
	<script src="<?=$view_path?>assets/js/mymain.js"></script>
	<script src="<?=$view_path?>assets/js/jquery.bootstrap-growl.min.js"></script>
	<script>
		<?php
			if(isset($message)){
				if(is_array($message)){
					$m = $message[0];
					if($m = "missing-input-response"){
						$m = "Salah memasukan captcha";
					}else{
						$m = $message[0];
					}
				}else{
					$m = $message;
				}
				?>
					$.bootstrapGrowl("<?=$m?>",{
						<?php
							if($error==1){
								echo "type:'danger',";
							}else{
								echo "type:'info',";
							}
						?>
						offset: {from: 'top', amount: 20}, // 'top', or 'bottom'
						align: 'center', // ('left', 'right', or 'center')
						width: 400, // (integer, or 'auto')
						delay: 10000,
						allow_dismiss: false,
						stackup_spacing: 10 // spacing between consecutively stacked growls.
					});
				<?php
			}
		?>
	</script>
</body>
</html>
