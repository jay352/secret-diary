
<?php

include 'connection.php';

$user = $_POST["username"];
$pass = $_POST["pass"];

$sql = "SELECT email, pass FROM register_user WHERE email='$user' and pass='$pass'";
$result = mysqli_query($conn, $sql);

if ($result == false) {
	echo "User not registered";
}

$num_rows = mysqli_num_rows($result);
if ($num_rows == 1) {
	session_start();
	$_SESSION['loggedin'] = "True";
	$_SESSION['username'] = $user;
	header("Location: diary.php");

} else {

	echo "Wrong input, try again";
	header("Refresh:2; login.php");

}

?>
