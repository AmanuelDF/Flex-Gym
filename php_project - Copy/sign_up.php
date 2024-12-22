<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up</title>
    <link rel="stylesheet" href="styles/signup.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@100&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&family=Roboto+Mono:wght@100&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="styles/sign_up.css" />


    <script>
        function togglePasswordVisibility1() {
            event.preventDefault();

            var passwordInput = document.getElementById("cpword");
            var toggleButton = document.getElementById("togglePasswordButton1");

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                toggleButton.innerHTML = "&#128064;";
            } else {
                passwordInput.type = "password";
                toggleButton.innerHTML = "&#128065;";
            }
        }

        function togglePasswordVisibility2() {
            event.preventDefault();

            var passwordInput = document.getElementById("pword");
            var toggleButton = document.getElementById("togglePasswordButton2");

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                toggleButton.innerHTML = "&#128064;";
            } else {
                passwordInput.type = "password";
                toggleButton.innerHTML = "&#128065;";
            }
        }
    </script>
</head>

<body>
    <div class="home">
        <a href="flexhome.html"><img class="logo_img" src="flex-low-resolution-logo-color-on-transparent-background.png" alt="home" /></a>
    </div>
    <div class="sign_up">
        <div id="title">Sign Up</div>
        <div id="error"></div>
        <div class="form">
            <form action="sign_up.php" method="post" id="form">
                <div class="form_item">
                    <label for="name">Name: </label>
                    <input type="text" name="FirstName" id="name" class="name" placeholder="First Name" value="<?php echo isset($_POST['FirstName']) ? $_POST['FirstName'] : ''; ?>" required />
                    <input type="text" name="LastName" id="name" class="name" placeholder="Last Name" value="<?php echo isset($_POST['LastName']) ? $_POST['LastName'] : ''; ?>" required; />
                    <p id="error_name" style="color: red; font-size:smaller"></p>
                </div>
                <br />
                <div class="form_item">
                    <label for="email">Email: </label>
                    <input type="email" id="email" name="email" placeholder="abc@xyz" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>" required />
                    <p id="error_email" style="color: red; font-size:smaller"></p>
                </div>
                <br />
                <div class="form_item">
                    <div class="password-container">
                        <label for="pword">Password: </label>
                        <input type="password" id="pword" name="pword" value="<?php echo isset($_POST['pword']) ? $_POST['pword'] : ''; ?>" required />
                        <button id="togglePasswordButton2" onclick="togglePasswordVisibility2()">&#128065;</button>
                        <p id="error_pass" style="color: red; font-size:smaller"></p>
                    </div>
                </div>
                <br />
                <div class="form_item">
                    <div class="password-container">
                        <label for="cpword">Confirm Password: </label>
                        <input type="password" id="cpword" name="cpword" value="<?php echo isset($_POST['cpword']) ? $_POST['cpword'] : ''; ?>" required />
                        <button id="togglePasswordButton1" onclick="togglePasswordVisibility1()">&#128065;</button>
                        <p id="error_pass" style="color: red; font-size:smaller"></p>
                        <p id="error_passcomp" style="color: red; font-size:smaller"></p>

                    </div>
                </div>
                <center>
                    <input type="submit" id="signup" value="Sign Up" name="sign_up">
                </center>
            </form>
        </div>
    </div>
</body>

</html>

<?php

if (isset($_POST['sign_up'])) {

    include 'validator.php';
    $fname = $_POST['FirstName'];
    $lname = $_POST['LastName'];
    $email = $_POST['email'];
    $pass = $_POST['pword'];
    $pass2 = $_POST['cpword'];

    $validate = new Validate();
    $flag_fname = $validate->validateName($fname);
    $flag_lname = $validate->validateName($lname);
    $flag_email = $validate->validateEmail($email);
    $flag_pass = $validate->validatePass($pass);
    $flag_comp = $validate->passCompare($pass, $pass2);

    if ($flag_fname && $flag_lname && $flag_email && $flag_pass && $flag_comp == true) {
        require_once 'connect.php';
        $pdb = new PersonalDB();
        $hashedPass = password_hash($pass, PASSWORD_DEFAULT);
        if ($pdb->insert($fname, $lname, $email, $hashedPass)) {

            $_SESSION['email'] = $email;
            $_SESSION['password'] = $hashedPass;
            echo '<script>window.location.href = "setcookiesignup.php";</script>';
        }
    }
}
