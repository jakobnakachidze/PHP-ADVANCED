<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>





<?php
$student  = array(
    "voornaam"    => "Jan",
    "achternaam"  => "Janssen",
    "klas"        => "9A",
    "Leeftijd"    => 17,
    "Woonplaats"  => "Amstelveen"
  );
?>

<table style width="100%">

<tr>
    <th>naam</th>
    <th>achternaam</th>
    <th>klas</th>
    <th>leeftijd</th>
    <th>woonplaats</th>
  </tr>




  <td><?php echo $student['voornaam']?></td>
  <td><?php echo $student['achternaam']?></td>
  <td><?php echo $student['klas']?></td>
  <td><?php echo $student['Leeftijd']?></td>
  <td><?php echo $student['Woonplaats']?></td>











</body>
</html>


