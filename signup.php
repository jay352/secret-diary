<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width" initial-scale=1.0 charset="utf-8">	<title>signup</title>

<style type="text/css">
body{

	background-image: url('images/diary_log.jpg');
}

.main{

		margin-top: 150px;
	}
.se{
	            padding: 10px;

                  font-size: 50px;
                  color: white;

}
.li{
	padding: 10px;
                  color: #00e5a0;
                  font-weight: bold;

}
.ia,.ib,.ic{
	width: 500px;
			height: 40px;
			font-size: 20px;
			border-radius: 5px;
			margin: 10px;
}
.id{
	width: 100px;
			height: 50px;
			font-size: 20px;
			font-weight: bold;
			border-radius: 10px;
			background-color: #3b9ded;
			color: #a6f22b;
}
input.id:hover{
	height: 60px;
	width: 110px;
}

a.li:hover{
	font-size: 20px;
}

.li2{

	color: white;
	text-decoration: none;
	font-size: 40px;
}
a.li2:hover{
	font-size: 50px;
}
</style>
</head>
<header>
	<a class="li2" href="index.php">Home</a>
</header>




<body>
	<div class="main" align="center">

		<div class="se">
			Secret Diary
		</div>
		<div class="li">
			<a class="li" href="login.php"> Already Registered? Log in Please.</a>
		</div>
		<form method="post" action="reg_process.php" >

	<div class="a">
<input class="ia" type="text" name="name" placeholder="Enter name" required>
</div>
<div class="b" class="b">
<input class="ib" type="email" name="email" placeholder="Enter email" required>
</div>
<div class="c">
<input class="ic" type="password" name="pass" placeholder="Enter password" required>
</div>
<div class="d">
<input class="id" type="submit" name="sub">
</div>
</form>
</div>


	<script src="bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript">

		$("#clickLogIn").click(function(){

			$("#signUp").toggle();
			$("#logIn").toggle();

		})

		$("#changePassword").click(function(){

			$("#logIn").toggle();
			$("#forgetpassword").toggle();

		})

	</script>

</body>
</html>
