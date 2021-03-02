<?php //include('checkIP.php');?>

<html>
<head>
  <title>School Finder</title>
  <link rel="stylesheet" href="CSS/index.css">
</head>


<body>
<div class='Tables Methodsdiv'>
<h1 id='method'>WHICH METHOD YOU WANT TO REPLICATE</h1>
<div class='methodButton'>
  <form action="inventory.php" method="get">

    <button type="submit" class='methods'>Synchronously</button><br>
    <button type="submit" class='methods' formaction="ainventory.php">Asynchronous</button>
  </form>
</div>
</div>

</body>
</html>
