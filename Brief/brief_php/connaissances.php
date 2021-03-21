<?php  session_start() ; ?>
<?php
 $nom = $_SESSION['db_nom'] ;
 $prenom =$_SESSION['db_prenom'];
 if(isset($_POST['submit'])) {
 $html = $_POST['HTML'];
 $cgi = $_POST['CGI'];
 $js = $_POST['JS'];
 $ajax = $_POST['AJAX'];
 $php = $_POST['PHP'];

 $con = mysqli_connect('localhost','root','','dev');
 if (!$con) {
     die("erreur") .mysqli_error($con);
 }
 $qry="SELECT * FROM developpeurs where nom = '$nom' and prénom = '$prenom' ";
 if(!$qry)
 {
 die("Query Failed: ");
 }
 $re= mysqli_query($con , $qry);
 if ($re) {
    while($row= mysqli_fetch_array($re))
    {
       $db_id = $row['id'];
       $db_nom = $row['nom'];
       $db_prenom = $row['prénom'];
    }
   
    $query = "INSERT INTO technos (id ,html ,cgi ,js ,ajax ,php) VALUES('$db_id','$html', ' $cgi','$js','$ajax','$php')";
    $r= mysqli_query($con , $query);
     if (!$r) {
        die('erreur').mysqli_error($con);
     }
     if ($r) {
     header("location: login.php");
   }   }}
