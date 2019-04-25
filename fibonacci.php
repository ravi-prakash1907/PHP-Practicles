<?php
require_once "templates/header.php";

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
    $message = "";

    if($n < 0){
      $message = "Number can not be negative!!  Try again!";

            echo "<script type='text/javascript'>
              alert('". $message ."');
            </script>";
      }
    else {
      echo '<p  size="3em" style="float: left; color: blue;">(First '.$n.' terms of <i>Fibonacii Series</i>)</p><br /><br />';
      echo "<br /><br />";
      for ($i = 0; $i < $n; $i++){

        $message = $message . fib($i);
        if($i != $n-1)
         $message = $message . ", ";
        if($i%7 == 0 && $i>0)
          $message = $message . "<br /><br />";
       }
       echo "<font>".$message."</font>";
    }
  }
}
?>

    <header class="text-center">    <h1>Show Fibonacci Series</h1>    </header>

    <div id="container">
    <div id="menu">

    </div>

    <form action="" method="POST" class="form">

      <div class="form-group">
      <h3>Enter the number: </h3> <br />
        <center>
          <input type="number" name="num" class="inputBox" placeholder="Your Number" /> <br />
          <button type="submit" name="submit">Show</button> <br />
          <p id="para">
              <?= main(); ?>
          </p>
        </center>
      </div>

    </form>
  </div>

<?php
require_once "templates/footer.php";
?>
