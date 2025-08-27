// file: founders_message.php
<?php // Founder’s Message Page ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rehan.Education - Founder’s Message</title>
    <style>
        body {
            background-color: black;
            color: white;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .neon {
            color: #fff;
            text-shadow: 0 0 5px #fff, 0 0 10px #fff, 0 0 15px #fff, 0 0 20px #fff, 0 0 30px #fff, 0 0 40px #fff, 0 0 50px #fff, 0 0 75px #fff;
        }
        header {
            background-color: #111;
            padding: 20px;
            text-align: center;
        }
        nav ul {
            list-style: none;
            padding: 0;
            display: flex;
            justify-content: center;
        }
        nav ul li {
            margin: 0 15px;
            cursor: pointer;
            transition: color 0.3s;
        }
        nav ul li:hover {
            color: #ccc;
        }
        .container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
        }
        @media (max-width: 768px) {
            nav ul {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1 class="neon">Rehan.Education - Founder’s Message</h1>
        <nav>
            <ul>
                <li onclick="redirectTo('index.php')">Home</li>
                <li onclick="redirectTo('curriculum.php')">Curriculum</li>
                <li onclick="redirectTo('courses.php')">Courses</li>
                <li onclick="redirectTo('facilitators.php')">Facilitators</li>
                <li onclick="redirectTo('founders_message.php')">Founder’s Message</li>
                <li onclick="redirectTo('contact.php')">Contact Us</li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <section>
            <h2 class="neon">Message from Rehan Allahwala</h2>
            <p>Founded by Rehan Allahwala, our mission is to end poverty in Pakistan by equipping students with problem-solving capabilities.</p>
            <p>The Rehan School System is an experimental educational system based on my life learnings. This system aims to create 1000 direct students, following unique learning and understanding.</p>
            <p>Our core value is to focus on the life mission of making a positive impact on 10 million human beings.</p>
            <p>Join us in this journey to innovate education and empower the next generation.</p>
        </section>
    </div>
    <script>
        function redirectTo(url) {
            window.location.href = url;
        }
    </script>
</body>
</html>
