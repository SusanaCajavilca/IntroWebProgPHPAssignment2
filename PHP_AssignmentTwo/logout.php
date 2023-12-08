<?php
// the easy part of the application
$title = "Assignment 2 | Logout Page | Introduction to Web Programming using PHP";
$description = "This is the Assignment 2 for Introduction to Web Programming using PHP Course - Logout Page";
require './templates/header.php';  //  it is mandatory to require the template code of header
//access existing session
session_start();
//remove session variables
session_unset();
//kill the session
session_destroy();
//redirect to log in
header('location:index.php');
require './templates/footer.php'; // it is mandatory to require the template code of footer
?>
