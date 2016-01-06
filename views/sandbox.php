<html>
<head>
	<script src='https://cdn.firebase.com/js/client/2.2.1/firebase.js'></script>
	<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
</head>
<body>
	<div id='messagesDiv'></div>
	<!-- <input type='text' id='nameInput' placeholder='Name'> -->
	<p>Petunjuk : Klik button disamping untuk memilih room mana akan dikirim, kemudian ketik message. Tekan enter untuk menigirim pesan</p>
	<input type='text' id='roomInput' placeholder='Reply to room..'>
	<input type='text' id='messageInput' placeholder='Message'>
	<script>
	var date = moment().format("YY/MM/DD");
	//var room = "<?=session_id();?>";//$('#roomInput').val();; //getCookie('epal_chat');
	var myDataRef = new Firebase('https://android-chat-test.firebaseio.com/chat/'+date);
	$('#messageInput').keypress(function (e) {
		if (e.keyCode == 13) {
			var name = "admin";//$('#nameInput').val();
			var text = $('#messageInput').val();
			var room = $('#roomInput').val();
			var timestamp = Date.now();
			myDataRef.child(room).push({username:name,content:text});//,room:room,timestamp:timestamp});
			$('#messageInput').val('');
		}
	});
	myDataRef.limitToLast(100).on('child_added', function(snapshot) {
		var message = snapshot.val();
		console.log(snapshot);
		console.log("val()");
		console.log(snapshot.val());
		snapshot.forEach(function(snap){
			console.log(snap.val());
		});

		//displayChatMessage(message.username, message.content, );
	});
	function displayChatMessage(name, text, room) {
		var the_name = null;
		if(name=="me"){
			the_name = "client";
		}else{
			the_name = "admin";
		}
		$('#messagesDiv')
			.append(
				$('<div>')
				.append(
					$("<button>")
						.text(room)
						.click(function(event){
							$('#roomInput').val($(this).text());
						})
				).append(
					$("<b>").text(" "+the_name)
				).append(
					$("<i>").text(" : "+text)
				)
				//.html('[<a href="#" class="setroom" >'+room+'</a>] <b>'+the_name + "</b> : "+text)
			);
		//$('<div/>').text(text).prepend($('<em/>').text(name+': ')).appendTo($('#messagesDiv'));
		$('#messagesDiv')[0].scrollTop = $('#messagesDiv')[0].scrollHeight;
	};
	$('a.setroom').click(function(event){
		console.log($(this).text());
		$('#roomInput').val(this.val());
		return false;
	});

	$(window).unload(function(){
		myDataRef.remove();
	});
	</script>
</body>
</html>