<html>

<head>
	<title>Interest Chat</title>
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
		margin: auto;
		color: black;
		font-family: myFont;
		font-size: 13px;
	}

	form {

		margin: auto;
		padding: 10px;
		width: 100%;
		max-width: 400px;
	}

	input[type=text],
	input[type=password],
	input[type=button] {

		padding: 10px;
		margin: 10px;
		width: 100%;
		border-radius: 5px;
		border: solid 1px black;
		background: #e0e0e0;
box-shadow:  35px 35px 70px #bebebe,
             -35px -35px 70px #00f2ff5c;
	}

	input[type=button] {

		 width: 100%;
		cursor: pointer;
		background-color: #00f2ff5c;
		color: black; 
		
	}

	input[type=radio] {

		transform: scale(1.2);
		cursor: pointer;
	}

	#header {

		font-size: 40px;
		background-image: linear-gradient(to right top, #aa1067, #c0005e, #d30052, #e30043, #ef002f, #f63425, #fb5017, #ff6700, #ff8f00, #ffb500, #ffdb00, #f2ff00);
		
		text-align: center;
		font-family: headFont;
		width: 100%;
		color: black;
	}


	#error {

		text-align: center;
		padding: 0.5em;
		background-color: #ecaf91;
		color: black;
		display: none;

	}
	
</style>

<body>

	<div id="wrapper">

		<div id="header">
			Interest Chat
			<div style="font-size: 20px;font-family: myFont;">Signup</div>
		</div>
		<div id="error" style="">some text</div>
		<form id="myform">
			<input type="text" name="username" placeholder="Username"><br>
			<input type="text" name="email" placeholder="Email">
			<div style="padding: 10px;">
				Gender:
				<input type="radio" value="Male" name="gender_male"> Male
				<input type="radio" value="Female" name="gender_female"> Female<br>
			</div>
			<input type="password" name="password" placeholder="Password"><br>
			<input type="password" name="password2" placeholder="Retype Password"><br>
			<div>
			
				 <!-- <label for="interests">Selct Your Interest</label>
				<select name="interests" id="interests">
					<option value="Music">music</option>
					<option value="dance">Dance</option>
					<option value="Codding">Codding</option>
					
				</select>  -->
			</div>
			<input type="button" value="Sign up" id="signup_button"><br>

			<br>
			<a href="login.php" style="display: block;text-align: center;text-decoration: none">
				Already have an Account? login here
			</a>

		</form>
	</div>
</body>

</html>

<script type="text/javascript">
	function _(element) {

		return document.getElementById(element);
	}

	var signup_button = _("signup_button");
	signup_button.addEventListener("click", collect_data);

	function collect_data() {

		signup_button.disabled = true;
		signup_button.value = "Loading...Please wait..";

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

				case "gender_male":
				case "gender_female":
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

			

			}
		}

		send_data(data, "signup");

	}

	function send_data(data, type) {

		var xml = new XMLHttpRequest();

		xml.onload = function() {

			if (xml.readyState == 4 || xml.status == 200) {

				handle_result(xml.responseText);
				signup_button.disabled = false;
				signup_button.value = "Signup";
			}
		}

		data.data_type = type;
		var data_string = JSON.stringify(data);

		xml.open("POST", "api.php", true);
		xml.send(data_string);
	}

	function handle_result(result) {

		var data = JSON.parse(result);
		if (data.data_type == "info") {

			window.location = "index.php";
		} else {

			var error = _("error");
			error.innerHTML = data.message;
			error.style.display = "block";

		}
	}
</script>