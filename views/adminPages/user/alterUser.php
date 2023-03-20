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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
	width: 450px;
	height: 700px;
	background: red;
	overflow: hidden;
	background: url("https://doc-08-2c-docs.googleusercontent.com/docs/securesc/68c90smiglihng9534mvqmq1946dmis5/fo0picsp1nhiucmc0l25s29respgpr4j/1631524275000/03522360960922298374/03522360960922298374/1Sx0jhdpEpnNIydS4rnN4kHSJtU1EyWka?e=view&authuser=0&nonce=gcrocepgbb17m&user=03522360960922298374&hash=tfhgbs86ka6divo3llbvp93mg4csvb38") no-repeat center/ cover;
	border-radius: 10px;
	box-shadow: 5px 20px 50px #000;
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
select{
	width: 65%;
	height: 40px;
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
	height: 100%;
	background: #eee;
}
.signup label{
	color: #573b8a;
}

.file{
	width:70%;
	display:flex;
	flex-wrap:wrap;
	margin: 20px auto;
}
.file input{
	width:80%;
	display: flex;
	margin:0px;
}
.file div{
	display:flex;
	justify-content:center;
	align-items:center;
	width:10%;
	display:flex;
	margin:0px;
	font-size:30px;
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
			<div class="signup">
				<form method="post" action="/Ecommerce/index.php/confirmAlterUser?id_user=<?php echo $user1['id_user']; ?>" enctype="multipart/form-data">
					<label for="chk" aria-hidden="true">alter user info</label>
					<input type="text" name="full_name" value="<?php echo $user1['full_name']; ?>" placeholder="Full name" required="">
					<input type="date" name="birth_day" value="<?php echo $user1['birth_day']; ?>" placeholder="Full name" required="">
					<input type="email" name="email" value="<?php echo $user1['email']; ?>" placeholder="Email" required="">
					<select name="role" id="">
						<?php if($user1['role'] == 'admin'){ ?>
							<option value="admin">admin</option>
							<option value="customer">customer</option>
						<?php }else{ ?>
							<option value="customer">customer</option>
							<option value="admin">admin</option>
						<?php } ?>
					</select>
					<div class="file">
						<div><i class="fa-solid fa-image"></i></div>
						<input type="file" name="profile_image" placeholder="profile picture" >
					</div>
					<input type="text" name="username" value="<?php echo $user1['username']; ?>" placeholder="username" required="">
					<input type="password" name="password" value="<?php echo $user1['password']; ?>" placeholder="Password" required="">
					<input type="password" name="password2" value="<?php echo $user1['password']; ?>" placeholder="Password" required="">
					<button type="submit">alter informations</button>
				</form>
			</div>
	</div>
	
</body>
<script>
	<?php if($_GET['err'] == '2'){ ?>
		alert('password you entered id not similar')
	<?php } ?>
</script>
</html>
<!-- partial -->
  
</body>
</html>

