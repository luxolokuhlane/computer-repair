<?php
    require_once('config.php');
var_dump($_POST);
    //get password from signup.php
    $password = $_POST['password'];
    $password = md5($password);

    //get username from signup.php
    //uppercaser first letter of name
    $firstname = ucwords($_POST['name']);

    //get email from signup.php
    $email = strtolower($_POST['email']);

    //get name from signup.php
    $lastname = ucwords($_POST['lastname']);

    //get phone from signup.php
    $phone = $_POST['phone'];
    
    //signup type
    $type = $_POST['type'];
    


    //connect to database from config.php
    $conn = mysqli_connect(HOST,USERNAME, PASSWORD, DATABASE) 
    or die('Error connecting to MySQL server.');

    if($type == 1 or $type == 2){
        mysqli_query($conn, "SET FOREIGN_KEY_CHECKS=0;") or die(mysqli_error($conn));
        //insert new user into database
        $query = "INSERT INTO `team8`.`technician` (firstName, lastName, email, password, contactNumber, technicianType) 
                    VALUES ('$firstname', '$lastname', '$email', '$password', '$phone', '$type')";
    }elseif($type == 3){
    
        $query = "INSERT INTO client (firstName, lastName, email, password, contactNumber) VALUES ('$firstname', '$lastname', '$email', '$password', '$phone')";
    }else{
        echo "Error";
    }

        //execute query
        if ($conn->query($query) === TRUE
        ) {
            echo "New record created successfully";
            //query successful so redirect to login page
            header("Location: ../login.html");
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }
    //close connection
    mysqli_close($conn);
?>