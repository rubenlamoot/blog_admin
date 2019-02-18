<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 11/02/2019
 * Time: 14:37
 */

require_once("includes/header.php");

$session->logout();
redirect("login.php");
?>