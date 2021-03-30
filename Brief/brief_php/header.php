<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>WeDev</title>
</head>
<body onload=showDate();>
   <nav class="nav" >
       <a href="home.php"><img class="logo" src="./img/wedev-logo.png" alt=""></a>
       <script type="text/javascript"> 
         function refresh(){
             var t = 1000; 
             setTimeout('showDate()',t) 
         } 
         function showDate() {
             var date = new Date() 
             var h = date.getHours();
             var m = date.getMinutes();
             if( h < 10 ){ h = '0' + h; } 
             if( m < 10 ){ m = '0' + m; }
             var time = h + ':' + m 
             document.getElementById('horloge').innerHTML = time;
             refresh();
          }
      </script>
       <span id='horloge' class="clock" ></span>