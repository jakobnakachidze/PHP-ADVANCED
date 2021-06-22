<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 2</title>
</head>
<style>
body {
    background-color:<?php echo $_POST['achtergrondkleur'];?>;
    color:<?php echo $_POST['kleur'];?>

}
th, td {
    padding:<?php echo $_POST['padding'];?>;
    border: <?php echo $_POST['dikte']; ?> solid <?php echo $_POST["kleur"]; ?>;
}
</style>
<body>
    <table>
        <tr>
            <th>Naam</th>
            <th>Leeftijd</th>
            <th>Klas</th>
            <th>Opleiding</th>
        </tr>
        <tr>
        <?php 
            $arr = array("naam" => "Jakob", "leeftijd" => "29", "Klas" => "0D", "Opleiding" => "Software Developer");
            foreach($arr as $key => $value){
                echo "<td>$value</td>"; 
            }
        ?>
        </tr>
    </table>


</body>
</html>