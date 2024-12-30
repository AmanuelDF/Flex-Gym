<?php
session_start();
include 'user_exercise.php';
$saver = new ExerciseSave();
$email = $_SESSION['email'];

$exercises = $saver->getExercisesFromCookie();
$exercisesIDs = $saver->getExerciseIds($exercises);
$userID = $saver->getUserId($email);
$sets = $saver->getExerciseSets($exercises);
$reps = $saver->getExerciseReps($exercises);
$days = $saver->getExerciseDays($exercises);

$saver->addUserExercise($exercisesIDs, $userID, $sets, $reps, $days);

echo '<script>window.location.href = "tracker.php";</script>';
