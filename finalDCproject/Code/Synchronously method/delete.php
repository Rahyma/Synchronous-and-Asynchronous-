<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "schoolfinder";


$servername1 = "192.168.43.10";
$username1 = "muneeba";
$password1 ="123";
$dbnamehq = "schoolfinder_hq";


// create connection

$db=mysqli_connect($servername,$username,$password,$dbname );
$db1=mysqli_connect($servername1,$username1,$password1,$dbnamehq);
// create connection
?>
<!DOCTYPE html>
<html>
<head>
<title>Delete School</title>
<link rel="stylesheet" href="../CSS/pages.css">
</head>
<body>
  <form action=" "  method="GET" > 
        <h1>Deletion</h1>
        <table>
            <tr>
                <td>School Name</td>
                <td><input type="text" name="school_name" value=""/></td>
            </tr>
            <tr>
                <td>Location</td>
                <td><input type="text" name="location" value=""/></td>
            </tr>
            
            <tr>
                <td>Branch</td>
                <td><input type="text" name="branch" value=""/></td>
            </tr>
            <tr>
                <td><input type="submit" name="DeleteSchool" value="Delete"></td>
            </tr>
         </table>
     </form>

<?php

if(isset($_GET['DeleteSchool'])) {
  $school_name=($_GET['school_name']);
  $location=($_GET['location']);
    $branch=($_GET['branch']);
 

  //Update Data if no Error
  
    //MODIFICATION QUERY
    $query = "Delete FROM schools where school_name='$school_name'AND location='$location'AND branch='$branch'";
    //$query =  "Delete FROM schools where school_name='$school_name'AND location='$location'AND branch='$branch'";
    $query1 = "Delete FROM students where school_name='$school_name'AND location='$location' AND branch='$branch'";
     $data =mysqli_query($db,$query);
 // $data = mysqli_fetch_assoc($data);
 // echo $data;
  $data1 =mysqli_query($db1,$query1);
  if ($data) {
    echo "data update successfully";
    
    # code...
  }
  else
   echo "<font color='green'> Deletion failed.";
  
  if ($data1) {
    echo "\nSynchronously data delete successfully";
    
  }
  else
  
       echo "<font color='green'> Synchronously Deletion failed.";
}


//END OF MODIFICATION
?>