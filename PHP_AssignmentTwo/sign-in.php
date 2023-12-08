<?php
// the 2nd easy part of the application
$title = "Assignment 2 | Sign In Page | Introduction to Web Programming using PHP";
$description = "This is the Assignment 2 for Introduction to Web Programming using PHP Course - Sign In Page";
require './templates/header.php';  //  it is mandatory to require the template code of header
?>
    <section class="signin-masthead">
        <div>
            <h3>Sign In</h3>
        </div>
    </section>
    <main>
        <section class="row signin-row">
            <div class="col-sm-12 col-md-9 col-lg-6 mx-auto">
                <h3>You Are Not Signed In!</h3>
                <p>Sign in below please</p>
                <form method="post" action="./inc/validate.php">
                    <!-- This form only has 2 fields to fill in  -->
                    <p><input class="form-control" name="username" type="text" placeholder="Username" required /></p>
                    <p><input class="form-control" name="password" type="password" placeholder="Password" required /></p>
                    <input class="btn btn-primary" type="submit" value="Login" />
                </form>
            </div>
        </section>
    </main>

<?php require './templates/footer.php'; // it is mandatory to require the template code of footer
?>