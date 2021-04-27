<?php
/*Point: Générer deux points puis calculer et afficher la
distance entre les deux points.Un point est caractérisé par son abscisse et
son Ordonnée*/

 
 $x1=random_int(0,10);
 $y1=random_int(0,10);
 $x2=random_int(0,10);
 $y2=random_int(0,10);
 echo("le point A a pour abscisse {$x1} et pour ordonné {$y1}<br>");
 echo("le point B a pour abscisse {$x2} et pour ordonné {$y2}<br>");
 $distance=sqrt(($x2-$x1)**2+($y2*$y1)**2);
 echo("la distance entre le point A et le point B est {$distance}<br>");



 ?>