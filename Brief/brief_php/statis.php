<?php  session_start() ; ?>
<?php
if (isset($_SESSION['db_nom'])) { 
    include "header.php";
    include "link.php";
    include "db_conn.php";
    echo "<h2>SKILL LEVEL STATISTICS </h2>";
    ?>

<form action="statis.php" class="up sid" method="POST">
    <input type="submit"  class="btn" name="submit" value="html">
    <input type="submit" class="btn" name="submit"  value="cgi">
    <input type="submit" class="btn" name="submit"  value="js">
    <input type="submit"class="btn"  name="submit"  value="ajax">
    <input type="submit" class="btn" name="submit"  value="php">
</form>

    <?php
    if (isset($_POST["submit"])) {
      $value=  $_POST["submit"];
   
       
    
   $cout1 = "SELECT * FROM technos where  $value = '5' ";
   if(!$cout1)
   {
    die("Query Failed: ");
    }
    $result1= mysqli_query($con ,$cout1);
    while ($r = mysqli_fetch_array( $result1) ) {
        $one[] = $r["$value"];
    }
   
    $cout2 = "SELECT * FROM technos where  $value between 3 and 4 ";
    if(!$cout2)
    {
     die("Query Failed: ");
     }
     $result2= mysqli_query($con ,$cout2);
     while ($r = mysqli_fetch_array( $result2) ) {
         $two[] = $r["$value"];
     }
    
     $cout3 = "SELECT * FROM technos where $value between 0 and 2 ";
     if(!$cout3)
     {
      die("Query Failed: ");
      }
      $resul3= mysqli_query($con ,$cout3);
      while ($r = mysqli_fetch_array( $resul3) ) {
          $tree[] = $r["$value"];
      }
      

      $cout4 = "SELECT * FROM technos where $value = '-1' ";
      if(!$cout4)
      {
       die("Query Failed: ");
       }
       $result4= mysqli_query($con ,$cout4);
       while ($r = mysqli_fetch_array( $result4) ) {
           $four[] = $r["$value"];
       }
       $totale = count($one ?? [])+count($two ?? [])+count($tree ?? [])+count($four ?? []);
       $on =count($one ?? [])/ $totale*100 ;
       $tw =count($two ?? [])/ $totale*100 ;
       $tre =count($tree ?? [])/ $totale*100 ;
       $fou =count($four ?? [])/ $totale*100 ;
       echo "<div class='form'>";
       echo "<h2 class='valu'>ON ".strtoupper($value)."</h2>";
       echo "<h3 >Nombre d'expere : ".count($one ?? [])."</h3> <progress  value='$on' max='100'> </progress> ";
       echo "<h3>Niveau moyenne : ".count($two ?? [])."</h3> <progress value='$tw' max='100'> </progress> ";
       echo "<h3>Niveau moins : ".count($tree ?? [])."</h3><progress value='$tre' max='100'> </progress> ";
       echo "<h3>Niveau inconnu : ".count($four ?? [])."</h3> <progress value='$fou' max='100'> </progress>";
       echo "<h3>Totale du mombre : $totale </h3>";
       echo "</div>";
    }


}
else {
    echo "<h1>CONNECTION FAILED PLEASE <a href='login.php' >LOGIN</a> </h1>";
  }
  ?>
  </body>
</html>