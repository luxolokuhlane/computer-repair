<<?php

//config 
$host = "localhost";

//database name
$db = "test";

//database username
$user = "root";

//database password
$pass = "";

//connection
$conn = mysqli_connect($host, $user, $pass, $db);

//check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//get data from form
$fname = $_POST['fname'];

$lname = $_POST['lname'];

$email = $_POST['email'];

$pass = $_POST['pass'];

//insert data to database
$sql = "INSERT INTO users (fname, lname, email, pass) VALUES ('$fname', '$lname', '$email', '$pass')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>
