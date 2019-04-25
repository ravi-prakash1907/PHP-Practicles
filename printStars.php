<?php
require_once "templates/header.php";

function solution(){
  if(isset($_POST['submit'])){
    $n = $_POST['num'];

    $message = "Rows can\'t be negative!!";
    if($n < 0){
      echo "<script type='text/javascript'>
        alert('". $message ."');
      </script>";
      exit();
    }else {
      echo "<font size='3em' style='float: left;'>".
           "(Here   rows = ".$n.
           ")</font><br /><br />";
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

    <header class="text-center">
      <h1>Print stars like:</h1>
      <p class="para">
        *         <br />
        **        <br />
        ***       <br />
        ****      <br />
      </p>
    </header>

    <div id="container">
    <div id="menu">

    </div>

    <form action="" method="POST" class="form">

      <div class="form-group">
      <h3>Enter the number of rows: </h3> <br />
        <center>
          <input type="number" name="num" class="inputBox" placeholder="Rows" /> <br />
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
