<?php
class ExerciseSave
{
    public function addUserExercise($exercise_ids, $user_id, $sets, $reps, $days)
    {
        include_once 'connect.php';
        $dB = new PersonalDB();

        $count = count($exercise_ids);
        for ($i = 0; $i < $count; $i++) {
            $sql = "INSERT INTO exercise_user (user_id, exercise_id, progress, completed,sets, reps, days) VALUES ($user_id,$exercise_ids[$i],0,false, $sets[$i],$reps[$i],$days[$i])";
            $result = mysqli_query($dB->conn, $sql);
            if ($result == true) {
                echo "added successfully";
            } else
                echo "Error: " . $$query . "<br>" . mysqli_error($dB->conn);
        }
    }
    public function getUserId($email)
    {
        include_once 'connect.php';
        $dB = new PersonalDB();
        $query = "SELECT user_id FROM personal_info WHERE email = '$email'";
        $result = mysqli_query($dB->conn, $query);
        if ($result == true) {
            $user_id = $result->fetch_object()->user_id;
            return $user_id;
        } else {
            echo "Error: " . $$query . "<br>" . mysqli_error($dB->conn);
        }
    }
    public function getExerciseSets($exercises)
    {
        $sets = array();
        $i = 0;
        foreach ($exercises as $exercise) {
            echo $exercise['name'];
            echo $exercise['sets'];
            $sets[$i] = $exercise['sets'];
            $i++;
        }
        return $sets;
    }
    public function getExerciseReps($exercises)
    {
        $reps = array();
        $i = 0;
        foreach ($exercises as $exercise) {
            $reps[$i] = $exercise['reps'];
            $i++;
        }
        return $reps;
    }
    public function getExerciseDays($exercises)
    {
        $days = array();
        $i = 0;
        foreach ($exercises as $exercise) {
            $days[$i] = $exercise['days'];
            $i++;
        }
        return $days;
    }
    public function getExercisesFromCookie()
    {
        $exercises = array();
        if (isset($_COOKIE['exercise1'])) {
            for ($i = 1; $i <= 9; $i++) {
                $strEx[$i] = $_COOKIE["exercise{$i}"];
                $exercises[$i] = unserialize($strEx[$i]);
            }
        }
        return $exercises;
    }
    public function getExerciseIds($exercises)
    {
        $exercise_ids = array();
        $i = 0;
        foreach ($exercises as $exercise) {
            $exercise_ids[$i] = $exercise['exercise_id'];
            $i++;
        }
        return $exercise_ids;
    }
}
