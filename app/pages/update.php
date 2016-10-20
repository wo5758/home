<?php
require("../../config.php");
$email="";
$pass="";
$name="";
$email=$_POST["useremail"];
$pass=$_POST["userpass"];
$name=$_POST["username"];
if($pass!=""){
    $sql = "update users set email='{$email}',pass=password('{$pass}'),username='{$name}',lastlogin=now() where email='{$member["userid"]}'";
    echo 0;
}else{
    $sql = "update users set email='{$email}',username='{$name}',lastlogin=now() where email='{$member["userid"]}'";
    echo 1;
}
$db->query($sql);
$sql="select * from users where email='{$email}'";
if($rs=$db->query($sql)){
    if($user=$rs->fetch()){
        $_SESSION["userid"]=$user["email"];
        $_SESSION["username"]=$user["username"];
        $_SESSION["userlogin"]=true;
    }
}
header("Location: /home/");
exit;