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

	 
?>
<!DOCTYPE html>
<html>
<head>
<title>Insert School</title>
<link rel="stylesheet" href="../CSS/pages.css">
</head>
<body>
    
   <form class="form" action=" "  method="GET" > 
        <h1>Insertion</h1>
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
                <td><input type="submit" name="asynSchool" value="Insert"></td>
            </tr>
            <tr>
            	<td><input type="submit" name="async" value="Asynchronous Insertion"></td>
            </tr>
            
         </table>
     </form>

<?php
	if(isset($_GET['asynSchool']))
	{
// getting data through global array
	

	$school_name=($_GET['school_name']);
  $area=($_GET['area']);
  $location=($_GET['location']);
  $rank1=(isset($_GET['rank1']));
  $board=($_GET['board']);
  $mont_fees=($_GET['mont_fees']);
  $elementary_fees=($_GET['elementary_fees']);
  $sec_fees=($_GET['sec_fees']);
  $branch=($_GET['branch']);

//echo "$rn";  //displaying data on page

//check that form fields are not empty
//if($school_id!="",$school_name !="", $area !="",$location !="",$rank !="",$board !="",$mont_fees !="",$elementary_fees !="",$sec_fees !="",$branch !="")
//	{
// Now inserting data into database
$query ="INSERT INTO schools (school_name,area,location,rank1,board,mont_fees,elementary_fees,sec_fees,branch) 
                VALUES('$school_name', '$area','$location','$rank1','$board','$mont_fees','$elementary_fees','$sec_fees','$branch')";

$query_temp ="INSERT INTO temp (school_name,area,location,rank1,board,mont_fees,elementary_fees,sec_fees,branch) 
                VALUES('$school_name', '$area','$location','$rank1','$board','$mont_fees','$elementary_fees','$sec_fees','$branch')";

$data = mysqli_query($conn, $query);
$data_temp = mysqli_query($conn, $query_temp);
//$data1 = mysqli_query($conn1, $query1);



if($data && $data_temp)		{
		echo "Data inserted successfully";
		}
else
{
	echo "All fields are required";
}



}
else if(isset($_GET['async']))
{
	$sql1 = "SELECT * from temp";
$results = mysqli_query($conn, $sql1);
//echo "$results";
while($row = mysqli_fetch_array($results)){

   
	$school_name=$row['school_name'];
  $area=$row['area'];
  $location=$row['location'];
  $rank1=$row['rank1'];
  $board=$row['board'];
  $mont_fees=$row['mont_fees'];
  $elementary_fees=$row['elementary_fees'];
  $sec_fees=$row['sec_fees'];
  $branch=$row['branch'];
   $query1 ="INSERT INTO students (school_name,area,location,rank1,board,mont_fees,elementary_fees,sec_fees,branch) 
                VALUES('$school_name', '$area','$location','$rank1','$board','$mont_fees','$elementary_fees','$sec_fees','$branch')";

  $sql2 = mysqli_query($conn1, $query1);
  
}
if($sql2)
		{
		echo "\n Data Asynchronously inserted successfully";
		}
	
else
{
	echo "All fields are required";
}


$sql3 = "TRUNCATE Table temp";
$results = mysqli_query($conn, $sql3);

}

?>
</body>
</html>

