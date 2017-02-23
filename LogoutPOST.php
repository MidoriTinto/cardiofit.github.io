<?php
session_start(); //starts a session
if (isset($_SESSION['user_id'])){
session_unset($_SESSION['user_id']);//destroy all variable within a session
session_destroy();}
//echo 'You have successfully logged out!';
header('Location:Welcome.html');//redirects to login page


?>