<?php
require_once "templates/header.php";

function largest(){
  if(isset($_POST['submit'])){ //check if form was submitted
    $uname = $_POST['username'];
    $pass = $_POST['password'];


    if($uname == "Admin" && $pass == "password"){
      $message = "Welcome Admin!";
    }
    elseif ($uname == "" && $pass == "") {
      $message = "All fields must be filled up!! Try next time.";
    }
    else{
      $message = "Either Username or Password is incurroct! ";
    }

    echo "<script type='text/javascript'>
      alert('". $message ."');
    </script>";
  }
}
?>

    <header class="text-center">    <h1>Login</h1>    </header>

    <div id="container">
    <div id="menu">

    </div>

    <form action="" method="POST" class="form">
      <?= largest(); ?>

      <div class="form-group">
      <h3>Enter your details: </h3> <br />
        <center>
          <input type="text" name="username" class="inputBox" placeholder="Username or E-Mail" /> <br />
          <input type="password" name="password" class="inputBox" placeholder="Your Password" /> <br />
          <button type="submit" name="submit">Login</button> <br />

          <!--     Additional     
          <a href="signup.php">Sign Up</a><br />
          -->

        </center>
      </div>

    </form>
  </div>

<?php
require_once "templates/footer.php";
?>
