
<?php
// Replace these with your actual database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "teszt";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process form data
    $username = $_POST["username"];
    $password = $_POST["pwd"];
    $email = $_POST["email"];
    
    // Insert the form data into the database
    $sql = "INSERT INTO felhasznalok (felhaszn, jelszo, email) VALUES ('$username', '$password', '$email')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New account created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>