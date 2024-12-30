<?php
session_start();
if (isset($_COOKIE['email'])) {
    $_SERVER['email'] = $_COOKIE['email'];
    echo '<script>window.location.href = "tracker.php";</script>';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@100&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&family=Roboto+Mono:wght@100&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="styles/login.css" />


    <script>
        function togglePasswordVisibility() {
            event.preventDefault();

            var passwordInput = document.getElementById("pword");
            var toggleButton = document.getElementById("togglePasswordButton");

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
        <a href="/flex_v1/homepage.php"><img class="logo_img" src="flex-low-resolution-logo-color-on-transparent-background.png" alt="home" /></a>
    </div>
    <div class="login">
        <div id="title">Login</div>
        <div class="form">
            <form action="login.php" method="post">
                <div class="form_item">
                    <div class="form_item">
                        <label for="email">Email: </label>
                        <input type="email" id="email" name="email" placeholder="abc@xyz" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>" required />
                        <p id="nfemail" style="color: red; font-size:smaller"></p>
                    </div>
                    <br />
                    <div class="form_item">
                        <div class="password-container">
                            <label for="pword">Password: </label>
                            <input type="password" id="pword" name="pword" value="<?php echo isset($_POST['pword']) ? $_POST['pword'] : ''; ?>" required />
                            <button id="togglePasswordButton" onclick="togglePasswordVisibility()">&#128065;</button>
                        </div>
                    </div>
                    <br />
                </div>
                <center>
                    <input type="submit" value="login" id="login" name="login" />
                </center>
            </form>
        </div>
    </div>
</body>

</html>
<?php
if (isset($_POST['login'])) {
    require_once 'validator.php';
    require_once 'connect.php';

    $email = $_POST['email'];
    $email = htmlspecialchars($email);
    $password = $_POST['pword'];

    $verifier = new personalDB();

    if ($verifier->verifyUser($email, $password)) {
        $_SESSION['email'] = $email;
        echo '<script>window.location.href = "setcookielogin.php";</script>';
    }
}
