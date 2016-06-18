<?php include_once 'includes/header.php'; ?>
<?php include_once 'includes/connection.php'; ?>
<h2>Student Search by ID</h2>
<hr>

<?php
$message="";
// process form
    if (isset($_POST['submit'])){
    $course_id  = $_POST['course_id'];
    $user_id    = $_POST['user_id'];
    // query for students from users table
    $query          =   "select * from users where role = 'student'";
    $result         =   mysqli_query($link, $query);
    $studentSet     =   mysqli_fetch_assoc($result);
    $query2         =   "select * from enrollments where course_id = $course_id";
    $result2        =   mysqli_query($link, $query2);
    $enrollmentSet  =   mysqli_fetch_assoc($result2);
    // check if student id is in users
        if ($studentSet['user_id']){
                if(!$enrollmentSet['user_id']){
                    $query3 = "insert into enrollments(course_id, user_id) values($course_id, $user_id)";
                    // perform query
                    mysqli_query($link, $query3);
                    $message = "You are now registed<br>"."<a href='courses.php' class='alert-link success'>Go to Course</a>";
                } $message = "You are already registered for this course"."<a href='courses.php' class='alert-link success'>Go to Course</a>";

        } // display message "you must be logged in to register in course" and redirect to login
        $message = "you must be logged in to register"."<br>"."<a href='login.php' class='alert-link error'>Log in</a>";

    }

?>
<div class="col-sm-6 col-sm-offset-2">
    <form class="form-horizontal" action="" method="post">
        <div class="form-group">
            <label class="control-label col-sm-3" for="user_id">
             Student ID
           </label>
           <div class="col-sm-9">
              <input class="form-control" id="user_id" name="user_id" placeholder="Student ID" type="text"/>
          </div>
        </div>
        <input type="hidden" value="<?php echo $_GET['course_id']; ?>" name="course_id">
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
              <button type="submit" name="submit" class="btn btn-primary btn-block">Register</button>
            </div>
        </div>
</form>
</div>
<hr>
<div class="alert col-md-12">
    <?php if(isset($message)){echo "$message";} ?>
</div>

<?php include_once 'includes/footer.php'; ?>