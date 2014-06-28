<div class="container">
    <div class="row">

		<?php echo form_open('engineer/update/' . $this->uri->segment(3)); ?>
		<div class="col-md-7">
	        <h1><?php echo $page_title; ?></h1>
    	</div>
        <div class="col-md-5 text-right" style="position:relative; top:20px; margin-bottom:20px;">
	        <a href="<?php echo $this->config->item('base_url');?>index.php/engineer/"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-arrow-left"></span> Cancel</button></a>
            <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok-sign"></span> Save</button>
    	</div>
    </div><!--/row-->

    <div class="row">
<!--column 1-->
		<div class="col-md-12">
            <div class="form-group">  
	            <label for="name">Engineer Name</label>
    	         <input type="text" name="name" id="name" class="form-control" value="<?php echo $user[0]['name'];?>"/>
        	</div>
            
            <div class="form-group">  
	            <label for="type">Engineer Type</label>
    	         <input type="text" name="type" id="type" class="form-control" value="<?php echo $user[0]['type'];?>"/>
        	</div>
            
            <div class="form-group">  
	            <label for="tel_no">Telephone</label>
    	         <input type="text" name="tel_no" id="tel_no" class="form-control" value="<?php echo $user[0]['tel_no'];?>"/>
        	</div>
            
            <div class="form-group">  
	            <label for="vehicle">Vehicle</label>
    	         <input type="text" name="vehicle" id="vehicle" class="form-control" value="<?php echo $user[0]['vehicle'];?>"/>
        	</div>
            
            <div class="form-group">  
	            <label for="active">Active</label>
    	         <input type="text" name="active" id="active" class="form-control" value="<?php echo $user[0]['active'];?>"/>
        	</div>
            
            

		</div>
		<?php echo form_close(); ?>
	</div>  
</div>