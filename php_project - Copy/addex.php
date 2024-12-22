<?php
/*we used this to add the exersices in to the databaase*/
require 'connect.php';

$stmt = mysqli_prepare($conn, "INSERT INTO exercise_info (name,weight_class,age_class,suitable_for_cardio,intensity,image_path,muscle_group,video) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

$data = [
    ['Barbell Curl', 'all', 'all', 'yes', 'beginner', 'exercise_images/barbell curl.webp', 'biceps', 'https://www.youtube.com/watch?v=kwG2ipFRgfo&pp=ygULYmFyYmVsIGN1cmw%3D'],
    ['Bentover Rows', 'all', 'teens,middle-aged', 'yes', 'intermediate', 'exercise_images/bent over rows.webp', 'back', 'https://www.youtube.com/watch?v=kBWAon7ItDw&pp=ygUYaG93IHRvIGRvIGJlbnQgb3ZlciByb3dz'],
    ['Bicep Curl', 'all', 'all', 'yes', 'beginner', 'exercise_images/bicep curls.webp', 'biceps', 'https://www.youtube.com/watch?v=ykJmrZ5v0Oo&pp=ygULYmljZXAgY3VybHM%3D'],
    ['Burpees', 'below 150', 'teens,middle-aged', 'no', 'advanced', 'exercise_images/burpees.png', 'fullbody', 'https://www.youtube.com/watch?v=qLBImHhCXSw&pp=ygURaG93IHRvIGRvIGJ1cnBlZXM%3D'],
    ['Bicylcle Crunches', 'all', 'all', 'yes', 'intermediate', 'exercise_images/bycicle crunchs.jpg', 'abdominals', 'https://www.youtube.com/watch?v=Iwyvozckjak&pp=ygUaaG93IHRvIGRvIGJ5Y2ljbGUgY3J1bmNoZXM%3D'],
    ['Cable Curl', 'all', 'all', 'yes', 'beginner', 'exercise_images/cable curls.webp', 'biceps', 'https://www.youtube.com/watch?v=NFzTWp2qpiE&pp=ygUVaG93IHRvIGRvIGNhYmxlIGN1cmxz'],
    ['Cable Chest fly', 'all', 'teens,middle-aged', 'yes', 'beginner', 'exercise_images/cable fly.jpg', 'chest', 'https://www.youtube.com/watch?v=ETtXO4FW1EU&pp=ygUTaG93IHRvIGRvIGNhYmxlIGZseQ%3D%3D'],
    ['Chest Dips', 'below 150', 'teens,middle-aged', 'yes', 'intermediate', 'exercice_images/chest dips.webp', 'chest', 'https://www.youtube.com/watch?v=dX_nSOOJIsE&pp=ygUUaG93IHRvIGRvIGNoZXN0IGRpcHM%3D'],
    ['Deadlift', 'all', 'teens,middle-aged', 'no', 'intermediate', 'exercise_images/deadlift.jpg', 'fullbody', 'https://www.youtube.com/watch?v=vRKDvt695pg&pp=ygUTaG93IHRvIGRvIGRlYWRsaWZ0cw%3D%3D'],
    ['Dumbell Benchpress', 'all', 'all', 'yes', 'beginner', 'exercise_images/dumbell bench press.png', 'chest', 'https://www.youtube.com/watch?v=VmB1G1K7v94&pp=ygUfaG93IHRvIGRvIGR1bWJiZWxsIGNoZXN0IHByZXNzcw%3D%3D'],
    ['Eliptical Machine', 'all', 'teens,middle-aged', 'no', 'beginner', 'exercise_images/eliptical machine.jpg', 'fullbody', 'https://www.youtube.com/watch?v=j38LNpTLwzY&pp=ygUfaG93IHRvIGRvIHRoZSBlbGlwdGljYWwgbWFjaGluZQ%3D%3D'],
    ['Frontal Raises', 'all', 'all', 'yes', 'beginner', 'exercise_images/frontal raises.webp', 'shoulder', 'https://www.youtube.com/watch?v=-t7fuZ0KhDA&pp=ygUYaG93IHRvIGRvIGZyb250YWwgcmFpc2Vz'],
    ['Glute Bridge', 'all', 'teens,middle-aged', 'yes', 'intermediate', 'exercise_images/glute bridge.jpg', 'glute', 'https://www.youtube.com/watch?v=OUgsJ8-Vi0E&pp=ygUXaG93IHRvIGRvIGdsdXRlIGJyaWRnZXM%3D'],
    ['Hammer Curls', 'all', 'all', 'yes', 'beginner', 'exercise_images/hammer curls.webp', 'biceps', 'https://www.youtube.com/watch?v=TwD-YGVP4Bk&pp=ygUWaG93IHRvIGRvIGhhbW1lciBjdXJscw%3D%3D'],
    ['Hip Thrust', 'all', 'teens,middle-aged', 'yes', 'intermediate', 'exercise_images/hip turst.jpg', 'glute', 'https://www.youtube.com/watch?v=Zp26q4BY5HE&pp=ygUUaG93IHRvIGRvIGhpcCB0aHVyc3Q%3D'],
    ['Lateral Raises', 'all', 'all', 'yes', 'beginner', 'exercise_images/lateral raises.webp', 'shoulder', 'https://www.youtube.com/watch?v=kDqklk1ZESo&pp=ygUYaG93IHRvIGRvIGxhdGVyYWwgcmFpc2Vz'],
    ['Lat Pulldown', 'all', 'all', 'yes', 'inermediate', 'exercise_images/lat-pulldown.jpg', 'back', 'https://www.youtube.com/watch?v=Z_3xHwuO8Tk&pp=ygUWaG93IHRvIGRvIGxhdC1wdWxsZG93bg%3D%3D'],
    ['Leg Raises', 'all', 'all', 'yes', 'beginner', 'exercise_images/leg raises.webp', 'legs', 'https://www.youtube.com/watch?v=JB2oyawG9KI&pp=ygUUaG93IHRvIGRvIGxlZyByYWlzZXM%3D'],
    ['Leg Press', 'all', 'teens,middle-aged', 'yes', 'intermediate', 'exercise_images/leg-press.webp', 'legs', 'https://www.youtube.com/watch?v=IZxyjW7MPJQ&pp=ygUTaG93IHRvIGRvIGxlZyBwcmVzcw%3D%3D'],
    ['Lunges', 'below 150', 'all', 'yes', 'beginner', 'exercise_images/lunges.jpg', 'legs', 'https://www.youtube.com/watch?v=wrwwXE_x-pQ&pp=ygUQaG93IHRvIGRvIGx1bmdlcw%3D%3D'],
    ['Dumbbell Lunges', 'below 150', 'teens,middle-aged', 'yes', 'intermediate', 'exercise_images/dumbbell lunges.jpg', 'legs', 'https://www.youtube.com/watch?v=D7KaRcUTQeE&pp=ygUZaG93IHRvIGRvIGR1bWJiZWxsIGx1bmdlcw%3D%3D'],
    ['Military Press', 'all', 'all', 'yes', 'beginner', 'exercise_images/military press.webp', 'legs', 'https://www.youtube.com/watch?v=2yjwXTZQDDI&pp=ygUYaG93IHRvIGRvIG1pbGl0YXJ5IHByZXNz'],
    ['Mountain Climbers', 'below 150', 'all', 'no', 'intermediate', 'exercise_images/mountain climbers.jpg', 'abdominals', 'https://www.youtube.com/watch?v=nmwgirgXLYM&pp=ygUbaG93IHRvIGRvIG1vdW50YWluIGNsaW1iZXJz'],
    ['Crunch', 'all', 'all', 'yes', 'beginner', 'exercise_images/normal crunch.jpg', 'abdominals', 'https://www.youtube.com/watch?v=MKmrqcoCZ-M&pp=ygUQaG93IHRvIGRvIGNydW5jaA%3D%3D'],
    ['plank', 'below 150', 'all', 'yes', 'intermediate', 'exercise_images/plank.jpg', 'abdominals', 'https://www.youtube.com/watch?v=pSHjTRCQxIw&pp=ygUMaG93IHRvIHBsYW5r'],
    ['Push Ups', 'below 150', 'all', 'yes', 'beginner', 'exercise_images/push-ups.webp', 'chest', 'https://www.youtube.com/watch?v=IODxDxX7oi4&pp=ygUSaG93IHRvIGRvIHB1c2ggdXBz'],
    ['Russian Twist', 'below 150', 'all', 'yes', 'intermediate', 'exercise_images/russian twist.jpg', 'abdominals', 'https://www.youtube.com/watch?v=wkD8rjkodUI&pp=ygUbaG93IHRvIGRvIHRoZSBydXNzaWFuIHR3aXN0'],
    ['Seated Row', 'all', 'all', 'yes', 'beginner', 'exercise_images/seated row.jpg', 'back', 'https://www.youtube.com/watch?v=GZbfZ033f74&pp=ygUYaG93IHRvIGRvIHRoZSBzZWF0ZWQgcm93'],
    ['Skull Crusher', 'below 150', 'teens,middle-aged', 'yes', 'intermediate', 'exercise_images/skull crusher.png', 'triceps', 'https://www.youtube.com/watch?v=d_KZxkY_0cM&pp=ygUXaG93IHRvIGRvIHNrdWxsIGNydXNlcnM%3D'],
    ['Squats', 'all', 'all', 'yes', 'beginner', 'exercise_images/squats.webp', 'legs', 'https://www.youtube.com/watch?v=IB_icWRzi4E&pp=ygUQaG93IHRvIGRvIHNxdWF0cw%3D%3D'],
    ['Stationary Bicycle', 'all', 'all', 'no', 'beginner', 'exercise_images/stationary bycicles.png', 'fullbody', 'https://www.youtube.com/watch?v=rEqRmKAQ5xM&pp=ygUZaG93IHRvIGRvIHN0YXRpb25hcnkgYmlrZQ%3D%3D'],
    ['T-bar Row', 'below 150', 'teens,middle-aged', 'yes', 'intermediate', 'exercise_images/T-Bar-Row.jpg', 'back', 'https://www.youtube.com/watch?v=j3Igk5nyZE4&pp=ygUKdCBiYXIgcm93cw%3D%3D'],
    ['Treadmil', 'all', 'all', 'yes', 'beginner', 'exercise_images/treadmil.webp', 'fullbody', 'https://www.youtube.com/watch?v=8i3Vrd95o2k&pp=ygUVaG93IHRvIGRvIHRoZSB0cmVkbWls'],
    ['Tricep Pushdown', 'all', 'all', 'yes', 'beginner', 'exercise_images/tricep pushdown.jpg', 'tricep', 'https://www.youtube.com/watch?v=2-LAMcpzODU&pp=ygUZaG93IHRvIGRvIHRyaWNlcCBwdXNoZG93bg%3D%3D'],
    ['Weighted Squats', 'below 150', 'teens,middle-aged', 'no', 'advanced', 'exercise_images/weighted squats.jpg', 'legs', 'https://www.youtube.com/watch?v=MVMNk0HiTMg&pp=ygUdaG93IHRvIGRvIHNxdWF0cyB3aXRoIHdlaWdodHM%3D'],
];

foreach ($data as $row) {
    mysqli_stmt_bind_param($stmt, "ssssssss", $row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7]);

    mysqli_stmt_execute($stmt);

    if (mysqli_stmt_error($stmt)) {
        die("Error: " . mysqli_stmt_error($stmt));
    } else echo "entry success;";
}

mysqli_stmt_close($stmt);

mysqli_close($conn);
