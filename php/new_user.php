<?php
    require_once('config.php');

    //get password from signup.php
    $password = $_POST['txtNewPassword'];
    $password = md5($password);
    
    //get username from signup.php
    $username = $_POST['name'];

    //get email from signup.php
    $email = $_POST['email'];

    //get name from signup.php
    $name = $_POST['lastname'];


    //connect to database from config.php
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) 
    or die('Error connecting to MySQL server.');

    //insert new user into database
    $query = "INSERT INTO users (username, password, email, name) VALUES ('$username', '$password', '$email', '$name')";

    //execute query
    mysqli_query($conn, $query) or die('Error querying database.');
    
    //query successful so redirect to login page
    header("Location: login.php");
    //close connection
    mysqli_close($conn);