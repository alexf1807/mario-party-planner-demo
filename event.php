<?php include "templates/header.php"; 
	$eventId = $_GET['event'];
	$sql = "SELECT * FROM my_event LEFT JOIN organizer ON my_event.organizer_id = organizer.id WHERE my_event.id = ".$eventId;
	$events = mysqli_query($conn, $sql);
	$resultcheck = mysqli_num_rows($events);
	
	if($resultcheck > 0) {
		while ($row = mysqli_fetch_assoc($events)) {
			echo '		
				<div class="container cont1" style="text-align:left">
					<h3>
						<span class="eventhdrttl" style="color:#55C94E">W</span>
						<span class="eventhdrttl" style="color:#1BAAD6">E</span>
						<span class="eventhdrttl" style="color:#F9D012">L</span>
						<span class="eventhdrttl" style="color:#DD1925">C</span>
						<span class="eventhdrttl" style="color:#55C94E">O</span>
						<span class="eventhdrttl" style="color:#1BAAD6">M</span>
						<span class="eventhdrttl" style="color:#55C94E">E </span>
						<span class="eventhdrttl" style="color:#1BAAD6"> T</span>
						<span class="eventhdrttl" style="color:#F9D012">O </span>
						<span class="eventhdrttl" style="color:#DD1925"> .</span>
						<span class="eventhdrttl" style="color:#55C94E">.</span>
						<span class="eventhdrttl" style="color:#F9D012">.</span>
						<span class="tblorgname"><em>Hosted by '.$row["first_name"].' '.$row["last_name"].' </em> &nbsp;<img class="profthumb" src='.$row["img_url"].'></span>
					</h3>
					
					<div class="container">
						<div class="row">
							
							<div class="col" align="center">
								
									<h2><span class="eventtitle">'.$row["title"].' </span> </h2>
								<br>
								<img src='.$row["promo_picture"].' alt='.$row['title'].' class="img-responsive thumbnail4img">
								<br>
								<br>
											
							</div>
						</div>
					</div>		   
					<div class="container">
						<div class="row">
							<div class="col">
									'.$row["description"].'
							</div>
						</div>
						<div class="row mt-4 mb-4">
							<div class="col-md-4">
									<i class="fas fa-map-marker-alt" style="color:orange; text-shadow:1px 1px 1px black;"></i><span class=""><strong> '.$row["location"].'</strong></span>
							</div>
							<div class="col-md-4">
									<i class="fas fa-clock fa-sm" style="color:green"></i> &nbsp;<span class="">';
								$date = date_create($row["event_date"]);
								$date = date_format($date,'D F j, Y');
						echo	$date.'	<strong>@</strong> '.$row["event_time"].'</span><br>
							</div>
							<div class="col-md-4">
									<span class="tblddline tblorgname"><strong>Deadline:</strong> '.$row["deadline"].'</span>
							</div>
						</div>
					</div>
					<div class="container cont2">
						<h5>Want to attend <strong>'.$row["title"].'?</strong></h5>
						<br>
						<form method="POST" action="routes/addparticipant.php">
						<div class="form-group">
							<input type="text" name="first_name" class="form-control" id="first_name" placeholder="First Name" required>
						</div>
						<div class="form-group">
							<input type="text" name="last_name" class="form-control" id="last_name" placeholder="Last Name" required>
						</div>
						<hr>
						<div class="form-group">
							<input type="email" name="email" class="form-control" id="email" placeholder="E-mail Address" required>
						</div>
						<div class="form-group">
							<input type="text" name="phone" class="form-control" id="phone" placeholder="Phone Number" required>
						</div>
						<div class="form-group">
							<input type="hidden" value='.rand().' name="reference_code" id="reference_code" required>
						</div>
						<hr>
						<div class="form-group">
							<input type="hidden" name="my_event_id" value='.$eventId.'>
						</div>

						<button type="submit" class="btn btn-outline-dark" title="">Confirm!</button>
						</form>
						<br>
					</div>
				</div>';
		}
	}
	?>		

	<br>
	<br>
	<br>

</div>


<?php include "templates/footer.php"; ?>