<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles/signup.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@100&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&family=Roboto+Mono:wght@100&display=swap" rel="stylesheet" />
    <title>Personal info</title>
    <link rel="stylesheet" href="styles/data_col.css" />


</head>

<body>
    <div class="home">
        <a href="/flex_v1/homepage.php"><img class="logo_img" src="flex-low-resolution-logo-color-on-transparent-background.png" alt="home" /></a>
    </div>
    <div class="info">
        <div id="title">
            <center>
                Tell us more about yourself so we can prepare a suitable workout plan
                for you</center>
        </div>
        <div class="data_form">
            <form action="data_col.php" method="post">
                <div class="infotype"><label for="age">Age: </label>
                    <input type="range" id="slider" max="89" min="12" name="age" oninput="updateSliderValue(this.value)">
                    <span id="sliderValue">35</span>
                    <script>
                        function updateSliderValue(value) {
                            document.getElementById("sliderValue").textContent = value;
                        }
                    </script>
                </div>
        </div>
        <div class="infotype">
            <label for="gender" id="gender">Gender:</label>
            <input type="radio" id="male" value="male" name="gender">
            <label for="male">Male</label>
            <input type="radio" id="female" value="female" name="gender">
            <label for="female">Female</label>

        </div>
        <div class="infotype">
            <label for="weight">Weight (in kg): </label>
            <input type="range" id="slider2" name="weight" max="300" min="20" oninput="updateSliderValue2(this.value)">
            <span id="sliderValue2">100</span>kg
            <script>
                function updateSliderValue2(value) {
                    document.getElementById("sliderValue2").textContent = value;
                }
            </script>
        </div>
        <div class="infotype">
            <label for="disease">have you ever experienced cardio vascular disease before: </label>
            <input type="radio" name="disease" id="yes" value="yes" class="radio" required>
            <label for="yes">Yes</label>
            <input type="radio" name="disease" id="no" value="no">
            <label for="no">No</label>
        </div>
        <div class="infotype">
            <label for="intensity">choose training intensity: </label>
            <select name="intensity" id="intensity">
                <option value="beginner">Beginner</option>
                <option value="intermediate">Intermediate</option>
                <option value="advanced">Advanced</option>
            </select>
        </div>
        <div>
            <center> <button type="submit" id="start" name="start">start</button></center>
        </div>


        </form>

    </div>
</body>

</html>
<?php
if (isset($_POST['start'])) {

    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $weight = $_POST['weight'];
    $disease = $_POST['disease'];
    $intensity = $_POST['intensity'];
    $email = $_SESSION['email'];

    $_SESSION['age'] = $age;
    $_SESSION['weight'] = $weight;
    $_SESSION['disease'] = $disease;
    $_SESSION['intensity'] = $intensity;
    include_once 'connect.php';

    $db = new PersonalDB();

    if ($db->addMoreInfo($age, $gender, $weight, $disease, $intensity, $email)) {

        $_SESSION['age'] = $age;
        $_SESSION['weight'] = $weight;
        $_SESSION['disease'] = $disease;
        $_SESSION['intensity'] = $intensity;

        echo '<script>window.location.href = "planmaker.php";</script>';
    } else echo "couldn't access the database";
}
