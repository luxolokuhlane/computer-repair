<?php
    require_once('config.php');

    //get password from signup.php
    $password = $_POST['txtNewPassword'];
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

    if($type == 3 or $type == 2){
        //insert new user into database
        $query = "INSERT INTO technician (firstname, lastname, email, password, phone, usertype) VALUES ('$firstname', '$lastname', '$email', '$password', '$phone', $type)";
    }else{
        $query = "INSERT INTO customer (firstname, lastname, email, password, phone) VALUES ('$firstname', '$lastname', '$email', '$password', '$phone')";
    }
    
    //execute query
    mysqli_query($conn, $query) or die('Error adding user database.');
    
    //query successful so redirect to login page
    header("Location: login.php");
    //close connection
    mysqli_close($conn);