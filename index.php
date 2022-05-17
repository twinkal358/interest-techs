<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<title>Interesting Chat</title>
</head>

<style type="text/css">
	@font-face {

		font-family: headFont;
		src: url(ui/fonts/Summer-Vibes-OTF.otf);
	}

	@font-face {

		font-family: myFont;
		src: url(ui/fonts/OpenSans-Regular.ttf);
	}



	#wrapper {

		max-width: 900px;
		min-height: 500px;
		max-height: 630px;
		display: flex;
		margin: auto;
		color: white;
		font-family: myFont;
		font-size: 13px;
	}

	#left_pannel {

		min-height: 500px;
		background-color: #0d016f;
		/* background-image: linear-gradient(to right top, #cf137f, #bd0087, #a8008f, #8f0098, #6f009f, #970094, #b60089, #ce007d, #fd3c57, #ff7f27, #f9bf00, #c9fa31); */
		flex: 1;
		text-align: center;

	}

	#profile_image {

		width: 50%;
		border: solid thin white;
		border-radius: 50%;
		margin: 10px;

	}

	#left_pannel label {
		border-radius: 50px;
		background: #e0e0e0;
		box-shadow: 35px 35px 70px,
			-30px -35px 70px #HDSGH;
		width: 100%;
		height: 50px;
		display: block;
		/* background-color: #404b56; */
		/* border-bottom: solid thin #ffffff55; */
		background-image: linear-gradient(to right top, #aa1067, #c0005e, #d30052, #e30043, #ef002f, #f63425, #fb5017, #ff6700, #ff8f00, #ffb500, #ffdb00, #f2ff00);
		cursor: pointer;
		padding: 5px;
		transition: all 1s ease;
	}

	#left_pannel label:hover {


		/* background-color: #778593;  */
		background-image: linear-gradient(to right top, #b4ea0c, #edbe00, #ff8b13, #ff5452, #ff2984, #ff2f7d, #ff3676, #ff3c6f, #ff7136, #e8a900, #acd91f, #0fff87);
	}

	#left_pannel label img {

		float: right;
		width: 25px;
	}

	#right_pannel {

		min-height: 500px;
		flex: 4;
		text-align: center;
	}

	#header {

		/* background-color: #485b6c; */
		background-image: linear-gradient(to right top, #d16ba5, #c777b9, #ba83ca, #aa8fd8, #9a9ae1, #8aa7ec, #79b3f4, #69bff8, #52cffe, #41dfff, #46eefa, #5ffbf1);
		height: 70px;
		font-size: 40px;
		text-align: center;
		font-family: headFont;
		position: relative;
	}

	#inner_left_pannel {

		/* background-color: #383e48; */
		/* background-image: linear-gradient(to right top, #b4ea0c, #edbe00, #ff8b13, #ff5452, #ff2984, #ff2f7d, #ff3676, #ff3c6f, #ff7136, #e8a900, #acd91f, #0fff87);
		flex: 1; */
		background-image: linear-gradient(to right top, #6090d7, #00b8f9, #00dae1, #00f494, #b7ff16);
		min-height: 430px;
		max-height: 530px;
	}


	#inner_right_pannel {

		/* background-color: #f2f7f8; */
		background-image: linear-gradient(to right top, #d16ba5, #f96d86, #ff825b, #fba52c, #d1cb00, #90d04c, #51cd7e, #00c5a6, #0098aa, #006899, #003971, #210b39);
		flex: 2;
		min-height: 430px;
		transition: all 2s ease;
		max-height: 530px;
	}

	#radio_contacts:checked~#inner_right_pannel {

		flex: 0;
	}

	#radio_settings:checked~#inner_right_pannel {

		flex: 0;
	}

	#contact {

		width: 100px;
		height: 120px;
		margin: 10px;
		display: inline-block;
		border-radius: 19px;
		background: #e0e0e0;
		box-shadow: 25px 25px 51px #5a5a5a,
			-25px -25px 51px #ffffff;
		vertical-align: top;
		color: #0d016f;
	}

	#contact img {

		width: 100px;
		height: 100px;
	}

	#active_contact {

		height: 70px;
		margin: 10px;
		border: solid thin #aaa;
		padding: 2px;
		background-color: #eee;
		color: #444;
	}

	#active_contact img {

		width: 70px;
		height: 70px;
		float: left;
		margin: 2px;
	}

	#message_left {

		margin: 10px;
		padding: 2px;
		padding-right: 10px;
		/* background-color: #c979d5; */
		background-image: linear-gradient(to right top, #aa1067, #c0005e, #d30052, #e30043, #ef002f, #f63425, #fb5017, #ff6700, #ff8f00, #ffb500, #ffdb00, #f2ff00);
		color: white4;
		float: left;
		box-shadow: 0px 0px 10px #aaa;
		border-bottom-left-radius: 50%;
		border-top-right-radius: 40%;
		position: relative;
		width: 60%;
		min-width: 200px;
	}

	#message_left img {
		width: 70px;
		height: 70px;
		float: left;
		margin-radius: 50%;
		border-radius: 50%;
		border: solid 2px white;
	}

	#message_left #prof_img {

		width: 60px;
		height: 60px;
		float: left;
		margin: 2px;
		border-radius: 50%;
		border: solid 2px white;
	}

	#message_left div {

		width: 20px;
		height: 20px;
		background-color: #34474f;
		border: solid 2px white;
		border-radius: 50%;
		position: absolute;
		left: -10px;
		top: 20px;
	}

	#message_right {

		margin: 10px;
		padding: 2px;
		padding-right: 10px;
		/* background-color: #fbffee;
		color: #444; */
		background-image: linear-gradient(to right top, #430729, #552d5c, #55558f, #3f7fba, #00a9d9, #00c2e2, #00dadd, #00f0ce, #47f9ae, #80ff85, #b9ff54, #f4ff00);
		float: right;
		opacity: 0.2px;
		box-shadow: 0px 0px 10px #aaa;
		border-bottom-right-radius: 50%;
		border-top-left-radius: 30%;
		position: relative;
		width: 60%;
		min-width: 200px;
	}

	#message_right #prof_img {

		width: 60px;
		height: 60px;
		float: left;
		margin: 2px;
		border-radius: 50%;
		border: solid 2px white;
	}

	#message_right div img {

		width: 25px;
		height: 18px;
		float: none;
		margin: 0px;
		border-radius: 50%;
		border: none;
		position: absolute;
		top: 30px;
		right: 10px;
	}

	#message_right #trash {

		width: 20px;
		height: 20px;
		position: absolute;
		top: 15px;
		left: -10px;
		cursor: pointer;
	}

	#message_left #trash {

		width: 20px;
		height: 20px;
		position: absolute;
		top: 15px;
		right: -10px;
		cursor: pointer;
	}



	#message_right div {

		width: 20px;
		height: 20px;
		background-color: #34474f;
		border: solid 2px white;
		border-radius: 50%;
		position: absolute;
		right: -10px;
		top: 20px;
	}

	.loader_on {

		position: absolute;
		width: 30%;
	}

	.loader_off {

		display: none;
	}

	.image_on {

		position: absolute;
		height: 450px;
		width: 450px;
		margin: auto;
		z-index: 10;
		top: 50px;
		left: 50px;
	}

	.image_off {

		display: none;
	}
