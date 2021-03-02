<?php// include('IPchecking.php');?>
<html>
<head>
  <title>School Finder</title>
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

          <div id="content">

            <table>
                <tr>
                    <td><a href="Synchronously method/insert.php">-<h2>Insert</h2> </a></td>
                </tr>

                <tr>
                    <td><a href="Synchronously method/modify.php">-<h2>Modify</h2> </a></td>
                </tr>
                <tr>
                    <td><a href="Synchronously method/delete.php">-<h2> Delete</h2></a></td>
                </tr>
               
            </table>
            
        </div>
      </div>
</body>
</html>
