<?php
require_once "templates/header.php";

    function rev1($x){
      return strrev($x);
    }

    function rev2($x){
      $len = strlen($x);

        for ($i=0; $i < $len/2; $i++) {
          $temp = $x[$i];
          $x[$i] = $x[$len-($i+1)];
          $x[$len-($i+1)] = $temp;
        }

      return $x;
    }

function reverse(){
  if(isset($_POST['submit1']) || isset($_POST['submit2'])){
    $str = $_POST['string'];

      if(isset($_POST['submit1']))
        $newstr = rev1($str);
      elseif(isset($_POST['submit2']))
        $newstr = rev2($str);

      $message = "Reversed Version:  ".$newstr;

    echo "<script type='text/javascript'>
      alert('". $message ."');
    </script>";
  }
}
?>

    <header class="text-center">    <h1>Reverse the String</h1>    </header>

    <div id="container">
    <div id="menu">

    </div>

    <form action="" method="POST" class="form">
      <?= reverse(); ?>

      <div class="form-group">
      <h3>Enter your string: </h3> <br />

        <center>
          <input type="text" name="string" class="inputBox" placeholder="Your String" /> <br />

          <abbr title="Using inbuilt function strrev()">
            <button type="submit" name="submit1" style="float: left; margin-left: 25%; width: 23%">Reverse 1</button>
          </abbr>
          <abbr title="Using selfdefined function.">
            <button type="submit" name="submit2" style="float: left; margin-left: 1%; width: 23%">Reverse 2</button>
          </abbr>
        </center>
      </div>

    </form>
  </div>

<?php
require_once "templates/footer.php";
?>
