<?php include_once 'includes/header.php'; ?>
<?php include_once 'includes/connection.php'; ?>
<?php
// get course information
$query ="select * from courses where course_id = {$_GET['course_id']}";
$result = mysqli_query($link, $query);
$userSet = mysqli_fetch_assoc($result);
?>
<h2>Edit Course</h2>
<hr>
<div class="bootstrap-form">
<form class="form-horizontal" action="update_course.php" method="post">
    <div class="form-group">
        <label class="control-label col-sm-2" for="course_name">
            Course Name
        </label>
        <div class="col-sm-10">
            <input class="form-control" id="course_name" name="course_name" placeholder="Course Name" type="text" value="<?php echo $userSet['course_name'];?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="course_description">
            Course Description
        </label>
        <div class="col-sm-10">
            <textarea class="form-control" name="course_description" placeholder="Course Description"><?php echo $userSet['course_description'];?></textarea>
        </div>
    </div>
        <div class="form-group ">
          <label class="control-label col-sm-2" for="start_date">
           Start Date
          </label>
          <div class="col-sm-10">
           <div class="input-group">
            <div class="input-group-addon">
             <i class="fa fa-calendar">
             </i>
            </div>
            <input class="form-control" id="start_date" name="start_date"  type="date" value="<?php echo $userSet['start_date']; ?>">
           </div>
          </div>
     </div>
      <div class="form-group ">
          <label class="control-label col-sm-2" for="end_date">
           End Date
          </label>
          <div class="col-sm-10">
           <div class="input-group">
            <div class="input-group-addon">
             <i class="fa fa-calendar">
             </i>
            </div>
            <input class="form-control" id="end_date" name="end_date"  type="date" value="<?php echo $userSet['end_date']; ?>">
           </div>
          </div>
     </div>
      <div class="form-group">
       <!-- Submit button -->
        <button class="btn btn-primary" name="submit" type="submit">Update</button>
      </div>
</form>
</div>

<?php include_once 'includes/footer.php'; ?>