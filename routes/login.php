<?php
include_once "../app/app.php";

function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}
	
$password= md5($_POST['password']);
$email=$_POST['email'];

$sql = "SELECT * FROM organizer WHERE ( (pwd = '$password') AND (email = '$email'))";
$thisUsers = mysqli_query($conn, $sql);
if (mysqli_num_rows($thisUsers) > 0) {
		session_start();
		while ($row = mysqli_fetch_assoc($thisUsers)) {
			$_SESSION["email"] = $row['email'];
			$_SESSION["fname"] = $row['first_name'];
			$_SESSION["lname"] = $row['last_name'];
			$_SESSION["org_id"] = $row['id'];
			$_SESSION["img_url"] = $row['img_url'];
		}
	header("Location: ../myevents.php?signin=successful");
	
} else {
	echo "<meta http-equiv='refresh' content='0;url=../error.php?code=invalid_user'>"; 
}