<?php
// now we will add the value to the title variable and the description variable
$title = "Assignment 2 | Home Page | Introduction to Web Programming using PHP";
$description = "This is the Assignment 2 for Introduction to Web Programming using PHP Course - Home Page";
require './templates/header.php';  //  it is mandatory to require the template code of header
?>
<section class="masthead">
    <div>
        <!-- Here goes the Masthead Image and Title  -->
        <h1>WHO ARE THE TOP 10 <span class="rich">RICHEST</span>  PEOPLE IN THE WORLD?</h1>
        <!-- Source: https://www.forbes.com/real-time-billionaires/#13cac7763d78  -->
    </div>
</section>
<main class="explaining">
    <section>
        <h2>INTRODUCTION</h2>
        <p>If you wish to know who are the top ten <span class="rich">richest people in the world</span>, you have come to the right website. You only need to register in order to see the World's Richest People Ranking. Money can not buy happiness, but without money you can not be happy either.</p>
        <p>So don't wait anymore and fill up your registration. If you have already done so, then just sign up!!</p>
    </section>
    <section class="form-col col">
        <div class="col-sm-12 col-md-9 col-lg-6 mx-auto">
            <!-- Here goes the 1st form, for creating a new user  -->
            <h3>If you don't have an account,then fill this short registration!</h3>
            <form method="post" action="save-user.php">
                <!-- This form has 6 fields to fill in  -->
                <p><input class="form-control" name="first_name" type="text" placeholder="First Name" required/></p>
                <p><input class="form-control" name="last_name" type="text" placeholder="Last Name" required /></p>
                <p><input class="form-control" name="email" type="email" placeholder="Email" required /></p>
                <p><input class="form-control" name="username" type="text" placeholder="Username" required /></p>
                <p><input class="form-control" name="password" type="password" placeholder="Password" required /></p>
                <p><input class="form-control" name="confirm" type="password" placeholder="Confirm Password" required /></p>
                <input class="btn btn-light" type="submit" name="submit" value="Register"/>
            </form>
        </div>
        <div class="col-sm-12 col-md-9 col-lg-6 mx-auto">
            <!-- Here goes the 2nd form, for login in a user already created  -->
            <h3>If you already have an account, then sign in below!</h3>
            <form method="post" action="./inc/validate.php">
                <!-- This form only has 2 fields to fill in  -->
                <p><input class="form-control" name="username" type="text" placeholder="Username" required /></p>
                <p><input class="form-control" name="password" type="password" placeholder="Password" required /></p>
                <input class="btn btn-light" type="submit" value="Login"/>
            </form>
        </div>
    </section>
</main>
<?php
require './templates/footer.php'; // it is mandatory to require the template code of footer
?>
