<?php
$servername = "mysql";
$username = "user";
$password = "userpassword";
$dbname = "mydb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully to MySQL database!";

$sql = "SELECT DATABASE() AS db";
$result = $conn->query($sql);
if ($result && $row = $result->fetch_assoc()) {
    echo "<br>Currently using database: " . $row['db'];
} else {
    echo "<br>Unable to retrieve database name.";
}

$conn->close();
?>
