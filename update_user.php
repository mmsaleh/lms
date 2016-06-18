<?php include_once 'includes/connection.php';

$query = "update users set
          username    =  '{$_POST['username']}',
          email       =  '{$_POST['email']}',
          password    =  '{$_POST['password']}',
          name        =  '{$_POST['name']}',
          role        =  '{$_POST['role']}'
          where user_id = {$_POST['user_id']}";
mysqli_query($link, $query);
header("location:users.php");