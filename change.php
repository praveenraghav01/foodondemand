<?php
include"login.class";
$login=new login;
if($_SERVER['REQUEST_METHOD'] == 'POST')
{

    $login->change($_SESSION['username'],$_POST['old'],$_POST['new'],$_POST['cnfrm']);
}
?>