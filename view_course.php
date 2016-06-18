<?php include_once 'includes/header.php'; ?>
<?php include_once 'includes/connection.php'; ?>
<?php
$course_id = $_GET['course_id'];
// get course information
$query ="select * from courses where course_id = $course_id";
$result = mysqli_query($link, $query);
$userSet = mysqli_fetch_assoc($result);
?>

<div class="col-sm-6 col-sm-offset-3">
  <h2>View Course</h2>
<hr>
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Course Name:<?php echo "{$userSet['course_name']}" ;?></h3>
      </div>
      <div class="panel-body">
        <p><?php echo "{$userSet['course_description']}" ;?></p><br>
        <p>Start: <?php echo "{$userSet['start_date']}" ;?> - End: <?php echo "{$userSet['end_date']}" ;?></p><br>
        <p>Instructor: <?php echo "{$userSet['teacher']}" ;?>
        <?php if($userSet['teacher']){
        echo "<a class='btn btn-warning' role='button' href='edit_instructor.php?course_id=$course_id'>Edit</a>&nbsp;<a class='btn btn-danger' role='button' href='delete_instructor.php?course_id=$course_id'>Delete</a>";
        }elseif(!$userSet['teacher']) echo "<a class='btn btn-info' role='button' href='add_instructor.php?course_id=$course_id'>Add</a>" ;?></p>
      </div>
    </div>
</div>

<?php include_once 'includes/footer.php'; ?>