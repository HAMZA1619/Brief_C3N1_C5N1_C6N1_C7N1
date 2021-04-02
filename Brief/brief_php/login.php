<?php include "header.php" ?>
<?php echo "<a href='registr.php'>REGISTER</a></nav>" ?>

    <h1>LOGIN</h1>
    <form class="form for" action="login.php" method="POST">
      <label>Mail :</label>
      <input type="text" name="mail" placeholder="exemple@gmail.com " required>
      <label for="password">Password :</label>
      <input type="password" name="password" placeholder="********" required>
      <input class="bouton"  type="submit" name="submit" value="submit">
    </form>
 <?php session_start() ?>
<?php
if (isset($_POST["submit"])) {
    $mail = trim(strip_tags($_POST['mail'])) ;
    $password = trim(strip_tags( $_POST['password']));
   

    include "db_conn.php";

    $query = "SELECT * FROM developpeurs WHERE mail = ' $mail'";
    $re= mysqli_query($con , $query);
    if (!$re) {
       die('erreur'. mysqli_error($con));
    }
    if ($re) {   
       while($row= mysqli_fetch_array($re))
       {
        $db_mail= $row['mail'];
        $db_nom= $row['nom'];
        $db_prenom=$row['prénom'];
        $db_pass = $row['password'];
        $db_id = $row['id'];
   
      //   verified the password
      if(password_verify($password, $db_pass) ) { 
         header("Location: profile.php") ;
         $_SESSION['db_nom'] = $db_nom;
         $_SESSION['db_prenom']=$db_prenom ;
         $_SESSION['db_id']=$db_id;
         
         
      }

    
    
     }}   }
   ?> 
</body>
</html>