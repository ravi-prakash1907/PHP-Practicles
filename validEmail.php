<?php
require_once "templates/header.php";

function solution(){
  if(isset($_POST['submit'])){
    $email = $_POST['mail'];

    define("EMAIL",'/\w*\@\w*\.\w*/');
    if(isset($_POST['submit'])) {
        if(isset($email)){
            if(preg_match(EMAIL, $email)){
                $message =  $email . ' is a Valid Email';
            } else {
                $message =  $email . ' is an Invalid Email';
            }
        } else {
            die("DENIED");
        }
    }

    echo "<script type='text/javascript'>
      alert('". $message ."');
    </script>";
  }
}
?>

    <header class="text-center">    <h1>Validate an E-Mail</h1>    </header>

    <div id="container">
    <div id="menu">

    </div>

    <form action="" method="POST" class="form">
      <?= solution(); ?>

      <div class="form-group">
      <h3>Enter the EMAIL: </h3> <br />
        <center>
          <!--  type="email"  also validates it  -->
          <input type="text" name="mail" class="inputBox" placeholder="Your String" /> <br />
          <button type="submit" name="submit">Check</button> <br />
        </center>
      </div>

    </form>
  </div>

<?php
require_once "templates/footer.php";
?>
