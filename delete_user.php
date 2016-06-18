<?php

include_once 'includes/connection.php';

$user_id = $_GET['user_id'];

$query = "delete from users where user_id = $user_id";

mysqli_query($link, $query);
// redirect to add_user page
header("location:users.php");