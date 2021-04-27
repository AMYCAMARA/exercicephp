<?php
$a = random_int(-3, 115);
$b = random_int(1, 108);

echo "la valeur de a est : {$a} <br>";
echo "la valeur de b est : {$b} <br>";
echo "l'equation est {$a}x+{$b}=0 <br>";

if($a!=0)
{
    $x = -$b/ $a;
    echo "le resultat de l'equation est x= {$x} <br>";
}
if($a=0)
{
    echo "x=0";
}
?>