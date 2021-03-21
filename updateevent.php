<?php include "templates/header.php"; ?>

<div class="container">
<span class="titheader"><i class="far fa-calendar-plus"></i> &nbsp;&nbsp;&nbsp; Update Event </span>
</div>

<div class="container cont1">
    <?php
        $evt_id=$_POST['evt_id'];
        
        $sql = "SELECT * FROM my_event WHERE id = ".$evt_id;
        $events = mysqli_query($conn, $sql);
        $resultcheck = mysqli_num_rows($events);
        
        if($resultcheck > 0) {
            while ($row = mysqli_fetch_assoc($events)) {
              echo "
                <form method='POST' action='routes/updateevent.php' onsubmit='return confirm(\"Are you sure you want to save these details?\");'>
                  <div class='form-group'>
                    <input type='text' name='title' class='form-control' id='title' placeholder='Event Title' value='".$row['title']."' required>
                  </div>
                  <div class='form-group'>
                    <input type='text' name='description' class='form-control' id='description' placeholder='Description' value='".$row['description']."' required>
                  </div>
                  <div class='form-group'>
                    <input type='text' name='location' class='form-control' id='location' placeholder='Event Location' value='".$row['location']."' required>
                  </div>
                  <div class='form-group'>
                    <input type='text' name='promo_picture' class='form-control' id='promo_picture' placeholder='Promo Picture URL' value='".$row['promo_picture']."' required>
                  </div>
                  <hr>
                  <div class='form-group' style='text-align: left'>
                    <label for='event_date'>Select the date of the event ...</label>
                    <input type='date' name='event_date' class='form-control' id='event_date' placeholder='Event Date' value='".$row['event_date']."' required>
                  </div>
                  <div class='form-group' style='text-align: left'>
                    <label for='event_time'>Enter the start time of the event ...</label>
                    <input type='time' name='event_time' class='form-control' id='event_time' placeholder='Event Time' value='".$row['event_time']."'>
                  </div>
                  <div class='form-group' style='text-align: left'>
                    <label for='deadline'>Select the deadline date for participant entries ...</label>
                    <input type='date' name='deadline' class='form-control' id='deadline' placeholder='Deadline' value='".$row['deadline']."' required>
                  </div>

                  <input type='hidden' name='evt_id'  value='".$row['id']."' >
                  <input type='hidden' name='organizer_id'  value='".$row['organizer_id']."' >

                  <button type='submit' class='sbmtbtn' title='Save'> <i class='fas fa-save fa-2x'></i> </button>
                </form>";
            }
        }
    ?>
<br>
</div>
<br>
<?php include "templates/footer.php"; ?>