<?php
function main(){
  if(isset($_POST['submit'])){
    $dob = $_POST['dob'];
    $dob = date('d-m-Y', strtotime($dob));
    $now = date("d-m-Y");

    $birthdateArray = date_parse_from_format("d-m-Y", $dob);
    $todayArray = date_parse_from_format("d-m-Y", $now);

    $birthdate = date_create($todayArray["year"] . "-" . $birthdateArray["month"] . "-" . $birthdateArray["day"]);
    $today = date_create($now);

    $diff = date_diff($today, $birthdate);
    $daysToGo =  $diff->format("%R%a days");

    if($daysToGo == 0){
      $message = "It\'s today, itself!! Happy B\'day to you, Dear!!";
    }
    elseif ($daysToGo < 0) {
      $leap = date('L', strtotime($now));
      @$daysToGo = $daysToGo + ($leap ? 366 : 365);
      $message = "Your birthday in " . $daysToGo;
    }
    else {
            $message = "Your birthday in " . $daysToGo;
    }

    echo "<script type='text/javascript'>
      alert('". $message ."');
    </script>";
  }
}
?>

<!Doctype html>
<html>

  <head>
  	<meta charset="utf-8" />
    <title>PHP Practicals</title>
    <link href="css/stylesheet1.css" rel="stylesheet" />
  </head>

  <body>

    <header class="text-center">   <h1>Birthday Countdown</h1>    </header>

    <div id="container">
    <div id="menu">

    </div>

    <form action="" method="POST" class="form">
      <?= main(); ?>

      <div class="form-group">
      <h3>Enter your date of birth: </h3> <br />
        <center>
          <input type="date" name="dob" class="inputBox" placeholder="Enter DOB" /> <br />
          <button type="submit" name="submit">Check</button> <br />
        </center>
      </div>

    </form>
  </div>

    <footer>
        &copy; <a href="https://linktr.ee/ravi_prakash1907" target="_blank">Ravi</a> | <?php echo date("Y"); ?>
    </footer>

  </body>

</html>
