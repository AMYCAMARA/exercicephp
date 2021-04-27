<?php
$a = random_int(-15, 1150);
$b = random_int(0, 10000);
$c = random_int(-7000,12093);

echo "la valeur de a est : {$a} <br>";
echo "la valeur de b est : {$b} <br>";
echo "la valeur de b est : {$c} <br>";

if($a<$b && $b<$c)
    {
        echo "les valeurs dans l'ordre croissants :{$a},{$b},{$c} <br> ";
    }
if($c<$b && $b<$a)
    {
        echo "les valeurs dans l'ordre croissants :{$c},{$b},{$a} <br> ";
    }
if($b<$a && $a<$c)
    {
        echo "les valeurs dans l'ordre croissants :{$b},{$a},{$c} <br> ";
    }
if($a>$b && $b>$c)
    {
        echo "les valeurs dans l'ordre décroissants :{$a},{$b},{$c}<br>  ";
    }
if($c>$b && $b>$a)
    {
        echo "les valeurs dans l'ordre décroissants :{$c},{$b},{$a} <br> ";
    }
if($b>$a && $a>$c)
    {
        echo "les valeurs dans l'ordre décroissants :{$b},{$a},{$c}<br> ";
    }   
?>