<select name="customer_name" id="customer_name" class="form-control">
	<!--option value="0"></option-->;
	<?php foreach($customers as $customer){
			echo '<option value="' . $customer['id'] . '">'. $customer['name'] .'</option>';	
	}
	?>
</select>