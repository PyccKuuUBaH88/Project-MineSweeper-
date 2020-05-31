<?php
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET, POST');
    header("Access-Control-Allow-Headers: Content-Type");
    header('Content-Type: application/json;charset=utf-8');
    $login = $_GET['login'];
    $password = $_GET['pass'];
    $inKey = $_GET['inKey'];
    $mysqli = mysqli_connect("mysql-160578.srv.hoster.ru","srv160578_kosty","123321","srv160578_kosty");
    $mysqli->query("SET NAMES utf8");
    if($inKey == 0){
    $sql = "SELECT id, login, pass FROM userAccounts WHERE login = '$login' AND pass = '$password'";
    $result = $mysqli->query($sql);
    for($i=0; $row = mysqli_fetch_assoc($result); $i++){
        $test[] = $row;
    };
    print json_encode($test, JSON_UNESCAPED_UNICODE); 
    } else if($inKey != 0){
        $sql = "SELECT id, login, pass, inKey FROM userAccounts WHERE login = 'anonymous' AND pass = '$password' AND inKey = '$inKey'";
        $result = $mysqli->query($sql);
        for($i=0; $row = mysqli_fetch_assoc($result); $i++){
            $test[] = $row;
        };
        print json_encode($test, JSON_UNESCAPED_UNICODE);
    }  
?>