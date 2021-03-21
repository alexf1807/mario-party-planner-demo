<?php include "templates/header.php"; ?>

<div class="container">
<span class="titheader"><i class="fas fa-user-plus"></i> &nbsp;&nbsp;&nbsp; New Organizer </span>
</div>
<div class="container cont1">
<form method="POST" action="routes/addorganizer.php">
  <div class="form-group">
    <input type="text" name="first_name" class="form-control" id="first_name" placeholder="First Name" required>
  </div>
  <div class="form-group">
    <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Last Name" required>
  </div>
    <div class="form-group">
    <input type="text" name="organization" class="form-control" id="organization" placeholder="Organization" required>
  </div>
  <hr>
  <div class="form-group">
    <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone Number" required>
  </div>
  <div class="form-group">
    <input type="email" name="email" class="form-control" id="email" placeholder="Email Address" required>
  </div>
  <div class="form-group">
    <input type="text" name="address" class="form-control" id="address" placeholder="Address" required>
  </div>
  <div class="form-group">
    <input type="text" name="img_url" class="form-control" id="img_url" placeholder="Profile Image URL" required>
  </div>
  <hr>
  <div class="form-group">
    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
  </div>

  <button type="submit" class="sbmtbtn" title="Save"> <i class="fas fa-save fa-2x"></i> </button>
</form>
<br>
</div>
<br>
<?php include "templates/footer.php"; ?>