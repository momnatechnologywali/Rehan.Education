// file: index.php
<?php // Home Page ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rehan.Education - Home</title>
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
        .features {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }
        .feature {
            width: 30%;
            margin: 10px;
            padding: 20px;
            border: 1px solid #fff;
            border-radius: 10px;
            transition: box-shadow 0.3s;
        }
        .feature:hover {
            box-shadow: 0 0 20px #fff;
        }
        footer {
            text-align: center;
            padding: 20px;
            background-color: #111;
        }
        @media (max-width: 768px) {
            .features {
                flex-direction: column;
            }
            .feature {
                width: 90%;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1 class="neon">Rehan.Education</h1>
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
        <section id="introduction">
            <h2 class="neon">Digital Mastery for a Connected World</h2>
            <p>Rehan School is redefining education for the digital age. As the world’s first AI-driven online academy, we are committed to equipping learners with real-world skills that go beyond the classroom. Our curriculum is built around entrepreneurship, problem-solving, and digital literacy, enabling students to thrive in an interconnected world.</p>
            <p>At Rehan School, students don’t just learn—they earn. Our unique approach empowers learners to start freelancing and generating income while they study, with the potential to earn $250 per month or more, guided by expert mentors.</p>
            <p>Join us and discover the future of learning—where innovation meets opportunity.</p>
        </section>
        <section id="unique-features">
            <h2 class="neon">What Makes Rehan School Unique?</h2>
            <div class="features">
                <div class="feature">
                    <h3>Innovative Curriculum</h3>
                    <p>Rehan School integrates cutting-edge technology and soft skills training, preparing students for future challenges.</p>
                </div>
                <div class="feature">
                    <h3>AI-Enabled Education</h3>
                    <p>As the first AI-enabled school in Pakistan, Rehan School offers advanced learning tools that keep students ahead in the digital age.</p>
                </div>
                <div class="feature">
                    <h3>Holistic Development</h3>
                    <p>Our comprehensive approach includes modern classrooms, well-equipped labs, and sports facilities to foster overall growth.</p>
                </div>
                <div class="feature">
                    <h3>Entrepreneurial Focus</h3>
                    <p>We empower students to earn while learning by developing marketable skills, promoting financial independence.</p>
                </div>
                <div class="feature">
                    <h3>Community Impact</h3>
                    <p>Founded by Rehan Allahwala, our mission is to end poverty in Pakistan by equipping students with problem-solving capabilities.</p>
                </div>
                <div class="feature">
                    <h3>Virtual Accessibility</h3>
                    <p>Explore our campus and facilities through immersive virtual tours available on multiple platforms for a closer look at our educational environment.</p>
                </div>
            </div>
        </section>
    </div>
    <footer>
        <p>Contact: Call/WhatsApp: +44 7418 359852 | Social: <a href="#" style="color:white;">Facebook</a>, <a href="#" style="color:white;">Instagram</a>, <a href="#" style="color:white;">Twitter/X</a></p>
    </footer>
    <script>
        function redirectTo(url) {
            window.location.href = url;
        }
    </script>
</body>
</html>
