<?php

session_start();

if (array_key_exists('content', $_POST)) {

	include "connection.php";

	$query = "UPDATE `register_user	` SET `data` = '" . mysqli_real_escape_string($conn, $_POST['content']), . "' WHERE id = '" . mysqli_real_escape_string($conn, $_SESSION['id']) . "'LIMIT 1";

	if (mysqli_query($conn, $query)) {

		echo "success";
	} else {

		echo "fail";
	}

}

?>