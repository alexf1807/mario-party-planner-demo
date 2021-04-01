<?php include "templates/header.php"; ?>
<br>
<br>

<div class="container cont1">
<img class="homemario" src="images/party.png" width="300px">
<br>
<h2 style="font-family: 'Dancing Script', cursive;">Login to the Mario Party Planner!</h3>
<br>
  <center>
	<div class="row">
		<form action="routes/login.php" method="post" style="max-width:400px; margin:auto;">
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" id="email" name="email" class="form-control" value="mario@goldengreats.com">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" id="password" name="password" class="form-control" value="password">
			</div>
			<br>
			<button type="submit" class="btn btn-submit btn-outline-dark">Sign in</button>
		</form>
	</div>
  </center>
<br>
<br>
</div>
<br>
<br>
<br>
<?php include "templates/footer.php"; ?>