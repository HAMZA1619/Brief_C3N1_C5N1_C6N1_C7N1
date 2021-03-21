<?php  session_start() ; ?>
<?php
if (isset($_SESSION['db_nom'])) { 
include "header.php" ?>
<?php
 echo " <a href='formation.php'>FORMATION </a>" ;

if ($_SESSION['db_id'] == 1) {
echo "<a href='dev.php'>DEVELOPPEURS </a>
    <a href='list.php'>LISTS </a>";}
    else {
      echo " <a href='profile.php' >PROFILE</a>";
    }
    ?>
     <a href="dev.php?hello=true" >LOGOUT</a>
   <?php
  if (isset($_GET['hello'])) {
    session_unset();
    header("location:login.php");};
echo  "</nav>"; 
$con = mysqli_connect('localhost','root','','dev');
if (!$con) {
    die("erreur") .mysqli_error($con);
}
// SELECT techno , date from formations INNER JOIN formations ON  formations.id = developpeurs.id ;
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
    
       echo "<ul>";
        echo "<li > - ".$row['nom']." ". $row['prénom']." <span > On <strong>".$ro['techno']."</strong> Le : <strong> ". $ro['date']."</strong></span></li>";
       echo "</ul>";
      
      //  if ($ro['techno']== 'js') {
      //   echo "<ul>";
      //   echo "<li>" .$ro['techno']." ". $ro['date']." ".$row['nom']." ". $row['prénom']."</li>";
      //  echo "</ul>";
      // }
      //  .$ro['techno']." ". $ro['date']." "
       
   }
  }}
   




    
else {
  echo "<h1>CONNECTION FAILED PLEASE <a href='login.php' >LOGIN</a> </h1>";
}