<?php
require './conection.php';
if (isset($_POST['submitButton'])) {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    if (!empty($_POST['name'])&&!empty($_POST['email'])&&!empty($_POST['password'])) {
        $insert=loginlogout::inserting($name, $email, $password);
        echo "
        <script>
        alert('User registered successfully...!');
        </script>
        ";
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
<body style="background:url('https://images.unsplash.com/photo-1472289065668-ce650ac443d2?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')">
   <div class="main">
    <div class="form">
        <div class="content">
            <form action="" method="post">
                <input type="text" name="name" placeholder="Name">
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Password">
                <input type="submit" value="Sign up" name="submitButton">
            </form>

        </div>
    </div>
   </div> 
</body>
</html>