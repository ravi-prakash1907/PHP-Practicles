<!Doctype html>
<html>
  <head>
  	<meta charset="utf-8" />
    <title>PHP Practicals</title>
    <link href="css/stylesheet1.css" rel="stylesheet" />
  </head>

  <body>

    <?php
    function largest(){
    if(isset($_POST['submit'])){ //check if form was submitted
      $n1 = $_POST['num1'];
      $n2 = $_POST['num2'];
      $n3 = $_POST['num3'];
      $largest = $n1;
      $temp;

      if($n2 > $largest)
        $largest = $n2;
      if($n3 > $largest)
        $largest = $n3;

      $message = "Largest number entered is: ".$largest;
      if($n1 == $n2 && $n1 == $n3)
      {
        $temp = "All numbers are equal!";
        $message = $temp;
      }
      elseif (($n1 == $n2 && $n3 < $n1) || ($n1 == $n3 && $n2 < $n1) ||($n3 == $n2 && $n3 > $n1)) {
        $temp = "This number is entered twice.";
        $message = $message."<br />".$temp;
      }

      echo "<script type='text/javascript'>
        alert('". $message ."');
      </script>";
    }
  }
    ?>
<pre>
    <header class="text-center">    <h1>Get Largest</h1>    </header>
    <form action="" method="POST" class="form">
      <?= largest(); ?>
      <h3>Enter three numbers: </h3>
      <div class="form-group">
        <center>
<input type="number" name="num1" class="inputBox" placeholder="First Number" />
<input type="number" name="num2" class="inputBox" placeholder="Second Number" />
<input type="number" name="num3" class="inputBox" placeholder="Third Number" />
        </center>
<button type="submit" name="submit">Check Largest</button>
      </div>
    </form>
  </pre>
  </body>
</html>
