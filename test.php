<?php
$strng = "54.0.0.0-54.255.255.255.txt";
$filenms = explode("-", $strng);
$firstfilenm = explode(".", $filenms[0]);

$tempstr = explode(".tx", $filenms[1]);
$secondfilenm = explode(".", $tempstr[0]);


$rgbcolor = "";

$rgbcolor1 = $secondfilenm[3] - $firstfilenm[3];
$rgbcolor2 = $secondfilenm[2] - $firstfilenm[2];
$rgbcolor3 = $secondfilenm[1] - $firstfilenm[1];

$rgbcolorint = $rgbcolor1 + $rgbcolor2 + $rgbcolor3;


if ($rgbcolorint > 0 and $rgbcolorint <= 255) {
    $rgbcolor = $rgbcolor1 . ", " . 255-$rgbcolor3 .  ", " . $rgbcolor2;
}

else if ($rgbcolorint > 255 and $rgbcolorint <= 510) {
    $rgbcolor = $rgbcolor1 . ", " . 255-$rgbcolor2 . ", " . $rgbcolor3;
}

else if ($rgbcolorint > 510) {
    $rgbcolor = $rgbcolor1 . ", " . $rgbcolor2 . ", " . $rgbcolor3;
}

echo $rgbcolor;
?>