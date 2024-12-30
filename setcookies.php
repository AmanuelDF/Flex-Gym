,<?php
    if (!isset($_COOKIE['exercise1'])) {
        $i = 1;
        foreach ($plans as $plan) {
            $exercise[$i] = serialize($plan);
            $i++;
        }
        for ($j = 1; $j <= $i; $j++)
            setcookie("exercise{$j}", $exercise[$j], time() + 3600);
    }
