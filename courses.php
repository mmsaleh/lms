<?php include_once 'includes/header.php'; ?>
<?php include_once 'includes/connection.php'; ?>

  <h2>Manage Courses</h2>
        <button type="button" class="btn btn-info btn-lg btn-block"><a href="add_course.php">Add Course</a></button>
  <hr>
<h2>View Courses</h2>
    <hr>
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Course ID</th>
            <th>Course Name</th>
            <th>Course Description</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>View</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
        <?php
        $query  = "select * from courses";
        $result = mysqli_query($link, $query);

        while($userSet = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>{$userSet['course_id']}</td>";
            echo "<td>{$userSet['course_name']}</td>";
            echo "<td>{$userSet['course_description']}</td>";
            echo "<td>{$userSet['start_date']}</td>";
            echo "<td>{$userSet['end_date']}</td>";
            echo "<td><a href='view_course.php?course_id={$userSet['course_id']}'>View</a></td>";
            echo "<td><a href='edit_course.php?course_id={$userSet['course_id']}'>Edit</a></td>";
            echo "<td><a href='delete_course.php?course_id={$userSet['course_id']}'>Delete</a></td>";
        }
        ?>
        </tbody>
      </table>
