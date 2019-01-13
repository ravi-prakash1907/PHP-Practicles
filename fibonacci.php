<?php
  function fib($num){
    if($num == 0 || $num == 1)
      return $num;
    else {
      return fib($num-1)+fib($num-2);
    }
  }

function main(){
  if(isset($_POST['submit'])){
    $n = $_POST['num'];

    if($n < 0){
      $message = "Number can not be negative!!  Try again!";

            echo "<script type='text/javascript'>
              alert('". $message ."');
            </script>";
      }
    else {
      for ($i = 0; $i < $n; $i++){
        echo fib($i);
        if($i != $n-1)
         echo ", ";
       }
    }
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

    <header class="text-center">    <h1>Show Fibonacci Series</h1>    </header>

    <div id="menu">

    </div>
    
    <form action="" method="POST" class="form">

      <h3>Enter the number: </h3> <br />
      <div class="form-group">
        <center>
          <input type="number" name="num" class="inputBox" placeholder="Your Number" /> <br />
          <button type="submit" name="submit">Show</button> <br />
          <p>
              <?= main(); ?>
          </p>
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
