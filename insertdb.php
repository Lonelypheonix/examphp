<?php
$servername = "localhost";         
$username = "root";
$password = "";
$dbname = "varshadb"; // DB Name

$rollno=$_POST["rollno"]; //name attribute value
$name=$_POST["name"];//name attribute value
$email=$_POST["email"];//name attribute value
$mobile=$_POST["mobile"];//name attribute value
$gender=$_POST["gender"];//name attribute value
$city=$_POST["city"];//name attribute value
$state=$_POST["state"];//name attribute value
$specialization=$_POST["specialization"];//name attribute value
// Create connection
$conn = mysqli_connect($servername, 
$username, $password, $dbname);
// Check connection
if (!$conn) 
{
  die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO student VALUES ('$rollno',
'$name','$email','$mobile','$gender','$city','$state','$specialization')";
//srf table name
if (mysqli_query($conn, $sql)) 
{
  echo "New record created successfully";
} 
else 
{
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>


