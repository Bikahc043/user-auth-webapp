<?php
require './conection.php';
if (isset($_POST['submitButton'])) {
    $name=$_POST['name'];
    $password=$_POST['password'];
    if (!empty($_POST['name'])&&!empty($_POST['password'])) {
        $insert=loginlogout::login($name,$password);
    }else {
        echo "<script>
        alert('Please, fill all the fiels...!');
        </script>
        ";
    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sign up form</title>
</head>
<style>
    form{
        height: 230px;
    }
</style>
<body style="background:url('https://images.unsplash.com/photo-1472289065668-ce650ac443d2?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')">
   <div class="main">
    <div class="form">
        <div class="content">
            <h1>LOGIN</h1>
            <form action="" method="post">
                <input type="text" name="name" placeholder="Username">
                <input type="password" name="password" placeholder="Password">
                <input type="submit" value="Login" name="submitButton">
            </form>
        </div>
    </div>
   </div> 
</body>
</html>