<?php

    function getMini($foto){
        $image = imagecreatefromstring(base64_decode($foto));
        list($w, $h) = getimagesize("data://application/octet-stream;base64, $foto");
        $px = 200;
        $nimage = imagecreatetruecolor($px, $px);
        imagecopyresampled($nimage, $image, 0, 0, 0, 0, $px, $px, $w, $h);

        ob_start();
        imagejpeg( $nimage );
        $final = base64_encode(ob_get_contents());
        ob_end_clean();
        return $final;
    }

    include('DBCon.php');
    $foto = $_POST['foto'];
    $miniatura = getMini($foto);
    $sql = "
        UPDATE alumnos 
        SET Foto='$foto', Miniatura='$miniatura', hasImg=1
        WHERE Carnet='".$_POST['carnet']."'
    ";
    $db->query($sql);
    mysqli_close($db);

    
?>
