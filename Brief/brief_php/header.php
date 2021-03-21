<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body onload=showDate();>
   <nav class="nav">
       <a href="home.php"><img style="width: 10%; position:absolute; left: 2%; height: 5%;" src="./img/wedev-logo.png" alt=""></a>
       <script type="text/javascript"> 
         function refresh(){
             var t = 1000; 
             setTimeout('showDate()',t) 
         } 
         function showDate() {
             var date = new Date() 
             var h = date.getHours();
             var m = date.getMinutes();
             var s = date.getSeconds();
             if( h < 10 ){ h = '0' + h; } 
             if( m < 10 ){ m = '0' + m; }
             if( s < 10 ){ s = '0' + s; }
             var time = h + ':' + m + ':' + s 
             document.getElementById('horloge').innerHTML = time;
             refresh();
          }
      </script>
       <span id='horloge' style="font-size:20px; position:absolute; left: 15%;  "></span>