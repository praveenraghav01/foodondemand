<?php
include"login.class";
$login=new login;
if($_SERVER['REQUEST_METHOD'] == 'POST')
{

    $login->verify1($_POST['username'],$_POST['password']);
}
?>

