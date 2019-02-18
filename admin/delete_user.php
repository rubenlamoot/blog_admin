<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 15/02/2019
 * Time: 12:12
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
    if($user){
        $user->delete();
        redirect("users.php");
    }
}

?>