<?php $data['id'] = $id; ?>
<div class="container">
    <div class="row">
		<?php echo form_open('call/update/' . $this->uri->segment(3)); ?>
		<div class="col-md-7">
	        <h1>Call <?php echo  $_SESSION['call_id']; ?></h1>
    	</div>
        <div class="col-md-5 text-right" style="position:relative; top:20px; margin-bottom:20px;">
	        <a href="<?php echo $this->config->item('base_url');?>index.php/call/"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-arrow-left"></span> Close</button></a>
            <a href="#"><button type="button" class="btn btn-default" id="print_label"><span class="glyphicon glyphicon-print"></span> Label</button></a>
            <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok-sign"></span> Save</button>
    	</div>
    </div><!--/row-->

    <div class="row">
<!--column 1-->

		<div class="col-md-4">
        	<div class="row">
	            <div class="col-md-6">
		        	 <div class="form-group ">  
		            	<label for="logged_date">Logged Date</label>
		                <div class="input-group ">
							<input type="text" name="logged_date" id="logged_date" class="form-control input-append datetime-local" data-format="MM/dd/yyyy HH:mm:ss PP" value="<?php echo $call[0]['logged_date']; ?>" disabled="disabled"/>
							<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
						</div>
		        	</div>
		        </div>
   	            <div class="col-md-6">
		            <div class="form-group">  
			            <label for="logged_by">Logged By</label>
		    	        <?php
							$options = $logged_by_list;
							$element = 'id="logged_by" class="form-control" disabled="disabled"';
							echo form_dropdown('logged_by', $options, $logged_by, $element);
						?>
		        	</div>
				</div>
            </div><!--/row-->    		            
            <div class="form-group">  
	            <label for="customer_call_id">Customer Call #</label>
    	        <input type="text" name="customer_call_id" id="customer_call_id" class="form-control" value="<?php echo $call[0]['customer_call_id']; ?>"/>
        	</div>    
			  
			<div class="form-group">  
	            <label for="customer_name">Customer Name</label>
    	        <input type="text" name="customer_name" id="customer_name" class="form-control" value="<?php echo $call[0]['name'];?>" disabled="disabled"/>
        	</div>    
            
            <div class="form-group">  
	           
                <label for="customer_tel_no">Customer Telephone</label>
    	        <div class="input-group ">
	                <input type="text" name="customer_tel_no" id="customer_tel_no" class="form-control" value="<?php echo $call[0]['tel_no'];?>"/><span class="input-group-addon"><a href="<?php echo 'tel:' . $call[0]['tel_no'];?>" style="padding:5px"><span class="glyphicon glyphicon-phone-alt"></span></a></span>
    			</div>            
                
                
        	</div>  
		</div><!--emd column 1-->            
<!--column 2-->          
            
		<div class="col-md-4">
            <div class="form-group">  
	            <label for="site_contact">Site Contact</label>
    	        <input type="text" name="site_contact" id="site_contact" class="form-control" value="<?php echo $call[0]['site_contact'];?>"/>
        	</div>
            
            <div class="form-group">  
	            <label for="site_address">Site Address</label>
    	        <textarea name="site_address" id="site_address" class="form-control" rows="3"><?php echo $call[0]['site_address'];?></textarea>
        	</div>       
            
		<div class="row">
            <div class="col-md-5">                
                <div class="form-group">  
                    <label for="site_postcode">Site Postcode</label>
                    
                    <div class="input-group ">
                        <input type="text" name="site_postcode" id="site_postcode" class="form-control" value="<?php echo $call[0]['site_postcode'];?>"/>
                        <span class="input-group-addon"><a href="<?php echo $this->config->item('base_url');?>index.php/call/map" target="_blank"><span class="glyphicon glyphicon-map-marker"></span></a></span>
                    </div>
              </div>      
                </div>  
         	 <div class="col-md-7">       
                <div class="form-group">  
                    <label for="site_telno">Site Telephone</label>
                    <div class="input-group ">
                        <input type="text" name="site_telno" id="site_telno" class="form-control" value="<?php echo $call[0]['site_telno'];?>"/><span class="input-group-addon"><a href="#"><span class="glyphicon glyphicon-phone-alt"></span></a></span>
                     </div>
                </div>
            </div>
        </div><!--/row-->               
		</div><!--emd column 2-->
 
