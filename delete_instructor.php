<?php

include_once 'includes/connection.php';

$course_id = $_GET['course_id'];

$query = "delete teacher from courses where course_id = $course_id";

mysqli_query($link, $query);
// redirect to add_instructor page
header("location:add_instructor.php?course_id=$course_id");