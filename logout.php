<?php
include "login.class";
$login=new login;
$login->destroy_cookie();
$login->sessiondestroy();
?>