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

    for ($i=0; $i < $s; $i++) {
      echo $color[$i].", ";
    }
    echo "<br />";
    sort($color);   //in ascending order    Inbuilt Function

    echo '<ul>';
    for ($i=0; $i < $s; $i++) {
      echo '<li>'.$color[$i].'</li>';
    }
    echo '</ul>';
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
    <form action="" method="POST" class="form">

      <h3>Enter number of items: </h3> <br />
      <div class="form-group">
        <center>
          <?php
            echo '<input type="number" name="size" class="inputBox" placeholder="A positive no." /> <br />
                  <button type="submit" name="getSize">Next</button> <br />';
          ?>
          <p>
            <?=   main();   ?>
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
