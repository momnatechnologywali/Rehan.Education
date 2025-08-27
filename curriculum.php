// file: curriculum.php
<?php // Curriculum Page ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rehan.Education - Curriculum</title>
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
        section {
            margin-bottom: 40px;
        }
        ul {
            list-style-type: disc;
            padding-left: 20px;
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
        <h1 class="neon">Rehan.Education - Curriculum</h1>
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
            <h2 class="neon">Rehan School Curriculum</h2>
            <p>We are educating the students based on my life’s experiences of travel, business, and networking, this curriculum will keep evolving based on the new technologies that arrive every year, but will be very focused on becoming global citizens of the world, being able to see ourselves in the mirrors as one in 8 billion unique creation and seeing everyone else as equal to ourselves. Our core value is a Focus on life mission of positively impacting 10 million human beings.</p>
            <p>The key learning is communication, collaboration, honesty, modesty, meditation, languages, networks, friendship, problem-solving, how to learn, and technology training, all which will help the student reach their life’s mission.</p>
            <h3>5th Grade – Level One</h3>
            <p>What normal schools call 5th grade is our level one. In this year, we start teaching technologies to the student including graphic design, ChatGPT, interview taking and giving, making videos, learning to learn via AI, talking with Annie, yoga, meditation, ethics, TEDx.</p>
            <h3>6th Grade – Level Two</h3>
            <p>We continue to teach items from level one give a life mission to the child and make it their “Wala.” The TEDx talks are about the wala, and we also teach how to network and interview the TEDx speaker. Learn to earn $100 a month via freelancing.</p>
            <h3>7th Grade – Level Three</h3>
            <p>All the items in level 2, and the amount they have to learn to earn is $300 a month.</p>
            <h3>8th Grade – Level Four</h3>
            <p>All items in level 3, and start a startup related to their wala and grow it for the next four years and will sell it for a million dollars by 12th grade.</p>
            <h3>13th Grade – Level Six</h3>
            <p>The student will be prepared to take the GED General Educational Development exam, and Matric (If needed) and pass with flying colors.</p>
        </section>
    </div>
    <script>
        function redirectTo(url) {
            window.location.href = url;
        }
    </script>
</body>
</html>
