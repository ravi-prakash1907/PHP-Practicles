<!Doctype html>
<html>
  <head>
  	<meta charset="utf-8" />
    <title>PHP Practicals</title>
    <link href="css/stylesheet1.css" rel="stylesheet" />
  </head>

  <body>

    <?php
    function fact(){
    if(isset($_POST['submit'])){
      $num = $_POST['num'];
      $fact = 1;

      if($num < 0)
        $message = "Number can not be negative!!  Try again!";
      elseif ($num == 0) {
        $message = "0! = ".$fact;
      }
      else {
        for ($i = $num; $i > 0; $i--)
            $fact *= $i;

        $message = $num."! = ".$fact;
      }



      echo "<script type='text/javascript'>
        alert('". $message ."');
      </script>";
    }
  }
    ?>
<pre>
    <header class="text-center">    <h1>Get Factorial</h1>    </header>
    <form action="" method="POST" class="form">
      <?= fact(); ?>
      <h3>Enter the number: </h3>
      <div class="form-group">
        <center>
<input type="number" name="num" class="inputBox" placeholder="Your Number" />
        </center>
<button type="submit" name="submit">Find Now</button>
      </div>
    </form>
  </pre>
  </body>
</html>
