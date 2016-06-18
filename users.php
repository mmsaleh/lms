<?php include_once 'includes/header.php'; ?>
<?php include_once 'includes/connection.php'; ?>

  <h2>Manage Users</h2>
        <button type="button" class="btn btn-info btn-lg btn-block"><a href="add_user.php">Add User</a></button>
  <hr>
  <div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs nav-justified" role="tablist">
   <li class="active" role="presentation"><a href="#admins" aria-controls="admins" role="tab" data-toggle="tab">View Admins</a></li>
    <li role="presentation"><a href="#instructors" aria-controls="instructors" role="tab" data-toggle="tab">View Instructors</a></li>
    <li role="students"><a href="#students" aria-controls="students" role="tab" data-toggle="tab">View Students</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="admins">
    <h2>Admin Users</h2>
    <hr>
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Name</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
        <?php
        $query  = "select * from users where role='admin'";
        $result = mysqli_query($link, $query);
        while($userSet = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>{$userSet['user_id']}</td>";
            echo "<td>{$userSet['username']}</td>";
            echo "<td>{$userSet['email']}</td>";
            echo "<td>{$userSet['name']}</td>";
            echo "<td><a class='btn btn-warning' role='button' href='edit_user.php?user_id={$userSet['user_id']}'>Edit</a></td>";
            echo "<td><a class='btn btn-danger' role='button' href='delete_user.php?user_id={$userSet['user_id']}'>Delete</a></td>";
        }
        ?>
        </tbody>
      </table>
   </div>
    <div role="tabpanel" class="tab-pane" id="instructors">
     <h2>Instructors</h2>
     <hr>
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Name</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>
        <?php
        $query  = "select * from users where role='instructor'";
        $result = mysqli_query($link, $query);
        while($userSet = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>{$userSet['user_id']}</td>";
            echo "<td>{$userSet['username']}</td>";
            echo "<td>{$userSet['email']}</td>";
            echo "<td>{$userSet['name']}</td>";
            echo "<td><a class='btn btn-warning' role='button' href='edit_user.php?user_id={$userSet['user_id']}'>Edit</a></td>";
            echo "<td><a class='btn btn-danger' role='button' href='delete_user.php?user_id={$userSet['user_id']}'>Delete</a></td>";
        }
        ?>
            </tbody>
          </table>
   </div>
    <div role="tabpanel" class="tab-pane" id="students">
        <h2>Students</h2>
        <hr>
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Name</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>
            <?php
            $query  = "select * from users where role='student'";
            $result = mysqli_query($link, $query);
            while($userSet = mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>{$userSet['user_id']}</td>";
                echo "<td>{$userSet['username']}</td>";
                echo "<td>{$userSet['email']}</td>";
                echo "<td>{$userSet['name']}</td>";
                echo "<td><a class='btn btn-warning' role='button' href='edit_user.php?user_id={$userSet['user_id']}'>Edit</a></td>";
                echo "<td><a class='btn btn-danger' role='button' href='delete_user.php?user_id={$userSet['user_id']}'>Delete</a></td>";
            }
            ?>
            </tbody>
          </table>
        </div>
  </div>
</div>


<?php include_once 'includes/footer.php'; ?>