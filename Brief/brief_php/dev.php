<?php  session_start() ; ?>
<?php
if (isset($_SESSION['db_nom'])) {
  include "header.php";
  include "link.php";
  include "db_conn.php";

 echo "<h1>".$_SESSION['db_nom']." ".$_SESSION['db_prenom']."</h1>";
 
    $qry="SELECT * FROM developpeurs where id > 1 ORDER BY nom ASC  ";
    if(!$qry)
    {
    die("Query Failed: ");
    }
    $re= mysqli_query($con , $qry);
    if ($re) {
        echo "<h2>la liste de des développeurs</h2>";
      
        echo "<table class=' table fm' border=1>";
        echo " <th colspan='6'>Nom </th>";
        echo " <th colspan='6'>Prenom </th>";
      
      while($row= mysqli_fetch_array($re))
      {
        $dev_id = $row['id'];
        echo "<tr>";
        echo "<td colspan='6'><strong> ".$row['nom']."</strong></td>" ;
        echo "<td colspan='6'><strong>". $row['prénom']."</strong></td>" ;
      echo "<td>  <strong><a class='a' href='dev.php?del=$dev_id' >Delet</a></strong>
     </td>";
    echo "</tr>";
  
   ///DELETE A DEVELOPPEUR
      if (isset($_REQUEST["del"])) {
         $q="DELETE FROM developpeurs WHERE id = ".$_GET['del']."";
         $del= mysqli_query($con , $q);
        if (!$del) {
            die('erreur').mysqli_error($del);
        
          } 
          $page = $_SERVER['PHP_SELF'];
          $sec = "0.01";
          header("Refresh: $sec; url=$page");     
        }
      }
      echo "</table>";
  }
}
    
else {
  echo "<h1>CONNECTION FAILED PLEASE <a href='login.php' >LOGIN</a> </h1>";
}?>
</body>
</html>