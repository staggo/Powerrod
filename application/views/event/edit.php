<?php $event_id= $this->uri->segment(3); ?>
<?php $event_type= $this->uri->segment(3); ?>
<div class="container" id="newcall">
<h2><?php print_r($event); ?></h2>
    <div class="row">

		<?php echo form_open('event/update'); ?>
		<div class="col-md-7">
	        <h1><?php echo 'Edit Event on Call ' . $_SESSION['call_id']; ?></h1>
    	</div>
        <div class="col-md-5 text-right" style="position:relative; top:20px; margin-bottom:20px;">
	        <a href="<?php echo $this->config->item('base_url');?>index.php/call/edit/<?php echo $_SESSION['call_id'];?>"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-arrow-left"></span> Cancel</button></a>
            <a href="<?php echo $this->config->item('base_url');?>index.php/event/update/<?php echo $this->uri->segment(3);?>"><button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok-sign"></span> Save</button></a>
    	</div>
    </div><!--/row-->

    <div class="row">
<!--column 1-->
		<div class="col-md-12">
   	        <input type="hidden" name="call_id" id="call_id" class="form-control" value="<?php echo $event_id;?>"/>
   	        <input type="hidden" name="event_type" id="event_type" class="form-control" value="<?php echo $event_type;?>"/>

            <div class="form-group ">  
            	<label for="logged_date">Logged Date</label>
                <div class="input-group ">
					<input type="datetime-local" name="logged_date" id="logged_date" class="form-control input-append datetime" data-format="MM/dd/yyyy HH:mm:ss" value="<?php $event[0]['logged_date'] ;?>"/>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
				</div>
        	</div>
            
			<div class="form-group">  
	            <label for="description">Description</label>
    	        <textarea name="description" id="description" class="form-control"><?php $event[0]['logged_date'] ;?></textarea>
        	</div>  
            
            

		</div>
		<?php echo form_close(); ?>
		