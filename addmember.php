<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
$servername = "localhost";
$username = "root";
$password = "";
$database = "demo";

$conn = new mysqli($servername,$username,$password,$database);
if($conn->connect_error)
{
	die("connection failed:" .$conn->connect_error);
}
else{
$folder = "img/";
$name=$_POST['hotel-name'];
$city=$_POST['hotel-city'];
$state=$_POST['hotel-state'];
$street=$_POST['hotel-street'];
$add=$_POST['hotel-add'];
$mobile=$_POST['hotel-mobile'];
$details=$_POST['hotel-details'];
$user=$_SESSION['username'];

move_uploaded_file($_FILES["hotelimage"]["tmp_name"] , "$folder".$_FILES["hotelimage"]["name"]);
 $file="img/".$_FILES["hotelimage"]["name"];
$sql="UPDATE vdata SET name='$name',details='$details',image='$file',city='$city',state='$state',street='$street',addres='$add',mobile='$mobile' where email='$user' ";
$result = $conn->query($sql);
$result=mysqli_query($conn,$sql);
if(!$result) { 
   echo "<script>Error: </script>" . $sql . "<script><br></script>" . $conn->error;
 }
else {
    echo "<script>alert(\"Uploded\")</script><br>"; 
header("Location: index.html");
 
}
}
}
?>
