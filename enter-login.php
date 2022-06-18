<?php
include('config.php');

if(empty($_POST['cadastrados']) || empty($_POST['senha'])){
    header('Location: login.php');
    exit();
}

$cadastrados = $_POST['cadastrados'];
$senha = $_POST['senha'];

?>