<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 11/02/2019
 * Time: 13:23
 */

require_once("includes/header.php");
if($session->is_signed_in()){
    redirect("index.php");
}

if(isset($_POST['submit'])){
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $user_found = User::verify_user($username, $password);

    if($user_found){
        $session->login($user_found);
        redirect("index.php");
    }else{
        $the_message = "USERNAME OR PASSWORD NOT CORRECT";
    }
}else{
    $username = "";
    $password = "";
}

?>

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3 my-5">
            <h3 class="bg-warning text-white text-center">
                <?php echo $the_message; ?>
                </h3>
            <form action="" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username"
                           value="<?php htmlentities($username) ?>">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password"
                           value="<?php htmlentities($password) ?>">
                </div>
                <div class="form-group">
                    <input type="submit" value="Login" class="btn btn-primary" name="submit">
                </div>
            </form>
        </div>
    </div>
</div>
