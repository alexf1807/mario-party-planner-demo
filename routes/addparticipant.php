 <?php
	
include_once "../app/app.php";

$first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
$last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$my_event_id = mysqli_real_escape_string($conn, $_POST['my_event_id']);
$reference_code = mysqli_real_escape_string($conn, $_POST['reference_code']);

$sql3 = "INSERT INTO participant(first_name, last_name, phone, email, my_event_id, reference_code) 
VALUES ('$first_name', '$last_name', '$phone', '$email', '$my_event_id', '$reference_code');";
	
$dupesql = "SELECT * FROM participant WHERE email = '$email' AND my_event_id = '$my_event_id'";

$duperaw = mysqli_query($conn, $dupesql);

if (mysqli_num_rows($duperaw) > 0) {
		while ($row = mysqli_fetch_assoc($duperaw)) {
				echo '<script type="text/javascript">'; 
				echo 'alert("Sorry, YOU ALREADY REGISTERED! Your tracking code is: '.$row["reference_code"].'");'; 
				echo 'document.location.href = "../index.php";';
				echo '</script>';
			}
			
} else {
	mysqli_query($conn, $sql3);
	$Message = urlencode("Thanks for registering, your tracking code is: ".$reference_code);
	header("Location:../index.php?Message=".$Message);
	die;
}