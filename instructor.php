
<?php include_once 'includes/connection.php';?>

<form action="" method="post">
    Choose Instructor
    <select>
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

    <input type="hidden" value="$course_id" name="course_id">
    <input type="submit" name="submit" value="add">
</form>