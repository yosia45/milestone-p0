<?php

$DATABASE_HOST = '127.0.0.1:3306';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'milestone-p0';
// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $topic = $_POST['topic'];
    $message = $_POST['message'];

    // Prepare and bind
    $stmt = $con->prepare("INSERT INTO customermessage (name, topic, message) VALUES (?, ?, ?)");
    $stmt->bind_param("ssi", $name, $topic, $message);

    // Execute the statement
    if ($stmt->execute()) {
        // JavaScript alert and redirect
        echo "<script type='text/javascript'>
                alert('New record created successfully!');
                window.location.href = 'home.php';
              </script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $con->close();
}

?>