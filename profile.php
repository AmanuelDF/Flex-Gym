<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Account</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@100&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&family=Roboto+Mono:wght@100&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="styles/profile.css" />


    <script>
        function confirmDelete() {
            if (confirm("Are you sure you want to delete your account?")) {

                window.location.href = "delete.php";
            } else {

            }
        }
    </script>


</head>

<body>
    <div class="home">
        <a href="/flex_v1/homepage.php"><img class="logo_img" src="flex-low-resolution-logo-color-on-transparent-background.png" alt="home" /></a>
    </div>
    <div class="sign_up">
        <div id="title">Account</div>
        <div id="edit">
            <a href="editprofile.php" id="signups">Edit Profile</a>
        </div>
        <div id="edit">
            <button onclick="confirmDelete()" id="signups">Delete Account</delete>
        </div>
    </div>

</body>

</html>