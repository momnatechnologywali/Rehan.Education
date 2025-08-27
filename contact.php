// file: contact.php
<?php // Contact Page 
$success = isset($_GET['success']) ? $_GET['success'] : 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rehan.Education - Contact</title>
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
        form {
            display: flex;
            flex-direction: column;
            max-width: 600px;
            margin: auto;
        }
        input, textarea {
            margin-bottom: 10px;
            padding: 10px;
            background-color: #222;
            color: white;
            border: 1px solid #fff;
            border-radius: 5px;
        }
        button {
            padding: 10px;
            background-color: #333;
            color: white;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #555;
        }
        .success {
            color: #ccc;
            text-align: center;
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
        <h1 class="neon">Rehan.Education - Contact Us</h1>
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
            <h2 class="neon">Contact Information</h2>
            <p>Address: Korangi Campus, Karachi, Pakistan</p>
            <p>Phone/WhatsApp: +44 7418 359852</p>
            <p>Email: info@rehan.education</p>
            <p>Social: <a href="#" style="color:white;">Facebook</a>, <a href="#" style="color:white;">Instagram</a>, <a href="#" style="color:white;">Twitter/X</a></p>
        </section>
        <section>
            <h2 class="neon">Send Us a Message</h2>
            <?php if ($success == 1): ?>
                <p class="success">Your message has been sent successfully!</p>
            <?php endif; ?>
            <form action="process_contact.php" method="POST">
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <textarea name="message" placeholder="Your Message" required></textarea>
                <button type="submit">Submit</button>
            </form>
        </section>
    </div>
    <script>
        function redirectTo(url) {
            window.location.href = url;
        }
    </script>
</body>
</html>
