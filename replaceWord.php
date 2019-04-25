<?php
require_once "templates/header.php";

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

    <header class="text-center">
      <h1>Replace <em style="text-transform: lowercase">'the'</em> word!</h1> <br />
      <p id="sub-heading">(It replaces first accurance of <i>'the'</i> with <i>'That'</i>.) </p> <br />
    </header>

    <div id="container">
    <div id="menu">

    </div>

    <form action="" method="POST" class="form">
      <?= main(); ?>

      <div class="form-group">
      <h3>Enter your string: </h3> <br />
        <center>
          <input type="text" name="string" class="inputBox" placeholder="Your String" /> <br />
          <button type="submit" name="check">Check</button> <br />
        </center>
      </div>

    </form>
  </div>

<?php
require_once "templates/footer.php";
?>
