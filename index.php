<?php include "templates/header.php"; ?>

<div class="homehrdbx d-none d-lg-block">
	<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Cartoon_cloud.svg/1280px-Cartoon_cloud.svg.png" class="cloudleft">
	<span class="homehdrttl" style="color:#55C94E">M</span>
	<span class="homehdrttl" style="color:#1BAAD6">A</span>
	<span class="homehdrttl" style="color:#F9D012">R</span>
	<span class="homehdrttl" style="color:#DD1925">I</span>
	<span class="homehdrttl" style="color:#55C94E">O </span>
	<span class="homehdrttl" style="color:#55C94E"> P</span>
	<span class="homehdrttl" style="color:#1BAAD6">A</span>
	<span class="homehdrttl" style="color:#F9D012">R</span>
	<span class="homehdrttl" style="color:#DD1925">T</span>
	<span class="homehdrttl" style="color:#55C94E">Y </span>
	<span class="homehdrttl" style="color:#DD1925"> P</span>
	<span class="homehdrttl" style="color:#55C94E">L</span>
	<span class="homehdrttl" style="color:#1BAAD6">A</span>
	<span class="homehdrttl" style="color:#F9D012">N</span>
	<span class="homehdrttl" style="color:#DD1925">N</span>
	<span class="homehdrttl" style="color:#55C94E">E</span>
	<span class="homehdrttl" style="color:#55C94E">R</span>
	<img src="http://pngimg.com/uploads/mario/mario_PNG53.png" class="homemario">
	<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Cartoon_cloud.svg/1280px-Cartoon_cloud.svg.png" class="cloudright">
	<br>
</div>


<?php if(isset($_GET['Message'])){
    echo "<div width='100%'><div style='background: #e4ffd3; font-family: times new roman; border-radius:10px; margin:10px 50px; text-align:center; padding:10px; width=50vw'><h5>".$_GET['Message']."</h5></div></div>";
	} ?>


<div class="homehrdbx d-lg-none">
	<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Cartoon_cloud.svg/1280px-Cartoon_cloud.svg.png" class="cloudleft2">
	<img src="http://pngimg.com/uploads/mario/mario_PNG53.png" class="homemario2">
	<span class="homehdrttl2" style="color:#55C94E">M</span>
	<span class="homehdrttl2" style="color:#1BAAD6">A</span>
	<span class="homehdrttl2" style="color:#F9D012">R</span>
	<span class="homehdrttl2" style="color:#DD1925">I</span>
	<span class="homehdrttl2" style="color:#55C94E">O </span>
	<span class="homehdrttl2" style="color:#55C94E"> P</span>
	<span class="homehdrttl2" style="color:#1BAAD6">A</span>
	<span class="homehdrttl2" style="color:#F9D012">R</span>
	<span class="homehdrttl2" style="color:#DD1925">T</span>
	<span class="homehdrttl2" style="color:#55C94E">Y </span><br>
	<span class="homehdrttl2" style="color:#DD1925;margin-left:20px;"> P</span>
	<span class="homehdrttl2" style="color:#55C94E">L</span>
	<span class="homehdrttl2" style="color:#1BAAD6">A</span>
	<span class="homehdrttl2" style="color:#F9D012">N</span>
	<span class="homehdrttl2" style="color:#DD1925">N</span>
	<span class="homehdrttl2" style="color:#55C94E">E</span>
	<span class="homehdrttl2" style="color:#55C94E">R</span>
	<br>
</div>


<div class="barline"></div>
<div class="container cont1">
<br>
	<div class="container">
		<div class="row">
			
			<?php
				$sql = "SELECT * FROM my_event";
				$events = mysqli_query($conn, $sql);
				$resultcheck = mysqli_num_rows($events);
				
				if($resultcheck > 0) {
					while ($row = mysqli_fetch_assoc($events)) {
						echo "<div class='col-md-3 mb-3'>
								<div class='card h-70 eventcard'>
									<img class='card-img-top' src='".$row['promo_picture']."'>
									<div class='card-body'>
										<h4 class='card-title' style='height:50px'>
										".$row['title']."
										</h4>
										<p class='card-text carddesc'>
										".substr($row['description'], 0, 60)." ...
										<br>
										
										</p>  
									</div>
									<div class='card-footer'>
											<div class='btn-group'>
												<form method='get' action='event.php'>
													<input type='hidden' name='event' value=".$row['id'].">
													<button type='submit' class='cardsbmtbtn'>Check It Out!</button>
												</form>
											</div>
									</div>
								</div> 
							</div>";
					}
				}
			?>		
			
		</div>
	</div>
	<br>
</div>

<br>
<br>
<br>
<br>
<br>
<br>

<?php include "templates/footer.php"; ?>
