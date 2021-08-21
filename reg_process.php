

<?php
/*

$servername = "localhost";
$username = "root";
$password = "";

$link = mysqli_connect($servername, $username, $password, "my_users");
if(mysqli_connect_error()){

die("Problem...!!");
}

 */
// code...
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];

$conn = new mysqli('localhost', 'root', '', 's_diary');

$sql = "INSERT INTO register_user VALUES ('','$name','','$email','$pass')";

if (mysqli_query($conn, $sql)) {
	echo "Registered successfully";
	header("Refresh:1; diary.php");

	$conn->close();
} else {
	echo "error" . $sql . "<br>" . $conn->error;
}

?>
