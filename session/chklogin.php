<?php
$default_acc='123';
$default_pw='321';

$acc=$_POST['acc'];
$pw=$_POST['pw'];

$error="";


if ($acc!=$default_acc || $pw!=$default_pw) {
    $error="帳號或密碼錯誤";
    header("location:login.php?error=$error");    
}else{
    session_start();
    $_SESSION['login']=$acc;
    header("location:member.php") ;
}



?>