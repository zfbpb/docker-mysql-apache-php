<h4>Attempting MySQL connection from php...</h4>
<?php
$host = 'local_mysql'; // ime servisa/kontejnera
$user = 'root';
$pass = 'rootpassword';
$conn = new mysqli($host, $user, $pass);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected to MySQL successfully!";
}

?>
