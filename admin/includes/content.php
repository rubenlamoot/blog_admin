<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 7/02/2019
 * Time: 11:28
 */
?>
<div id="content-wrapper">

    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
        </ol>

        <!-- Icon Cards-->
        <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-primary o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fas fa-fw fa-comments"></i>
                        </div>
                        <div class="mr-5">26 New Messages!</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="#">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-warning o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fas fa-fw fa-list"></i>
                        </div>
                        <div class="mr-5">11 New Tasks!</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="#">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-success o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fas fa-fw fa-shopping-cart"></i>
                        </div>
                        <div class="mr-5">123 New Orders!</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="#">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-danger o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fas fa-fw fa-life-ring"></i>
                        </div>
                        <div class="mr-5">13 New Tickets!</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="#">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <h1 class="page-header">
                    Title <small>Subtitle</small>
                </h1>
                <?php
                if($database->connection){
                    echo "Database connectie gelukt<br>";
                }
                echo "1 user op vragen : <br>";
                $sql = "select * from users where id = 1";
                $result = $database->my_query($sql);
                $user_found = mysqli_fetch_array($result);
                echo $user_found["username"] .'<br>';

//                echo "alle users op vragen : <br>";
//                $user = new User();
//                $result = $user->find_all_users();
//                while ($row = mysqli_fetch_array($result)){
//                    echo $row["username"] .'<br>';
//                }
//
//                echo "met static function : <br>";
//                $result = User::find_all_users();
//                while ($row = mysqli_fetch_array($result)){
//                    echo $row["username"] .'<br>';
//                }
//
//                echo "1 user opvragen met static function : <br>";
//                $result = User::find_user_by_id(2);
//                echo $result["username"] .'<br>';
//
//                echo "1 user opvragen als object : <br>";
//                $result = User::find_user_by_id(1);
//                $user = new User();
//                $user->id = $result["id"];
//                $user->username = $result["username"];
//                $user->password = $result["password"];
//                $user->first_name = $result["first_name"];
//                $user->last_name = $result["last_name"];
//                echo 'idnr ' .$user->id .' : '. $user->username .' heeft als familienaam ' .$user->last_name .'. <br>';
//
//                echo "1 user opvragen als object met de methode instantie: <br>";
//                $result = User::find_user_by_id(2);
//                $user = User::instantie($result);
//                echo 'idnr ' .$user->id .' : '. $user->username .' heeft als familienaam ' .$user->last_name .'. <br>';

                echo "1 user opvragen als object met de methode instantie ingebouwd : <br>";
                $result = User::find_by_id(2);
                echo $result->username .'<br>';

                echo "alle user opvragen als object met de methode instantie ingebouwd : <br>";
                $users = User::find_all();
                foreach ($users as $user) {
                    echo $user->username . '<br>';
                }
                ?>
                <h2>Create User</h2>

                <?php
                $user = new User();
                $user->username = 'Han';
                //            $hash = md5('vijf'); /** hashing van het paswoord toegekend aan de variabele hash*/
                $user->password = 'vijftien';
                $user->first_name = 'Han';
                $user->last_name = 'Dewinter';
//
//                $user->create();
//                  $user->save();

                ?>
                <h2>Tabel opvullen met users</h2>
                <!-- DataTables Example -->
                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fas fa-table"></i>
                        Data Table Example</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>id</th>
                                    <th>username</th>
                                    <th>password</th>
                                    <th>firstname</th>
                                    <th>lastname</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>id</th>
                                    <th>username</th>
                                    <th>password</th>
                                    <th>firstname</th>
                                    <th>lastname</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                <?php
                                    $user_array = User::find_all();
                                    foreach ($user_array as $user){ ?>
                                        <tr>
                                            <td><?php echo $user->id ?></td>
                                            <td><?php echo $user->username ?></td>
                                            <td><?php echo $user->password ?></td>
                                            <td><?php echo $user->first_name ?></td>
                                            <td><?php echo $user->last_name ?></td>
                                        </tr>
                                <?php
                                    }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <h2>Update User -> verander familienaam id=1 naar Williams</h2>
                <?php
                    $user = User::find_by_id(1);
                    $user->last_name = "Williams";
//                    $user->update();
//                    $user->save();
                ?>

                <h2>Verwijder een user -> namelijk user met id = 14</h2>
                <?php
                    $user = User::find_by_id(14);
//                    $user->delete();
                ?>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
