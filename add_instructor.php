<?php include_once 'includes/header.php'; ?>
<?php include_once 'includes/connection.php';
$course_id = $_GET['course_id'];
?>
<?php
if(isset($_POST['submit'])){
// add instructor to courses table
$query = "update courses set
        teacher  = '{$_POST['teacher']}'
        where course_id = $course_id";
mysqli_query($link, $query);
}
?>
<form class="form-horizontal" action="" method="post">
        <div class="form-group">
           <label class="control-label col-sm-2">
                Choose Instructor
           </label>
            <div class="col-sm-10">
               <select name="teacher" id="role" class="form-control">
                  <option>Instructor Name</option>
                    <?php
                    $query  = "select name from users where role='instructor'";
                    $result = mysqli_query($link, $query);
                    while($userSet = mysqli_fetch_assoc($result)){
                        foreach($userSet as $a=>$b){
                            echo "<option>$b</option>";
                        }
                    }
                ?>
                </select>
            </div>
        </div>
        <input type="hidden" value="$course_id" name="course_id">
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" name="submit" class="btn btn-primary btn-block">Add</button>
            </div>
        </div>
</form>
<?php include_once 'includes/footer.php'; ?>