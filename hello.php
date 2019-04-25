<?php
require_once "templates/header.php";

function solution(){
  if(isset($_POST['submit'])){
    $lang = $_POST['lang'];

    switch ($lang) {
      case '1':
        $message = "Hello!!";
        break;
      case '2':
        $message = "नमस्कार!!";
        break;
      case '3':
        $message = "Bonjour!!";
        break;
      case '4':
        $message = "Hallo!!";
        break;
    }

    echo "<script type='text/javascript'>
      alert('". $message ."');
    </script>";
  }
}
?>

    <header class="text-center">    <h1>Greetings!</h1>    </header>

    <div id="container">
    <div id="menu">

    </div>

    <form action="" method="POST" class="form">
      <?= solution(); ?>

      <div class="form-group">
      <h3>Choose your language: </h3> <br />
        <center>
          <select name="lang" class="inputBox">
           <optgroup label="Languages">
             <option value="1">English</option>
             <option value="2">हिंदी</option>
             <option value="3">Français</option>
             <option value="4">German</option>
           </optgroup>
         </select>
          <br /> <button type="submit" name="submit">Go</button> <br />
        </center>
      </div>

    </form>
  </div>

<?php
require_once "templates/footer.php";
?>
