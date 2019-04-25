<?php
require_once "templates/header.php";

function trimW(){
  if(isset($_POST['check'])){
    $str = $_POST['string'];

    $str = str_replace("\t","",$str);
    $str = str_replace(" ","",$str);

    $message = "New String:  " .$str;

    echo "<script type='text/javascript'>
      alert('". $message ."');
    </script>";
  }
}
?>

    <header class="text-center"> <h1>Remove all Whitespaces!</h1> </header>

    <div id="container">
    <div id="menu">

    </div>

    <form action="" method="POST" class="form">
      <?= trimW(); ?>

      <div class="form-group">
      <h3>Enter your string: </h3> <br />
        <center>
          <input type="text" name="string" class="inputBox" placeholder="Your String" />  <br />
          <button type="submit" name="check">Trim Whitespaces</button>  <br />
        </center>
      </div>

    </form>
  </div>

<?php
require_once "templates/footer.php";
?>
