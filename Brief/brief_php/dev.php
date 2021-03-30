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
        
      while($row= mysqli_fetch_array($re))
      {
        $dev_id = $row['id'];
        echo "<ul>";
        echo "<li> - ".$row['nom']." ". $row['prénom']."
        <form action='dev.php' method='post' >
           <input class='delete' type='submit' name='del' value='$dev_id  '>
        </form>";
        echo "</li>";
        echo "</ul>";  
  
   ///DELETE A DEVELOPPEUR
      if (isset($_REQUEST["del"])) {
        $que="DELETE FROM technos WHERE id = ".$_POST['del']."";
         mysqli_query($con , $que);
        $qu="DELETE FROM formations WHERE id = ".$_POST['del']."";
        mysqli_query($con , $qu);
         $q="DELETE FROM developpeurs WHERE id = ".$_POST['del']."";
         $del= mysqli_query($con , $q);
        if (!$del) {
            die('erreur').mysqli_error($del);
        
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