<?php

//Fonction 
function affichtable($month){
    echo "<table border=1>";
    foreach ($month as $x => $x_value){
        echo "<tr><td>".$x."</td><td>".$x_value."</td></tr>";
    }
    echo "</table>";
}

//** */
//Déclaration tableau
$month = array("cle" => "value", "said" => "13", "badr" => "16", "najat" => "15");
//Afficher Tableau 
affichtable($month);

//Insertion
$month["karim"] ="10";
// array_push($month,["zrze"],  "sdf");


affichtable($month);

unset($month[ "cle"]);
// array_shift($month);
affichtable($month);

//affichage de note maximale est la note minimale 
echo "la note maximale est :".max($month)." la note minimale est :".min($month);
echo "<br/>"; 

//affichage de la moyenne 
echo"la moyenne de la classe:".round(array_sum($month)/count($month),3);


//var_dump($month);


?>