<!--column 3-->          
        <div class="col-md-4">
            <div class="form-group">  
    	        <label for="engineer">Engineer</label>
<div class="input-group input-group">
  <span class="input-group-addon"><a href="<?php echo $this->config->item('base_url');?>index.php/email/send_sms_email/<?php echo $_SESSION['call_id'];?>"><span class="glyphicon glyphicon-phone"></span></a></span>
                	<?php
						$options = $engineers;
						$element = 'id="engineer" class="form-control"';
						echo form_dropdown('engineer', $options, $assigned_engineer, $element);
					?>
				</div>
        	</div>    
            
            <div class="form-group">  
	            <label for="invoice_no">Invoice</label>
    	        <input type="text" name="invoice_no" id="invoice_no" class="form-control" value="<?php echo $call[0]['invoice_no'];?>"/>
        	</div>  
            
            <div class="row">
                <div class="col-md-6">
                	<div class="form-group">  
               			<label for="appointment_date">Appointment Date</label>
                		<div class="input-group ">
			                <input type="date" name="appointment_date" id="appointment_date" class="form-control input-append datetime" data-format="MM/dd/yyyy" value="<?php echo $call[0]['appointment_date'];?>"/>
                			<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
		                </div>
        	        </div>
            	</div>
            
            <div class="col-md-6">
                	<div class="form-group">  
               			<label for="appointment_time">Appointment Time</label>
                		<div class="input-group ">
			                <input type="date" name="appointment_time" id="appointment_time" class="form-control input-append datetime" data-format="HH:mm:ss" value="<?php echo $call[0]['appointment_time'];?>"/>
                			<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
		                </div>
        	        </div>
            	</div>
            </div>  
		</div><!--emd column 3-->
	</div><!--end row-->
<!--/call details-->
    
    <div class="row">
    	<div class="col-md-12">
        <div class="form-group">  
	            <label for="description">Description</label>
    	        <textarea name="description" id="description" class="form-control"><?php echo $call[0]['description'];?></textarea>
        	</div>    
        </div>
    </div>
    <p></p>
    <!--Events/Documents/Invoices-->
     
    
    <div class="row">
		<?php echo form_open('call/update/' . $this->uri->segment(3)); ?>
		<div class="col-md-7">
	        <h3>Events</h3>
    	</div>
        <div class="col-md-5 text-right" style="position:relative; top:20px; margin-bottom:20px;">
              <a href="<?php echo $this->config->item('base_url');?>index.php/event/addnew/<?php echo $id;?>/3"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-wrench"></span> Attended Site</button></a>
            
            <a href="<?php echo $this->config->item('base_url');?>index.php/event/addnew/<?php echo $id;?>/4"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span> Add Note</button></a>
            
             <a href="<?php echo $this->config->item('base_url');?>index.php/event/addnew/<?php echo $id;?>/5"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-earphone"></span> Called Client</button></a>
            
    	</div>

			<div class="table-responsive">
    	<table class="table table-hover table-striped table-condensed table-bordered" id="event_list">

			<thead>
                <th></th>
                <th>Event Date</th>
                <th>Event ID</th>
                <th>Description</th>
            </thead>        

        	<tbody>
            
            
        	<?php foreach($events as $event){
			$event_link = '<a href="' . $this->config->item('base_url') . 'index.php/event/edit/' . $event['id'] . '/' . $event['event_type'].'">';
				echo '<tr>';
				echo '<td style="width:20px; text-align:center; background:#323232; color:#FFF;"><span class="glyphicon ' . $event['icon'] . '"></span></td>';
				echo '<td>' . $event_link . $event['logged_date'] . '</a></td>';
				echo '<td>' . $event_link . $event['id'] . '</a></td>';
				echo '<td>' . $event_link . $event['description'] . '</a></td>';
				echo '</tr>';
			};?>

			</tbody>
            </table>	
    </div><!--/row-->
     
    
    
