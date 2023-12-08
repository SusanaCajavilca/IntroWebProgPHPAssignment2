<?php


//store the user inputs in variables and hash the password
// validate the user, session id
$username = $_POST['username'];
$password = hash('sha512', $_POST['password']); // passwords are being hashed

//connect to db
require 'database.php';  //validate is already inside the include folder, so we don't have to add the ./

//set up and run the query
// doing the comparison
$sql3 = "SELECT user_id  FROM phpusers1 WHERE username = '$username' AND password ='$password'";
$result3 = $conexion->query($sql3);
//store the number of results in a variable

$count3 = $result3->rowCount();

//checking if any matches found
if ($count3 == 1) {
    echo '<p>Logged in Successfully</p>';
    foreach ($result3 as $row) {
        // access the existing session created automatically by the server
        session_start();
        //take the user id from the database and store it in a session variable
        $_SESSION['user_id'] = $row['user_id'];
        // now redirect the user to the login-success page, where he/she can see the ranking
        Header('Location:../login-success.php');
    }
} else {
    echo '<p>Login failed, you typed wrong username or password. Go back and do it again.</p>';

}

$conexion = null; // closing connection


?>