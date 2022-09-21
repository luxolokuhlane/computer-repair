<?php

//login page
//path: login.php
//compare this snippet from php\login.php:
    require_once('config.php');
    //get username from login.php
    $username = $_POST['email'];
    //get password from login.php
    $password = $_POST['password'];
    $password = md5($password);
    //connect to database from config.php
    $conn = mysqli_connect(HOST,USERNAME, PASSWORD, DATABASE)
    or die('Error connecting to MySQL server.');
    //query to check if username and password exist in database
    $query = "SELECT * FROM technician WHERE email = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    $row = mysqli_fetch_array($result);
    $count = mysqli_num_rows($result);
    //if username and password exist in database
    if ($count == 1) {
        //set session variables
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['type'] = $row['technicianType'];
        echo "<br>".$_SESSION['type'];
        $_SESSION['id'] = $row['technicianID'];
        //redirect to home page
        header("Location: ../index.php");
    } else {
        echo $count;
        // //redirect to login page
        header("Location: ../login.html");
    }
    //close connection
    mysqli_close($conn);
// 