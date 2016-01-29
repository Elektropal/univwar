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
	  					    <a href="#">Salah ketik memasukan email ? Ajukan komplain melalui chatbox di bawah !</a>
                        </div>
	  				</form>
                    <hr>
                    <div class="col-md-12" style="text-align: left;">
                        <h3>2. Share ke Teman :</h3>
                        <p>Share ke teman melalui akun sosial favoritmu.</p>
                    </div>
                    <div class="col-md-5">
                    	
                		<a class="btn btn-block btn-social btn-twitter" href="https://twitter.com/home?status=Gratis%20Arduino%20Satu%20Tahun%20!%20Yuk%20Ikutan%20Promo%20Elektropal%20%23UniversityWar%20di%20Elektropal.com/univwar">
                            <span class="fa fa-twitter"></span> Share melalui Twitter
                        </a>
                		<br>
                        
                    	<a class="btn btn-block btn-social btn-facebook col-md-6" href="https://www.facebook.com/sharer/sharer.php?u=http%3A//Elektropal.com/univwar">
                            <span class="fa fa-facebook"></span> Share melalui Facebook
                        </a>
                    	
                    </div>
                    <div class="col-md-5">
                    	
                		<a class="btn btn-block btn-social btn-google" href="https://plus.google.com/share?url=Http%3A//elektropal.com/univwar">
                            <span class="fa fa-google"></span> Share melalui Google
                        </a>
                		<br>
                        
                    	<a class="btn btn-block btn-social btn-reddit col-md-6" href="mailto:yourfriend@email.com?&subject=Gratis Arduino 1 Tahun&body=Ayo%20guys,%20ikutan%20Elektropal%20%23UniversityWar%20,%20gratis%20arduino%201%20tahun%20loh%20!%20buruan%20cek%20di%20http%3A//Elektropal.com/univwar">
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
				<!-- <h3>Ganti dengan grafik</h3> -->
				<div id="container_highcharts" style="min-width: 310px; max-width: 800px; height: 400px; margin: 0 auto"></div>
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
				<h2 style="text-align:center">Aturan Main</h2>
				<div class="col-md-6">
					<h3>Ketentuan</h3>
					<ol>
						<li>Peserta Univwar harus mendaftar akun email universtasnya ke website elektropal.</li>
						<li>Akun email akan dinyatakan terdaftar setelah link yang dikirimkan oleh elektropal ke email tersebut diverifikasi.</li>
						<li>Akun email yang sama tidak bsia digunakan dua kali.</li>
						<li>Setiap minggunya dua universitas terpilih mendapatkan kesempatan untuk mengikuti Elektropal University War.</li>
						<li>Keikutsertaan mahasiswa dari universitas yang belum mendapat kesempatan dalam periode pekan-an dianggap tidak valid.</li>
						<li>Pengumuman peserta university war akan diumumkan pada hari senin setiap minggunya.</li>
					</ol>
				</div>
				<div class="col-md-6">
					<ol start="7">
						<li>Universitas pemenang akan dilaksanakan minggu malam, seminggu setelah war selesai.</li>
						<li>Peserta dari universitas yang menang ebrhak mendapatkan Arduino uno gratis selama setahun setiap belanja di <a href="http://Elektropal.com">Elektropal.com</a> setiap belanja di Elektropal dengan jumlah belanja minimum Rp. 75.000</li>
					</ol>
					<h3>Syarat</h3>
					<ol>
						<li>Memiliki akun email dari universitas yang menjadi peserta dalam periode mingguan tersebut.</li>
						<li>Kompetisi terbuka untuk seluruh mahasiswa tidak terbatas pada mahasiswa teknik elektro/teknik mesin dst. selama memiliki email universitas yang sah (*.ac.id)</li>
						<li>Email yang didaftarkan harus terverifikasi</li>

					</ol>
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
	<!-- ========== CHAT =================== -->
	<div class="hidden-xs hidden-sm container chat">
	    <div class="row chat-window col-xs-5 col-md-3" id="chat_window_1" style="margin-left:10px;">
	        <div class="col-xs-12 col-md-12">
	        	<div class="panel panel-default">
	                <div class="panel-heading top-bar" id="paneltitle">
	                    <div class="col-md-8 col-xs-8">
	                        <h3 id="titel" class="panel-title"><!-- <span class="glyphicon glyphicon-comment"></span> --> Pertanyaan? Chat aja!</h3>
	                    </div>
	                    <div class="col-md-4 col-xs-4" style="text-align: right;">
	                        <a href="#"><span id="minim_chat_window" class="glyphicon glyphicon-minus icon_minim"></span></a>
	                        <a href="#"><span class="glyphicon glyphicon-remove icon_close" data-id="chat_window_1"></span></a>
	                    </div>
	                </div>
	                <div class="panel-body msg_container_base">
	                	<!--
	                    <div class="row msg_container base_sent">
	                        <div class="col-md-10 col-xs-10">
	                            <div class="messages msg_sent">
	                                <p>that mongodb thing looks good, huh?
	                                tiny master db, and huge document store</p>
	                                <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
	                            </div>
	                        </div>
	                        <div class="col-md-2 col-xs-2 avatar">
	                            <img src="http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg" class=" img-responsive ">
	                        </div>
	                    </div>
	                    <div class="row msg_container base_receive">
	                        <div class="col-md-2 col-xs-2 avatar">
	                            <img src="http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg" class=" img-responsive ">
	                        </div>
	                        <div class="col-md-10 col-xs-10">
	                            <div class="messages msg_receive">
	                                <p>that mongodb thing looks good, huh?
	                                tiny master db, and huge document store</p>
	                                <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
	                            </div>
	                        </div>
	                    </div>
	                	-->
						
						<div id="messagesDiv"></div>
	                </div>
	                <div class="panel-footer">
	                    <div class="input-group">
	                        <input id="messageInput" type="text" class="form-control input-sm chat_input" placeholder="Write your message here..." />
	                        <span class="input-group-btn">
	                        <button class="btn btn-primary btn-sm" id="btn-chat">Send</button>
	                        </span>
	                    </div>
	                </div>
	    		</div>
	        </div>
	    </div>
	    
	    <!--<div class="btn-group dropup">
	        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
	            <span class="glyphicon glyphicon-cog"></span>
	            <span class="sr-only">Toggle Dropdown</span>
	        </button>
	        <ul class="dropdown-menu" role="menu">
	            <li><a href="#" id="new_chat"><span class="glyphicon glyphicon-plus"></span> Novo</a></li>
	            <li><a href="#"><span class="glyphicon glyphicon-list"></span> Ver outras</a></li>
	            <li><a href="#"><span class="glyphicon glyphicon-remove"></span> Fechar Tudo</a></li>
	            <li class="divider"></li>
	            <li><a href="#"><span class="glyphicon glyphicon-eye-close"></span> Invisivel</a></li>
	        </ul>
	    </div>
		-->
	</div>

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
			<p><a href="http://www.elektropal.com">Elektropal.com</a></p>
		
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
	<script>
	$(document).ready(function(){
		$('#myfbsharer').click(function(){
			FB.ui({
			  method: 'share',
			  href: '<?=Flight::get('my_base_url')?>/result',
			}, function(response){});
		});


		function getCookie(cname) {
		    var name = cname + "=";
		    var ca = document.cookie.split(';');
		    for(var i=0; i<ca.length; i++) {
		        var c = ca[i];
		        while (c.charAt(0)==' ') c = c.substring(1);
		        if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
		    }
		    return "";
		} 
		
		$(document).on('click', '.panel-heading span.icon_minim', function (e) {
		    var $this = $(this);
		    if (!$this.hasClass('panel-collapsed')) {
		        $this.parents('.panel').find('.panel-body').slideUp();
		        $this.addClass('panel-collapsed');
		        $this.removeClass('glyphicon-minus').addClass('glyphicon-plus');
		    } else {
		        $this.parents('.panel').find('.panel-body').slideDown();
		        $this.removeClass('panel-collapsed');
		        $this.removeClass('glyphicon-plus').addClass('glyphicon-minus');
		    }
		});
		$(document).on('focus', '.panel-footer input.chat_input', function (e) {
		    var $this = $(this);
		    /*
		    if ($('#minim_chat_window').hasClass('panel-collapsed')) {
		        $this.parents('.panel').find('.panel-body').slideDown();
		        $('#minim_chat_window').removeClass('panel-collapsed');
		        $('#minim_chat_window').removeClass('glyphicon-plus').addClass('glyphicon-minus');
		    }
		    */
		    $this.parents('.panel').find('.panel-body').slideDown();
		    $this.removeClass('panel-collapsed');
		    $this.removeClass('glyphicon-plus').addClass('glyphicon-minus');
		});
		$(document).on('click', '#new_chat', function (e) {
		    var size = $( ".chat-window:last-child" ).css("margin-left");
		     size_total = parseInt(size) + 400;
		    alert(size_total);
		    var clone = $( "#chat_window_1" ).clone().appendTo( ".container" );
		    clone.css("margin-left", size_total);
		});
		$(document).on('click', '.icon_close', function (e) {
		    //$(this).parent().parent().parent().parent().remove();
		    $( "#chat_window_1" ).remove();
		});

		$(document).on('click', '#btn-chat', function (e) {
		    console.log(getCookie('epal_chat'));
		});
		

		// =========================== CHAT ==============================
		var date = moment().format("YY/MM/DD");
		var room = "<?php echo session_id();?>";//$('#roomInput').val();; //getCookie('epal_chat');
		var myDataRef = new Firebase('https://android-chat-test.firebaseio.com/chat/'+room);
		$('#messageInput').keypress(function (e) {
			if (e.keyCode == 13) {
				//var name = $('#nameInput').val();
				name = "me";
				var text = $('#messageInput').val();
				var timestamp = Date.now();
				myDataRef.push({username:name,content:text});//,room:room,timestamp:timestamp});
				$('#messageInput').val('');
			}
		});
		myDataRef.limitToLast(10).on('child_added', function(snapshot) {
			var message = snapshot.val();
			console.log(snapshot);
			console.log("val()");
			console.log(snapshot.val());
			displayChatMessage(message.username, message.content);
		});

		function displayChatMessage(name, text) {
			//$('<div/>').text(text).prepend($('<em/>').text(name+': ')).appendTo($('#messagesDiv'));
			//$('#messagesDiv')[0].scrollTop = $('#messagesDiv')[0].scrollHeight;
			if(name=="me"){
				$('#messagesDiv').append(
					$("<div>")
						.addClass("row msg_container base_receive")
						.append(
							$("<div>")
								.addClass("col-md-2 col-xs-2 avatar")
								.append(
									$("<img>")
										.addClass("img-responsive")
										.attr("src","http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg")
								)
						).append(
							$("<div>")
								.addClass("col-md-10 col-xs-10")
								.append(
									$("<div>")
										.addClass("messages msg_receive")
										.append(
											$("<p>").text(text)
										).append(
											$("<time>").text(name)
										)
								)
						)
				);
			}else{				
				$('#messagesDiv').append(
					$("<div>")
						.addClass("row msg_container base_sent")
						.append(
							$("<div>")
								.addClass("col-md-10 col-xs-10")
								.append(
									$("<div>")
										.addClass("messages msg_sent")
										.append(
											$("<p>").text(text)
										).append(
											$("<time>").text(name)
										)
								)
						).append(
							$("<div>")
								.addClass("col-md-2 col-xs-2 avatar")
								.append(
									$("<img>")
										.addClass("img-responsive")
										.attr("src","http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg")
								)
						)
				);
			}
			//$('#messagesDiv')[0].scrollTop = $('#messagesDiv')[0].scrollHeight;
			$("#messagesDiv").scrollTop($("#messagesDiv").scrollTop() + $("#messagesDiv").height()+20);
			blink('#paneltitle',10,200);
		};
		$(window).unload(function(){
			myDataRef.remove();
		});

		function blink(elem, times, speed) {
		    if (times > 0 || times < 0) {
		        if ($(elem).hasClass("blink")) 
		            $(elem).removeClass("blink");
		        else
		            $(elem).addClass("blink");
		    }

		    clearTimeout(function () {
		        blink(elem, times, speed);
		    });

		    if (times > 0 || times < 0) {
		        setTimeout(function () {
		            blink(elem, times, speed);
		        }, speed);
		        times -= .5;
		    }		    
		}
	});
	</script>
</body>
</html>
