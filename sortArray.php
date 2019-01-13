<?php
  function createArr(){
    if(isset($_POST['getSize'])){
      $sz = $_POST['size'];
      for ($i=0; $i < $sz; $i++) {
        echo "<input type='number' name='name[]' class='inputBox' placeholder='A num please' />";
        echo "<br />";
      }
      echo '<button type="submit" name="submit">Sort</button>';
    }
  }

function main(){
  createArr();
  if(isset($_POST['submit'])){ //check if form was submitted
    $num = $_POST['name'];

          $s = sizeof($num); //size of array

    //sort $num by insertionSort()
    for ($i=1; $i < $s; $i++) {
      $key = $num[$i];
      for ($j=$i-1; $j >= 0 && $num[$j] > $key; $j--) {
        $num[$j+1] = $num[$j];
      }
      $num[$j+1] = $key;
    }

    $temp = "";
    foreach( $num as $v ) {
      $temp = $temp.$v.",";
    }

    echo "<script type='text/javascript'>
      alert('". $temp ."');
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

    <header class="text-center">    <h1>Sort the Array</h1>    </header>
    <form action="" method="POST" class="form">

      <h3>Enter three size of array: </h3> <br />
      <div class="form-group">
          <center>
            <?php
              echo '<input type="number" name="size" class="inputBox" placeholder="Size of array" /> <br />
                    <button type="submit" name="getSize">Next</button> <br />';

              main();
            ?>
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
