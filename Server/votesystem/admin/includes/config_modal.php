<!-- Config -->
<script>
//  var end = document.getElementById('end_date');
// console.log(end);
// var countDownDate = new Date("Jan 4, 2022 15:37:25").getTime();

// // Update the count down every 1 second
// var x = setInterval(function() {

//   // Get today's date and time
//   var now = new Date().getTime();
    
//   // Find the distance between now and the count down date
//   var distance = countDownDate - now;
    
//   // Time calculations for days, hours, minutes and seconds
//   var days = Math.floor(distance / (1000 * 60 * 60 * 24));
//   var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
//   var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
//   var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
//   // Output the result in an element with id="demo"
//   document.getElementById("demo").innerHTML = days + "d " + hours + "h "
//   + minutes + "m " + seconds + "s ";
    
//   // If the count down is over, write some text 
//   if (distance < 0) {
//     clearInterval(x);
//     document.getElementById("demo").innerHTML = "EXPIRED";
//   }
// }, 1000);
</script>
<? include 'conn.php'; ?>
<div class="modal fade" id="config">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 id="demo" class="modal-title"><b>Configure</b></h4>
      </div>
      <div class="modal-body">
        <div class="text-center">
          <?php
          $parse = parse_ini_file('config.ini', FALSE, INI_SCANNER_RAW);
          $title = $parse['election_title'];
          ?>
          <form class="form-horizontal" method="POST" action="config_save.php?return=<?php echo  htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <div class="form-group">
              <label for="title" class="col-sm-3 control-label">Election Title</label>

              <div class="col-sm-9">
                <input type="text" placeholder="Election Name" minlength="3" class="form-control" id="title" name="title" value="<?php echo $title; ?>" required>


              </div>
              <label for="date" class="col-sm-3 control-label" >Start Date-Time</label>
              <div class="col-sm-9">
                <!-- <input type="date" class="form-control" id="date" name="date" required> -->
               <input type="datetime-local"class="form-control" id="date" name="date" required>
              </div>
              <label for="end_date" min="2017-06-01T08:30" max="2017-06-30T16:30" class="col-sm-3 control-label" >End Date-Time</label>
              <div class="col-sm-9">
                <!-- <input type="date" class="form-control" id="date" name="date" required> -->
               <input type="datetime-local"class="form-control" id="end_date" name="end_date" required>
              </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
        <button type="submit" class="btn btn-success btn-flat" name="save"><i class="fa fa-save"></i> Schedule</button>



        </form>
      </div>
    </div>
  </div>
</div>