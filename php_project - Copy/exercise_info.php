<?php
session_start();
$goal = isset($_SESSION['goal']) ? $_SESSION['goal'] : 'general_fitness';

$tips = [
    'bulk' => [
        'title' => 'Bulking',
        'exercise' => [
            'Progressive Overload: Gradually increase weights or repetitions in your strength training routine.',
            'Focus on Major Lifts: Prioritize compound movements like bench press, squats, and pull-ups.',
            'Frequency: Train each muscle group twice a week for optimal growth.',
            'Recovery: Rest adequately between sets and workouts to allow muscles to repair and grow.',
        ],
        'diet' => [
            'Calorie Surplus: Consume 300–500 calories above your maintenance level.',
            'Protein Power: Eat 1.6–2.2g of protein per kilogram of body weight daily.',
            'Quality Carbs: Include complex carbohydrates like oats, quinoa, and sweet potatoes for energy.',
            'Healthy Fats: Add avocados, nuts, and olive oil to support overall health.',
        ],
        'exercise_image' => './images/bulk_exercise.webp',
        'diet_image' => './images/bulk_diet.jpg',
    ],
    'lean' => [
        'title' => 'Leaning',
        'exercise' => [
            'High-Intensity Interval Training (HIIT): Incorporate HIIT workouts 3–4 times a week to burn fat efficiently.',
            'Strength Training: Focus on compound lifts like squats and deadlifts to build muscle and boost metabolism.',
            'Active Rest Days: Include light activities like yoga or walking to maintain calorie burn.',
            'Track Progress: Use a fitness app to monitor workouts, ensuring you’re progressively challenging your body.',
        ],
        'diet' => [
            'Calorie Deficit: Maintain a slight calorie deficit (200-500 calories below maintenance).',
            'Protein Intake: Consume 1.2–1.6g of protein per kilogram of body weight daily.',
            'Limit Refined Carbs: Replace sugary snacks with whole grains and vegetables.',
            'Hydration: Drink plenty of water and avoid calorie-laden drinks.',
        ],
        'exercise_image' => './images/lean.jpg',
        'diet_image' => './images/lean_diet.jpg',
    ],
    'cardio' => [
        'title' => 'Cardio Fitness',
        'exercise' => [
            'Endurance Runs: Include long, steady runs to improve cardiovascular endurance.',
            'Interval Training: Alternate between high and low intensity for an effective workout.',
            'Cross-Training: Mix running, cycling, and swimming to target different muscle groups.',
            'Warm-Up & Cool-Down: Always prepare your body for the workout and recover afterward.',
        ],
        'diet' => [
            'Balanced Meals: Prioritize a balance of carbs, proteins, and fats for sustained energy.',
            'Pre-Workout Fuel: Have a light carb-based snack before exercising.',
            'Recovery Nutrition: Consume protein and carbs post-workout to aid recovery.',
            'Hydration: Drink water consistently, especially during and after workouts.',
        ],
        'exercise_image' => './images/cardio_exercise.jpg',
        'diet_image' => './images/cardio_diet.webp',
    ],
    'strength' => [
        'title' => 'Strength Training',
        'exercise' => [
            'Progressive Overload: Continuously challenge your muscles with heavier weights.',
            'Compound Movements: Focus on exercises like deadlifts, squats, and bench presses.',
            'Proper Form: Ensure correct form to maximize gains and prevent injuries.',
            'Rest Periods: Take adequate rest between sets to maintain performance.',
        ],
        'diet' => [
            'High Protein: Consume 1.6–2.2g of protein per kilogram of body weight daily.',
            'Carb Loading: Include complex carbs for sustained energy during workouts.',
            'Healthy Fats: Incorporate sources like nuts and seeds to support hormonal balance.',
            'Post-Workout Recovery: Eat protein and carbs within 2 hours post-workout.',
        ],
        'exercise_image' => './images/strength_exercise.webp',
        'diet_image' => './images/strength_diet.jpg',
    ],
    'general_fitness' => [
        'title' => 'General Fitness',
        'exercise' => [
            'Mix It Up: Combine strength training, cardio, and flexibility exercises for overall fitness.',
            'Set Goals: Define achievable goals to keep motivation high.',
            'Active Lifestyle: Stay active outside the gym by walking, hiking, or playing sports.',
            'Listen to Your Body: Avoid overtraining and rest when needed.',
        ],
        'diet' => [
            'Eat Whole Foods: Prioritize unprocessed, nutrient-dense foods.',
            'Portion Control: Eat appropriate portions to avoid overconsumption.',
            'Stay Hydrated: Drink water consistently throughout the day.',
            'Moderation: Enjoy treats occasionally to maintain a balanced approach.',
        ],
        'exercise_image' => './images/general_fitness_exercise.webp',
        'diet_image' => './images/general_fitness_diet.jpg',
    ],
];

$current_tips = $tips[$goal];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise and Diet Tips</title>
    <style>
        body {
            background-color: rgb(30, 30, 30);
            padding-bottom: 50px;
        }

        .header {
            display: flex;
            align-items: center;
            padding: 20px;
        }

        .back-button {
            background-color: rgb(30, 30, 30);
            border: solid 1px rgb(0, 94, 255);
            color: white;
            padding: 10px 20px;
            border-radius: 6px;
            text-decoration: none;
            font-family: Quicksand, Arial;
            font-size: 18px;
            transition: background-color 0.25s, color 0.25s;
        }

        .back-button:hover {
            background-color: white;
            color: black;
        }

        #title {
            color: white;
            font-size: 30px;
            font-weight: bolder;
            font-family: Quicksand, Arial;
            margin-top: 20px;
            text-align: center;
        }

        .tips {
            color: white;
            font-family: Quicksand, Arial;
            font-size: 20px;
            padding: 20px;
            max-width: 800px;
            margin: 20px auto;
            border: solid 1px rgb(0, 94, 255);
            border-radius: 6px;
        }

        .tips img {
            width: 100%;
            border-radius: 6px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="header">
        <a href="tracker.php" class="back-button">Back to Workout</a>
    </div>
    <div id="title">
        Exercise and Diet Tips for <?= htmlspecialchars($current_tips['title']) ?>
    </div>
    <div class="tips">
        <h2>Exercise Tips:</h2>
        <img src="<?= htmlspecialchars($current_tips['exercise_image']) ?>" alt="Exercise Tips for <?= htmlspecialchars($current_tips['title']) ?>">
        <ul>
            <?php foreach ($current_tips['exercise'] as $tip): ?>
                <li><?= htmlspecialchars($tip) ?></li>
            <?php endforeach; ?>
        </ul>

        <h2>Diet Tips:</h2>
        <img src="<?= htmlspecialchars($current_tips['diet_image']) ?>" alt="Diet Tips for <?= htmlspecialchars($current_tips['title']) ?>">
        <ul>
            <?php foreach ($current_tips['diet'] as $tip): ?>
                <li><?= htmlspecialchars($tip) ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>

</html>