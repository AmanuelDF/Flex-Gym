<?php
session_start();

$totalCalories = isset($_SESSION['total_calories']) ? $_SESSION['total_calories'] : 0; // Retrieve total calories
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Exercise Tracker</title>
    <link rel="stylesheet" href="styles/signup.css" />
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
            text-align: center;
        }

        .content p {
            margin-bottom: 20px;
            font-size: 20px;
        }

        .content p:first-child {
            font-size: 24px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <ul>
            <li><a href="profile.php"><i class="fas fa-user"></i><span>Profile</span></a></li>
        </ul>
        <div class="logout">
            <a href="logout.php"><i class="fas fa-sign-out-alt"></i><span>Logout</span></a>
        </div>
    </div>

    <div class="content">
        <center>
            <h2>Congratulations!</h2>
            <p>You have successfully completed today's workout.</p>
            <p>You burned a total of <strong><?php echo $totalCalories; ?> kcal</strong> today!</p>
            <p>Always remember, "No pain, no gain!"</p>
        </center>
    </div>
</body>

</html>