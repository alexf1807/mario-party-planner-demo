<?php include "templates/header.php"; ?>

<div class="container">
<span class="titheader"><i class="far fa-calendar-plus"></i> &nbsp;&nbsp;&nbsp; New Event </span>
</div>

<div class="container cont1">
<form method="POST" action="routes/addevent.php">
  <div class="form-group">
    <input type="text" name="title" class="form-control" id="title" placeholder="Event Title" required>
  </div>
  <div class="form-group">
    <input type="text" name="description" class="form-control" id="description" placeholder="Description" required>
  </div>
  <div class="form-group">
    <input type="text" name="location" class="form-control" id="location" placeholder="Event Location" required>
  </div>
  <div class="form-group">
    <input type="text" name="promo_picture" class="form-control" id="promo_picture" placeholder="Promo Picture URL" required>
  </div>
   <hr>
  <div class="form-group" style="text-align: left">
    <label for="event_date">Select the date of the event ...</label>
    <input type="date" name="event_date" class="form-control" id="event_date" placeholder="Event Date">
  </div>
  <div class="form-group" style="text-align: left">
    <label for="event_time">Enter the start time of the event ...</label>
    <input type="time" name="event_time" class="form-control" id="event_time" placeholder="Event Time">
  </div>
  <div class="form-group" style="text-align: left">
    <label for="deadline">Select the deadline date for participant entries ...</label>
    <input type="date" name="deadline" class="form-control" id="deadline" placeholder="Deadline">
  </div>

  <?php echo "<input type='hidden' name='organizer_id' value='".$_SESSION["org_id"]."'>" ?>

  <button type="submit" class="sbmtbtn" title="Save"> <i class="fas fa-save fa-2x"></i> </button>
</form>
<br>
</div>
<br>
<?php include "templates/footer.php"; ?>