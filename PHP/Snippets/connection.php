<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <STyle>
   body{
       background-color: greenyellow;
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
        background-color: greenyellow;}
    </STyle>
</head>
<body>
<div>
    <h1>Connexion</h1>
    <form action="connection.php" method="POST">
    <label for="name">Nom d'utilisateur</label>
    <input type="text"  name="name" placeholder="Nom d'utilisateu">
    <label for="password">Mot de passe</label>
    <input type="password" name="password" placeholder="Mot de passe">
    <button type="submit">submit</button>
    </form>
    </div>

     <a href="login.php"><button style="background-color: #ffff;">login</button></a>

    <?php
     if (isset($_POST["name"], $_POST["password"])) {
    $name = $_POST['name'];
    $pass = $_POST['password'];
    $con = mysqli_connect('localhost', 'hamza','', 'login');
    if (!$con) {
        die("erreur");
    }
    $query = "INSERT INTO users(name , password) VALUES('$name', '$pass')";
   $r= mysqli_query($con , $query);
    if (!$r) {
       die('erreur');
    }
}
    
    ?>
    
</body>
</html>