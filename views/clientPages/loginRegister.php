<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Sign up / Login Form</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<!DOCTYPE html>
<html>
<head>
	<title>Slide Navbar</title>
	<link rel="stylesheet" type="text/css" href="slide navbar style.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
<style>
	body{
	margin: 0;
	padding: 0;
	display: flex;
	justify-content: center;
	align-items: center;
	min-height: 100vh;
	font-family: 'Jost', sans-serif;
	background: linear-gradient(to bottom, #0f0c29, #302b63, #24243e);
}
.main{
	width: 350px;
	height: 550px;
	background: red;
	overflow: hidden;
	background: url("https://doc-08-2c-docs.googleusercontent.com/docs/securesc/68c90smiglihng9534mvqmq1946dmis5/fo0picsp1nhiucmc0l25s29respgpr4j/1631524275000/03522360960922298374/03522360960922298374/1Sx0jhdpEpnNIydS4rnN4kHSJtU1EyWka?e=view&authuser=0&nonce=gcrocepgbb17m&user=03522360960922298374&hash=tfhgbs86ka6divo3llbvp93mg4csvb38") no-repeat center/ cover;
	border-radius: 10px;
	box-shadow: 5px 20px 50px #000;
}
#chk{
	display: none;
}
.login{
	position: relative;
	width:100%;
	height: 100%;
}
label{
	color: #fff;
	font-size: 2.3em;
	justify-content: center;
	display: flex;
	margin: 50px;
	font-weight: bold;
	cursor: pointer;
	transition: .5s ease-in-out;
}
input{
	width: 60%;
	height: 20px;
	background: #e0dede;
	justify-content: center;
	display: flex;
	margin: 20px auto;
	padding: 10px;
	border: none;
	outline: none;
	border-radius: 5px;
}
button{
	width: 60%;
	height: 40px;
	margin: 10px auto;
	justify-content: center;
	display: block;
	color: #fff;
	background: #573b8a;
	font-size: 1em;
	font-weight: bold;
	margin-top: 20px;
	outline: none;
	border: none;
	border-radius: 5px;
	transition: .2s ease-in;
	cursor: pointer;
}
button:hover{
	background: #6d44b8;
}
.signup{
	height: 460px;
	background: #eee;
	/* border-radius: 60% / 10%; */
	transform: translateY(-180px);
	transition: .8s ease-in-out;
}
.signup label{
	color: #573b8a;
	transform: scale(.6);
}

#chk:checked ~ .signup{
	transform: translateY(-550px);
}
#chk:checked ~ .signup label{
	transform: scale(1);	
}
#chk:checked ~ .login label{
	transform: scale(.6);
}
</style>

<?php 
if(isset($_SESSION['loginErr']) && $_SESSION['loginErr'] === '1'){
?>
<script>
	alert("your username or password is iccorect")
</script>
<?php
$_SESSION['loginErr'] = '0';
}elseif(isset($_SESSION['loginErr']) && $_SESSION['loginErr'] === '2'){
?>
<script>
	alert("your password is not compatible")
</script>
<?php
$_SESSION['loginErr'] = '0';
}
?>
</head>
<body>
	<div class="main">  	
			<input type="checkbox" id="chk" aria-hidden="true">
			<div class="login">
				<form method="post" action="/Ecommerce/index.php/confirmLogin">
					<label for="chk" aria-hidden="true">Login</label>
					<input type="text" name="username" placeholder="Email" required="">
					<input type="password" name="password" placeholder="Password" required="">
					<button type="submit">Login</button>
				</form>
			</div>

			<div class="signup">
				<form method="post" action="/Ecommerce/index.php/confirmCreateAcount">
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text" name="full_name" placeholder="Full name" required="">
					<input type="email" name="email" placeholder="Email" required="">
					<input type="text" name="username" placeholder="username" required="">
					<input type="password" name="password" placeholder="Password" required="">
					<input type="password" name="password2" placeholder="Password" required="">
					<button type="submit">Sign up</button>
				</form>
			</div>

			
	</div>
</body>
</html>
<!-- partial -->
  
</body>
</html>
