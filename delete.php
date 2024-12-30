<?php
session_start();
require_once 'connect.php';
$database = new PersonalDB();

$database->deleteUser($_SESSION['email']);
echo '<script>window.location.href = "Homepage.php";</script>';
