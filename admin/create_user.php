<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 13/02/2019
 * Time: 11:15
 */

include("includes/header.php");
include("includes/sidebar.php");

if(!$session->is_signed_in()){
    redirect("login.php");
}

if(isset($_POST['submit'])){
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $first_name = trim($_POST['first_name']);
    $last_name = trim($_POST['last_name']);

    $user = new User();
    $user->username = $username;
    $user->password = $password;
    $user->first_name = $first_name;
    $user->last_name = $last_name;

    ($user->save()) ? $the_message = "User inserted into database, well done." : $the_message = "We had a problem, user not inserted. Please try again.";


}else{
    $username = "";
    $password = "";
    $first_name = "";
    $last_name = "";

    $the_message = "";
}

?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="text-center my-5">Create User</h2>
            <form method="POST" action="">
                <div class="form-group">
                    <label for="username">Username :</label>
                    <input type="text" class="form-control" id="username" name="username"
                     value="<?php htmlentities($username) ?>" required>
                    <div class="invalid-feedback">
                        Please choose a username
                    </div>
                </div>
                <div class="form-group">
                    <label for="password">Password :</label>
                    <input type="password" class="form-control" id="password" name="password"
                    value="<?php htmlentities($password) ?>" required><div class="invalid-feedback">
                        Please choose a password
                    </div>
                </div>
                <div class="form-group">
                    <label for="first_name">Firstname :</label>
                    <input type="text" class="form-control" id="first_name" name="first_name"
                    value="<?php htmlentities($first_name) ?>" required>
                    <div class="invalid-feedback">
                        Please give your firstname
                    </div>
                </div>
                <div class="form-group">
                    <label for="last_name">Lastname</label>
                    <input type="text" class="form-control" id="last_name" name="last_name"
                    value="<?php htmlentities($last_name) ?>" required>
                    <div class="invalid-feedback">
                        Please give your lastname
                    </div>
                </div>

                <div class="form-group">
                    <input type="submit" value="Create" class="btn btn-primary" name="submit">
                </div>
            </form>
            <h3 class="text-center my-5"><?php echo $the_message; ?></h3>
        </div>
    </div>
</div>







<?php include('includes/footer.php'); ?>
