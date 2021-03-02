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
<title>Modify School</title>
<link rel="stylesheet" href="../CSS/pages.css">
</head>
<body>
    
   <form action=" "  method="GET" > 
        <h1>Modify</h1>
        <table>
            <tr>
                <td>School Name</td>
                <td><input type="text" name="school_name" value=""/></td>
            </tr>
            <tr>
                <td> Area</td>
                <td><input type="text" name="area" value=""/></td>
            </tr>
            <tr>
                <td>Location</td>
                <td><input type="text" name="location" value=""/></td>
            </tr>
            <tr>
                <td>Rank</td>
                <td><input type="text" name="rank1" value=""/></td>
            </tr>
            <tr>
                <td>Board</td>
                <td><input type="text" name="board" value=""/></td>
            </tr>
            <tr>
                <td>Montessori fees</td>
                <td><input type="text" name="mont_fees" value=""/></td>
            </tr>
            <tr>
                <td>Elementary_fees</td>
                <td><input type="text" name="elementary_fees" value=""/></td>
            </tr>
            <tr>
                <td>secondary fees</td>
                <td><input type="text" name="sec_fees" value=""/></td>
            </tr>
            <tr>
                <td>Branch</td>
                <td><input type="text" name="branch" value=""/></td>
            </tr>
            <tr>
                <td><input type="submit" name="UpdateSchool" value="Modify"></td>
            </tr>
         </table>
     </form>

<?php

if(isset($_GET['UpdateSchool'])) {
    $school_name=($_GET['school_name']);
    $area=($_GET['area']);
    $location=($_GET['location']);
    $rank1=($_GET['rank1']);
    $board=($_GET['board']);
    $mont_fees=($_GET['mont_fees']);
    $elementary_fees=($_GET['elementary_fees']);
    $sec_fees=($_GET['sec_fees']);
    $branch=($_GET['branch']);
 

  //Update Data if no Error
  
    //MODIFICATION QUERY
    $query = "UPDATE schools SET school_name='$school_name',area='$area',location='$location',rank1='$rank1',board='$board',mont_fees='$mont_fees',elementary_fees='$elementary_fees',sec_fees='$sec_fees',branch='$branch'
    WHERE school_name ='$school_name'";
    $query_temp = "UPDATE temp SET school_name='$school_name',area='$area',location='$location',rank1='$rank1',board='$board',mont_fees='$mont_fees',elementary_fees='$elementary_fees',sec_fees='$sec_fees',branch='$branch'
    WHERE school_name ='$school_name'";
    $data = mysqli_query($db, $query);
$data_temp = mysqli_query($db, $query_temp);
//$data1 = mysqli_query($conn1, $query1);
  if ($data && $data_temp) {
    echo "data asynchronously update ";
    
    # code...
  }
  
  
}


//END OF MODIFICATION
?>