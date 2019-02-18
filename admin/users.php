<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 7/02/2019
 * Time: 11:47
 */

include('includes/header.php');
include('includes/sidebar.php');

if(!$session->is_signed_in()){
    redirect("login.php");
}

?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="text-center my-3">USERS</h2>
            <a class="btn btn-primary rounded-0 my-3" href="create_user.php">Create new user</a>
            <div class="card mb-3">

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Edit</th>
                                <th>id</th>
                                <th>username</th>
                                <th>password</th>
                                <th>firstname</th>
                                <th>lastname</th>
                                <th>Edit</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Edit</th>
                                <th>id</th>
                                <th>username</th>
                                <th>password</th>
                                <th>firstname</th>
                                <th>lastname</th>
                                <th>Edit</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            <?php
                            $user_array = User::find_all();
                            foreach ($user_array as $user){ ?>
                                <tr>
                                    <td><a href="edit_user.php?id=<?php echo $user->id; ?>" class="btn btn-success rounded">Edit</a></td>
                                    <td><?php echo $user->id; ?></td>
                                    <td><?php echo $user->username; ?></td>
                                    <td><?php echo $user->password; ?></td>
                                    <td><?php echo $user->first_name; ?></td>
                                    <td><?php echo $user->last_name; ?></td>
                                    <td><a href="delete_user.php?id=<?php echo $user->id; ?>" class="btn btn-danger rounded">Delete</a></td>
                                </tr>
                                <?php
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>





<?php include('includes/footer.php'); ?>
