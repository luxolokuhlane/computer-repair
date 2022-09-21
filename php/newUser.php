<?php
    require_once('config.php');
var_dump($_POST);
    //get password from signup.php
    $password = $_POST['password'];
    $password = md5($password);
    
    //get username from signup.php
    $firstname = $_POST['name'];

    //get email from signup.php
    $email = $_POST['email'];

    //get name from signup.php
    $lastname = $_POST['lastname'];

    //get phone from signup.php
    $phone = $_POST['phone'];
    
    //signup type
    $type = $_POST['type'];


    //connect to database from config.php
    $conn = mysqli_connect(HOST,USERNAME, PASSWORD, DATABASE) 
    or die('Error connecting to MySQL server.');

    if($type == 1 or $type == 2){
        //insert new user into database
        $query = "INSERT INTO technician (firstName, lastName, email, password, contactNumber, technicianType) VALUES ('$firstname', '$lastname', '$email', '$password', '$phone', '$type');";
    }elseif($type == 3){
    
        $query = "INSERT INTO client (firstName, lastName, email, password, contactNumber) VALUES ('$firstname', '$lastname', '$email', '$password', '$phone');";
    }else{
        echo "Error";
    }
    
    //execute query
    mysqli_query($conn, $query) or die('Error adding user database.');
    
    //query successful so redirect to login page
    header("Location: login.php");
    //close connection
    mysqli_close($conn);