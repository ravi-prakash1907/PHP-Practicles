<?php
  function isLower($str){
    $flag = 1;

    for ($i=0; $i < strlen($str); $i++) {
      $x = $str[$i];

      if(ctype_alpha($x)){
        if(ctype_lower($x))
          continue;
        else{
          $flag = 0;
          break;
        }
      }
    }
  return $flag;
  }

function main(){
  if(isset($_POST['check'])){
    $str = $_POST['string'];
    $flag = isLower($str);

    $message = ($flag != 0) ? "Complete string is in lower case!" : "Complete string is NOT in lower case!";

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

    <header class="text-center">
        <h1>Check for <em>lower case</em>!</h1> <br />
        <h3>(It tells if you have a string only contaning <i>letters</i> in LOWER CASE charectors.) </h3>
    </header>

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

    <footer>
        &copy; <a href="https://linktr.ee/ravi_prakash1907" target="_blank">Ravi</a> | <?php echo date("Y"); ?>
    </footer>

  </body>

</html>
