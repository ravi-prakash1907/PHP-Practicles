<?php
require_once "templates/header.php";

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

    <header class="text-center">
      <div class="menu">
        <nav>

        </nav>
      </div>

      <h1>Sort the Array</h1>
    </header>

    <div id="container">
    <div id="menu">

    </div>

    <form action="" method="POST" class="form">

      <div class="form-group">
      <h3>Enter three size of array: </h3> <br />
          <center>
            <?php
              echo '<input type="number" name="size" class="inputBox" placeholder="Size of array" /> <br />
                    <button type="submit" name="getSize">Next</button> <br />';

              main();
            ?>
          </center>
      </div>

    </form>
  </div>

<?php
require_once "templates/footer.php";
?>
