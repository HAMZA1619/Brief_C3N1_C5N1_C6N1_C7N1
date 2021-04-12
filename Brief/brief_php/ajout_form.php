<?php include "header.php";
    include "db_conn.php";
 echo  "</nav>";
 echo "<br>";
 echo "<a href='formation.php'><button class='niv btn bouton'>go back</button> </a>";
 $qry="SELECT * FROM developpeurs where id > 1 ORDER BY nom ASC  ";
 if(!$qry)
 {
 die("Query Failed: ");
 }
 $re= mysqli_query($con , $qry);
 ?>
  <h2>add a formation</h2>
  <form  class="form for" action='ajout_form.php' method='post'>
   
            <select class="div fm" name="dev" >
            <?php
             if ($re) {
                while($row= mysqli_fetch_array($re))
                {   $dev_id=$row['id'];
                     $nom = $row['nom']." ".$row['prénom'];
                  echo "<option value='$dev_id'>$nom</option>";
                }}
            ?>     
            </select>
            <select class="div fm" name="niveau" >
                <option value='HTML'>HTML</option>
                <option value="CGI">CGI</option>
                <option value="JS">JS</option>
                <option value="AJAX">AJAX</option>
                <option value="PHP">PHP</option>
               
            </select>
            <input class=" div fm"  type="date" name="date" >
     
        <input class="bouton fm " type="submit" name="sav" value="add">
    </form>
    <?php
     if (isset($_POST["sav"])) {
         $id =  $_POST['dev'];
         $tech = $_POST['niveau'];
        $date =  strtotime($_POST['date']);
        $date= date("Y-m-d ", $date);
            $query = "INSERT INTO formations (id , techno , date ) 
            VALUES('$id', '$tech',' $date')";
            $r= mysqli_query($con , $query);
                if (!$r) {
                die('erreur').mysqli_error($con);
                }
            
        //    if ($r) {
        //     echo "<Script>
        //     alert('formation has been added '); 
        //     </Script>";
        //    } 
       
    }
