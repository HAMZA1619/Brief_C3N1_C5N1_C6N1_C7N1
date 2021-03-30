
<?php
    session_start() ;
if(isset($_POST['submit'])) {
   if(!empty($_POST['nom']) AND !empty($_POST['Email']) AND !empty($_POST['prenom'])) {
      $nom = $_POST['nom'];
      $prenom = $_POST['prenom'];
      $mail = $_POST['Email'];
      $password = $_POST['password'];
      $password =  password_hash($password ,PASSWORD_BCRYPT);

      include "db_conn.php";
      $qry="SELECT * FROM developpeurs ";
      if(!$qry)
      {
        die("Query Failed: ");
      }
      $result= mysqli_query($con , $qry);
      if ($result) {
         while($row= mysqli_fetch_array($result))
         {
             $db_nom = $row['nom'];
             $db_prenom = $row['prénom'];
             $db_id =  $row['id'];

               if ($db_nom ==$nom && $db_prenom ==$prenom ) {     
                  header("location: registr.php");
                  die;
               }
                 
         } 
                  
                    
                         
          $query = "INSERT INTO developpeurs (nom , prénom ,  mail , password) VALUES('$nom', '$prenom',' $mail','$password')";
          $r= mysqli_query($con , $query);
            if (!$r) {
               die('erreur').mysqli_error($con);
            }
            elseif ($r) {
               $_SESSION['db_nom'] = $nom;
               $_SESSION['db_prenom']=$prenom;
               $_SESSION['db_id']=$db_id;
               header("location: index2.php");
      
            }
      
         }
                        
      }
   
   }
