<?php
include "login.class";
$login=new login;
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$type=$_POST['type'];
$mobile=$_Post['mobile'];
$login->register($username,$password,$email,$type,$mobile);
}
?>