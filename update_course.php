<?php include_once 'includes/connection.php';

$query = "update courses set
          course_name           =  '{$_POST['course_name']}',
          course_description    =  '{$_POST['course_description']}',
          start_date            =  '{$_POST['start_date']}',
          end_date              =  '{$_POST['end_date']}'
          where course_id = {$_POST['course_id']}";
mysqli_query($link, $query);
header("location:courses.php");