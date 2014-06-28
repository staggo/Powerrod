<div class="container" id="newcall">
    <div class="row">
	
		<?php echo validation_errors(); ?>

		<?php echo form_open('user/insert'); ?>
		<div class="col-md-7">
	        <h1>Add New User</h1>
    	</div>
        <div class="col-md-5 text-right" style="position:relative; top:20px; margin-bottom:20px;">
	        <a href="<?php echo $this->config->item('base_url');?>index.php/user/"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-arrow-left"></span> Cancel</button></a>
            <a href="<?php echo $this->config->item('base_url');?>index.php/user/insert"><button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok-sign"></span> Save</button></a>
    	</div>
    </div><!--/row-->

    <div class="row">
		<div class="col-md-12">
             <div class="form-group">  
            		<label for="firstname">First name</label>
                <div class="input-group ">
					<input type="text" name="firstname" id="firstname" class="form-control"/>
				</div>
        	</div>
            
            <div class="form-group ">  
            	<label for="lastname">Last Name</label>
                <div class="input-group ">
					<input type="text" name="lastname" id="lastname" class="form-control"/>
				</div>
        	</div>
            
            <div class="form-group">  
            		<label for="firstname">Password</label>
                <div class="input-group ">
					<input type="text" name="password" id="password" class="form-control"/>
				</div>
        	</div>
            
            <div class="form-group">  
            		<label for="firstname">Confirm Password</label>
                <div class="input-group ">
					<input type="text" name="password2" id="password2" class="form-control"/>
				</div>
        	</div>
            
            <div class="form-group">  
            		<label for="firstname">Email Address</label>
                <div class="input-group ">
					<input type="text" name="email" id="email" class="form-control"/>
				</div>
        	</div>
            
       </div>    
	</div>	
		<?php echo form_close(); ?>