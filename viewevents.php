<?php include "templates/header.php"; ?>

<div class="container">
<span class="titheader"><i class="fas fa-calendar-alt"></i> &nbsp;&nbsp;&nbsp; All Events </span>
</div>
<table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col" class="tblth">Event</th>
      <th scope="col" class="tblth">Details</th>
	  <th scope="col" class="tblth"></th>
	  <th scope="col" class="tblth"></th>
    </tr>
  </thead>
  <tbody>

<?php
	$sql = "SELECT * FROM my_event";
	$events = mysqli_query($conn, $sql);
	$resultcheck = mysqli_num_rows($events);
	
	if($resultcheck > 0) {
		while ($row = mysqli_fetch_assoc($events)) {
			echo "<tr>
					<td><span class='tblpersname'><i class='fas fa-calendar-day' style='color:grey'></i> &nbsp;".$row['title']."</span>
						<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['description']."<br>
						<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class='fas fa-user-tie' style='color:blue'></i> &nbsp;&nbsp;Organizer: ".$row['organizer_id']."</td>
					
					<td><i class='fas fa-map-marker-alt' style='color:grey'></i> &nbsp;<span class=''>".$row['location']."</span>
						<br><i class='fas fa-clock fa-sm' style='color:grey'></i> &nbsp;".$row['event_date']." <i class='fas fa-at' style='color:green'> </i> ".$row['event_time']."<br>
						<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='tblddline'>Deadline: ".$row['deadline']."</span></td>
					
					<td><a class='tblbtn2' href='".$row['promo_picture']."'>View Picture</a></td>";
					

			
				 echo "</tr>";
		}
	} 
?>

  </tbody>
</table>


<?php include "templates/footer.php"; ?>
