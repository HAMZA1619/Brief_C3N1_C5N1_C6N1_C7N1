<?php include "header.php" ?>
<?php echo " <a href='login.php'>LOGIN </a> ";
 echo "</nav>" ?>
    <h1>ENREGISTREZ VOUS</h1>
    <form class="form" action="enregistrer.php" method="POST">
                  <label>Nom :</label>
                  <input type="text" placeholder="nom"  name="nom" required />
                  <label>Prénom :</label>
                  <input  type="text" placeholder="prénom" name="prenom"required/>
                  <label>Email :</label>
                  <input type="email" placeholder="exemple@gmail.com" name="Email" required/>
                  <label >Password :</label>
                  <input type="password" name="password" placeholder="********" required />
                  <input class="bouton" type="submit" name="submit" value="submit">
      </form>

</body>
</html>