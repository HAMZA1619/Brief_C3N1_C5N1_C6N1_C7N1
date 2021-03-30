<?php

 $con = mysqli_connect('localhost','root','','dev');
 if (!$con) {
     die("erreur") .mysqli_error($con);
 }
