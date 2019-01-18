<?php
  function createArr(){
    if(isset($_POST['getSize'])){
      $sz = $_POST['size'];
      for ($i=0; $i < $sz; $i++) {
        echo "<input type='text' name='color[]' class='inputBox' placeholder='Item ".($i+1)."' />";
        echo "<br />";
      }
      echo '<button type="submit" name="submit">Sort</button> <br />';
    }
  }

function main(){
  createArr();
  if(isset($_POST['submit'])){ //check if form was submitted
    $color = $_POST['color'];
    $s = sizeof($color); //size of array
    $message = "";

    for ($i=0; $i < $s; $i++) {
      $message = $message.$color[$i];
      if($i!=$s-1)
        $message = $message.", ";
    }

    echo "<font size='4em' style='width: -moz-max-content; float: left;'>". $message. "</font>";

    sort($color);   //in ascending order    Inbuilt Function

    $message = "";

    $message = $message . '<ul style="padding-left: 30%;">';
    for ($i=0; $i < $s; $i++) {
      $message = $message . '<li>'.$color[$i].'</li>';
    }
    $message = $message . '</ul>';

    echo $message;
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

    <header class="text-center">    <h1>Sort the Array</h1>    </header> <br />

    <div id="container">
    <div id="menu">

    </div>

    <form action="" method="POST" class="form">

      <div class="form-group">
      <h3>Enter number of items: </h3> <br />
        <center>
          <?php
            echo '<input type="number" name="size" class="inputBox" placeholder="A positive no." /> <br />
                  <button type="submit" name="getSize">Next</button> <br />';
          ?>
          <p id="para">
            <?=   main();   ?>
          </p>
        </center>
      </div>

    </form>
  </div>

    <footer>
        &copy; <a href="https://linktr.ee/ravi_prakash1907" target="_blank">Ravi</a> | <?php echo date("Y"); ?>
    </footer>

  </body>

</html>
