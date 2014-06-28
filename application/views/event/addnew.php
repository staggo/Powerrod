<div class="container" id="newcall">
    <div class="row">

		<?php echo form_open('event/insert'); ?>
		<div class="col-md-7">
	        <h1><?php echo $page_title . ' to Call ' . $call_id; ?></h1>
    	</div>
        <div class="col-md-5 text-right" style="position:relative; top:20px; margin-bottom:20px;">
	        <a href="<?php echo $this->config->item('base_url');?>index.php/call/edit/<?php echo $call_id;?>"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-arrow-left"></span> Cancel</button></a>
            <a href="<?php echo $this->config->item('base_url');?>index.php/event/insert/<?php echo $call_id;?>"><button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok-sign"></span> Save</button></a>
    	</div>
    </div><!--/row-->

	<input type="hidden" name="call_id" id="call_id" class="form-control" value="<?php echo $call_id;?>"/>
   	<input type="hidden" name="event_type" id="event_type" class="form-control" value="<?php echo $event_type;?>"/>

    <div class="row">
<!--column 1-->
		<div class="col-md-3">
   	        <div class="form-group ">  
            	<label for="logged_date">Logged Date</label>
                <div class="input-group ">
					<input type="datetime-local" name="logged_date" id="logged_date" class="form-control input-append datetime" data-format="MM/dd/yyyy HH:mm:ss" value="<?php echo date('d/m/Y H:i'); ?>"/>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
				</div>
        	</div>
        </div>
   		<div class="col-md-3">
             <div class="form-group ">  
            	<label for="logged_date">On Site</label>
                <div class="input-group ">
					<input type="datetime-local" name="logged_date" id="logged_date" class="form-control input-append datetime" data-format="MM/dd/yyyy HH:mm:ss" value="<?php echo date('d/m/Y H:i'); ?>"/>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
				</div>
        	</div>
		</div>
   		<div class="col-md-3">            
             <div class="form-group ">  
            	<label for="logged_date">Off Site</label>
                <div class="input-group ">
					<input type="datetime-local" name="logged_date" id="logged_date" class="form-control input-append datetime" data-format="MM/dd/yyyy HH:mm:ss" value="<?php echo date('d/m/Y H:i'); ?>"/>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
				</div>
        	</div>
        </div>
        
        <div class="col-md-3">
            <div class="form-group">
            	<label for="engineer">Engineer</label><span class="input-group-addon"><a href="<?php echo $this->config->item('base_url');?>index.php/email/send_sms_email/<?php echo $_SESSION['call_id'];?>"><span class="glyphicon glyphicon-phone"></span></a></span><?php$options = $engineers;$element = 'id="engineer" class="form-control"';echo form_dropdown('engineer', $options, $assigned_engineer, $element);?></div>
       	</div>    
    </div><!--/row-->
    
    <div class="row">
    	<div class="col-md-12">
			<div class="form-group">  
	            <label for="description">Description</label>
    	        <textarea name="description" id="description" class="form-control"></textarea>
        	</div>  
        </div>
    </div>
            

		</div>
		<?php echo form_close(); ?>
		