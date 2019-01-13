<?php
  function even($n){
    $s = 0;
    for ($i=2; $i <= 2*$n; $i+=2){
      echo $i;
      if($i != 2*$n)
       echo ", ";}
  }

function solution(){
  if(isset($_POST['submit'])){
    $n = $_POST['num'];
    echo '<p align="left" style="margin-left: 5%;"><u>First '.$n.' even numbers:</u></p><br />';
    even($n);
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

    <header class="text-center">    <h1>Display initial N even numbers.</h1>    </header>
    <form action="" method="POST" class="form">

      <h3>Enter the value of <b><em>n</em></b>: </h3> <br />
      <div class="form-group">
        <center>
          <input type="number" name="num" class="inputBox" placeholder="A positive Number" /> <br />
          <button type="submit" name="submit">Check</button> <br />
        </center>

        <p>
          <br /> <?= solution(); ?> <br />
        </p>

      </div>

    </form>

    <footer>
      <p>
        &copy; <?php echo date("Y"); ?> | by <a href="https://linktr.ee/ravi_prakash1907" target="_blank">Ravi</a>
      </p>
    </footer>

  </body>

</html>
