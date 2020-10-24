<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./testmini.php" method="post">
        <textarea name="foto" id="foto" cols="90" rows="90"></textarea>
        <input type="submit" value="true">
    </form>
</body>
</html>
<?php
    if(isset($_POST['foto'])){
        $foto=$_POST['foto'];
        $image = imagecreatefromstring(base64_decode($foto));
        list($w, $h) = getimagesize('data://application/octet-stream;base64,'.$foto);
        $px = 200;
        $nimage = imagecreatetruecolor($px, $px);
        imagecopyresampled($nimage, $image, 0, 0, 0, 0, $px, $px, $w, $h);
        ob_start();
        imagepng( $nimage );
        $final = base64_encode(ob_get_contents());
        ob_end_clean();
        echo '<img src="data:image/png;base64, '.$final.'"/>';
        echo '<img src="data:image/png;base64, '.$foto.'"/>';
    }
?>