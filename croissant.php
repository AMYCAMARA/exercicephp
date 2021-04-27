<?php
$a = random_int(-15, 1150);
$b = random_int(0, 10000);

echo "la valeur de a est : {$a} <br>";
echo "la valeur de b est : {$b} <br>";
if($a<$b)
    {
        echo "les valeurs dans l'ordre croissants :{$a},{$b} ";
    }
else
    {
        echo "les valeurs dans l'ordre croissants :{$b},{$a}";
    }
?>