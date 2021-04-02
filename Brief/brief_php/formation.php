<?php  session_start() ; ?>

<?php
if (isset($_SESSION['db_nom'])) { 
    include "header.php" ;
    include "link.php";
    echo "<br>";
    echo "<a  href='ajout_form.php'><button class='art niv btn bouton'>add formation</button> </a>";
    include "db_conn.php";

    $qry="SELECT * FROM developpeurs ";
    $qry.="INNER JOIN formations ON  developpeurs.id = formations.id ;";
    if(!$qry)
    {
     die("Query Failed: ");
    }
    $qy="SELECT  * FROM formations ";
    $re= mysqli_query($con , $qry);
    $r= mysqli_query($con , $qy);
    if ($re) {
        echo "<h2>liste des développeurs ayant un formations:</h2>";
        echo "<table class=' table fm' border=1>";
        echo " <th colspan='5'>dev name </th>
        <th colspan='5' >techno </th>
        <th colspan='5'>date </th>";

      while( $row= mysqli_fetch_array($re) and $ro= mysqli_fetch_assoc($r))
      {
       $d= $ro['id_form'];
        echo "<tr>";
        echo "<td colspan='5'><strong> ".$row['nom']." ". $row['prénom']."</strong></td>" ;
        echo "<td colspan='5'><strong> ".$ro['techno']."</strong></td>" ;
        echo "<td colspan='5'><strong> ".$ro['date']."</strong></td>" ;
        echo "<td colspan='1' >";
        echo "<strong><a class='a' href='formation.php?del=$d' >Delet</a></strong>";
        echo "</tr>";
  
          
      //  delete a formation
  
    }
    if (isset($_GET["del"])) {
      $id = $_GET['del'];
      $quer="DELETE FROM formations WHERE id_form = '$id' ";
      $d= mysqli_query($con , $quer);
      if (!$d) {
          die('erreur').mysqli_error($d);
      }
      $page = $_SERVER['PHP_SELF'];
      $sec = "0.01";
      header("Refresh: $sec; url=$page");
  
    }
    
    
    echo "</table>";
 
  }
     
}
      




    
else {
  echo "<h1>CONNECTION FAILED PLEASE <a href='login.php' >LOGIN</a> </h1>";
}?>
</body>
</html>