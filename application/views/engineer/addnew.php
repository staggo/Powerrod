<div class="container" id="newcall">
    <div class="row">

		<?php echo form_open('engineer/insert'); ?>
		<div class="col-md-7">
	        <h1>Add New Engineer</h1>
    	</div>
        <div class="col-md-5 text-right" style="position:relative; top:20px; margin-bottom:20px;">
	        <a href="<?php echo $this->config->item('base_url');?>index.php/engineer/"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-arrow-left"></span> Cancel</button></a>
            <a href="<?php echo $this->config->item('base_url');?>index.php/engineer/insert"><button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok-sign"></span> Save</button></a>
    	</div>
    </div><!--/row-->

    <div class="row">
<!--column 1-->
		<div class="col-md-12">
            <div class="form-group">  
	            <label for="name">Engineer Name</label>
    	         <input type="text" name="name" id="name" class="form-control" />
        	</div>
            
            <div class="form-group">  
	            <label for="type">Engineer Type</label>
    	         <input type="text" name="type" id="type" class="form-control" />
        	</div>
            
            <div class="form-group">  
	            <label for="tel_no">Telephone</label>
    	         <input type="text" name="tel_no" id="tel_no" class="form-control" />
        	</div>
            
            <div class="form-group">  
	            <label for="vehicle">Vehicle</label>
    	         <input type="text" name="vehicle" id="vehicle" class="form-control" />
        	</div>
            
            <div class="form-group">  
	            <label for="active">Active</label>
    	         <input type="text" name="active" id="active" class="form-control" />
        	</div>
            
            

		</div>
		<?php echo form_close(); ?>
		