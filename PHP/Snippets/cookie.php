
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>
<body>
    <?php
      // if (isset($_COOKIE["hamza"])) {
      //   $name = "hamza";
      //   $value = date('Y-m-d H:i:s');
      //   setcookie($name,$value );
      //  $h = "C'est votre premiere visite: ".$value;
      //  echo $h;
      // }
      if(isset($_COOKIE["hamza"])){
        $dates=unserialize($_COOKIE["hamza"]);
        $dates[]=time();
        setcookie("hamza",serialize($dates));
        echo " Vous avez consulté cette page ".count($dates)." fois , voici les détails:";
        echo "<ul>";
        foreach ($dates as $key => $value) {
          echo "<li>".date("d-m-Y H:i:s",$value)."</li>";
        }
        echo "</ul>";
      }
      else{
        $dates[]=time();
        setcookie("hamza",serialize($dates));
        echo "C'est votre première visite :".date("d-m-Y H:i:s",time());
      }
  

    ?>
</body>
</html>