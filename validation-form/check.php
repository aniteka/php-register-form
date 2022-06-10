<?php
$login = filter_var(    trim($_POST["login"]), 
                        FILTER_SANITIZE_STRING); 
$name = filter_var(     trim($_POST["name"]), 
                        FILTER_SANITIZE_STRING);
$pass = filter_var(     trim($_POST["pass"]), 
                        FILTER_SANITIZE_STRING);
if(mb_strlen($login) < 5 || mb_strlen($login) > 90)
{
    echo "Довжина логіну недопустима";
    exit();
}
if(mb_strlen($name) < 5 || mb_strlen($name) > 90)
{
    echo "Довжина імені недопустима";
    exit();
}
if(mb_strlen($pass) < 5 || mb_strlen($pass) > 20)
{
    echo "Довжина пароля недопустима";
    exit();
}

$pass = md5($pass . "qwerty123");

$mysql = new mysqli("localhost","root","zaraboy101010","register-bd");
$mysql->query("INSERT INTO `users`(`login`, `pass`, `name`) 
               VALUES('$login', '$pass', '$name');");
$mysql->close();

header('Location: /');
?>