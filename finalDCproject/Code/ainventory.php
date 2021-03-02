<?php// include('IPchecking.php');?>
<html>
<head>
  <title>SchoolFinder</title>
  <link rel="stylesheet" href="CSS/main1.css">


</head>
<body>
    <?php
/*
      if($user_ip !== '::1'){
         echo "<a href='index.php' class='mainpage'>Change Method</a>";
      }*/
      ?>

    <div class="Tables">
        <img src="Images/schoolfinder.jpg" width="520" height=""/>
        <ul class="tabs">
          <li class="tab active"><a href="#content">SCHOOLS</a></li>
          
        </ul>
          <div id="content">

            <table>
                <tr>
                    <td><a href="Asynchronous method/insertAsynchronous.php">- Insert</a></td>
                </tr>

                
                <tr>
                    <td><a href="Asynchronous method/modify_asyn.php">- Modify</a></td>
                </tr>
                <tr>
                    <td><a href="Asynchronous method/delete_asyn.php">- Delete</a></td>
                </tr>
                
            </table>
            <h1></h1>
        </div>
      </div>
</body>
</html>
