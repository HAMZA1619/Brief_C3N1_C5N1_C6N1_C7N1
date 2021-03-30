<?php
echo "<a href='statis.php'>STATISTICS</a> 
<a href='formation.php'>FORMATION </a>
 <a href='dev.php'>DEVELOPPEURS </a>
<a href='list.php'>LISTS </a>";  
 //logout 
echo "  <a href='dev.php?hello=true' >LOGOUT</a>";
if (isset($_GET['hello'])) {
 session_unset();
 header("location:login.php");};
echo  "</nav>";