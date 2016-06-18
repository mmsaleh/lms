<?php

include_once 'includes/connection.php';

$course_id = $_GET['course_id'];

$query = "delete from courses where course_id = $course_id";

mysqli_query($link, $query);
// redirect to add_user page
header("location:courses.php");