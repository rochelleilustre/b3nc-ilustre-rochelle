<?php

$id = $_GET['id'];

//successful processing

//echo $id;



$file = file_get_contents('users.json');
$users = json_decode($file, true);

// echo $users[$id]['username'] . '<br>' . $users[$id]['password'] . '<br>' .
// $users[$id]['email'] . '<br>' . $users[$id]['role'];

echo '
<div class="form-group">
	<label>Username</label>
	<input name="username" class="form-control" type= "text" value="'.$users[$id]['username'].'">

	<label>Password</label>
	<input name="password" class="form-control" type= "password" value="'.$users[$id]['password'].'">

	<label>Confirm Password</label>
	<input name="confirm_password" class="form-control" type= "password" value="'.$users[$id]['password'].'">

	<label>Email Address</label>
	<input name="email" class="form-control" type= "email" value="'.$users[$id]['email'].'">

';
	
	
	    
    $roles=['admin','user_role'];
    echo'  
	<label>Role</label>
    <select class="form-control" name="user_role">';
    	foreach ($roles as $role){
    		if($role === $user['id']['role'])
				echo '<option selected>'.$role.'</option>';
			else
				echo'<option>'.$role.'</option>';
    	}
    echo '
    </select>
</div>';
