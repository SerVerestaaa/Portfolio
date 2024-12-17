<?php
// Get form data
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$middleinitial = $_POST['middleinitial'];
$contactnumber = $_POST['mobilenumber'];
$email = $_POST['email'];
$date = $_POST['reservationdate'];
$note = $_POST['note'];

// Connect to MySQL database
require_once('control/vault/credentials.php');
$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert form data into database
$sql = "INSERT INTO reservation_data (`firstname`, `lastname`, `middleinitial`, `email`, `mobilenumber`, `reservationdate`, `note`, `status`)
                                VALUES ('$firstname', '$lastname', '$middleinitial', '$email','$contactnumber', '$date', '$note', '0')";
if ($conn->query($sql) === TRUE) {
    header("Location: index.html");
    echo "Form data inserted successfully!";
} else {
    echo "Error: something happened!!!" . $sql . "<br>" . $conn->error;
}

// Close database connection
$conn->close();