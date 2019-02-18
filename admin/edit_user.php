<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 13/02/2019
 * Time: 10:16
 */


include("includes/header.php");
include("includes/sidebar.php");

if(!$session->is_signed_in()){
    redirect("login.php");
}

if(empty($_GET['id'])){
    redirect("users.php");
}else{
    $user = User::find_by_id($_GET['id']);
    if(isset($_POST['Edit'])){
        if($user){
            $user->username = $_POST['username'];
            $user->password = $_POST['password'];
            $user->first_name = $_POST['first_name'];
            $user->last_name = $_POST['last_name'];

            $user->update();
            redirect("users.php");
        }
    }
}
?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="text-center my-5">Edit User</h2>

            <form action="edit_user.php?id=<?php echo $user->id ?>;" method="post">



                <p>Idnr : </p><p><?php echo $user->id; ?></p>
                <div class="form-group">
                    <label for="username">Username :</label>
                    <input type="text" class="form-control" id="username" name="username"
                    value="<?php echo $user->username; ?>">
                </div>
                <div class="form-group">
                    <label for="password">Password :</label>
                    <input type="password" class="form-control" id="password" name="password"
                    value="<?php echo $user->password; ?>">
                </div>
                <div class="form-group">
                    <label for="first_name">Firstname :</label>
                    <input type="text" class="form-control" id="first_name" name="first_name"
                    value="<?php echo $user->first_name; ?>">
                </div>
                <div class="form-group">
                    <label for="last_name">Lastname</label>
                    <input type="text" class="form-control" id="last_name" name="last_name"
                    value="<?php echo $user->last_name; ?>">
                </div>

                <div class="form-group">
                    <input type="submit" value="Edit" class="btn btn-primary" name="Edit">
                </div>

            </form>


        </div>
    </div>
</div>


<?php include('includes/footer.php'); ?>