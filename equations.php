<?php
$a = random_int(-15, 19);
$b = random_int(0, 10);
$c = random_int(-70,12);

$D=(($b*$b) - (4*$a*$c));
echo "la valeur de a est : {$a} <br>";
echo "la valeur de b est : {$b} <br>";
echo "la valeur de c est : {$c} <br>";
echo "l'equation est {$a}X2+{$b}X+{$c}=0 <br>";

echo "delta ={$D}<br>" ;

if($D<0)
{
    echo "l'equation n'admet pas de solution dans R <br>";
}
elseif ($D==0)
{
    $x0=-$b/2*$a;
    echo "l'equation admet une solution double X0 : {$x0} <br>";
}
elseif($D>0)
    {
        $x1=(-$b-(sqrt($D))) / (2*$a) ;
        $x2=(-$b+(sqrt($D))) / (2*$a) ;
        echo "l'equation admet deux solution <br>
        X1:{$x1}<br> 
        et X2:{$x2} <br>";
    }

?>