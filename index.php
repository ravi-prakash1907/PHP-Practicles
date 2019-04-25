<?php
require_once "templates/indexHeader.php";

if(isset($_POST['submit'])){
  $page = $_POST['practical'];

  $link = "http://localhost/GitHub/PHP-Practicles/" . $page;

  header("Location:".$page);
}
?>

  <div id="container">
    <form action="" method="POST" class="form">
      <div class="form-group">
      <h3>Browse any practical: </h3> <br />
        <center>
          <select name="practical" class="inputBox">
           <optgroup label="Languages">
           <option value="largestNum.php">Practical1</option>
           <option value="factorial.php">Practical2</option>
           <option value="prime.php">Practical3</option>
           <option value="revString.php">Practical4</option>
           <option value="isLower.php">Practical5</option>
           <option value="palindrome.php">Practical6</option>
           <option value="sortArray.php">Practical7</option>
           <option value="trimWhitespace.php">Practical8</option>
           <option value="sumOddN.php">Practical9</option>
           <option value="login.php">Practical10</option>
           <option value="subString.php">Practical11</option>
           <option value="bdayCount.php">Practical12</option>
           <option value="printStars.php">Practical13</option>
           <option value="validEmail.php">Practical14</option>
           <option value="showEvenN.php">Practical15</option>
           <option value="colorList.php">Practical16</option>
           <option value="hello.php">Practical17</option>
           <option value="fibonacci.php">Practical18</option>
           <option value="replaceWord.php">Practical19</option>
           </optgroup>
         </select>
          <br /> <button type="submit" name="submit">Test Now!</button> <br />
        </center>
      </div>
    </form>
  </div>

<?php
require_once "templates/footer.php";
?>
