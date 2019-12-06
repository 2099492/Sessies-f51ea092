<?php
  session_start();
 ?>

<h1>Skateboard <small>(#1)</small></h1>
<h1>Basketbal <small>(#2)</small></h1>
<h1>Skeelers <small>(#3)</small></h1>

 <form class="hallo" action="" method="post" name="hallo">
   Keuze:<input type="text" name="input" value="">
   <button type="submit" name="button">Submit</button>
 </form>

<?php
if (isset($_POST["input"])) {
  if ($_POST["input"] <= 3) {
    $_SESSION["input"] = $_POST["input"];
  }
}
echo  ($_SESSION["input"]);
// setcookie("test", $input);
// echo $_COOKIE["test"];
 ?>
