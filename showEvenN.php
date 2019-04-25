<?php
  function even($n){
    echo "<br /><br />";
    $s = 0;
    for ($i=2; $i <= 2*$n; $i+=2){
      echo $i;
      if($i != 2*$n)
       echo ", ";}
  }

function solution(){
  if(isset($_POST['submit'])){
    $n = $_POST['num'];
    echo '<p  size="3em" style="float: left; color: blue;"><u>(First '.$n.' Even numbers)</u></p><br /><br />';
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

    <div id="container">
    <div id="menu">

    </div>

    <form action="" method="POST" class="form">

      <div class="form-group">
      <h3>Enter the value of <b><em>n</em></b>: </h3> <br />
        <center>
          <input type="number" name="num" class="inputBox" placeholder="A positive Number" /> <br />
          <button type="submit" name="submit">Check</button> <br />
        </center>

        <p id="para">
          <br /> <?= solution(); ?> <br />
        </p>

      </div>

    </form>
  </div>

<?php
require_once "templates/footer.php";
?>
