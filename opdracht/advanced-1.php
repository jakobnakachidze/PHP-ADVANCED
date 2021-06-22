<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 1</title>
</head>
<body>


<form action="advanced-2.php" method="post">
<label for="kleur"></label>
<h1> Maak hieronder je kleurenkeuzen</h1>
<select name="kleur" id="kleur">

<option>Kies een text kleur</option>
<?php
$kleuren = array("red", "blue", "green", "black", "brown");

foreach ($kleuren as $value) {
  echo "<option style='color:$value;' value='$value'>$value </option>";
  
}
?>
  </select>
    
    
  <select name="achtergrondkleur" id="achtergrondkleur">

<option>Kies een achtergrond kleur</option>
<?php
$kleuren = array("red", "blue", "green", "black", "brown");

foreach ($kleuren as $value) {
  echo "<option style='color:$value;' value='$value'>$value </option>";
  
}
?>
  </select>
    <h1>Vul hieronder je tabeldikte in !<h1>
    </br><input type="text" name="dikte" id="dikte" placeholder="15px">
    <h1>Vul hieronder je padding in !<h1>
    </br><input type="text" name="padding" id="padding" placeholder="15px">

    </br><input type="submit" name="submit">

    
    
    
    
    
    
    
    </form>






</body>
</html>