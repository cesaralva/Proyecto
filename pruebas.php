<!DOCTYPE HTML>
<html lang="">
<head>
    <meta charset="UTF-8">
    <title>galeria</title>
</head>
<body>

<?php
$pathA = "images/";

//creo un array
$ArrayA=Array();

foreach(glob($pathA . '*.jpg') as $imageA) {
    $ArrayA[]=$imageA;
}

//inicio bucle
for($n = 1; $n <= count($ArrayA); $n++):
?>

<a href="<?php if ($miArray[$i] == $miArray[5]) { echo $miArray[5]; } else if ($miArray[$i] == $miArray[$n-1]) { echo $miArray[$i-1]; } ?>">
    <img src="<?php echo $miArray[$i]; ?>">
</a>
 

<?php
endfor;
?>
</body>
</html>