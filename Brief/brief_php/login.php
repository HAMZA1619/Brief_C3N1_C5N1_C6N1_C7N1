<?php include "header.php" ?>
<?php echo "<a href='registr.php'>REGISTER</a></nav>" ?>

<h1>LOGIN</h1>
    <form class="form" action="login.php" method="POST">
    <label>Nom :</label>
    <input type="text" placeholder="nom"  name="nom" required>
    <label>Prénom :</label>
    <input  type="text" placeholder="prénom" name="prenom"required>
    <label for="password">Password :</label>
    <input type="password" name="password" placeholder="********" required>
    <input class="bouton" type="submit" name="submit" value="submit">
    </form>
    </div>
 <?php session_start() ?>
    <?php
    if (isset($_POST["submit"])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $password = $_POST['password'];
    $con = mysqli_connect('localhost','root','','dev');
     if (!$con) {
    die("erreur") .mysqli_error($con);
    }
    $query = "SELECT * FROM developpeurs ";
   $re= mysqli_query($con , $query);
    if (!$re) {
       die('erreur'. mysqli_error($con));
    }
    if ($re) {   
       while($row= mysqli_fetch_array($re))
       {
       $db_nom= $row['nom'];
       $db_prenom=$row['prénom'];
       $db_pass = $row['password'];
       $db_id = $row['id'];
    if($nom == $db_nom && $prenom ==  $db_prenom && $password == $db_pass) { 
        header("Location: profile.php") ;
        $_SESSION['db_nom'] = $nom;
        $_SESSION['db_prenom']=$prenom;
        $_SESSION['db_id']=$db_id;
       
        
    }
    
    
}}   }
   ?> 
</body>
</html>