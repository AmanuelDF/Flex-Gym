<?php
session_start();

$email = $_SESSION['email'];
require_once 'connect.php';
$person = new PersonalDB();

$user_id = $person->retrieveID($email);
$exercises = $person->retrieveUserExercise($user_id);

if (isset($_POST['finish'])) {
    $update = $person->updateExercises($exercises, $user_id);
    echo $update;
    if ($update == 1) {
        echo '<script>window.location.href = "completed.php";</script>';
    } else {
        echo '<script>window.location.href = "finished.php";</script>';
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Exercise Tracker</title>
    <link rel="stylesheet" href="styles/signup.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@100&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&family=Roboto+Mono:wght@100&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: rgb(30, 30, 30);
            color: white;
            font-family: Quicksand, Arial;
        }

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            width: 50px;
            background-color: #333;
            color: #fff;
            overflow-y: auto;
            transition: width 0.3s;
            display: flex;
            flex-direction: column;
        }

        .sidebar:hover {
            width: 200px;
            bottom: 0;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
            margin: 0;
            flex-grow: 1;
        }

        .sidebar li {
            padding: 10px;
            text-align: center;
            display: flex;
            align-items: center;
        }

        .sidebar li:hover {
            background-color: #555;
        }

        .sidebar a {
            color: #fff;
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: flex-start;
        }

        .sidebar i {
            margin-right: 10px;
            font-size: 24px;
        }

        .sidebar span {
            display: none;
        }

        .sidebar:hover span {
            display: inline;
        }

        .sidebar .logout {
            margin-top: auto;
        }

        .sidebar .logout a {
            color: #fff;
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            padding: 10px;
            transition: background-color 0.3s;
        }

        .sidebar .logout a:hover {
            background-color: #555;
        }

        .content {
            margin-left: 100px;
            padding: 20px;
        }


        h2 {
            margin-top: 20px;
            font-size: 40px;
            margin-bottom: 40px;
        }

        .media-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 50px;
        }

        img {
            width: 100%;
            max-width: 500px;
            height: auto;
            margin-bottom: 10px;
            margin-right: 50px;

        }

        iframe {
            width: 100%;
            max-width: 560px;
            height: 315px;
            margin-bottom: 10px;
        }

        button {
            background-color: rgb(30, 30, 30);
            color: white;
            padding: 15px 30px;
            border: solid;
            border-radius: 5px;
            border-width: 2px;
            border-color: lightskyblue;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 25px;
            margin-top: 100px;
            margin-right: 10px;
            margin-bottom: 60px;
            cursor: pointer;
            transition: background-color 0.2s, color 0.2s, border 0.2s, box-shadow 0.2s;
        }

        button:hover {
            background-color: white;
            color: black;
            border: none;
            box-shadow: 0 0 10px black;
            margin-bottom: 64px;

        }

        progress {
            margin-top: 70px;
            width: 500px;
            height: 20px;
            background-color: lightblue;
            border-radius: 10px;
            margin-bottom: 10px;
            overflow: hidden;
        }

        .progress-fill {
            height: 100%;
            background-color: purple;
            transition: width 0.3s ease-in-out;
        }

        .progress-bar-complete {
            background-color: lightblue;
        }

        .specification {
            display: block;
            margin-top: 50px;
            margin-bottom: 0px;
            font-size: 20px;
            font-family: Roboto Mono;
            padding-bottom: 10px;
            margin-left: 30px;
        }

        p {
            display: inline;
            font-size: 30px;
            font-family: Roboto Mono;
            padding-bottom: 10px;
            margin-left: 30px;
        }

        .welcome {
            margin-top: 50px;
            font-size: 50px;
            margin-bottom: 40px;
        }

        .encourage {
            margin-top: 20px;
            font-size: 30px;
            font-family: Roboto Mono;
            margin-bottom: 70px;
            font-weight: normal;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <ul>
            <li><a href="profile.php" target="_blank"><i class="fas fa-user"></i><span>Profile</span></a></li>
        </ul>
        <div class="logout">
            <a href="logout.php"><i class="fas fa-sign-out-alt"></i><span>Logout</span></a>
        </div>
    </div>

    <div class="content">
        <center>
            <h2 class="welcome"> Welcome Back
                <?php
                $db = new PersonalDB();
                $name = $db->retrieveName($email);
                echo $name; ?></h2>
        </center>
        <center>
            <h3 class="encourage">"You Are One Step Closer To Complete Your Dream "</h3>
        </center>

        <?php
        for ($i = 0; $i < 9; $i++) {
            echo "
    <div class=\"exercises$i\">
        <center><h2>{$exercises[$i]['name']}</h2></center>
        <div class=\"media-container\">
            <img src=\"{$exercises[$i]['image']}\" alt=\"{$exercises[$i]['name']} Image\">
            <iframe width=\"500\" height=\"281\" src=\"{$exercises[$i]['video']}\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>
        </div>
        <center><p class=\"specification\">{$exercises[$i]['reps']} reps for {$exercises[$i]['sets']} sets</p></center>
        <center><progress value=\"{$exercises[$i]['progress']}\" max=\"100\">{$exercises[$i]['progress']}%</progress></center>
        <center><p class=\"progress-specification\">{$exercises[$i]['progress']}% complete</p></center>
        <center><button onclick=\"removeDiv$i()\" name=\"complete$i\">Complete</button></center>
    </div>
    <script>
    function removeDiv$i() {
        var divToRemove = document.querySelector(\".exercises$i\");
                divToRemove.remove();

    }
    
    </script>";
        }

        ?>
        <form action="tracker.php" method="post">
            <center> <button name="finish">Finish</button>
                <center>
        </form>
    </div>

    <script src="https://kit.fontawesome.com/your-font-awesome-kit.js" crossorigin="anonymous"></script>
</body>

</html>