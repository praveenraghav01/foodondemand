<?php
include "db.php";
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $amount=$_POST['amount'];
$user=$_SESSION['username'];
    $mob=$_POST['deli-mobile'];
    $add=$_POST['deli-add'].",".$_POST['deli-street'].",".$_POST['deli-city'].",".$_POST['deli-state']."." ;
$id=abs( crc32( uniqid() ) );
$order=" ";
$sql="SELECT * FROM cart WHERE user='$user'";
$result = $conn->query($sql);
if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()) 
    {
        $order.= $row['name'].', ';
    }
   $sql1="INSERT INTO orders value ('$id','$mob','$user','$order','$add','$amount')";
$result = $conn->query($sql1);
if ($result)
{
$sql2="DELETE FROM cart WHERE user='$user'";
$result = $conn->query($sql2);
if ($result)
{
header("Location: order-success.php?id='$id'");
}
else
{
 echo "<script>Error: </script>" . $sql . "<script><br></script>" . $conn->error;
}
}
else
{
 echo "<script>Error: </script>" . $sql1 . "<script><br></script>" . $conn->error;
}
}
}
?>