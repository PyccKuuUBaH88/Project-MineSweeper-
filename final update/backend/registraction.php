<?php
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET, POST');
    header("Access-Control-Allow-Headers: Content-Type");
    header('Content-Type: application/json;charset=utf-8');
    $email = $_GET['email'];
    $login = $_GET['login'];
    $password = $_GET['pass'];
    $inKey = $_GET['inKey'];
    $mysqli = mysqli_connect("mysql-160578.srv.hoster.ru", "srv160578_kosty", "123321", "srv160578_kosty");
    $mysqli->query("SET NAMES utf8");
    $sql = "INSERT INTO `userAccounts` (`id`, `email`, `login`, `pass`, `inKey`) VALUES (NULL, '$email', '$login', '$password', '$inKey')";
    $mysqli->query($sql); 
?>
