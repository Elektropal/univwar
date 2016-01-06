<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?=$view_path?>assets/ico/favicon.png">

    <title>Onassis - Bootstrap 3 Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="<?=$view_path?>assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?=$view_path?>assets/css/main.css" rel="stylesheet">
	<link rel="stylesheet" href="<?=$view_path?>assets/css/font-awesome.min.css">

    <script src="<?=$view_path?>assets/js/jquery.min.js"></script>
	<script src="<?=$view_path?>assets/js/Chart.js"></script>
	<script src="<?=$view_path?>assets/js/modernizr.custom.js"></script>
	
	<meta property="og:url"                content="<?=Flight::get('my_base_url')?>/result" />
	<meta property="og:type"               content="Arduino Uno" />
	<meta property="og:title"              content="#UniversityWar " />
	<meta property="og:description"        content="Elektropal adalah supplier elektronik dan sedang membuat promosi" />
	<meta property="og:image"              content="<?=Flight::get('my_base_url')?>/<?=$view_path?>/assets/img/header-bg.jpg" />

	
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
    <script src="https://code.highcharts.com/highcharts.js"></script>
	<script src="https://code.highcharts.com/modules/exporting.js"></script>
	<script src="https://cdn.firebase.com/js/client/2.3.2/firebase.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
	<script>
	  window.fbAsyncInit = function() {
	    FB.init({
	      appId      : '941208049305958',
	      xfbml      : true,
	      version    : 'v2.5'
	    });
	  };

	  (function(d, s, id){
	     var js, fjs = d.getElementsByTagName(s)[0];
	     if (d.getElementById(id)) {return;}
	     js = d.createElement(s); js.id = id;
	     js.src = "//connect.facebook.net/en_US/sdk.js";
	     fjs.parentNode.insertBefore(js, fjs);
	   }(document, 'script', 'facebook-jssdk'));
	</script>	


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
	<div id="itemwrap">
		<div class="container">
			<br>
			<h1 id="the_title">#UniversityWar</h1>
			<!-- <h2>Web Design</h2> -->
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
				<h3>Hasil <bold>sementara</bold> #UniversityWar
				</h3>
				</div>
			</div>
		</div><!-- /container -->
	</div><!-- /w -->
	
	<!-- ========== SERVICES - GREY SECTION ========== -->
	<div id="g">
		<div class="container">
			<div class="row">
				<div id="container" style="min-width: 310px; max-width: 800px; height: 400px; margin: 0 auto"></div>
				<h3>Kalahkan Universitas lain !</h3>
				<a href="index.html#"><i class="icon-facebook"></i></a>
				<a href="index.html#"><i class="icon-twitter"></i></a>
				<a href="index.html#"><i class="icon-envelope"></i></a>
			</div>
		</div><!-- /container -->
	</div><!-- /g -->
	

	<!-- ========== CHAT =================== -->
	<div class="hidden-xs hidden-sm container chat">
	    <div class="row chat-window col-xs-5 col-md-3" id="chat_window_1" style="margin-left:10px;">
	        <div class="col-xs-12 col-md-12">
	        	<div class="panel panel-default">
	                <div class="panel-heading top-bar" id="paneltitle">
	                    <div class="col-md-8 col-xs-8">
	                        <h3 id="titel" class="panel-title"><span class="glyphicon glyphicon-comment"></span> Chat</h3>
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
	
	
	
	
	<!-- ========== FOOTER SECTION ========== -->
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
							<a href="#" id="myfbsharer"><i class="icon-facebook"></i></a>
							<a class="twitter-share-button"
							  href="https://twitter.com/intent/tweet?text=Ayo%20kalahkan%20universitas%20lain%20dalam%20University%20War.Ikuti%20#UniversityWar%20di%20<?=Flight::get('my_base_url')?>/result?>"
							  data-size="large">
							<i class="icon-twitter"></i></a>							
							<a href="#"><i class="icon-envelope"></i></a>
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
    <script src="<?=$view_path?>assets/js/retina.js"></script>
	<script src="<?=$view_path?>assets/js/main.js"></script>
	<script src="<?=$view_path?>assets/js/mymain.js"></script>
	<script src="<?=$view_path?>assets/js/jquery.bootstrap-growl.min.js"></script>
	<script>
		<?php
			if(isset($message)){
				?>
				$.bootstrapGrowl("<?=$message?>",{
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
	$('.carousel').carousel({
	  interval: 3500
	})
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
