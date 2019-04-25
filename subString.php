<?php
require_once "templates/header.php";

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

<?php
require_once "templates/footer.php";
?>
