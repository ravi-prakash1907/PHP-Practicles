<?php
function solution(){
  if(isset($_POST['submit'])){
    $email = $_POST['mail'];


    if (filter_var($email, FILTER_VALIDATE_EMAIL))
         $message =  $email . " = Valid.";
    else
        $message =  $email . " = Invalid.";

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

    <header class="text-center">    <h1>Validate an E-Mail</h1>    </header>

    <div id="menu">

    </div>
    
    <form action="" method="POST" class="form">
      <?= solution(); ?>

      <h3>Enter the number: </h3> <br />
      <div class="form-group">
        <center>
          <!--  type="email"  also validates it  -->
          <input type="text" name="mail" class="inputBox" placeholder="Your Number" /> <br />
          <button type="submit" name="submit">Check</button> <br />
        </center>
      </div>

    </form>

    <footer>
      <p>
        &copy; <?php echo date("Y"); ?> | by <a href="https://linktr.ee/ravi_prakash1907" target="_blank">Ravi</a>
      </p>
    </footer>

  </body>

</html>
