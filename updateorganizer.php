<?php include "templates/header.php"; ?>

<div class="container">
<span class="titheader"><i class="fas fa-user-plus"></i> &nbsp;&nbsp;&nbsp; Update Organizer </span>
</div>
<div class="container cont1">



<?php

	$org_id=$_POST['org_id'];
	
	$sql = "SELECT * FROM organizer WHERE id = ".$org_id;
	$organizers = mysqli_query($conn, $sql);
	$resultcheck = mysqli_num_rows($organizers);
	
	if($resultcheck > 0) {
		while ($row = mysqli_fetch_assoc($organizers)) {
			echo "




<form method='POST' action='routes/updateorganizer.php' onsubmit='return confirm(\"Are you sure you want to save these details?\");'>
  <div class='form-group'>
    <input type='text' name='first_name' class='form-control' id='first_name' placeholder='First Name' value='".$row['first_name']."' required>
  </div>
  <div class='form-group'>
    <input type='text' name='last_name' class='form-control' id='last_name' placeholder='Last Name'  value='".$row['last_name']."' required>
  </div>
  <div class='form-group'>
    <input type='text' name='organization' class='form-control' id='organization' placeholder='Organization' value='".$row['organization']."' required>
  </div>
  <hr>
  <div class='form-group'>
    <input type='text' name='phone' class='form-control' id='phone' placeholder='Phone Number' value='".$row['phone']."' required>
  </div>
  <div class='form-group'>
    <input type='email' name='email' class='form-control' id='email' placeholder='Email Address' value='".$row['email']."' required>
  </div>
  <div class='form-group'>
    <input type='text' name='address' class='form-control' id='address' placeholder='Address' value='".$row['address']."' required>
  </div>
  <div class='form-group'>
    <input type='text' name='img_url' class='form-control' id='img_url' placeholder='Profile Image URL' value='".$row['img_url']."' required>
  </div>
  <hr>

  <input type='hidden' name='org_id' value='".$row['id']."' >
  <button type='submit' class='sbmtbtn' title='Save'> <i class='fas fa-save fa-2x'></i> </button>
</form>";
		}
	}

?>
<br>
</div>
<br>
<?php include "templates/footer.php"; ?>