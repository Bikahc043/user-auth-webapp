<?php
class loginlogout
{
    public static function conect()
    {
        try {
            $con = new PDO('mysql:host=localhost;dbname=loginlogoutsystem', 'root', '');
            return $con;
        } catch (PDOException $erro1) {
            echo $erro1->getMessage();
        } catch (Exception $erro2) {
            echo $erro2->getMessage();
        }
    }
    public static function inserting($name, $email, $password)
    {
        $insert = loginlogout::conect()->prepare("INSERT INTO users(name,email,password) VALUES(:n,:e,:p)");
        $insert->bindValue(':n', $name);
        $insert->bindValue(':e', $email);
        $insert->bindValue(':p', $password);
        $insert->execute();
    }
    public static function login($name,$password)
    {
        $login=loginlogout::conect()->prepare("SELECT id FROM users WHERE name=:n and password=:p");
        $login->bindValue(':n', $name);
        $login->bindValue(':p', $password);
        $login->execute();
        if ($login->rowCount()>0) {
           $fetch=$login->fetch(PDO::FETCH_ASSOC);
           session_start();
           $_SESSION['id']=$fetch['id'];
        //    echo 'Logged successfully.!';
           header('location:home.php');
        }else {
            $fetch=array();
            echo "
            <script>alert('User not found...!');</script>
            ";
        }
        return $fetch;
    }
}