</style>

<body>

	<div id="wrapper">

		<div id="left_pannel">

			<div id="user_info" style="padding: 10px;">
				<img id="profile_image" src="ui/images/user_male.jpg" style="height: 100px;width: 100px;">
				<br>
				<span id="username">Username</span>
				<br>
				<span id="email" style="font-size: 12px;opacity: 0.5;">email@gmail.com</span>
				<br>
				<span id="interest" style="font-size: 12px;opacity: 0.5;">interest</span>

				<br>
				<br>
				<br>
				<div>
					<label id="label_chat" for="radio_chat">Chat <img src="ui/icons/chat.png"></label>
					<label id="label_contacts" for="radio_contacts">Contacts <img src="ui/icons/contacts.png"></label>
					<label id="label_settings" for="radio_settings">Settings <img src="ui/icons/settings.png"></label>
					<label id="logout" for="radio_logout">Logout <img src="ui/icons/logout.png"></label>
				</div>

			</div>

		</div>
		<div id="right_pannel">
			<div id="header">
				<div id="loader_holder" class="loader_on"><img style="width:70px;" src="ui/icons/giphy.gif"></div>

				<div id="image_viewer" class="image_off" onclick="close_image(event)"></div>
				interest Chat
			</div>

			<div id="container" style="display: flex;">

				<div id="inner_left_pannel">

				</div>

				<input type="radio" id="radio_chat" name="myradio" style="display: none;">
				<input type="radio" id="radio_contacts" name="myradio" style="display: none;color:#00b8f9">
				<input type="radio" id="radio_settings" name="myradio" style="display: none;">

				<div id="inner_right_pannel">

				</div>

			</div>
		</div>

	</div>
</body>

</html>

