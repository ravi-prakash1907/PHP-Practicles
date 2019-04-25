<?php
function fact(){
  if(isset($_POST['submit'])){
    $num = $_POST['num'];
    $fact = 1;

    if($num < 0)
      $message = "Number can not be negative!!  Try again!";
    elseif ($num == 0) {
      $message = "0! = ".$fact;
    }
    else {
      for ($i = $num; $i > 0; $i--)
          $fact *= $i;

      $message = $num."! = ".$fact;
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

    <header class="text-center">    <h1>Get Factorial</h1>    </header>

    <div id="container">
    <div id="menu">

    </div>

    <form action="" method="POST" class="form">
      <?= fact(); ?>

      <div class="form-group">
      <h3>Enter the number: </h3> <br />
        <center>
          <input type="number" name="num" class="inputBox" placeholder="Your Number" /> <br />
          <button type="submit" name="submit">Find Now</button> <br />
        </center>
      </div>

    </form>
  </div>

<?php
require_once "templates/footer.php";
?>
