<?php
session_start();
unset($_SESSION['id']);
header('location:loginForm.php');
// echo 'You logged out.!';

exit();

?>