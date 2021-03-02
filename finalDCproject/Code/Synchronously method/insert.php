<?php

// insertion for schools table synchronously

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "schoolfinder";


$servername1 = "192.168.43.10";
$username1 = "muneeba";
$password1 ="123";
$dbnamehq = "schoolfinder_hq";


// create connection

$conn=mysqli_connect($servername,$username,$password,$dbname );
$conn1=mysqli_connect($servername1,$username1,$password1,$dbnamehq);
// create connection

if ($conn1) {
	# code...
#echo "Conneciton Open";

}
else
		echo "Connection failed";
	// or use the die function to view the reason
if ($conn) {
    # code...
#echo "Conneciton Open";

}
else
        echo "Connection failed";

?>
<!DOCTYPE html>
<html>
<head>
<title>SchoolInsert</title>
<link rel="stylesheet" href="../CSS/pages.css">
</head>
<body>
    <form class="form" action=" " method='GET'>
        <h1>Insertion</h1>
        <table>

            <tr>
                <td>School Name</td>
                <td><input type="text" name="sname" value=""/></td>
            </tr>
            <tr>
                <td>Area</td>
                <td><input type="text" name="area" value=""/></td>
            </tr>
            <tr>
                <td>Location</td>
                <td><input type="text" name="location" value=""/></td>
            </tr>
            <tr>
                <td>Rank</td>
                <td><input type="text" name="srank" value=""/></td>
            </tr>
            <tr>
                <td>Board</td>
                <td><input type="text" name="board" value="" /></td>
            </tr>
            <tr>
                <td>Montessori fees</td>
                <td><input type="text" name="mont_fees" value=""/></td>
            </tr>
            <tr>
                <td>Elementary fees</td>
                <td><input type="text" name="element_fees" value=""/></td>
            </tr>
            <tr>
                <td>Secondary Fees</td>
                <td><input type="text" name="sec_fees" value=""/></td>
            </tr>
            <tr>
                <td>Branch</td>
                <td><input type="text" name="branch" value=""/></td>
            </tr>
            <tr>
                <td><button type="submit" name='SchoolInsert' class="button">Insert</button></td>
            </tr>
        </table>
    </form>

  <?php
      if(isset($_GET['SchoolInsert']))
      {
    // getting data through global array


      $school_name=($_GET['sname']);
      $area=($_GET['area']);
      $location=($_GET['location']);
      $rank1=(isset($_GET['srank']));
      $board=($_GET['board']);
      $mont_fees=($_GET['mont_fees']);
      $elementary_fees=($_GET['element_fees']);
      $sec_fees=($_GET['sec_fees']);
      $branch=($_GET['branch']);

    //echo "$rn";  //displaying data on page

    //check that form fields are not empty
    //if($school_id!="",$school_name !="", $area !="",$location !="",$rank !="",$board !="",$mont_fees !="",$elementary_fees !="",$sec_fees !="",$branch !="")
    //	{
    // Now inserting data into database
    $query ="INSERT INTO schools (school_name,area,location,rank1,board,mont_fees,elementary_fees,sec_fees,branch) 
                    VALUES('$school_name', '$area','$location','$rank1','$board','$mont_fees','$elementary_fees','$sec_fees','$branch')";
    $query1 ="INSERT INTO students (school_name,area,location,rank1,board,mont_fees,elementary_fees,sec_fees,branch)
                    VALUES('$school_name', '$area','$location','$rank1','$board','$mont_fees','$elementary_fees','$sec_fees','$branch')";
    $data = mysqli_query($conn, $query);
    $data1 = mysqli_query($conn1, $query1);

    if($data)
        {
        echo "Data inserted successfully";
        }

    else
    {
      echo "Data not inserted";
    }

    if($data1)
        {
        echo "\n Data Synchronously inserted successfully";
        }

    else
    {
      echo "Data not inserted";
    }

    }

    ?>




</body>
</html>
