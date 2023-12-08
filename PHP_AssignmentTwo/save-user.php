<?php
// file responsible for saving our user information
$title = "Assignment 2 | Save User Page | Introduction to Web Programming using PHP";
$description = "This is the Assignment 2 for Introduction to Web Programming using PHP Course - Save User Page";
require './inc/database.php';

// adding our six variables
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$confirm = $_POST['confirm'];

//next validate the six inputs
$isok = true; // this will work as a lock

require './templates/header.php';  //  it is mandatory to require the template code of header
echo "<main class='save'>";

//1st validation : first lets check that no field is empty
if(empty($first_name)){
    echo "<p>&nbsp;</p>";
    echo "<p>&nbsp;</p>";
    echo "<p>&nbsp;</p>";
    echo "<p>&nbsp;First name is needed. Go back and do it again.</p>";
    echo "<p>&nbsp;</p>";


    $isok = false;
}

elseif(empty($last_name)){
    echo "<p>&nbsp;</p>";
    echo "<p>&nbsp;</p>";
    echo "<p>&nbsp;</p>";
    echo "<p>&nbsp;Last name is needed. Go back and do it again.</p>";
    $isok = false;
    echo "<p>&nbsp;</p>";


}

elseif(empty($email)){
    echo "<p>&nbsp;</p>";
    echo "<p>&nbsp;</p>";
    echo "<p>&nbsp;</p>";
    echo "<p>&nbsp;Email is needed. Go back and do it again.</p>";
    $isok = false;
    echo "<p>&nbsp;</p>";


}

elseif(empty($username)){
    echo "<p>&nbsp;</p>";
    echo "<p>&nbsp;</p>";
    echo "<p>&nbsp;</p>";
    echo "<p>&nbsp;Username is needed. Go back and do it again.</p>";
    $isok = false;
    echo "<p>&nbsp;</p>";


}

elseif(empty($password)){
    echo "<p>&nbsp;</p>";
    echo "<p>&nbsp;</p>";
    echo "<p>&nbsp;</p>";
    echo "<p>&nbsp;Password is needed. Go back and do it again.</p>";
    $isok = false;
    echo "<p>&nbsp;</p>";


}

elseif(empty($confirm)){
    echo "<p>&nbsp;</p>";
    echo "<p>&nbsp;</p>";
    echo "<p>&nbsp;</p>";
    echo "<p>&nbsp;Confirmation of password  is needed. Go back and do it again.</p>";
    $isok = false;
    echo "<p>&nbsp;</p>";


}

//2nd validation : now lets check that each field has the required data, we work with regex

elseif(!preg_match("/^[A-Za-z\s]+$/", $first_name)){
    echo "<p>&nbsp;</p>";
    echo "<p>&nbsp;</p>";
    echo "<p>&nbsp;</p>";
    echo "<p>&nbsp;Only alphabets and whitespace are allowed in the first name. Go back and do it again.</p>";
    $isok = false;
    echo "<p>&nbsp;</p>";


}

elseif(!preg_match("/^[A-Za-z\s]+$/", $last_name)){
    echo "<p>&nbsp;</p>";
    echo "<p>&nbsp;</p>";
    echo "<p>&nbsp;</p>";
    echo "<p>&nbsp;Only alphabets and whitespace are allowed in the last name. Go back and do it again.</p>";
    $isok = false;
    echo "<p>&nbsp;</p>";


}
// email pattern admits two or three letters after '.'

elseif(!preg_match("/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,3}/", $email)){
    echo "<p>&nbsp;</p>";
    echo "<p>&nbsp;</p>";
    echo "<p>&nbsp;</p>";
    echo "<p>&nbsp;Email is not valid. Go back and do it again.</p>";
    $isok = false;
    echo "<p>&nbsp;</p>";


}

elseif(!preg_match("/^[A-Za-z0-9]+$/", $username)){
    echo "<p>&nbsp;</p>";
    echo "<p>&nbsp;</p>";
    echo "<p>&nbsp;</p>";
    echo "<p>&nbsp;Only alphabets and numbers are allowed as a username. Go back and do it again.</p>";
    $isok = false;
    echo "<p>&nbsp;</p>";


}

elseif(!preg_match("/^[A-Za-z0-9]+$/", $password)){
    echo "<p>&nbsp;</p>";
    echo "<p>&nbsp;</p>";
    echo "<p>&nbsp;</p>";
    echo "<p>&nbsp;Only alphabets and numbers are allowed in the password. Go back and do it again.</p>";
    $isok = false;
    echo "<p>&nbsp;</p>";


}

elseif(!preg_match("/^[A-Za-z0-9]+$/", $confirm)){
    echo "<p>&nbsp;</p>";
    echo "<p>&nbsp;</p>";
    echo "<p>&nbsp;</p>";
    echo "<p>&nbsp;Only alphabets and numbers are allowed in the confirmation of password. Go back and do it again.</p>";
    $isok = false;
    echo "<p>&nbsp;</p>";


}



//3rd validation : now lets check that password is equal than confirm

elseif((empty($password)) || ($password!=$confirm)){
    echo "<p>&nbsp;</p>";
    echo "<p>&nbsp;</p>";
    echo "<p>&nbsp;</p>";
    echo "<p>&nbsp;Password is invalid or password and confirmation don't match up. Go back and do it again.</p>";
    $isok = false;
    echo "<p>&nbsp;</p>";


}

//next , to decide if we are saving the user, and if we are saving it , we then have to make sure that we are hashing the password
if($isok){
    $password= hash('sha512', $password); // hashing the password
    //set up our sql
    $sql = "INSERT INTO phpusers1 (first_name,last_name,email,username,password) VALUES ('$first_name','$last_name','$email','$username','$password');";
    $conexion->exec($sql);
    echo '<section class="success-row mx-auto">';
    echo '<div>';
    echo "<p>&nbsp;</p>";
    echo '<h3>User registered and saved</h3>';
    echo '</div>';
    echo '</section>';
    echo "<p>&nbsp;</p>";
    //next , we show the sig in button
    echo '<section class="row success-back-row mx-auto">';
    echo    '<div>';
    echo        '<p>All setup, click the button below to head to the sign in page!</p>';
    echo "<p>&nbsp;</p>";
    echo        '<a href="sign-in.php" class="btn btn-primary">Sign In</a>';
    echo    '</div>';
    echo '</section>';
    echo "<p>&nbsp;</p>";
    echo "<p>&nbsp;</p>";





    // disconnect
    $conexion = null;

}
echo "</main>";
?>


<?php require './templates/footer.php'; // it is mandatory to require the template code of footer
?>