<?php
// 3. Горизонтальное отражение
header('Content-Type: image/png');

$filename = "./Pics/bridge.png";
$pic = ImageCreateFromPng($filename);

ImageFlip($pic, IMG_FLIP_HORIZONTAL);

ImagePng($pic);

ImageDestroy($pic);


?>
