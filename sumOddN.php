<?php
    function sum($n){
      $s = 0;

      for ($i=1; $i < 2*$n; $i+=2)
        $s += $i;

      return $s;
    }

function solution(){
  if(isset($_POST['submit'])){
    $n = $_POST['num'];
    $oddSum = sum($n);

    if($n > 0){
      $message = "Sum of first ". $n ." odd numbers is:  ". $oddSum;
    }
    else{
      $message = "Wrong output!! Enter a valuue greater then 0! ";
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

    <header class="text-center">    <h1>Odd Sum</h1>    </header>

    <div id="container">
    <div id="menu">

    </div>

    <form action="" method="POST" class="form">
      <?= solution(); ?>

      <div class="form-group">
      <h3>Enter the value of <b><em>n</em></b>: </h3> <br />
        <center>
          <input type="number" name="num" class="inputBox" placeholder="Your Number" />  <br />
          <button type="submit" name="submit">Check</button>  <br />
        </center>
      </div>

    </form>
  </div>

    <footer>
        &copy; <a href="https://linktr.ee/ravi_prakash1907" target="_blank">Ravi</a> | <?php echo date("Y"); ?>
    </footer>

  </body>

</html>
