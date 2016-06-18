<?php include_once 'includes/header.php'; ?>
<?php include_once 'includes/connection.php'; ?>
<?php
if (isset($_POST['submit'])) {
// get values from add_user form
    $coursename     =   $_POST['course_name'];
    $description    =   $_POST['course_description'];
    $start          =   $_POST['start_date'];
    $end            =   $_POST['end_date'];
// perform query
    $query ="insert into courses(course_name, course_description, start_date, end_date) values('$coursename','$description', '$start', '$end')";

// perform query by php
    mysqli_query($link, $query);
// redirect to users page
header("location:courses.php");
}
?>
<h2>Add Course</h2>
<hr>
<div class="bootstrap-form">
<form class="form-horizontal" action="" method="post">
    <div class="form-group">
        <label class="control-label col-sm-2" for="course_name">
            Course Name
        </label>
        <div class="col-sm-10">
            <input class="form-control" id="course_name" name="course_name" placeholder="Course Name" type="text">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="course_description">
            Course Name
        </label>
        <div class="col-sm-10">
            <textarea class="form-control" id="course_description" name="course_description" placeholder="Course Description" type="text"/></textarea>
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
            <input class="form-control" id="start_date" name="start_date" type="date"/>
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
            <input class="form-control" id="end_date" name="end_date" type="date"/>
           </div>
          </div>
     </div>
      <div class="form-group">
       <!-- Submit button -->
        <button class="btn btn-primary" name="submit" type="submit">Submit</button>
      </div>
</form>
</div>

<?php include_once 'includes/footer.php'; ?>