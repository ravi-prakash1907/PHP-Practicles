<?php
require_once "templates/header.php";

  function palindrome($x){

    $str = $x;
    $len = strlen($x);

      for ($i=0; $i < $len/2; $i++) {
        $temp = $x[$i];
        $x[$i] = $x[$len-($i+1)];
        $x[$len-($i+1)] = $temp;
      }

      if($x == $str)
        return 1;
      else
        return 0;
  }

function main(){
  if(isset($_POST['check'])){
    $str = $_POST['string'];
    $flag = palindrome($str);

    $message = ($flag != 0) ? "Entered string is palindrome!" : "Entered string is NOT palindrome!";

    echo "<script type='text/javascript'>
      alert('". $message ."');
    </script>";
  }
}
?>

    <header class="text-center">    <h1>Check for Pelindrome!</h1>    </header>

    <div id="container">
    <div id="menu">

    </div>

    <form action="" method="POST" class="form">
      <?= main(); ?>

      <div class="form-group">
      <h3>Enter your string: </h3> <br />
        <center>
          <input type="text" name="string" class="inputBox" placeholder="Your String" /> <br />
          <button type="submit" name="check">Check</button> <br />
        </center>
      </div>

    </form>
  </div>

<?php
require_once "templates/footer.php";
?>
