<?php  session_start() ; ?>
<?php
if (isset($_SESSION['db_nom'])) { 
    include "header.php" ;
    include "link.php";
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
      
      while( $row= mysqli_fetch_array($re) and $ro= mysqli_fetch_assoc($r))
      {
        
          echo "<ul class='li' >";
          echo "<li  >-".$row['nom']." ". $row['prénom']."
          <span  > On <strong >".$ro['techno']."</strong> Le : <strong > ". $ro['date']."</strong></span>
          <form action='formation.php' method='POST' >
            <input class='delete' type='submit' name='del' value='".$row['id']." '>
          </form>
          
          </li>";
          echo "</ul>";

      //  delete a formation
      if (isset($_POST["del"])) {
        $su= $_SESSION['sub'];
        $quer="DELETE FROM formations WHERE techno = '$su' AND id = '". $_POST['del']."' ";
        $d= mysqli_query($con , $quer);
        if (!$d) {
            die('erreur').mysqli_error($d);
        }
      }
    } 
  }
}
      




    
else {
  echo "<h1>CONNECTION FAILED PLEASE <a href='login.php' >LOGIN</a> </h1>";
}?>
</body>
</html>