<script type="text/javascript">
	var sent_audio = new Audio("message_sent.mp3");
	var received_audio = new Audio("message_received.mp3");

	var CURRENT_CHAT_USER = "";
	var SEEN_STATUS = false;

	function _(element) {

		return document.getElementById(element);
	}

	var label_contacts = _("label_contacts");
	label_contacts.addEventListener("click", get_contacts);

	var label_chat = _("label_chat");
	label_chat.addEventListener("click", get_chats);

	var label_settings = _("label_settings");
	label_settings.addEventListener("click", get_settings);


	var logout = _("logout");
	logout.addEventListener("click", logout_user);

	function get_data(find, type) {

		var xml = new XMLHttpRequest();
		var loader_holder = _("loader_holder");
		loader_holder.className = "loader_on";

		xml.onload = function() {

			if (xml.readyState == 4 || xml.status == 200) {

				loader_holder.className = "loader_off";
				handle_result(xml.responseText, type);
			}

		}

		var data = {};
		data.find = find;
		data.data_type = type;
		data = JSON.stringify(data);

		xml.open("POST", "api.php", true);
		xml.send(data);
	}

	function handle_result(result, type) {

		if (result.trim() != "") {

			var inner_right_pannel = _("inner_right_pannel");
			inner_right_pannel.style.overflow = "visible";

			var obj = JSON.parse(result);
			if (typeof(obj.logged_in) != "undefined" && !obj.logged_in) {

				window.location = "login.php";
			} else {

				switch (obj.data_type) {

					case "user_info":
						var username = _("username");
						var email = _("email");
						var profile_image = _("profile_image");
						var interest = _("interest");
						username.innerHTML = obj.username;
						email.innerHTML = obj.email;
						interest.innerHTML = obj.interest;
						profile_image.src = obj.image;
						break;

					case "contacts":

						var inner_left_pannel = _("inner_left_pannel");

						inner_right_pannel.style.overflow = "hidden";
						inner_left_pannel.innerHTML = obj.message;
						break;

					case "chats_refresh":
						SEEN_STATUS = false;
						var messages_holder = _("messages_holder");
						messages_holder.innerHTML = obj.messages;
						if (typeof obj.new_message != 'undefined') {
							if (obj.new_message) {
								received_audio.play();

								setTimeout(function() {
									messages_holder.scrollTo(0, messages_holder.scrollHeight);
									var message_text = _("message_text");
									message_text.focus();
								}, 100);

							}
						}


						break;

					case "send_message":
						sent_audio.play();
					case "chats":
						SEEN_STATUS = false;
						var inner_left_pannel = _("inner_left_pannel");

						inner_left_pannel.innerHTML = obj.user;
						inner_right_pannel.innerHTML = obj.messages;



						var messages_holder = _("messages_holder");

						setTimeout(function() {
							messages_holder.scrollTo(0, messages_holder.scrollHeight);
							var message_text = _("message_text");
							message_text.focus();
						}, 100);

						if (typeof obj.new_message != 'undefined') {
							if (obj.new_message) {
								received_audio.play();
							}
						}

						break;


					case "settings":
						var inner_left_pannel = _("inner_left_pannel");

						inner_left_pannel.innerHTML = obj.message;
						break;

					case "send_image":
						alert(obj.message);
						break;
					case "save_settings":

						alert(obj.message);
						get_data({}, "user_info");
						get_settings(true);
						break;



				}
			}
		}
	}

	function logout_user() {
		var answer = confirm("Are you sure you want to log out??");
		if (answer) {
			get_data({}, "logout");
		}
	}

	get_data({}, "user_info");
	get_data({}, "contacts");

	var radio_contacts = _("radio_contacts");
	radio_contacts.checked = true;

	function get_contacts(e) {

		get_data({}, "contacts");
	}

	function get_chats(e) {

		get_data({}, "chats");
	}

	function get_settings(e) {

		get_data({}, "settings");
	}

	function send_message(e) {

		var message_text = _("message_text");
		if (message_text.value.trim() == "") {

			alert("please type something to send");
			return;
		}

		get_data({

			message: message_text.value.trim(),
			userid: CURRENT_CHAT_USER

		}, "send_message");

	}

	function enter_pressed(e) {
		if (e.keyCode == 13) {
			send_message(e);
		}

		SEEN_STATUS = true;
	}

	setInterval(function() {

		var radio_chat = _("radio_chat");
		var radio_contacts = _("radio_contacts");

		if (CURRENT_CHAT_USER != "" && radio_chat.checked) {

			get_data({
				userid: CURRENT_CHAT_USER,

				seen: SEEN_STATUS
			}, "chats_refresh");
		}


		if (radio_contacts.checked) {

			get_data({}, "contacts");
		}


	}, 5000);

	function set_seen(e) {

		SEEN_STATUS = true;
	}

	function delete_message(e) {

		if (confirm("Are you sure you want to delete this message??")) {

			var msgid = e.target.getAttribute("msgid");
			get_data({
				rowid: msgid
			}, "delete_message");

			get_data({
				userid: CURRENT_CHAT_USER,
				seen: SEEN_STATUS
			}, "chats_refresh");
		}
	}

	function delete_thread(e) {

		if (confirm("Are you sure you want to delete this whole thread??")) {

			get_data({
				userid: CURRENT_CHAT_USER
			}, "delete_thread");

			get_data({
				userid: CURRENT_CHAT_USER,
				seen: SEEN_STATUS
			}, "chats_refresh");
		}
	}
