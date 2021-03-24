<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <STyle>
   body{
       background-color: green;
   }
    h1{
        text-align: center;
    }
    form{
        width: 80%;
        display: flex;
        flex-direction: column;
        margin-left: 10%;

    }
    label{
        margin-top: 15px;
    }
    input{
        height: 30px;
        margin-top: 10px;
    }
    div{
        margin-left: 25%;
        width: 50%;
        height: 300px;
        background-color: #fff;
    }
    button{
        height: 30px;
        margin-top: 20px;
        background-color: green;}
    </STyle>
</head>
<body>
<div>
    <h1>LOGIN</h1>
    <form action="login.php" method="POST">
    <label for="name">Nom d'utilisateur</label>
    <input type="text"  name="name" placeholder="Nom d'utilisateu">
    <label for="password">Mot de passe</label>
    <input type="password" name="password" placeholder="Mot de passe">
    <button type="submit">login</button>
    </form>
    </div>
  <a href="connection.php"><button style="background-color: #ffff;">connection</button> </a>

   <?php session_start(); ?>
    <?php
   if (isset($_POST["name"] , $_POST["password"] )) {
    $name = $_POST['name'];
    $pass = $_POST['password'];
    
    $con = mysqli_connect('localhost', 'hamza','', 'login');
    if (!$con) {
        die("erreur");
    }
    $query = "SELECT * FROM users WHERE name = '$name'";
   $r= mysqli_query($con , $query);
    if (!$r) {
       die('erreur'. mysqli_error($con));
    }

    
while ($row = mysqli_fetch_array($r)) {
   $db_name = $row['name'];
   $db_pass = $row['password'];
   
}
if ($name !==  $db_name && $pass !== $db_pass ) {
  header("Location: login.php") ;
}
else if($name ==  $db_name && $pass == $db_pass) {

    $_SESSION['name'] =  $db_name;
    header("Location: home.php") ;

}
else {
    header("Location: login.php") ;
}
}
    ?>
    
</body>
</html>