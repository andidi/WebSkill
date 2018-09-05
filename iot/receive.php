<?php 
//http://localhost:8080/iot/receive.php?value=200

$data = $_GET['value'];

//info ==user, database
$servername = "localhost";
$username = "test123";
$password = "test123";
//database information
$databaseName = "iot";
$tableName = "light";
//connect dbms

$con=mysqli_connect($servername, $username, $password,$databaseName);

if ($con->connect_error) {
    die("Too bad!!!! Connection failed: " . $con->connect_error);
} 
//echo "Connected successfully !!!! Yayaya.=======...";

//connect db
// Change database to "test"
mysqli_select_db($con,$tableName);

//select
//Query database for data
 
$result= mysqli_query($con,"insert into $tableName (value) VALUES ($data)");
  //check success or not
 if($result==1)
    echo "success";
  else
    echo "error";

//close db
mysqli_close($con);

 ?>


