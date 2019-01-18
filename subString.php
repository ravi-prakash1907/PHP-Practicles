<?php
function main(){
  if(isset($_POST['submit'])){
    $strmain = $_POST['container'];
    $substr = $_POST['content'];

    if (strpos($strmain,$substr) !== false)
      $message =  "Given sub-string  \'". $substr ."\'  is present.";
    else
      $message =  "Given sub-string  \'". $substr ."\'  is abscent.";

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

    <header class="text-center">    <h1>Check for Sub-String</h1>    </header>

    <div id="container">
    <div id="menu">

    </div>

    <form action="" method="POST" class="form">
      <?= main(); ?>

      <div class="form-group">
      <h3>Enter the strings: </h3> <br />
        <center>
          <input type="text" name="container" class="inputBox" placeholder="Main String" />  <br />
          <input type="text" name="content" class="inputBox" placeholder="Sub-String (to check if it exists)" />  <br />
          <button type="submit" name="submit">Check</button>  <br />
        </center>
      </div>

    </form>
  </div>

    <footer>
        &copy; <a href="https://linktr.ee/ravi_prakash1907" target="_blank">Ravi</a> | <?php echo date("Y"); ?>
    </footer>

  </body>

</html>
