<?php
include('includes/header.php');

if(!$session->is_signed_in()){
    redirect("login.php");
}

include('includes/sidebar.php');
include('includes/content.php');
include('includes/footer.php');

?>








