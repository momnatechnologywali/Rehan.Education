// file: db.php
<?php
$host = "localhost"; // Assuming local host; update if different
$username = "uws1gwyttyg2r";
$password = "k1tdlhq4qpsf";
$dbname = "dbkzocvsmizsyl";
 
$conn = new mysqli($host, $username, $password, $dbname);
 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
