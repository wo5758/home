<?php
require("../../config.php");
$email="";
$pass="";
$name="";
if(isset($_POST["useremail"])){
    $email=$_POST["useremail"];
}
if(isset($_POST["userpass"])){
    $pass=$_POST["userpass"];
}
if(isset($_POST["username"])){
    $name=$_POST["username"];
}
if($email&&$pass&&$name){
    $sql = "insert into users set email='{$email}',pass=password('{$pass}'),username='{$name}',lastlogin=now()";
    $db->query($sql);
}
header("Location: /home/");
exit;