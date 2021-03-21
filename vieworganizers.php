<?php include "templates/header.php"; ?>

<div class="container">
<span class="titheader"><i class="fas fa-user-tie"></i> &nbsp;&nbsp;&nbsp; All Organizers </span>
</div>
<table class="table table-hover table-dark">
  <thead>
    <tr>
	 
      <th scope="col" class="tblth" style="padding-left:110px">Name</th>
      <th scope="col" class="tblth">Orgnization</th>
      <th scope="col" class="tblth">Contact</th>
      <th scope="col" class="tblth"></th>

    </tr>
  </thead>
  <tbody>

<?php
	$sql = "SELECT * FROM organizer";
	$users = mysqli_query($conn, $sql);
	$resultcheck = mysqli_num_rows($users);
	
	if($resultcheck > 0) {
		while ($row = mysqli_fetch_assoc($users)) {
			echo "<tr>
				
					<td><img class='profthumb' src=".$row['img_url']."><span class='tblpersname'>".$row['first_name']." ".$row['last_name']."</span></td>
					<td><span class=''>".$row['organization']."</span><br><br><i class='fas fa-map-marked-alt' style='color:green'></i>  &nbsp;".$row['address']."</td>
					<td><i class='fas fa-phone' style='color:DarkGoldenRod'></i>  &nbsp".$row['phone']."<br><br>
					<i class='far fa-envelope' style='color:orange'></i>  &nbsp".$row['email']."</td>";
					
					if ($row['id'] != 22){
						echo "<td>
								<form action='routes/deleteorganizer.php' method='post' onsubmit='return confirm(\"Are you sure you want to delete this organizer?\");'>
									<input type='hidden' name='org_id' value='".$row['id']."'>
									<button class='tblbtn2'> &nbsp;Delete&nbsp; </button>
								</form>
								<br>
				
							</td>";
					} else {
						echo "<td></td>";
					}	
				 echo "</tr>";
		}
	}
?>

  </tbody>
</table>




<?php include "templates/footer.php"; ?>