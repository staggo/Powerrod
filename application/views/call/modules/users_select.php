<select class="form-control" name="logged_by" id="logged_by">
	<?php foreach($users as $user ){
		
		if($user['id'] == $_SESSION['user_id']){
			echo '<option value="' . $user['id'] . '" selected="selected">'. $user['firstname'] . ' ' . $user['lastname'] .'</option>';
		}else{
			echo '<option value="' . $user['id'] . '">'. $user['firstname'] . ' ' . $user['lastname'] .'</option>';	
		}
	}
	?>
</select>