<?php
include_once 'connect.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

class ExerciseChooser
{
    public function exercisesForYou($age, $weight, $disease, $intensity)
    {
        $parameters = array($age, $weight, $disease, $intensity);
        $query = "SELECT * FROM exercise_info WHERE category = ? ORDER BY RAND() LIMIT 1";
        $db = new PersonalDB();
        $conn = $db->conn;
        $results = array();
        if ($age < 19 || $age > 60 && $weight < 150 && $disease == "yes" && $intensity == "beginner") {

            $query = "SELECT * FROM exercise_info WHERE (age_class='all' AND (weight_class='all' OR weight_class='below_150') AND suitable_for_cardio='yes'AND intensity='beginner') ORDER BY RAND() LIMIT 9";
            $result = mysqli_query($conn, $query);

            while ($record = mysqli_fetch_assoc($result)) {
                $results[] = $record;
            }
        } else if ($age > 19 && $age < 60 && $weight < 150 && $disease == "yes" && $intensity == "beginner") {

            $query = "SELECT * FROM exercise_info WHERE ((age_class='all' OR age_class='teens,middle-aged') AND (weight_class='all' OR weight_class='below_150') AND suitable_for_cardio='yes'AND intensity='beginner') ORDER BY RAND() LIMIT 9";
            $result = mysqli_query($conn, $query);

            while ($record = mysqli_fetch_assoc($result)) {
                $results[] = $record;
            }
        } else if ($age < 19 || $age > 60 && $weight > 150 && $disease == "yes" && $intensity == "beginner") {

            $query = "SELECT * FROM exercise_info WHERE (age_class='all' AND weight_class='all' AND suitable_for_cardio='yes'AND intensity='beginner') ORDER BY RAND() LIMIT 9";
            $result = mysqli_query($conn, $query);

            while ($record = mysqli_fetch_assoc($result)) {
                $results[] = $record;
            }
        } else if ($age > 19 && $age < 60 && $weight > 150 && $disease == "yes" && $intensity == "beginner") {

            $query = "SELECT * FROM exercise_info WHERE ((age_class='all' OR age_class='teens,middle-aged') AND weight_class='all' AND suitable_for_cardio='yes'AND intensity='beginner') ORDER BY RAND() LIMIT 9";
            $result = mysqli_query($conn, $query);

            while ($record = mysqli_fetch_assoc($result)) {
                $results[] = $record;
            }
        } else if ($age < 19 || $age > 60 && $weight < 150 && $disease == "no" && $intensity == "beginner") {

            $query = "SELECT * FROM exercise_info WHERE (age_class='all' AND (weight_class='all' OR weight_class='below_150') AND intensity='beginner') ORDER BY RAND() LIMIT 9";
            $result = mysqli_query($conn, $query);

            while ($record = mysqli_fetch_assoc($result)) {
                $results[] = $record;
            }
        } else if ($age > 19 && $age < 60 && $weight < 150 && $disease == "no" && $intensity == "beginner") {

            $query = "SELECT * FROM exercise_info WHERE ((age_class='all' OR age_class='teens,middle-aged') AND (weight_class='all' OR weight_class='below_150') AND intensity='beginner') ORDER BY RAND() LIMIT 9";
            $result = mysqli_query($conn, $query);

            while ($record = mysqli_fetch_assoc($result)) {
                $results[] = $record;
            }
        } else if ($age < 19 || $age > 60 && $weight > 150 && $disease == "no" && $intensity == "beginner") {

            $query = "SELECT * FROM exercise_info WHERE (age_class='all' AND weight_class='all' AND intensity='beginner') ORDER BY RAND() LIMIT 9";
            $result = mysqli_query($conn, $query);

            while ($record = mysqli_fetch_assoc($result)) {
                $results[] = $record;
            }
        } else if ($age > 19 && $age < 60 && $weight > 150 && $disease == "no" && $intensity == "beginner") {

            $query = "SELECT * FROM exercise_info WHERE ((age_class='all' OR age_class='teens,middle-aged') AND weight_class='all' AND intensity='beginner') ORDER BY RAND() LIMIT 9";
            $result = mysqli_query($conn, $query);

            while ($record = mysqli_fetch_assoc($result)) {
                $results[] = $record;
            }
        } else if ($age < 19 || $age > 60 && $weight < 150 && $disease == "yes" && $intensity == "intermediate") {

            $query = "SELECT * FROM exercise_info WHERE (age_class='all' AND (weight_class='all' OR weight_class='below_150') AND suitable_for_cardio='yes'AND (intensity='intermediate' OR intensity='beginner')) ORDER BY RAND() LIMIT 9";
            $result = mysqli_query($conn, $query);

            while ($record = mysqli_fetch_assoc($result)) {
                $results[] = $record;
            }
        } else if ($age > 19 && $age < 60 && $weight < 150 && $disease == "yes" && $intensity == "intermediate") {

            $query = "SELECT * FROM exercise_info WHERE ((age_class='all' OR age_class='teens,middle-aged') AND (weight_class='all' OR weight_class='below_150') AND suitable_for_cardio='yes'AND (intensity='intermediate' OR intensity='beginner')) ORDER BY RAND() LIMIT 9";
            $result = mysqli_query($conn, $query);

            while ($record = mysqli_fetch_assoc($result)) {
                $results[] = $record;
            }
        } else if ($age < 19 || $age > 60 && $weight > 150 && $disease == "yes" && $intensity == "intermediate") {

            $query = "SELECT * FROM exercise_info WHERE (age_class='all' AND weight_class='all' AND suitable_for_cardio='yes'AND (intensity='intermediate' OR intensity='beginner')) ORDER BY RAND() LIMIT 9";
            $result = mysqli_query($conn, $query);

            while ($record = mysqli_fetch_assoc($result)) {
                $results[] = $record;
            }
        } else if ($age > 19 && $age < 60 && $weight > 150 && $disease == "yes" && $intensity == "intermediate") {

            $query = "SELECT * FROM exercise_info WHERE ((age_class='all' OR age_class='teens,middle-aged') AND weight_class='all' AND suitable_for_cardio='yes'AND (intensity='intermediate' OR intensity='beginner')) ORDER BY RAND() LIMIT 9";
            $result = mysqli_query($conn, $query);

            while ($record = mysqli_fetch_assoc($result)) {
                $results[] = $record;
            }
        } else if ($age < 19 || $age > 60 && $weight < 150 && $disease == "no" && $intensity == "intermediate") {

            $query = "SELECT * FROM exercise_info WHERE (age_class='all' AND (weight_class='all' OR weight_class='below_150') AND (intensity='intermediate' OR intensity='beginner')) ORDER BY RAND() LIMIT 9";
            $result = mysqli_query($conn, $query);
            while ($record = mysqli_fetch_assoc($result)) {
                $results[] = $record;
            }
        } else if ($age > 19 && $age < 60 && $weight < 150 && $disease == "no" && $intensity == "intermediate") {

            $query = "SELECT * FROM exercise_info WHERE ((age_class='all' OR age_class='teens,middle-aged') AND (weight_class='all' OR weight_class='below_150') AND (intensity='intermediate' OR intensity='beginner')) ORDER BY RAND() LIMIT 9";
            $result = mysqli_query($conn, $query);

            while ($record = mysqli_fetch_assoc($result)) {
                $results[] = $record;
            }
        } else if ($age < 19 || $age > 60 && $weight > 150 && $disease == "no" && $intensity == "intermediate") {

            $query = "SELECT * FROM exercise_info WHERE (age_class='all' AND weight_class='all' AND (intensity='intermediate' OR intensity='beginner')) ORDER BY RAND() LIMIT 9";
            $result = mysqli_query($conn, $query);

            while ($record = mysqli_fetch_assoc($result)) {
                $results[] = $record;
            }
        } else if ($age > 19 && $age < 60 && $weight > 150 && $disease == "no" && $intensity == "intermediate") {

            $query = "SELECT * FROM exercise_info WHERE ((age_class='all' OR age_class='teens,middle-aged') AND weight_class='all' AND (intensity='intermediate' OR intensity='beginner') ORDER BY RAND() LIMIT 9";
            $result = mysqli_query($conn, $query);

            while ($record = mysqli_fetch_assoc($result)) {
                $results[] = $record;
            }
        } else if ($age < 19 || $age > 60 && $weight < 150 && $disease == "yes" && $intensity == "advanced") {

            $query = "SELECT * FROM exercise_info WHERE (age_class='all' AND (weight_class='all' OR weight_class='below_150') AND suitable_for_cardio='yes') ORDER BY RAND() LIMIT 9";
            $result = mysqli_query($conn, $query);

            while ($record = mysqli_fetch_assoc($result)) {
                $results[] = $record;
            }
        } else if ($age > 19 && $age < 60 && $weight < 150 && $disease == "yes" && $intensity == "advanced") {

            $query = "SELECT * FROM exercise_info WHERE ((age_class='all' OR age_class='teens,middle-aged') AND (weight_class='all' OR weight_class='below_150') AND suitable_for_cardio='yes') ORDER BY RAND() LIMIT 9";
            $result = mysqli_query($conn, $query);

            while ($record = mysqli_fetch_assoc($result)) {
                $results[] = $record;
            }
        } else if ($age < 19 || $age > 60 && $weight > 150 && $disease == "yes" && $intensity == "advanced") {

            $query = "SELECT * FROM exercise_info WHERE (age_class='all' AND weight_class='all' AND suitable_for_cardio='yes') ORDER BY RAND() LIMIT 9";
            $result = mysqli_query($conn, $query);

            while ($record = mysqli_fetch_assoc($result)) {
                $results[] = $record;
            }
        } else if ($age > 19 && $age < 60 && $weight > 150 && $disease == "yes" && $intensity == "advanced") {

            $query = "SELECT * FROM exercise_info WHERE ((age_class='all' OR age_class='teens,middle-aged') AND weight_class='all' AND suitable_for_cardio='yes') ORDER BY RAND() LIMIT 9";
            $result = mysqli_query($conn, $query);

            while ($record = mysqli_fetch_assoc($result)) {
                $results[] = $record;
            }
        } else if ($age < 19 || $age > 60 && $weight < 150 && $disease == "no" && $intensity == "advanced") {

            $query = "SELECT * FROM exercise_info WHERE (age_class='all' AND (weight_class='all' OR weight_class='below_150')) ORDER BY RAND() LIMIT 9";
            $result = mysqli_query($conn, $query);

            while ($record = mysqli_fetch_assoc($result)) {
                $results[] = $record;
            }
        } else if ($age > 19 && $age < 60 && $weight < 150 && $disease == "no" && $intensity == "advanced") {

            $query = "SELECT * FROM exercise_info WHERE ((age_class='all' OR age_class='teens,middle-aged')) ORDER BY RAND() LIMIT 9";
            $result = mysqli_query($conn, $query);

            while ($record = mysqli_fetch_assoc($result)) {
                $results[] = $record;
            }
        } else if ($age < 19 || $age > 60 && $weight > 150 && $disease == "no" && $intensity == "advanced") {

            $query = "SELECT * FROM exercise_info WHERE (age_class='all' AND weight_class='all' ) ORDER BY RAND() LIMIT 9";
            $result = mysqli_query($conn, $query);

            while ($record = mysqli_fetch_assoc($result)) {
                $results[] = $record;
            }
        } else if ($age > 19 && $age < 60 && $weight > 150 && $disease == "no" && $intensity == "advanced") {

            $query = "SELECT * FROM exercise_info WHERE ((age_class='all' OR age_class='teens,middle-aged') AND weight_class='all') ORDER BY RAND() LIMIT 9";
            $result = mysqli_query($conn, $query);

            while ($record = mysqli_fetch_assoc($result)) {
                $results[] = $record;
            }
        }
        $results['sets'] = 0;
        $results['reps'] = 0;
        $results['days'] = 0;
        return $results;
    }

    public function exercisePlan(&$results)
    {

        foreach ($results as &$result) {
            if (isset($result['intensity'])) {
                if ($result['intensity'] == 'beginner') {
                    $result['sets'] = rand(1, 2);
                    $result['reps'] = rand(5, 9);
                    $result['days'] = rand(3, 4);
                }
                if ($result['intensity'] == 'intermediate') {
                    $result['sets'] = rand(2, 3);
                    $result['reps'] = rand(9, 10);
                    $result['days'] = rand(4, 5);
                }
                if ($result['intensity'] == 'advanced') {
                    $result['sets'] = rand(3, 4);
                    $result['reps'] = rand(10, 15);
                    $result['days'] = rand(5, 6);
                }
            }
        }
        return $results;
    }
}
