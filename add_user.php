<?php include_once 'includes/header.php'; ?>
<?php include_once 'includes/connection.php'; ?>
<?php
if(isset($_POST['submit'])){
  //get visit values from add_user.php
$username   =  $_POST['username'];
$email      =  $_POST['email'];
$password   =  $_POST['password'];
$name       =  $_POST['name'];
$role       =  $_POST['role'];

// insert into users table
$query = "insert into users(username, email, password, name, role) values('$username', '$email', '$password', '$name', '$role')";
// perform query by php
mysqli_query($link, $query);
// redirect to add_user page
header("location:users.php");
exit;
}
?>
<h2>Add User</h2>
    <form class="form-horizontal" action="" method="post">
        <div class="form-group">
            <label class="control-label col-sm-2" for="username">
             Username
           </label>
           <div class="col-sm-10">
              <input class="form-control" id="username" name="username" placeholder="username" type="text"/>
          </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">
             Email
           </label>
           <div class="col-sm-10">
              <input class="form-control" id="email" name="email" placeholder="email" type="text"/>
          </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="password">
             Password
           </label>
           <div class="col-sm-10">
              <input class="form-control" id="password" name="password" placeholder="password" type="password"/>
          </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="name">
             Name
           </label>
           <div class="col-sm-10">
              <input class="form-control" id="name" name="name" placeholder="name" type="text"/>
          </div>
        </div>
        <div class="form-group">
           <label class="control-label col-sm-2">
                User Role
           </label>
            <div class="col-sm-10">
               <select name="role" id="role" class="form-control">
                    <option value="admin">Admin</option>
                    <option value="instructor">Instructor</option>
                    <option value="student">Student</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" name="submit" class="btn btn-primary btn-block">Add</button>
            </div>
        </div>
    </form>
<?php include_once 'includes/footer.php'; ?>