</script>

<script type="text/javascript">
	function collect_data() {

		var save_settings_button = _("save_settings_button");
		save_settings_button.disabled = true;
		save_settings_button.value = "Loading...Please wait..";

		var myform = _("myform");
		var inputs = myform.getElementsByTagName("INPUT");

		var data = {};
		for (var i = inputs.length - 1; i >= 0; i--) {

			var key = inputs[i].name;

			switch (key) {

				case "username":
					data.username = inputs[i].value;
					break;

				case "email":
					data.email = inputs[i].value;
					break;

				case "gender":
					if (inputs[i].checked) {
						data.gender = inputs[i].value;
					}
					break;

				case "password":
					data.password = inputs[i].value;
					break;

				case "password2":
					data.password2 = inputs[i].value;
					break;

					// case "interest":
					// 	if (inputs[i].checked) {
					// 		data.interest = inputs[i].value;
					// 	}
					// 	break;



			}
		}

		send_data(data, "save_settings");

	}

	function send_data(data, type) {

		var xml = new XMLHttpRequest();

		xml.onload = function() {

			if (xml.readyState == 4 || xml.status == 200) {

				handle_result(xml.responseText);
				var save_settings_button = _("save_settings_button");
				save_settings_button.disabled = false;
				save_settings_button.value = "Signup";
			}
		}

		data.data_type = type;
		var data_string = JSON.stringify(data);

		xml.open("POST", "api.php", true);
		xml.send(data_string);
	}


	function upload_profile_image(files) {

		var filename = files[0].name;
		var ext_start = filename.lastIndexOf(".");
		var ext = filename.substr(ext_start + 1, 3);
		if (!(ext == "jpg" || ext == "JPG")) {

			alert("This file type is not allowed");
			return;
		}

		var change_image_button = _("change_image_button");
		change_image_button.disabled = true;
		change_image_button.innerHTML = "Uploading Image...";

		var myform = new FormData();

		var xml = new XMLHttpRequest();

		xml.onload = function() {

			if (xml.readyState == 4 || xml.status == 200) {

				//alert(xml.responseText);
				get_data({}, "user_info");
				get_settings(true);
				change_image_button.disabled = false;
				change_image_button.innerHTML = "Change Image";
			}
		}

		myform.append('file', files[0]);
		myform.append('data_type', "change_profile_image");

		xml.open("POST", "uploader.php", true);
		xml.send(myform);
	}


	function handle_drag_and_drop(e) {

		if (e.type == "dragover") {

			e.preventDefault();
			e.target.className = "dragging";

		} else if (e.type == "dragleave") {

			e.target.className = "";

		} else if (e.type == "drop") {

			e.preventDefault();
			e.target.className = "";

			upload_profile_image(e.dataTransfer.files);
		} else {

			e.target.className = "";
		}
	}


	function start_chat(e) {

		var userid = e.target.getAttribute("userid");
		if (e.target.id == "") {
			userid = e.target.parentNode.getAttribute("userid");
		}

		CURRENT_CHAT_USER = userid;

		var radio_chat = _("radio_chat");
		radio_chat.checked = true;
		get_data({
			userid: CURRENT_CHAT_USER
		}, "chats");

	}

	function send_image(files) {

		var filename = files[0].name;
		var ext_start = filename.lastIndexOf(".");
		var ext = filename.substr(ext_start + 1, 3);
		if (!(ext == "jpg" || ext == "JPG")) {

			alert("This file type is not allowed");
			return;
		}

		var myform = new FormData();
		var xml = new XMLHttpRequest();

		xml.onload = function() {

			if (xml.readyState == 4 || xml.status == 200) {

				handle_result(xml.responseText, "send_image");
				get_data({
					userid: CURRENT_CHAT_USER,
					seen: SEEN_STATUS
				}, "chats_refresh");
			}
		}

		myform.append('file', files[0]);
		myform.append('data_type', "send_image");
		myform.append('userid', CURRENT_CHAT_USER);
		// myform.append('interest',Interest);

		xml.open("POST", "uploader.php", true);
		xml.send(myform);
	}

	function close_image(e) {

		e.target.className = "image_off";
	}

	function image_show(e) {

		var image = e.target.src;
		var image_viewer = _("image_viewer");

		image_viewer.innerHTML = "<img src='" + image + "' style='width:100%' />";
		image_viewer.className = "image_on";
	}
</script>