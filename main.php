<!Doctype html>
<html>

  <head>
  	<meta charset="utf-8" />
    <title>PHP Practicals</title>
    <link href="css/stylesheet.css" rel="stylesheet" />
    <link href="css/footer.css" rel="stylesheet" />
    <link href="css/header.css" rel="stylesheet" />
  </head>

  <body>

<?php
require_once "templates/primaryHeader.php";

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
           <optgroup label="Program">
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

  <div id="about">
    <h4>About~</h4>
    <p class="about">This is a dummy website running locally onto this machine. The purpose of this site is to implement and show the functionality of various <b>PHP Practicals</b> as per the syllabus guidelines of <b><i><u>B.Sc. (Hons) Computer Science, University of Delhi</u></i></b>.</p>
    <p class="about">This is being submitted as the Practical(s) Of the PHP as this is a <b>Skill Enhancement Subject</b> for (Sem-IV) Computer Science students of B.Sc. (Hons).</p>
    <br /> <br />
    <p class="about">Visit back to <em>top</em>.   <a href="index.php" class="about top"></u>click here</u></a></p>
  </div>

<?php
require_once "templates/footer.php";
?>
