<?php
require_once "templates/header.php";

function solution(){
  if(isset($_POST['submit'])){
    $n = $_POST['num'];
    $flag = 0;  // 0 is false

    for ($i = 2; $i < $n; $i++)
    {
     if($n%$i==0)
       break;
     else
       continue;
    }

    if($i==$n)
      $flag = 1;
    else
      $flag = 0;

    if($flag == 0)
      $message = "Oops!! Given number i.e. " . $n . " is not Prime.";
    else
      $message = "Yeah!! Given number i.e. " . $n . " is Prime.";

    echo "<script type='text/javascript'>
      alert('". $message ."');
    </script>";
  }
}
?>

    <header class="text-center">    <h1>Check for Prime</h1>    </header>

    <div id="container">
    <div id="menu">

    </div>

    <form action="" method="POST" class="form">
      <?= solution(); ?>

      <div class="form-group">
      <h3>Enter the number: </h3> <br />
        <center>
          <input type="number" name="num" class="inputBox" placeholder="Your Number" /> <br />
          <button type="submit" name="submit">Check</button> <br />
        </center>
      </div>

    </form>
  </div>

<?php
require_once "templates/footer.php";
?>
