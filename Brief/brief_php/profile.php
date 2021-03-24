<?php  session_start() ; ?>

<?php 
if (isset($_SESSION['db_nom'])) {
  

include "header.php"; 

  $nom= $_SESSION['db_nom'] ;
  $prenom= $_SESSION['db_prenom'];
  $db_id=$_SESSION['db_id'];
  ?>
  <a href="formation.php">FORMATION</a>

<a href="profile.php?hello=true"  name="Logout">LOGOUT</a>
<?php
//   function logout() {
//     session_unset();
//     header("location:login.php");
//   }
  if (isset($_GET['hello'])) {
    session_unset();
    header("location:login.php");
    // logout();
  }
  if( $db_id =='1') { 
    header("location:list.php");
    echo "<h2>".$_SESSION['db_nom']." ".$_SESSION['db_prenom']."</h2>";
  }
  else {
      
  
?>

</nav>

<?php  
  
  
     $con = mysqli_connect('localhost','root','','dev');
if (!$con) {
    die("erreur") .mysqli_error($con);
}
   $qry="SELECT * FROM technos INNER JOIN developpeurs ON  technos.id = developpeurs.id ";
   $qry.="where nom = '$nom' and prénom = '$prenom' ";
if(!$qry)
{
die("Query Failed: ");
}
$re= mysqli_query($con , $qry);
    if (!$re) {
       die('erreur'. mysqli_error($con));
    }

    if ($re) {
     
while($row= mysqli_fetch_array($re))
{

    echo "<h2>".$_SESSION['db_nom']." ".$_SESSION['db_prenom']."</h2>";


    echo "
    <article class='art'>
    <div> 
    <label >HTML</label>
    <label >NIVEAU : <strong> ".$row['html']."</strong>  </label>
    </div>
    <div> 
    <label>CGI</label>
    <label >NIVEAU :<strong> ".$row['cgi']."</strong></label>
    </div>
    <div> 
    <label >JavaScript</label>
    <label >NIVEAU :<strong> ".$row['js']."</strong></label>
    </div>
    <div> 
    <label >AJAX</label>
    <label >NIVEAU :<strong>".$row['ajax']."</strong></label>
    </div>
    <div> 
    <label >PHP</label>
    <label >NIVEAU :<strong>".$row['php']."</strong></label>
    </div>
    </article>";
}}}}
    
    else {
      echo "<h1>CONNECTION FAILED PLEASE <a href='login.php' >LOGIN</a> </h1>";
    }

    
    ?>