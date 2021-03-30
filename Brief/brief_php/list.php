<?php  session_start() ; ?>
<?php
if (isset($_SESSION['db_nom'])) {
    include "header.php" ;
    include "link.php";
    include "db_conn.php";
?>
    <form  action='list.php' method='POST'>
        <div class="div">
            <select class="niveau" name="niveau" >
                <option value='HTML'>HTML</option>
                <option value="CGI">CGI</option>
                <option value="JS">JS</option>
                <option value="AJAX">AJAX</option>
                <option value="PHP">PHP</option>
                <input class="bouton btn" type="submit" name="submit" value="submit">
            </select>
        </div>
    </form>

<?php
  
 echo "<h1>".$_SESSION['db_nom']." ".$_SESSION['db_prenom']."</h1>";

 
if (isset($_POST['submit'])) {
    $sub= $_POST['niveau'];
    $_SESSION['sub']=$sub;

   $qry="SELECT nom , prénom FROM developpeurs  ";
   $qry.="INNER JOIN technos ON developpeurs.id = technos.id where $sub = 5 ";
    if(!$qry)
    {
      die("Query Failed: ");
    }
    $re= mysqli_query($con , $qry);
    if ($re) {
    echo "<h2>liste des experts on $sub :</h2>";
    
        while($row= mysqli_fetch_array($re)){
            echo "<ul class='li'>";
            echo "<li>- ".$row['nom']." ". $row['prénom']."</li>";
        echo "</ul>";
        
        }
    }
   $qry="SELECT nom , prénom  FROM developpeurs ";
   $qry.="INNER JOIN technos ON  developpeurs.id = technos.id where  $sub BETWEEN 3 AND 4 ";
    if(!$qry)
    {
       die("Query Failed: ");
    }
    $re= mysqli_query($con , $qry);
    if ($re) {
    echo "<h2>liste des développeurs ayant un niveau moyenne on $sub :</h2>";
    
        while($row= mysqli_fetch_array($re)){
            echo "<ul class='li'>";
            echo "<li>- ".$row['nom']." ". $row['prénom']."</li>";
            echo "</ul>"; 
        }
    }
   $qry="SELECT * FROM developpeurs ";
   $qry.="INNER JOIN technos ON developpeurs.id = technos.id where $sub < 3 ";
    if(!$qry)
    {
      die("Query Failed: ");
    }
    $re= mysqli_query($con , $qry);

    if ($re) {
    echo "<h2>liste des développeurs ayant un niveau moins ou inconnu on $sub :</h2>";
 
        while($row= mysqli_fetch_array($re)){  
            
            $dev_id=$row['id'];
            echo "<ul>";
            echo "<li>- ".$row['nom']." ". $row['prénom'];
            ?>
        <span class="art span">

        <!-- form for setting a formation -->
            <form class="span" action='list.php' method='GET' >
                <input class="niv"  type="date" name="date" >
                <input class="niv delete save"  type='submit' name='sav' value='<?php echo $dev_id ?>'>
            </form> 

        <!-- form for updating level of skill  -->
        <form class="up" action="list.php" method='post' >
                <select style="margin-left: 25px;" class="niv" name='niv'>
                <option value='-1'>-1</option>
                <option value='0'>0</option>
                <option value='1'>1</option>
                <option value='2'>2</option>
                <option value='3'>3</option>
                <option value='4'>4</option>
                <option value='5'>5</option>
                <input class='delete updete' type='submit' name='up' value='<?php echo $dev_id ;?>' >
                </select>
            </form>
        </span>
    </li>
    </ul>
    <?php
    }
    }  
    } 
    //// update techno niveau
    if (isset($_REQUEST["up"])) {
        $su= $_SESSION['sub'];
        $su=strtolower($su);
        $querry="UPDATE technos SET $su = ".$_POST['niv']." WHERE id = ".$_POST['up']." ";
        $up= mysqli_query($con , $querry);
        if (!$up) {
            die('erreur').mysqli_error($up);
        
        }
        echo "<Script>
    alert('level has been updated '); 
    </Script>"; 
        }



        /// set a date for a formation 
    if (isset($_REQUEST["sav"])) {
        $date =  strtotime($_GET['date']);
        $date= date("Y-m-d ", $date);
        $qry="SELECT * FROM developpeurs where id =".$_GET['sav']." ";
        if(!$qry)
        {
        die("Query Failed: ");
        }
        $re= mysqli_query($con , $qry);
        while($row= mysqli_fetch_array($re)){ 
            $query = "INSERT INTO formations (id , techno , date ) 
            VALUES('". $_GET['sav']."', '".$_SESSION['sub']."','$date')";
            $r= mysqli_query($con , $query);
                if (!$r) {
                die('erreur').mysqli_error($con);
                }
            
            }
        echo "<Script>
        alert('formation has been added '); 
        </Script>";
    }


}
else {
  echo "<h1>CONNECTION FAILED PLEASE <a href='login.php' >LOGIN</a> </h1>";
}?>
</body>
</html>