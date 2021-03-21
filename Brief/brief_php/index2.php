<?php include "header.php";
echo  "</nav>"; ?>
    <h1>VOTRE CONNAISSANCES</h1>";
   <form class="form"  action='connaissances.php' method='POST'>
    <div> 
<label >HTML</label>
<select name='HTML'>
<option value='-1'>-1</option>
<option value='0'>0</option>
<option value='1'>1</option>
<option value='2'>2</option>
<option value='3'>3</option>
<option value='4'>4</option>
<option value='5'>5</option>
</select>
</div>
<div> 
<label>CGI</label>
<select name='CGI'>
<option value='-1'>-1</option>
<option value='0'>0</option>
<option value='1'>1</option>
<option value='2'>2</option>
<option value='3'>3</option>
<option value='4'>4</option>
<option value='5'>5</option>
</select>
</div>
<div> 
<label >JavaScript</label>
<select name='JS'>
<option value='-1'>-1</option>
<option value='0'>0</option>
<option value='1'>1</option>
<option value='2'>2</option>
<option value='3'>3</option>
<option value='4'>4</option>
<option value='5'>5</option>
</select>
</div>
<div> 
<label >AJAX</label>
<select name='AJAX'>
<option value='-1'>-1</option>
<option value='0'>0</option>
<option value='1'>1</option>
<option value='2'>2</option>
<option value='3'>3</option>
<option value='4'>4</option>
<option value='5'>5</option>
</select> 
</div>
<div> 
<label >PHP</label>
<select name='PHP'>
<option value='-1'>-1</option>
<option value='0'>0</option>
<option value='1'>1</option>
<option value='2'>2</option>
<option value='3'>3</option>
<option value='4'>4</option>
<option value='5'>5</option>
</select>
</div>
<br>
<input class='bouton' type='submit' name='submit' value='submit'>
        
</body>
</html>