<?php
session_start();

$message = "";

if (array_key_exists("id", $_COOKIE) AND $_COOKIE['id']) {

	$_SESSION['id'] = $_COOKIE['id'];
}

if (array_key_exists('id', $_SESSION) AND $_SESSION['id']) {

	include "connection.php";

	$query = "SELECT `data` FROM `register_user` WHERE id = '" . mysqli_real_escape_string($conn, $_SESSION['id']) . "' LIMIT 1";

	$result = mysqli_query($conn, $query);
	$row = mysqli_fetch_array($result);
	$message = $row['data'];

} else {

	header("Location: index.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width" initial-scale=1.0 charset="utf-8">

</head>
<body>

	<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
		  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <h1>My Secert Diary</h1>
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <form class="form-inline my-2 my-lg-0">
		     <button class="btn btn-outline-success my-2 my-sm-0 navbar-toggler-right" type="submit"><a href='index.php?logout=1'>Log out</a></button>
		    </form>
		  </div>
	</nav>

	<div  id="message">

		<textarea class="container" id="text" rows="30" cols="150">
			<?php echo $message; ?>
		</textarea>

	</div>


	<script type="text/javascript" src="jquery.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script type="text/javascript">

		$("#text").on("change paste keyup", function() {

 			  $.ajax({
				  method: "POST",
				  url: "UpdateText.php",
				  data: { content: $("#text").val() }
				});

		});

	</script>
</body>
</html>