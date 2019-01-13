<?php
function solution(){
  if(isset($_POST['submit'])){
    $n = $_POST['num'];

    $message = "Rows can\'t be negative!!";
    if($n < 0){
      echo "<script type='text/javascript'>
        alert('". $message ."');
      </script>";
      exit();
    }

    for ($i = 1; $i <= $n; $i++){
      for ($j=0; $j < $i; $j++){
        print("*");
      }
      echo "<br>";
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

    <header class="text-center">
      <h1>Print stars like:</h1>
      <p>
        *         <br />
        **        <br />
        ***       <br />
        ****      <br />
      </p>
    </header>

    <div id="menu">

    </div>
    
    <form action="" method="POST" class="form">

      <h3>Enter the number of rows: </h3> <br />
      <div class="form-group">
        <center>
          <input type="number" name="num" class="inputBox" placeholder="Rows" /> <br />
          <button type="submit" name="submit">Check</button> <br />
        </center>
      </div>

    </form>

    <?= solution(); ?>


    <footer>
      <p>
        &copy; <?php echo date("Y"); ?> | by <a href="https://linktr.ee/ravi_prakash1907" target="_blank">Ravi</a>
      </p>
    </footer>

  </body>
</html>
