<?php
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

<!Doctype html>
<html>

  <head>
  	<meta charset="utf-8" />
    <title>PHP Practicals</title>
    <link href="css/stylesheet1.css" rel="stylesheet" />
  </head>

  <body>

    <header class="text-center">    <h1>Greetings!</h1>    </header>
    <form action="" method="POST" class="form">
      <?= solution(); ?>

      <h3>Choose your language: </h3> <br />
      <div class="form-group">
        <center>
          <select name="lang">
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

    <footer>
      <p>
        &copy; <?php echo date("Y"); ?> | by <a href="https://linktr.ee/ravi_prakash1907" target="_blank">Ravi</a>
      </p>
    </footer>

  </body>

</html>
