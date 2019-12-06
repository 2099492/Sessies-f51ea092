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
$_SESSION['keuze'] = $skate = "Skateboard";
setcookie("#1", $skate);

$bask = "basketbal";
setcookie("#2", $bask);

$skeel = "Skeelsers";
setcookie("#3", $skeel);

if (isset($_POST["button"])) {
  if ($_COOKIE[$_POST["input"]]) {
     echo "gekozen item: " . $_COOKIE[$_POST["input"]];
  }
}

 $_SESSION['keuze'];
// setcookie("test", $input);
// echo $_COOKIE["test"];
 ?>
