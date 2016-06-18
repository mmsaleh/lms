<?php include_once 'includes/header.php'; ?>
<?php include_once 'includes/connection.php'; ?>
<h2>Browse Courses</h2>
<hr>
<?php
        $query  = "select * from courses";
        $result = mysqli_query($link, $query);
        while($userSet = mysqli_fetch_assoc($result)){

            echo "<div class='col-sm-4'>";
            echo "<img class='img-thumbnail' src='images/courses.png'>";
            echo "<h4>Title: {$userSet['course_name']}</h4>";
            echo "<h4>Description: {$userSet['course_description']}</h4>";
            echo "<h4>Starts: {$userSet['start_date']}</h4>";
            echo "<h4>Ends: {$userSet['end_date']}</h4>";
            echo "<a href='register.php?course_id={$userSet["course_id"]}' role='button' class='btn btn-info'>Register</a>";
            echo "</div>";
        }
        ?>
<?php include_once 'includes/footer.php'; ?>