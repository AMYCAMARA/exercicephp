<?php
//Exercice II: Générer deux nombres puis faire leur permutation.On
//affichera les deux nombres avant et après permutations.
$a=random_int(0,50);
$b=random_int(0,50);
echo"Avant  permutation a=$a et b=$b<br>";
//permutation
$c=$a;
$a=$b;
$b=$c;
echo"Apres permutation  a=$a et b=$b";

?>