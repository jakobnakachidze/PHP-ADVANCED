<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops-foreach2</title>
</head>
<body>



<select name="kies je klas" class = "BOX">
<option>Kies je klas</option> 
<option value="8A" name="klas">8A</option>
<option value="8B" name="klas">8B</option>
<option value="8C" name="klas">8C</option>
<option value="8D" name="klas">8D</option>
</select> 

<select name="kies je klas" class = "BOX">
<option>Kies je klas</option> 

<option value="8B" name="klas">8B</option>
<option value="8C" name="klas">8C</option>
<option value="8D" name="klas">8D</option>
</select> 


















<select name="kies je klas" class = "BOX">
<?php
$klassen = array("8A", "8B", "8C", "8D", "8E", "9A", "9B", "9C", "9D", "9E");
foreach ($klassen as $key => $value) {
    echo "<option value=$value name=$value>$value</option>";
    // echo $key;
}
?>
</select> 
</body>
</html>