<?php
session_start();
if (isset($_SESSION['name_changed']) || isset($_SESSION['email_changed'])) {

    if ($_SESSION['name_changed'] == "name changed") {
        echo "<center><p style=\"font-size: 20px; font-family: Quicksand\">Name has been changed successfully</p></center>";
    }
    if ($_SESSION['email_changed'] == "email changed") {
        echo "<center><p style=\"font-size: 20px; font-family: Quicksand\">Email has been changed successfully</p></center>";
    }
}
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
</head>

<body>
    <div class="home">
        <a href="flexhome.html"><img class="logo_img" src="flex-low-resolution-logo-color-on-transparent-background.png" alt="home" /></a>
    </div>
    <div class="sign_up">
        <div id="title">Edit Profile</div>
        <div id="error"></div>
        <div class="form">
            <form action="editprofile.php" method="post" id="form">
                <div class="form_item">
                    <label for="name">New Name: </label>
                    <input type="text" name="FirstName" id="name" class="name" placeholder="First Name" value="<?php echo isset($_POST['FirstName']) ? $_POST['FirstName'] : ''; ?>" />
                    <input type="text" name="LastName" id="name" class="name" placeholder="Last Name" value="<?php echo isset($_POST['LastName']) ? $_POST['LastName'] : ''; ?>" ; />
                    <p id="error_name" style="color: red; font-size:smaller"></p>
                </div>
                <br />
                <div class="form_item">
                    <label for="email">New Email: </label>
                    <input type="email" id="email" name="email" placeholder="abc@xyz" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>" />
                    <p id="error_email" style="color: red; font-size:smaller"></p>
                </div>
        </div>
        <center>
            <div>
                <center>
                    <p id="not_set"></p>
                </center>
            </div>
            <input type="submit" id="signup" value="Save Changes" name="save">
        </center>
        </form>
    </div>
    </div>
</body>

</html>

<?php

if (isset($_POST['save'])) {
    include 'validator.php';
    $fname = $_POST['FirstName'];
    $lname = $_POST['LastName'];
    $new_email = $_POST['email'];

    $email = $_SESSION['email'];

    $validate = new Validate();
    $flag_fname = false;
    $flag_lname = false;
    $flag_email = false;
    if ($fname != "") {
        $flag_fname = $validate->validateName($fname);
    }
    if ($lname != "") {
        $flag_lname = $validate->validateName($lname);
    }
    if ($new_email != "") {
        $flag_email = $validate->validateEmail($new_email);
    } {
        require_once 'connect.php';
        $pdb = new PersonalDB();
        if ($flag_fname && $flag_lname) {
            if ($fname != "" && $lname != "") {
                echo "skja";
                $success = $pdb->editProfileName($fname, $lname, $email);
                if ($success) {
                    $_SESSION['name_changed'] = "name changed";
                }
            }
            if ($flag_email) {
                if ($email != "") {
                    $success = $pdb->editEmail($email, $new_email);
                    if ($success) {
                        $_SESSION['email_changed'] = "email changed";
                        $_SESSION['email'] = $new_email;
                    }
                }
            }
            if ($fname == "" && $lname == "" && $new_email == "") {
                echo "
                <script>
                document.getElementById(\"not_set\").innerHTML=(\"you have not made any changes\");
                </script>";
            }
        }
    }
}
