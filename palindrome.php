<?php
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

<!Doctype html>
<html>

  <head>
  	<meta charset="utf-8" />
    <title>PHP Practicals</title>
    <link href="css/stylesheet1.css" rel="stylesheet" />
  </head>

  <body>

    <header class="text-center">    <h1>Check for Pelindrome!</h1>    </header>

    <div id="menu">

    </div>
    
    <form action="" method="POST" class="form">
      <?= main(); ?>

      <h3>Enter your string: </h3> <br />
      <div class="form-group">
        <center>
          <input type="text" name="string" class="inputBox" placeholder="Your String" /> <br />
          <button type="submit" name="check">Check</button> <br />
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
