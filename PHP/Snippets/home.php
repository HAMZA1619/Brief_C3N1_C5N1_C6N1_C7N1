

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>acceil</title>
</head>
<body>
    <h1 style="text-align: center;">HELLO 
     <?php 
    session_start();
     echo  $_SESSION['name']; 
     ?>
     <form action="home.php" method="POST">
    <input type="submit" value="logout" name="logout">
    </form>
     <?php
    if (isset($_POST["logout"])) {
        session_start();
        unset($_SESSION["password"]);
        unset($_SESSION["name"]);
        header("Location: login.php"); 
    }

?>
     </h1>
</body>
</html>