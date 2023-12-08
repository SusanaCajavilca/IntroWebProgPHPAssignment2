<?php
// now we will add the value to the title variable and the description variable
$title = "Assignment 2 | Login Success Page | Introduction to Web Programming using PHP";
$description = "This is the Assignment 2 for Introduction to Web Programming using PHP Course - Login Success Page";
require './templates/header.php';  //  it is mandatory to require the template code of header
// check for authentication before we show any data
session_start();
if(!isset($_SESSION['user_id'])){
    header('location:sign-in.php');
    exit();
}else{
    //connect to db
    require './inc/database.php';
    //set up query
    $sql = "SELECT * FROM phprichpeople";
    //run the query and store the results
    $result = $conexion->query($sql);
    //start our table
    echo '<main>';
    echo '<section class="masthead-money">';
    echo '<div>';
    echo    '<!-- Here goes the Masthead Image  -->';
    echo    '<h1>RANKING</h1>';
    echo '</div>';
    echo '</section>';
    echo '<section class="person-row">';
    // The table has the 6 columns from the phprichpeople table
    echo '<table class="table table-dark table-striped">
              <tr>
               <th>#</th>
               <th>Name</th>
               <th>Net Worth</th>
               <th>Age</th>
               <th>Country </th>
               <th>Company</th>
              </tr>';
    foreach ($result as $row){
        echo '<tr>
                  <td>' . $row['ID'] . '</td>
                  <td>' . $row['fullName'] . '</td>
                  <td>' . $row['netWorth'] . '</td>
                  <td>' . $row['age'] . '</td>
                  <td>' . $row['country'] . '</td>
                  <td>' . $row['company'] . '</td>
                  </tr>';
    }
    //close the table
    echo '</table>';
    echo '<div class="d-flex justify-content-center">';
    echo "<p>&nbsp;</p>";
    // adding the log-out button
    echo '<a class="btn btn-success" href="logout.php">Logout</a>';
    echo '</div>';
    echo '</section>';
    echo '<section class="final-reflexion">';
    echo  '<h2>"When the people shall have nothing more to eat, they will eat the rich"</h2>';
    echo  '<p>Jean-Jacques Rousseau</p>';
    echo "<p>&nbsp;</p>";
    echo '</section>';
    echo '</main>';
    //disconnect
    $conexion= null;

}
require './templates/footer.php'; // it is mandatory to require the template code of footer
?>
