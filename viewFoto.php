
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $db = new mysqli('localhost','root','usbw','test2');
    $carnet=/*$_POST['carnet']*/'1010';
    $sql = "SELECT Foto FROM alumnos WHERE Carnet='$carnet'";
    $aux = array();
    echo '<img src="data:image/png;base64, '.$db->query($sql)->fetch_array()[0].'"/>';
    mysqli_close($db);
?>
</body>
</html>
    