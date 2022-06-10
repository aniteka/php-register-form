<?php
$login = filter_var(    trim($_POST["login"]), 
                        FILTER_SANITIZE_STRING); 
$pass = filter_var(     trim($_POST["pass"]), 
                        FILTER_SANITIZE_STRING);

$pass = md5($pass . "qwerty123");

$mysql = new mysqli("localhost","root","zaraboy101010","register-bd");
$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass';");
$user = (array)$result->fetch_assoc();
$mysql->close();
if(count($user) == 0)
{
    echo "Не заєрестрований користувач";
    exit();
}

setcookie("user", $user["name"], time() + 3600, "/");


header('Location: /');
?>