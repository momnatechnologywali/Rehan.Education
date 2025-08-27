// file: facilitators.php
<?php // Facilitators Page ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rehan.Education - Facilitators</title>
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
        .facilitator {
            margin-bottom: 20px;
            padding: 15px;
            border: 1px solid #fff;
            border-radius: 10px;
            transition: box-shadow 0.3s;
        }
        .facilitator:hover {
            box-shadow: 0 0 20px #fff;
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
        <h1 class="neon">Rehan.Education - Facilitators</h1>
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
            <h2 class="neon">Meet Our Facilitators</h2>
            <div class="facilitator">
                <h3>Jasmine Patel</h3>
                <p>Facilitator Trainee from North America. Thrilled to join the team!</p>
                <p>Social: <a href="#" style="color:white;">Facebook</a></p>
            </div>
            <div class="facilitator">
                <h3>Mr. Abdul Rehman</h3>
                <p>Part of our Admission Team. Welcome to Rehan School Online Academy.</p>
                <p>Social: <a href="#" style="color:white;">LinkedIn</a></p>
            </div>
            <div class="facilitator">
                <h3>Sister Um E Huzaifa</h3>
                <p>Facilitator at Rehan School Online Academy.</p>
                <p>Social: <a href="#" style="color:white;">Instagram</a></p>
            </div>
            <!-- Add more as needed -->
        </section>
    </div>
    <script>
        function redirectTo(url) {
            window.location.href = url;
        }
    </script>
</body>
</html>
