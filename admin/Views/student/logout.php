<?php
session_start();

session_destroy();
if (isset($_COOKIE["username"]) AND isset($_COOKIE["password"])){
    setcookie("username", '', time() - (3600));
    setcookie("password", '', time() - (3600));
}
unset($_SESSION["username"]);
header('location:/QLSV/admin?Controller=login&action=loginuser');
?>