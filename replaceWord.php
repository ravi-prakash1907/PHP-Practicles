<?php
    function str_replace_first($from, $to, $content){
        $from = '/'.preg_quote($from, '/').'/';
        return preg_replace($from, $to, $content, 1);
    }

function main(){
  if(isset($_POST['check'])){
    $str = $_POST['string'];

    //$str = str_replace("the","That",$str);      // To replace all the occuances
    $str = str_replace_first("the","That",$str);
    $message = "New string: ".$str;

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
      <h3>(It tells if you have a string only contaning <i>letters</i> in LOWER CASE charectors.) </h3> <br />
    </header>
    <form action="" method="POST" class="form">
      <?= main(); ?>

      <h3>Enter your string: </h3> <br />
      <div class="form-group">
        <center>
          <input type="text" name="string" class="inputBox" placeholder="Your String" /> <br />
          <button type="submit" name="check">Check</button> <br />
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
