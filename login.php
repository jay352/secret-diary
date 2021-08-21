<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width" initial-scale=1.0 charset="utf-8">
	<title>log in</title>

	<style type="text/css">


	body{
		background-image: url('images/diary_log.jpg');
	}

	.main{

		margin-top: 250px;
	}
		.a{
                  padding: 10px;

                  font-size: 50px;
                  color: white;
                  margin-bottom: -35px;


		}
		.b{
                  padding: 10px;
                  color: white;


		}
		.c{
                  padding: 10px;
                  margin-bottom: -25px;
                  color: #00e5a0;
                  font-weight: bold;

		}
		.fo{
                  padding: 10px;

		}
		.foa{
                  padding: 10px;


		}
		.fob{
                  padding: 10px;
                   margin-bottom: -20px;

		}
		.foc{
                  padding: 10px;
                  color: white;
margin-bottom: -20px;
		}
		.fod{
                  padding: 10px;


		}
		.ia,.ib{

			width: 500px;
			height: 40px;
			font-size: 20px;
			border-radius: 5px;

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

		.li{

			text-decoration: none;
			color: #00e5a0;
		}
a.li:hover{
	font-size: 20px;
}

input.id:hover{
	height: 70px;
	width: 120px;
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

		<div class="a">
			Secret Diary
		</div>
		<div class="b">
			Store your Important data safe.
		</div>
		<div class="c">
			<a class="li" href="signup.php"> New?Sign up please.</a>
		</div>
		<div class="fo">
			<form method="post" action="log_process.php">
				<div class="foa">
					<input type="text" class="ia" name="username" placeholder="Enter your email">
				</div>
				<div class="fob">
					<input type="password" class="ib" name="pass" placeholder="Enter your password">
				</div>
				<div class="foc">
					<input type="checkbox" class="ic" name="check">Stay logged in
				</div>
				<div class="fod">
					<input type="submit" class="id" name="sub" value="Log in">
				</div>
			</form>
		</div>
	</div>

</body>
</html>
