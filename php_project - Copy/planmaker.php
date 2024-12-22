<?php
session_start();

require 'connect.php';
require 'planalgorithm.php';
$age = $_SESSION['age'];
$weight = $_SESSION['weight'];
$disease = $_SESSION['disease'];
$intensity = $_SESSION['intensity'];

$exercises = new ExerciseChooser();
$result = array();
$result = $exercises->exercisesForYou($age, $weight, $disease, $intensity);
$plans = $exercises->exercisePlan($result);
if (!isset($_POST['start'])) {
    $i = 1;
    foreach ($plans as $plan) {
        $exercise[$i] = serialize($plan);
        $i++;
    }
    for ($j = 1; $j < $i; $j++)
        setcookie("exercise{$j}", $exercise[$j], time() + 3600);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@100&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&family=Roboto+Mono:wght@100&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="styles/planmaker.css" />

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const floatingItems = document.querySelector(".exercises");

            function startFloating() {
                const items = floatingItems.querySelectorAll(".exercise");
                items.forEach((item) => {
                    const delay = Math.random() * 2000;

                    setTimeout(() => {
                        item.classList.add("floating");
                    }, delay);
                });
            }

            startFloating();


        });

        function refreshPage() {
            location.reload();
        }
    </script>
</head>

<body>


    <div class="home">
        <a href="flexhome.html"><img class="logo_img" src="flex-low-resolution-logo-color-on-transparent-background.png" alt="home" /></a>
    </div>
    <div class="exercises">
        <?php
        foreach ($plans as $plan) {
            if (isset($plan['image_path']) && (isset($plan['name']))) {
                echo "
        <div class=\"exercise\">
        
            <img class= \"image\" src=\"{$plan['image_path']}\" alt=\"{$plan['name']}\">
            <p class=\"name\">{$plan['name']}</p>
        </div>";
            }
        }
        ?>
    </div>
    <form action="planmaker.php" method="post">
        <div class="buttons">
            <button class="refresh" onclick="refreshPage()">Generate New Exercises</button>
            <button class="start" type="submit" name="start">Get Started</button>
        </div>
    </form>
</body>

</html>
<?php
if (isset($_POST['start'])) {
    echo '<script>window.location.href = "userexerciseregister.php";</script>';
}
