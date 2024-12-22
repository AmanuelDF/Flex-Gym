<?php
session_start();
$email = $_SESSION['email'];
setcookie('email', $email, time() + 86400 * 30, '/');
echo '<script>window.location.href = "tracker.php";</script>';
