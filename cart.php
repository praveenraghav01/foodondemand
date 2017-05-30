<?php
session_start();
require"db.php";
if (!isset($_SESSION['username'])) 
{
header("Location: login.php");
}
else{
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $itemname=$_POST['itemname'];
    $rate=$_POST['rate'];
    $id=$_POST['id'];
    $user=$_SESSION['username'];
$sql1="SELECT * from cart WHERE id='$id' and user='$user'";
$result = $conn->query($sql1);
if ($result->num_rows > 0){
    $sql2="UPDATE cart set quantity=quantity+1 WHERE id='$id' and user='$user'";
$result = $conn->query($sql2);
}
else
{
    $sql2="INSERT INTO cart VALUE ('$id','$user','$itemname','$rate','1')";
$result = $conn->query($sql2);
}

}
else
{
    $id=$_GET['id'];
    $user=$_SESSION['username'];
    $value=$_GET['value'];
    $sql1="SELECT * from cart WHERE id='$id' and user='$user'";
$result = $conn->query($sql1);
if ($result->num_rows > 0 && $value==0)
{
    $sql3="UPDATE cart set quantity=quantity-1 WHERE id='$id' and user='$user'";
    $result1 = $conn->query($sql3);
    $sql1="SELECT * from cart WHERE id='$id' and user='$user'";
$result = $conn->query($sql1);
    if ($result->num_rows > 0)
{
    while($row = $result->fetch_assoc()) 
    {
    $ds=$row['quantity'];
    if($ds<1)
    {
    $sql4="DELETE FROM cart WHERE id='$id' and user='$user'";
    $result5 = $conn->query($sql4);
    }
    }
}
}
else if ($result->num_rows > 0 && $value==1){
    {
    $sql2="UPDATE cart set quantity=quantity+1 WHERE id='$id' and user='$user'";
    $result = $conn->query($sql2);
    }
}
else if ($result->num_rows > 0 && $value==3){
    {
    $sql4="DELETE FROM cart WHERE id='$id' and user='$user'";
    $result5 = $conn->query($sql4);
    }
}
}
header("Location: order-online.php");
}
    ?>