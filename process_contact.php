// file: process_contact.php
<?php
include 'db.php';
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);
 
    $sql = "INSERT INTO inquiries (name, email, message) VALUES ('$name', '$email', '$message')";
 
    if ($conn->query($sql) === TRUE) {
        echo "<script>window.location.href = 'contact.php?success=1';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
 
$conn->close();
?>
