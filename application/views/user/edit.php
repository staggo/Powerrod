<div class="container">
    <div class="row">

		<?php echo form_open('user/update/' . $this->uri->segment(3)); ?>
		<div class="col-md-7">
	        <h1>Edit User</h1>
    	</div>
        <div class="col-md-5 text-right" style="position:relative; top:20px; margin-bottom:20px;">
	        <a href="<?php echo $this->config->item('base_url');?>index.php/user/"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-arrow-left"></span> Cancel</button></a>
            <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok-sign"></span> Save</button>
    	</div>
    </div><!--/row-->

    <div class="row">
		<div class="col-md-12">
             <div class="form-group">  
            		<label for="firstname">First name</label>
                <div class="input-group ">
					<input type="text" name="firstname" id="firstname" class="form-control" value="<?php echo $user[0]['firstname'];?>"/>
				</div>
        	</div>
            
            <div class="form-group ">  
            	<label for="lastname">Last Name</label>
                <div class="input-group ">
					<input type="text" name="lastname" id="lastname" class="form-control" value="<?php echo $user[0]['lastname'];?>"/>
				</div>
        	</div>
            
            <div class="form-group">  
            		<label for="firstname">Password</label>
                <div class="input-group ">
					<input type="text" name="password" id="password" class="form-control" value="<?php echo $user[0]['password'];?>"/>
				</div>
        	</div>
            
            <div class="form-group">  
            		<label for="firstname">Email Address</label>
                <div class="input-group ">
					<input type="text" name="email" id="email" class="form-control"  value="<?php echo $user[0]['email'];?>"/>
				</div>
        	</div>
            
       </div>    
	</div>	
		<?php echo form_close(); ?>
	</div>  
</div>