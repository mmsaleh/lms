<?php include_once 'includes/header.php'; ?>
<?php include_once 'includes/connection.php'; ?>
<?php
// get existing user data from database
$query ="select * from users where user_id = {$_GET['user_id']}";
$result = mysqli_query($link, $query);
$userSet = mysqli_fetch_assoc($result);
?>

<h2>Edit User</h2>

<form class="form-horizontal" action="update_user.php" method="post">
     <div class="form-group">
        <label class="control-label col-sm-2" for="username">
         Username
       </label>
       <div class="col-sm-10">
          <input class="form-control" id="username" name="username" placeholder="username" type="text" value="<?php echo $userSet['username']; ?>" >
      </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="email">
         Email
       </label>
       <div class="col-sm-10">
          <input class="form-control" id="email" name="email" placeholder="email" type="text" value="<?php echo $userSet['email']; ?>"/>
      </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="password">
         Password
       </label>
       <div class="col-sm-10">
          <input class="form-control" id="password" name="password" placeholder="password" type="password"value="<?php echo $userSet['password']; ?>" >
      </div>
    </div><div class="form-group">
        <label class="control-label col-sm-2" for="first_name">
         Name
       </label>
       <div class="col-sm-10">
          <input class="form-control" id="first_name" name="name" placeholder="name" type="text" value="<?php echo $userSet['name']; ?>" >
      </div>
    </div>
    <div class="form-group">
           <label class="control-label col-sm-2">
                User Role
           </label>
            <div class="col-sm-10">
               <select name="role" id="role" class="form-control">
                    <option value="admin" <?php if ($userSet['role']=='admin'){echo 'selected';} ?> >Admin</option>
                    <option value="instructor" <?php if ($userSet['role']=='instructor'){echo 'selected';} ?> >Instructor</option>
                    <option value="student" <?php if ($userSet['role']=='student'){echo 'selected';} ?> >Student</option>
                </select>
            </div>
        </div>
    <input type="hidden" name="user_id" value="<?php echo $userSet['user_id']; ?>">
	<div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" class="btn btn-default">Update</button>
	    </div>
	</div>
</form>

<?php include_once 'includes/footer.php'; ?>