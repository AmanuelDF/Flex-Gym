<?php

class PersonalDB
{
    private $server = 'localhost';
    private $user = 'user';
    private $password = 'amanuel@123';
    private $db_name = 'user_data';
    public $conn;

    public function __construct()
    {
        $this->conn = new mysqli($this->server, $this->user, $this->password, $this->db_name);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }
    public function insert($first_name, $last_name, $email, $password)
    {
        $sql =  "INSERT INTO personal_info(first_name,last_name, email,password) VALUES ('$first_name','$last_name','$email', '$password')";
        if (mysqli_query($this->conn, $sql) == true) {
            echo "Subscription added successfully.";
            return true;
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
            return false;
        }
    }
    public function addMoreInfo($age, $gender, $weight, $disease, $intensity, $email)
    {
        echo "";
        $sql = "UPDATE personal_info SET age='$age', gender='$gender', weight='$weight', disease='$disease', intensity='$intensity' WHERE email='$email'";
        $result = mysqli_query($this->conn, $sql);
        if (!$result) {
            echo "couldn't add the data to the database";
            return false;
        } else {
            echo "data successfully added";
            return true;
        }
    }
    public function verifyUser($email, $password)
    {
        $sql = "SELECT * FROM personal_info WHERE email='$email';";

        $result = mysqli_query($this->conn, $sql);

        if ($result) {
            $row_count = mysqli_num_rows($result);

            if ($row_count == 0) {
                echo "
                <script>
                document.getElementById(\"nfemail\").innerHTML=(\"*we couldn't find your email\");
                </script>
                ";
            } else {
                $query = "SELECT password FROM personal_info WHERE email='$email';";
                $query_res = mysqli_query($this->conn, $query);
                if ($query_res) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $stored_pass = $row['password'];
                    }



                    if (password_verify($password, $stored_pass)) {
                        return true;
                    } else {
                        echo "
                    <script>
                    document.getElementById(\"nfemail\").innerHTML=(\"*password didn't match\");
                    </script>
                    ";
                    }
                } else {
                    echo "Query failed.";
                }
            }
        } else {
            echo "Query failed.";
        }
    }
    public function retrieveUserExercise($user_id)
    {
        $query1 = "SELECT e.* FROM exercise_info e
          INNER JOIN exercise_user ue ON e.exercise_id = ue.exercise_id
          WHERE ue.user_id = $user_id";
        $query2 = "SELECT completed,progress,sets,reps,days FROM exercise_user WHERE user_id=$user_id";
        $result1 = mysqli_query($this->conn, $query1);
        $result2 = mysqli_query($this->conn, $query2);
        $exercises = array();
        $content = array();
        if ($result1 && $result2) {
            while ($row = mysqli_fetch_assoc($result1)) {
                $exercise['name'] = $row['name'];
                $exercise['image'] = $row['image_path'];
                $exercise['video'] = $row['video'];

                $exercises[] = $exercise;
            }
            while ($row = mysqli_fetch_assoc($result2)) {
                $content['progress'] = $row['progress'];
                $content['completed'] = $row['completed'];
                $content['sets'] = $row['sets'];
                $content['reps'] = $row['reps'];
                $content['days'] = $row['days'];

                $contents[] = $content;
            }

            for ($i = 0; $i < 9; $i++) {
                $exercises[$i]['completed'] = $contents[$i]['completed'];
                $exercises[$i]['progress'] = $contents[$i]['progress'];
                $exercises[$i]['sets'] = $contents[$i]['sets'];
                $exercises[$i]['reps'] = $contents[$i]['reps'];
                $exercises[$i]['days'] = $contents[$i]['days'];
            }
            mysqli_free_result($result1);
            mysqli_free_result($result2);
        } else {
            echo "Error: " . mysqli_error($this->conn);
        }

        return $exercises;
    }
    public function retrieveID($email)
    {
        $query = "SELECT (user_id) FROM personal_info WHERE email='$email'";
        $result = mysqli_query($this->conn, $query);
        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $user_id = $row['user_id'];
                return $user_id;
            }
        }
    }
    public function retrieveName($email)
    {
        $query = "SELECT (first_name) FROM personal_info WHERE email='$email'";
        $result = mysqli_query($this->conn, $query);
        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $name = $row['first_name'];
                return $name;
            }
        }
    }
    public function updateExercises($exercises, $id)
    {
        $i = 0;
        foreach ($exercises as $exersice) {
            $progress = $exersice['progress'];
            $completed = false;
            $progress = $progress + 5;
            if ($progress == 100) {
                $completed = true;
                continue;
            }
            $query = "UPDATE exercise_user SET progress = {$progress}, completed = '$completed' WHERE user_id = {$id}";
            $result = mysqli_query($this->conn, $query);
            if ($result) {
                $i++;
            }
        }
        if ($i > 0) {
            return true;
        } else return false;
    }
    function editProfileName($firstname, $lastname, $email)
    {

        $sql = "UPDATE personal_info SET first_name='$firstname', last_name='$lastname'WHERE email='$email'";
        $result = mysqli_query($this->conn, $sql);
        if (!$result) {
            return false;
        } else {
            return true;
        }
    }
    function editEmail($email, $new_email)
    {

        $sql = "UPDATE personal_info SET email='$new_email'WHERE email='$email'";
        $result = mysqli_query($this->conn, $sql);
        if (!$result) {
            return false;
        } else {
            return true;
        }
    }
    function deleteUser($email)
    {
        $user_id = $this->retrieveID($email);
        $sql = "DELETE FROM exercise_user WHERE user_id=$user_id";
        $result2 = mysqli_query($this->conn, $sql);

        if ($result2) {
            $sql = "DELETE FROM personal_info WHERE email='$email'";
            $result = mysqli_query($this->conn, $sql);

            if ($result) {
                return true;
            } else return false;
        }
    }
}
