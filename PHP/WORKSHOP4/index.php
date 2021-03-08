<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- <form action="index.php" method="POST">
<input type="datetime-local" name="date" >
<button type="submit">submit</button>

</form> -->

    <?php 
    
    
    // function nombrepremier( $nombre ){


    //     for ($i = 2; $i < $nombre; $i++){
    //         if ($nombre % $i == 0){
    //             $fois = 1;
    //         }
    //     }
    
    //     if (isset($fois)) {
    //         echo "$nombre n'est pas un nombre premier";
    //     }
    //     else{
    //         echo "$nombre est un nombre premier";
    //     }
    
    // }
    
    // nombrepremier(7901);
    // echo "<br/>";
    // nombrepremier(10);

    // $date =intval($_POST["date"] ,5) ;
    // var_dump($date) ;



//     $date = strtotime($_POST["date"]); 
// echo date('d/M/Y h:i:s', $date); 



//    function aler($a){
//        echo "<script> alert('hello $a')</script>";
//    }

//    aler("hamza");
  $a = array("HAMza","haMZA","hAmZa");
  function you($a){
      for ($i=0; $i <count($a) ; $i++) { 
        echo ucfirst(strtolower($a[$i]));
        echo "<br>";
      }
  }
you($a);

    
    ?>
</body>
</html>