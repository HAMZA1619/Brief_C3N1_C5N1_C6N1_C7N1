<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $couleur = array ('blanc', 'vert', 'rouge', 'bleu', 'noir');
    echo "Le souvenir de cette scène pour moi est comme une trame de film à jamais figée à ce moment-là:<br/>
     le tapis $couleur[2], la pelouse $couleur[1], la maison $couleur[0], le ciel plombé. Le nouveau président et son première dame. - Richard M. Nixon ";



     $ceu = array ("Italy" => "Rome", 
     "Luxembourg" => "Luxembourg",
      "Belgium" => "Bruxelles", 
      "Denmark" => "Copenhague",
       "Finland" => "Helsinki ",
       " France "=>" Paris ",
       " Slovaquie "=>" Bratislava ",
       " Slovénie "=>" Ljubljana ",
       " Allemagne "=>" Berlin ",
       " Grèce "=>" Athènes ",
       " Irlande " => "Dublin", 
       "Netherlands" => "Amsterdam", 
       "Portugal" => "Lisbonne",
       "Spain" => "Madrid",
       "Sweden" => "Stockholm", 
       "United Kingdom" => "Londres ",
        " Chypre "=>" Nicosie ",
        " Lituanie "=>"Vilnius ",
        " République tchèque "=>" Prague ",
        " Estonie "=>" Tallin ",
        " Hongrie "=>" Budapest ",
         " Lettonie "=>" Riga ",
         " Malte "=>" La Valette ",
         " Autriche "=>" Vienne ",
         " Pologne "=>" Varsovie ");
         foreach($ceu as $x => $x_value) {
            echo "La capitale des " . $x . "est " . $x_value;
            echo "<br>";
          }
    
    ?>
</body>
</html>