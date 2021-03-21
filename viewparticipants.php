<?php include "templates/header.php"; ?>

<div class="container">
<span class="titheader"><i class="fas fa-users"></i> &nbsp;&nbsp;&nbsp; All Participants </span>
</div>


<table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col" class="tblth">Name</th>
      <th scope="col" class="tblth">Contact</th>
      <th scope="col" class="tblth">Event ID</th>
      <th scope="col" class="tblth">Ref. Code</th>
    </tr>
  </thead>
  <tbody>

<?php
	$sql = "SELECT * FROM participant";
	$events = mysqli_query($conn, $sql);
	$resultcheck = mysqli_num_rows($events);
	
	if($resultcheck > 0) {
		while ($row = mysqli_fetch_assoc($events)) {
			echo "<tr><td><span class=''>".$row['first_name']." ".$row['last_name']."</span></td>
			<td><i class='fas fa-phone' style='color:DarkGoldenRod'></i>  &nbsp".$row['phone']."<br><br>
					<i class='far fa-envelope' style='color:orange'></i>  &nbsp".$row['email']."</td>
			<td>".$row['my_event_id']."</td>
			<td>".$row['reference_code']."</td></tr>";
		}
	} 
?>

  </tbody>
</table>

	<br>
	<br>
	<br>
<?php include "templates/footer.php"; ?>